<?php

namespace frontend\controllers;


use common\models\B2bBotRequest;
use common\models\B2bBotUser;
use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use Yii;
use yii\web\Response;


class B2bBotController extends \yii\web\Controller
{
    private $user;
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

        $this->request = new B2bBotRequest;
        $this->request['user_id'] = $this->user['id'];
        $this->request['update_id'] = strval($updateId);
        $this->request['user_time'] = intval($message['date']);
        if ($message) {
            $this->request['request'] = $message['text'];
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


    private function textMessageAction($message){
//        if (trim(strtolower($message['text'])) == '/start') {
//
//        }
        if (trim(strtolower($message['text'])) == '/orders' ||
            $message['text'] == 'Мои заказы' ||
            trim(strtolower($message['text'])) == '/заказы') {
            return $this->orders();
        }

        elseif (substr($message['text'],0,6) == 'order/' ||
            substr($message['text'],0,6) == 'заказ/'){

            $commandArr = explode('/', $message['text']);
            $orderId = $commandArr[1];
            return $this->order($orderId);
        }

        elseif (strtolower($message['text']) == '/options' ){
            return $this->options();
        }


        elseif (substr($message['text'],0,8) == 'product/' ||
            substr($message['text'],0,6) == 'товар/'){

            $commandArr = explode('/', $message['text']);
            $productId = $commandArr[1];

            $serverResponse = $this->getProductFromServer([
                'phone' => $this->user['phone'],
                'productCode' => $productId,
            ]);
            Yii::info([
                'action'=>'response from Server - product',
                'updateId'=>$this->request['update_id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');


            $this->sendMessage([
                'chat_id' => $message['from']['id'],
                'text' => $productId,
            ]);

            return ['message' => 'ok', 'code' => 200];
        }

        elseif ($message['text'] == 'Поиск товара' ){
            $this->user['bot_command'] = 'search';
            $this->user->save();
            $this->sendMessage([
                'chat_id' => $this->user['telegram_user_id'],
                'text' => 'Отправьте поисковый запрос',
            ]);
            return ['message' => 'ok', 'code' => 200];
        }

        elseif ($this->user['bot_command'] == 'search'){
            $this->user['bot_command'] = null;
            $this->user->save();
            return $this->search($message['text']);
        }



        elseif (substr($message['text'],0,7) == 'search/'){

            $commandArr = explode('/', $message['text']);
            $query = $commandArr[1];

            return $this->search($query);
        }




        $this->sendMessage([
            'chat_id' => $message['from']['id'],
            'text' => 'нет такой команды',
        ]);
        return ['message' => 'ok', 'code' => 200];
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
                'phone' => $this->user['phone'],
            ]);

            Yii::info([
                'action'=>'response from Server for Inline Query',
                'updateId'=>$this->request['update_id'],
                '$inlineQueryId'=>$inlineQuery['id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');

            if (isset($serverResponse['errorMessage'])) {
                return $this->sendErrorInline($serverResponse['errorMessage'],$inlineQuery['id']);
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
                        ['text'=>'Поиск товара'],
                    ],
                    [
                        ['text'=>'Мои заказы']
                    ],
                ]
            ]),
//            'reply_markup' => Json::encode([
//                'inline_keyboard'=>[
//                    [
//                        ['text'=>'Инфо по артикулу','callback_data'=> '/#'],
//                        ['text'=>'Поиск товара', 'callback_data'=> '/search'],
//                    ],
//                    [
//                        ['text'=>'Мои заказы','callback_data'=> '/orders'],
////                        ['text'=>'Поиск товара', 'callback_data'=> '/search'],
//                    ],
//                ]
//            ]),
        ]);
        return ['message' => 'ok', 'code' => 200];
    }

    private function search($query)
    {
        $serverResponseArr = $this->getSearchResultsFromServer([
            'phone' => $this->user['phone'],
            'query' => $query,
        ]);
        Yii::info([
            'action'=>'response from Server - search',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$serverResponseArr,
        ], 'b2bBot');

        $responseToUser = '';
        foreach ($serverResponseArr as $item) {
            $responseToUser .= $item['productCode']
                .' '.$item['model']
//                .PHP_EOL
//                .'Цена '.$item['personalPrice']
//                .' / '.$item['retailPrice'].', '
//                .'наличие ' .$item['quantity']['stock'].', '
//                .'в пути ' .$item['quantity']['inroute']
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
            'phone' => $this->user['phone'],
            'orderId' => $orderId,
        ]);
        Yii::info([
            'action'=>'response from Server - order',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$serverResponse,
        ], 'b2bBot');

        if (isset($serverResponse['errorMessage'])) {
            return $this->sendErrorMessage($serverResponse['errorMessage']);
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
            'phone' => $this->user['phone'],
        ]);

        Yii::info([
            'action'=>'response from Server - orders',
            'updateId'=>$this->request['update_id'],
            'serverResponse'=>$orders,
        ], 'b2bBot');

        if (isset($orders['errorMessage'])) {
            return $this->sendErrorMessage($orders['errorMessage']);
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

    /*
    * проверка авторизации
    *
    * Returns True on success.
    * */
    private function checkAuth()
    {

        if ( $this->user['status'] == 'unconfirmed') {
            $this->sendMessage([
                'chat_id' => $this->user['telegram_user_id'],
                'text' => 'Для подтверждения авторизации отправьте номер телефона, указанный в Вашем аккаунте.'.PHP_EOL.
                    'Ответом на это сообщение отправьте телефон в формате 7 985 000 0000',
            ]);
            $this->user['status'] = 'phone_requested';
            $this->user->save();
            return false ;
        }

        if ($this->user['status'] == 'phone_requested') {
            $phone = str_replace([' ','(',')','-'],'', $this->request['request']);

            Yii::info([
                'action'=>'phone_requested',
                'updateId'=>$this->request['update_id'],
                'phone'=>$phone,
            ], 'b2bBot');


            $alreadyUser = B2bBotUser::find()->where(['phone'=>$phone])->andWhere(['status'=> 'active'])->one();
            if ($alreadyUser['phone'] == '7911111111111') { // тест
                $alreadyUser = null;
            }

            if ($alreadyUser && $alreadyUser['id']!= $this->user['id']) {
                $this->sendMessage([
                    'chat_id' => $this->user['telegram_user_id'],
                    'text' => 'Этот телефон уже использовался для доступа.'.PHP_EOL.
                        'На данный момент может быть только один доступ на аккаунт.'.PHP_EOL.
                        'Если это Ваш телефон и Вы не оформляли доступ - свяжитесь со своим менеджером в дилерском отделе.',
                ]);
                $this->user['phone'] = 'already exist' . $phone;
                $this->user->save();
                return false;
            }

            if (!$alreadyUser) { // если телефон не зарегистрирован на другого дилера

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

                } else {
                    $this->user['phone'] = $phone;
                    $this->user['status'] = 'active';
                    if ($serverResponse[0]['client']['name']=='Виктор Торбеев') {
                        $this->user['b2b_name']= 'test';
                        $this->user['email']= 'test@test.ts';
                    } else {
                        $this->user['b2b_name']= $serverResponse[0]['client']['name'];
                        $this->user['email']= $serverResponse[0]['client']['email'];
                    }
                    $this->user->save();

                    $this->sendMessage([
                        'chat_id' => $this->user['telegram_user_id'],
                        'text' => 'Вы авторизованы',
                    ]);
                    return false;
                }
            }
            return false;
        }

        if ($this->user['status'] == 'active'){
            return true;
        }
    }


    private function getProductFromServer($options = [])
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
        curl_setopt($ch, CURLOPT_USERAGENT, 'Bot');
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
                $serverError['errorMessage'] = 'Извините, на сервере технические проблемы.'
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
