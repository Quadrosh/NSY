<?php

namespace frontend\controllers;


use common\models\B2bBotRequest;
use common\models\B2bBotUser;
use common\models\B2bDealer;
use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use Yii;
use yii\web\Response;


class B2bBotController extends \yii\web\Controller
{
    private $user;
    private $dealer;
    private $request;

    public function behaviors() {
        return [
            'contentNegotiator' => [
                'class'   => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
//            'rateLimiter'       => [
//                'class' => RateLimiter::className(),
//            ],
//            'authenticator' => [
//                'class' => \app\components\auth\QueryParamAuth::className(),
////                'except' => [ 'create' ],
//            ],
        ];
    }

    public function beforeAction($action)
    {
        if (in_array($action->id, ['do'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function actionDo()
    {
        $input = Yii::$app->request->getRawBody();
        $updateId = Yii::$app->request->post('update_id');
        $message = Yii::$app->request->post('message'); // array
        $callbackQuery = Yii::$app->request->post('callback_query'); // array
        $inlineQuery = Yii::$app->request->post('inline_query'); // array

        Yii::info([
            'action'=>'request from User',
            'input'=>Json::decode($input),
        ], 'b2bBot');

        if ($message) {
            $user = B2bBotUser::find()->where(['telegram_user_id'=>$message['from']['id']])->one();
        } elseif ($inlineQuery){
            $user = B2bBotUser::find()->where(['telegram_user_id'=>$inlineQuery['from']['id']])->one();
        } elseif ($callbackQuery){
            $user = B2bBotUser::find()->where(['telegram_user_id'=>$callbackQuery['from']['id']])->one();
        } else {
            $user = null;
        }

        if (!$user) {
            $user = new B2bBotUser;
            $user['telegram_user_id'] = $message['from']['id'];
            $user['first_name'] = $message['from']['first_name'];
            $user['last_name'] = $message['from']['last_name'];
            $user['username'] = $message['from']['username'];
            $user['status'] = 'unconfirmed';
            $user->save();
        }

        $this->user = $user;
        $this->dealer = $user->dealer;
//        if(!$user->dealer){
//            $user['status'] = 'unconfirmed';
//            $user->save();
//        }

        // request save
        $this->request = new B2bBotRequest;
        $this->request['user_id'] = $this->user['id'];
        $this->request['update_id'] = strval($updateId);
        $this->request['user_time'] = intval($message['date']);
        if ($message) {
            if ($message['text']) {
                $this->request['request'] = $message['text'];
            } elseif ($message['contact']){
                $this->request['request'] = 'phone/'.$message['contact']['phone_number'];
            } else {
                $this->request['request'] = 'no text';
            }

        } elseif ($inlineQuery){
            $this->request['request'] = 'inlineQuery '.$inlineQuery['query'];
        } elseif ($callbackQuery){
            $this->request['request'] = 'callbackQuery '.$callbackQuery['data'];
        }
        $this->request->save();

        //  проверка авторизации
        if (!$this->checkAuth()) {
            return ['message' => 'ok', 'code' => 200];
        }


        if ($inlineQuery) {
          return $this->inlineQueryAction($inlineQuery);
        }

        if ($message) {
            return $this->textMessageAction($message);
        }

        if ($callbackQuery) {
            return $this->callBackQueryAction($callbackQuery);
        }

    }


    /*
    * проверка авторизации
    *
    * Returns True on success.
    * */
    private function checkAuth()
    {

        if ( $this->user['status'] == 'unconfirmed' ) {
            $this->sendMessageWithBody([
                'chat_id' => $this->user['telegram_user_id'],
                'text' => 'Для начала процесса авторизации уточните номер телефона, на который зарегистрирован Ваш аккаунт Телеграм.',
                'reply_markup' => Json::encode([
                    'one_time_keyboard'=> true,
                    'keyboard'=>[
                        [
                            ['text'=>'Отправить номер', 'request_contact'=> true],
                        ],
                    ]
                ]),
            ]);
            $this->user['status'] = 'user_phone_requested';
            $this->user->save();
            return false ;
        }

        if ( $this->user['status'] == 'user_phone_requested') {

            if (substr($this->request['request'],0,6) == 'phone/' ){
                $commandArr = explode('/', $this->request['request']);
                $phone = $commandArr[1];
                $this->user['phone'] = $phone;
                Yii::info([
                    'action'=>'user_phone_saved',
                    'updateId'=>$this->request['update_id'],
                    'user phone'=>$this->request['request'],
                ], 'b2bBot');
                $this->sendMessage([
                    'chat_id' => $this->user['telegram_user_id'],
                    'text' => 'Для продолжения авторизации, отправьте номер телефона, указанный в дилерском аккаунте.'
                        .PHP_EOL.
                        'Ответом на это сообщение отправьте телефон в формате 7 985 000 0000',
                ]);
                $this->user['status'] = 'dealer_phone_request';
                $this->user->save();
                return false ;

            } else {
                $this->sendMessageWithBody([
                    'chat_id' => $this->user['telegram_user_id'],
                    'text' => 'Неверный формат, отправьте телефон нажатием на кнопку',
                    'reply_markup' => Json::encode([
                        'one_time_keyboard'=> true,
                        'keyboard'=>[
                            [
                                ['text'=>'Отправить номер', 'request_contact'=> true],
                            ],
                        ]
                    ]),
                ]);
            }
        }


        if ($this->user['status'] == 'dealer_phone_request') {
            $phone = str_replace([' ','(',')','-'],'', $this->request['request']);

            Yii::info([
                'action'=>'phone_requested',
                'updateId'=>$this->request['update_id'],
                'phone'=>$phone,
            ], 'b2bBot');

            $this->dealer = B2bDealer::find()->where(['phone'=>$phone])->one();

            if (!$this->dealer) {

                $serverResponse = $this->getOrdersFromServer([
                    'phone' => $phone,
                ]);

                Yii::info([
                    'action'=>'response from Server /проверка телефона/',
                    'updateId'=>$this->request['update_id'],
                    'userId'=>$this->user['id'],
                    'serverResponse'=>$serverResponse,
                ], 'b2bBot');

                if ($serverResponse['error']) {
                    if ($serverResponse['message']=='Не указан идентификатор дилера') {
                        $this->sendMessage([
                            'chat_id' => $this->user['telegram_user_id'],
                            'text' => 'Ошибка - номер телефона в неверном формате',
                        ]);
                        return false;
                    }
                    elseif ($serverResponse['message']=='Дилер не найден') {
                        $this->sendMessage([
                            'chat_id' => $this->user['telegram_user_id'],
                            'text' => 'Ошибка - дилер не найден',
                        ]);
                        return false;
                    }
                    else {
                        $this->sendMessage([
                            'chat_id' => $this->user['telegram_user_id'],
                            'text' => 'Ошибка - ' . $serverResponse['message'],
                        ]);
                        return false;
                    }

                } else { // валидный ответ сервера со списком заказов
                    $this->dealer = new B2bDealer();
                    $this->dealer['phone'] = $phone;
                    $this->dealer['status'] = 'active';
                    $this->dealer['name']= $serverResponse[0]['client']['name'];
                    $this->dealer['email']= $serverResponse[0]['client']['email'];
                    $this->dealer->save();

                    $this->user['status'] = 'active';
                    $this->user['b2b_dealer_id']= $this->dealer['id'];
                    $this->user->save();

                    $this->sendMessage([
                        'chat_id' => $this->user['telegram_user_id'],
                        'text' => 'Вы авторизованы',
                    ]);
                    $this->options();

                }
            } else { // дилер есть в базе
                if ($this->dealer['status'] != 'active') {
                    $this->sendMessage([
                        'chat_id' => $this->user['telegram_user_id'],
                        'text' => 'Ошибка - неактивный статус дилера',
                    ]);
                    return false;
                } else {
                    $this->user['status'] = 'active';
                    $this->user['b2b_dealer_id']= $this->dealer['id'];
                    $this->user->save();
                    $this->sendMessage([
                        'chat_id' => $this->user['telegram_user_id'],
                        'text' => 'Вы авторизованы',
                    ]);
                    $this->options();
                }

            }

            return false;
        }

        if ($this->user['status'] == 'active' ){
            return true;
        }
    }


    private function unAuthorise(){
        $this->user['status'] = 'unconfirmed';
        $this->user['b2b_dealer_id'] = null;
        $this->user->save();
        return ['message' => 'ok', 'code' => 200];
    }

    private function textMessageAction($message){
        if (trim(strtolower($message['text'])) == '/start') {
            return $this->helloMessage();
        }
        if (trim(strtolower($message['text'])) == '/orders' ||
            $message['text'] == 'Мои заказы') {
            return $this->orders();
        }

        elseif (substr($message['text'],0,6) == 'order/' ){

            $commandArr = explode('/', $message['text']);
            $orderId = $commandArr[1];
            return $this->order($orderId);
        }


        elseif (strtolower($message['text']) == '/options' ){
            return $this->options();
        }




        elseif (trim(strtolower($message['text'])) == '/help' ||
            $message['text'] == 'Помощь') {
            return $this->help();
        }


        // отмена авторизации
        elseif (trim(strtolower($message['text'])) == '/unauthorize' ){
            return $this->unAuthorise();
        }

        // инфо по товару в один запрос
        elseif (substr($message['text'],0,8) == 'product/' ||
            substr($message['text'],0,6) == 'товар/'){

            $commandArr = explode('/', $message['text']);
            $productId = $commandArr[1];

            return $this->oneProductProcess($productId);
        }


        // сообщение менеджеру - инициализация
        elseif (trim(strtolower($message['text'])) == '/email' ||
            $message['text'] == 'Сообщение менеджеру') {
            return $this->emailInit();
        }
        // сообщение менеджеру - обработка запроса
        elseif ($this->user['bot_command'] == 'sendEmail'){
            return $this->emailProcess($message['text']);
        }

        // Инфо по артикулу - инициализация
        elseif (trim(strtolower($message['text'])) == '/product' || $message['text'] == 'Инфо по артикулу' ){
            return $this->oneProductInit();
        }
        // Инфо по артикулу - обработка запроса
        elseif ($this->user['bot_command'] == 'oneProductInfo'){
            return $this->oneProductProcess($message['text']);
        }

        // поиск - инициализация
        elseif (trim(strtolower($message['text'])) == '/search' || $message['text'] == 'Поиск товара' ){
            return $this->searchInit();
        }
        elseif ($message['text'] == '/search_20'){
            return $this->searchInit(20);
        }
        elseif ($message['text'] == '/search_30'){
            return $this->searchInit(30);
        }
        // поиск - обработка запроса
        elseif ($this->user['bot_command'] == 'search'){
            return $this->searchProcess($message['text']);
        }


        // обработка запроса недоступных значений лимита поиска
        elseif (substr($this->user['bot_command'],0,7) == 'search_'){
            $commandArr = explode('_', $this->user['bot_command']);
            $limit = $commandArr[1];
            if ($limit > 30) {
                $this->sendMessage([
                    'chat_id' => $message['from']['id'],
                    'text' => 'Настройка превышает предельное значение',
                ]);
                return ['message' => 'ok', 'code' => 200];
            }
            return $this->searchProcess($message['text'], $limit);
        }



        $this->sendMessage([
            'chat_id' => $message['from']['id'],
            'text' => 'нет такой команды',
        ]);
        return $this->options();

    }


    private function callbackQueryAction($callbackQuery)
    {
        $this->answerCallbackQuery([
            'callback_query_id' => $callbackQuery['id'],
            'text' => 'В процессе...',
        ]);
        Yii::info([
            'action'=>'request Callback Query',
            'updateId'=>$this->request['update_id'],
            'callbackQuery'=>$callbackQuery,
        ], 'b2bBot');

        if ($callbackQuery['data'] == '/orders') {
            return $this->orders();
        }
        elseif ($callbackQuery['data'] == '/options') {
            return $this->options();
        }

        return ['message' => 'ok', 'code' => 200];
    }


    private function inlineQueryAction($inlineQuery)
    {
        Yii::info([
            'action'=>'request Inline Query',
            'updateId'=>$this->request['update_id'],
            'inlineQuery'=>$inlineQuery,
        ], 'b2bBot');

//           список заказов
        if ($inlineQuery['query'] == '/order_details') {
            $serverResponse = $this->getOrdersFromServer([
                'phone' => $this->dealer['phone'],
            ]);

            Yii::info([
                'action'=>'response from Server for Inline Query',
                'updateId'=>$this->request['update_id'],
                '$inlineQueryId'=>$inlineQuery['id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');

            if (isset($serverResponse['error'])) {
                return $this->sendErrorInline($serverResponse['message'],$inlineQuery['id']);
            }

            $results = [];
            foreach ($serverResponse as $order) {
                $results[] = [
                    'type' => 'article',
                    'id' => $order['orderId'],
                    'title' =>
                        $order['orderId'].', '.$order['totalItems'].'поз., '.$order['totalCost'].'р.',
                    'description' =>
                        'Доставка - '.$order['deliveryType']
                        .' / '.$order['status']['status']
                        .' / '.$order['status']['payment']
                        .' / '.$order['status']['delivey'],
                    'input_message_content'=>[
                        'message_text'=> 'order/' . $order['orderId'],
                        'parse_mode'=> 'html',
                        'disable_web_page_preview'=> true,
                    ],
                ];
            };
            $this->answerInlineQuery([
                'inline_query_id' => $inlineQuery['id'],
                'is_personal' => true,
                'results'=> Json::encode($results)
            ]);
        }

        return ['message' => 'ok', 'code' => 200];
    }


    private function options()
    {
        $this->sendMessageWithBody([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => 'Опции',
            'reply_markup' => Json::encode([
                'one_time_keyboard'=> true,
                'keyboard'=>[
                    [
                        ['text'=>'Инфо по артикулу'],
                        ['text'=>'Поиск товара']
                    ],
                    [
                        ['text'=>'Сообщение менеджеру'],
                        ['text'=>'Помощь'],
                    ],
                    [
                        ['text'=>'Мои заказы'],
                    ],
                ]
            ]),

        ]);
        return ['message' => 'ok', 'code' => 200];
    }


    private function help(){
        $text =
            'Доступные команды'.PHP_EOL.
            '/orders - оформленные накладные'.PHP_EOL.
            'order/МУЗ0000001 - информация по заказу'.PHP_EOL.
            '/search - поиск товара в базе, ответ ограничен 10-ю результатами'.PHP_EOL.
            '/search_20 - поиск товара в базе, ответ ограничен 20-ю результатами'.PHP_EOL.
            '/search_30 - поиск товара в базе, ответ ограничен 30-ю результатами'.PHP_EOL.
            '/product - информация по артикулу'.PHP_EOL.
            'product/a000001 - информация по артикулу в один клик'.PHP_EOL.
            '/email - отправить сообщение менеджеру'.PHP_EOL.
            '/unauthorize - отменить авторизацию и удалить привязку к дилеру'.PHP_EOL.
            '/help - памятка помощи'.PHP_EOL.
            PHP_EOL
        ;
        $this->sendMessageWithBody([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $text,
            'reply_markup' => Json::encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>'Опции', 'callback_data'=> '/options'],
                    ],

                ]
            ]),

        ]);
        return ['message' => 'ok', 'code' => 200];
    }


    private function helloMessage(){

        $this->sendMessage([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => 'Привет, я ATtrade_bot. Сначала Вам необходимо пройти авторизацию.',
        ]);
        return $this->checkAuth();
    }


    private function emailInit(){

        $this->user['bot_command'] = 'sendEmail';
        $this->user->save();

        $this->sendMessage([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => 'Отправка сообщения менеджеру.'.PHP_EOL.'Введите текст',
        ]);
        return ['message' => 'ok', 'code' => 200];
    }


    private function emailProcess($text){
        $this->user['bot_command'] = null;
        $this->user->save();

        if ($this->dealer->sendEmail($text)) {
            $this->sendMessage([
                'chat_id' => $this->user['telegram_user_id'],
                'text' => 'Сообщение отправлено.',
            ]);
            return ['message' => 'ok', 'code' => 200];
        } else {
            $this->sendMessage([
                'chat_id' => $this->user['telegram_user_id'],
                'text' => 'Не удалось отправить сообщение. Повторите попытку позже.',
            ]);
            return ['message' => 'ok', 'code' => 200];
        }



    }


    private function oneProductInit(){

        $this->user['bot_command'] = 'oneProductInfo';
        $this->user->save();

        $this->sendMessage([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => 'Информация по товару.'.PHP_EOL.'Отправьте контрольный номер',
        ]);
        return ['message' => 'ok', 'code' => 200];
    }


    private function oneProductProcess($query)
    {
        $this->user['bot_command'] = null;
        $this->user->save();
        $serverResponse = $this->getOneProductFromServer([
            'phone' => $this->dealer['phone'],
            'productCode' => $query
        ]);
        Yii::info([
            'action'=>'response from Server - one product info',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$serverResponse,
        ], 'b2bBot');

        if (isset($serverResponse['error'])) {
            return $this->sendErrorMessage('Ошибка - '.$serverResponse['message']);
        }

        $responseToUser = '';
        mb_internal_encoding('utf-8');
        if (mb_strlen($serverResponse['description']) >3000) {
            $serverResponse['description'] = mb_substr($serverResponse['description'], 0, 3000).'...';
        }
        $responseToUser .= $serverResponse['productCode']
            .' '.$serverResponse['model']
            .PHP_EOL .' '.$serverResponse['description']
            .PHP_EOL
            .'Цена '.$serverResponse['retailPrice']
            .' / '.$serverResponse['personalPrice'].', '
            .'наличие ' .$serverResponse['quantity']['stock'].', '
            .'в пути ' .$serverResponse['quantity']['inroute']
            .PHP_EOL .'-------------------------'.PHP_EOL;


        $this->sendMessage([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $responseToUser,
        ]);

        return ['message' => 'ok', 'code' => 200];
    }


    private function searchInit($limit = 10){
        $text = 'Поисковый запрос по умолчанию ограничен 10-ю результатами. Изменение настроек - команды /search_20 и /search_30 соответственно';
        if ($limit != 10) {
            $text = 'Поиск '.$limit.' результатов';
            $this->user['bot_command'] = 'search_'.$limit;
        } else {
            $this->user['bot_command'] = 'search';
        }
        $this->user->save();


        $this->sendMessage([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $text.PHP_EOL.PHP_EOL.'Отправьте поисковый запрос',
        ]);
        return ['message' => 'ok', 'code' => 200];
    }


    private function searchProcess($query, $limit = 10)
    {
        $this->user['bot_command'] = null;
        $this->user->save();
        $serverResponseArr = $this->getSearchResultsFromServer([
            'phone' => $this->dealer['phone'],
            'query' => $query,
            'limit' => $limit,
        ]);
        Yii::info([
            'action'=>'response from Server - search',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$serverResponseArr,
        ], 'b2bBot');
        if (isset($serverResponseArr['error'])) {
            return $this->sendErrorMessage('Ошибка - '.$serverResponseArr['message']);
        }

        $responseToUser = '';
        mb_internal_encoding('utf-8');
        foreach ($serverResponseArr as $item) {
            if (mb_strlen($item['description']) > 200) {
                $item['description'] = mb_substr($item['description'], 0, 200).'...';
            }
            $responseToUser .= $item['productCode']
                .' '.$item['model']
                .PHP_EOL .' '.$item['description']
                .PHP_EOL
                .'Цена '.$item['retailPrice']
                .' / '.$item['personalPrice'].', '
                .'наличие ' .$item['quantity']['stock'].', '
                .'в пути ' .$item['quantity']['inroute']
                .PHP_EOL .'-------------------------'.PHP_EOL;
        }


        $this->sendMessage([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $responseToUser,
        ]);

        return ['message' => 'ok', 'code' => 200];
    }


    private function order($orderId)
    {
        $serverResponse = $this->getOrderFromServer([
            'phone' => $this->dealer['phone'],
            'orderId' => $orderId,
        ]);
        Yii::info([
            'action'=>'response from Server - order',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$serverResponse,
        ], 'b2bBot');

        if (isset($serverResponse['error'])) {
            return $this->sendErrorMessage('Ошибка - '.$serverResponse['message']);
        }

        $responseToUser = $orderId.':'.PHP_EOL.'-------------------------'.PHP_EOL;
        foreach ($serverResponse['items'] as $item) {
            $responseToUser .= $item['productCode']
                .' '.$item['productName']
                .PHP_EOL
                .'заказ: '.$item['quantity'].', '
                .'резерв: '.$item['availability'].', '
                .'цена: ' .$item['price'].'р.'
                .PHP_EOL .'-------------------------'.PHP_EOL;
        }

        $this->sendMessageWithBody([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $responseToUser,
            'reply_markup' => Json::encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>'Мои заказы', 'callback_data'=> '/orders'],
                        ['text'=>'Опции', 'callback_data'=> '/options'],
                    ],
                ]
            ]),
        ]);

        return ['message' => 'ok', 'code' => 200];
    }


    private function orders()
    {
        $orders = $this->getOrdersFromServer([
            'phone' => $this->dealer['phone'],
        ]);

        Yii::info([
            'action'=>'response from Server - orders',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$orders,
        ], 'b2bBot');

        if (isset($orders['error'])) {
            return $this->sendErrorMessage('Ошибка - '.$orders['message']);
        }

        $responseToUser = '';

        foreach ($orders as $item) {
            $responseToUser .= $item['orderId']
                .' '.$item['totalCost']
                .PHP_EOL
                .' '.$item['status']['status']
                .' '.$item['status']['payment']
                .' '.$item['status']['delivey']
                .PHP_EOL .'-------------------------'.PHP_EOL;
        }

        Yii::info([
            'action'=>'debug',
            'updateId'=>$this->request['update_id'],
            '$orders'=>$orders,
            '$responseToUser'=>$responseToUser,
        ], 'b2bBot');




        $this->sendMessageWithBody([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $responseToUser,
            'reply_markup' => Json::encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>'Подробнее о заказе','switch_inline_query_current_chat'=> '/order_details'],
                        ['text'=>'Опции', 'callback_data'=> '/options'],
                    ],
                ]
            ]),
        ]);
        return ['message' => 'ok', 'code' => 200];
    }




    private function getOneProductFromServer($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdProduct'], $options);
        return Json::decode($jsonResponse);
    }


    private function getSearchResultsFromServer($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdProducts'], $options);
        return Json::decode($jsonResponse);
    }


    private function getOrderFromServer($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdOrder'], $options);
        return Json::decode($jsonResponse);
    }


    private function getOrdersFromServer($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdLastOrders'], $options);
        return Json::decode($jsonResponse);
    }


    private function sendToServer($url, $options = [])
    {
        $options['apiKey']= Yii::$app->params['b2bServerApiKey'];
        $optQuery = http_build_query($options);
        $ch = curl_init($url.'?'.$optQuery);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        curl_setopt($ch, CURLOPT_ENCODING,'gzip,deflate');
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 25);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (count($options)) {
            curl_setopt($ch, CURLOPT_POST, true); // Content-Type: application/x-www-form-urlencoded' header.
        }
        $r = curl_exec($ch);

        if($r == false){
            $text = 'curl error '.curl_error($ch);
            Yii::info($text, 'b2bBot');
            return $text;
        } else {
            $info = curl_getinfo($ch);
            $info['url'] = str_replace(Yii::$app->params['b2bServerApiKey'],'_not_logged_',  $info['url']);
            $options['apiKey']='_not_logged_';
            $info = [
                    'action'=>'curl to Server',
                    'options'=>$options,
                ] + $info;
            Yii::info($info, 'b2bBot');
            if ($info['http_code'] == 500) {
                $serverError = [];
                $serverError['error'] = 1;
                $serverError['message'] = 'Извините, на сервере технические проблемы.'
                    .PHP_EOL .'В данный момент запрос не может быть обработан';
                $serverError['code'] = 500;
                curl_close($ch);
                return Json::encode($serverError);
            }
        }
        curl_close($ch);
        return $r;
    }



    /**
     *   @var array
     *   $this->answerCallbackQuery([
     *       'callback_query_id' => '3343545121', //require
     *       'text' => 'text', //Optional
     *       'show_alert' => 'my alert',  //Optional
     *   ]);
     *   The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
     *  On success, True is returned.
     */
    public function answerCallbackQuery(array $options = [])
    {
        $jsonResponse = $this->sendToUser('https://api.telegram.org/bot' .
            Yii::$app->params['b2bBotToken'] .
            '/answerCallbackQuery', $options);
        return Json::decode($jsonResponse);
    }
    /**
     *   @var array
     *   sample
     *   $this->answerInlineQuery([
     *       'inline_query_id' => Integer,
     *       'user' => User, //Optional
     *   ]);
     *
     */
    public function answerInlineQuery(array $options = [])
    {
        $jsonResponse = $this->sendToUser('https://api.telegram.org/bot' .
            Yii::$app->params['b2bBotToken'] .
            '/answerInlineQuery', $options, true);
        return Json::decode($jsonResponse);
    }

    /**
     *   @var array
     *   аргументы
     *  массив опций
     *
     */
    public function sendMessageWithBody(array $options)
    {
        $this->request['answer'] = $options['text'];
        $this->request['answer_time'] = time();
        $this->request->save();
        $chat_id = $options['chat_id'];
        $urlEncodedText = urlencode($options['text']);
        $jsonResponse = $this->sendToUser('https://api.telegram.org/bot' .
            Yii::$app->params['b2bBotToken'].
            '/sendMessage?chat_id='.$chat_id .
            '&text='.$urlEncodedText, $options, true);
        return Json::decode($jsonResponse);
    }

    /**
     *   @var array
     *   аргументы
     * 1 массив опций
     * 2 флаг отправки информации в теле запроса (кнопы )
     *
     */
    public function sendMessage(array $options, $dataInBody = false)
    {
        $this->request['answer'] = $options['text'];
        $this->request['answer_time'] = time();
        $this->request->save();
        $chat_id = $options['chat_id'];
        $urlEncodedText = urlencode($options['text']);
        $jsonResponse = $this->sendToUser('https://api.telegram.org/bot' .
            Yii::$app->params['b2bBotToken'].
            '/sendMessage?chat_id='.$chat_id .
            '&text='.$urlEncodedText, $options, $dataInBody);
        return Json::decode($jsonResponse);
    }

    private function sendToUser($url, $options = [], $dataInBody = false)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Telebot');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($options)) {
            curl_setopt($ch, CURLOPT_POST, true);
            if ($dataInBody) {
                $bodyOptions = $options;
                unset($bodyOptions['chat_id']);
                unset($bodyOptions['text']);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyOptions);
            }
        }
        $r = curl_exec($ch);
        if($r == false){
            $text = 'curl error '.curl_error($ch);
            Yii::info($text, 'b2bBot');
        } else {
            $info = curl_getinfo($ch);
            $info['url'] = str_replace(Yii::$app->params['b2bBotToken'],'_not_logged_',  $info['url']);
            $info = [
                    'action'=>'curl to User',
                    'options'=>$options,
                    'dataInBody'=>$dataInBody,
                ] + $info;
            Yii::info($info, 'b2bBot');
        }
        curl_close($ch);
        return $r;
    }

    private function sendErrorMessage ($error){
        $this->sendMessageWithBody([
            'chat_id' => $this->user['telegram_user_id'],
            'text' => $error,
            'reply_markup' => Json::encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>'Опции', 'callback_data'=> '/options'],
                    ],
                ]
            ]),
        ]);
        return ['message' => 'ok', 'code' => 200];
    }

    private function sendErrorInline($error, $inlineQueryId){
        $result = [];
        $result[] = [
            'type' => 'article',
            'id' => '1',
            'title' => 'Ошибка соединения',
            'description' => $error,
            'input_message_content'=>[
                'message_text'=> '/options',
                'parse_mode'=> 'html',
                'disable_web_page_preview'=> true,
            ],
        ];

        $this->answerInlineQuery([
            'inline_query_id' => $inlineQueryId,
            'is_personal' => true,
            'results'=> Json::encode($result)
        ]);
        return ['message' => 'ok', 'code' => 200];
    }






}
//
