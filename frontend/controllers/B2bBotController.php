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
        $this->request['request'] = $message['text'];
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

    }


    private function textMessageAction($message){
//        if (trim(strtolower($message['text'])) == '/start') {
//
//        }
        if (trim(strtolower($message['text'])) == '/orders' ||
            trim(strtolower($message['text'])) == '/заказы') {
            $serverResponse = $this->orders([
                'phone' => $this->user['phone'],
            ]);

            Yii::info([
                'action'=>'response from Server - orders',
                'updateId'=>$this->request['update_id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');

            $resp = '';
            foreach ($serverResponse as $item) {
                $resp .= $item['orderId']
                    .' '.$item['totalCost']
                    .PHP_EOL
                    .' '.$item['status']['status']
                    .' '.$item['status']['payment']
                    .' '.$item['status']['delivey']
                    .PHP_EOL .'-------------------------'.PHP_EOL;
            }

            $this->sendMessage([
                'chat_id' => $message['from']['id'],
                'text' => $resp,
                'reply_markup' => Json::encode([
                    'inline_keyboard'=>[
                        [
                            ['text'=>"Подробнее о заказе",'switch_inline_query_current_chat'=> 'order_details'],
                            ['text'=>"Опции",'switch_inline_query_current_chat'=> 'options'],
                        ],
                    ]
                ]),
            ], true);
            return ['message' => 'ok', 'code' => 200];
        }

        elseif (substr($message['text'],0,6) == 'order/' ||  substr($message['text'],0,6) == 'заказ/'){

            $commandArr = explode('/', $message['text']);
            $orderId = $commandArr[1];

            $serverResponse = $this->order([
                'phone' => $this->user['phone'],
                'orderId' => $orderId,
            ]);
            Yii::info([
                'action'=>'response from Server - order',
                'updateId'=>$this->request['update_id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');


            $this->sendMessage([
                'chat_id' => $message['from']['id'],
                'text' => $orderId,
            ]);

            return ['message' => 'ok', 'code' => 200];
        }

        elseif (substr($message['text'],0,8) == 'product/' ||  substr($message['text'],0,6) == 'товар/'){

            $commandArr = explode('/', $message['text']);
            $productId = $commandArr[1];

            $serverResponse = $this->product([
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

        elseif (substr($message['text'],0,7) == 'search/' ||  substr($message['text'],0,6) == 'поиск/'){

            $commandArr = explode('/', $message['text']);
            $query = $commandArr[1];

            $serverResponse = $this->search([
                'phone' => $this->user['phone'],
                'query' => $query,
            ]);
            Yii::info([
                'action'=>'response from Server - product',
                'updateId'=>$this->request['update_id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');


            $this->sendMessage([
                'chat_id' => $message['from']['id'],
                'text' => $query,
            ]);

            return ['message' => 'ok', 'code' => 200];
        }




        $this->sendMessage([
            'chat_id' => $message['from']['id'],
            'text' => 'нет такой команды',
        ]);
        return ['message' => 'ok', 'code' => 200];
    }



    private function inlineQueryAction($inlineQuery){
        Yii::info([
            'action'=>'request Inline Query',
            'updateId'=>$this->request['update_id'],
            'inlineQuery'=>$inlineQuery,
        ], 'b2bBot');

//           список заказов
        if ($inlineQuery['query'] == 'order_details') {
            $serverResponse = $this->orders([
                'phone' => $this->user['phone'],
            ]);

            Yii::info([
                'action'=>'response from Server for Inline Query',
                'updateId'=>$this->request['update_id'],
                '$inlineQueryId'=>$inlineQuery['id'],
                'serverResponse'=>$serverResponse,
            ], 'b2bBot');

            $orders = $serverResponse;
            $results = [];
            foreach ($orders as $order) {
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


    /*
    * проверка авторизации
    *
    * Returns True on success.
    * */
    private function checkAuth(){

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

                $serverResponse = $this->orders([
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


    private function product($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdProduct'], $options);
        return Json::decode($jsonResponse);
    }

    private function search($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdProducts'], $options);
        return Json::decode($jsonResponse);
    }

    private function order($options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdOrder'], $options);
        return Json::decode($jsonResponse);
    }


    private function orders($options = [])
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
        curl_setopt($ch, CURLOPT_USERAGENT, "Bot");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($options)) {
            curl_setopt($ch, CURLOPT_POST, true); // Content-Type: application/x-www-form-urlencoded" header.
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
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'] .
            "/answerCallbackQuery", $options);
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
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'] .
            "/answerInlineQuery", $options, true);
        return Json::decode($jsonResponse);
    }

    public function sendMessage(array $options, $dataInBody = false)
    {
        $this->request['answer'] = $options['text'];
        $this->request['answer_time'] = time();
        $this->request->save();
        $chat_id = $options['chat_id'];
        $urlEncodedText = urlencode($options['text']);
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'].
            "/sendMessage?chat_id=".$chat_id .
            '&text='.$urlEncodedText, $options, $dataInBody);
        return Json::decode($jsonResponse);
    }

    private function sendToUser($url, $options = [], $dataInBody = false)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, "Telebot");
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






}
//
