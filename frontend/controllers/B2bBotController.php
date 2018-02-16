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


        $user = B2bBotUser::find()->where(['telegram_user_id'=>$message['from']['id']])->one();
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

//        $this->request = new B2bBotRequest;
//        $this->request['user_id'] = $this->user['id'];
//        $this->request['update_id'] = $updateId;
//        $this->request['user_time'] = intval($message['date']);
//        $this->request['request'] = $message['text'];
//        $result = $this->request->save();

        $request = new B2bBotRequest;
        $request['user_id'] = $this->user['id'];
        $request['update_id'] = $updateId;
        $request['user_time'] = intval($message['date']);
        $request['request'] = $message['text'];
        $result = $request->save();

        Yii::info([
            'action'=>'$this->request',
            'request'=>Json::decode($request),
            '$saveResult'=>$result,
        ], 'b2bBot');

        $this->sendMessage([
            'chat_id' => $message['from']['id'],
            'text' => 'username = '.$user['username'].'; updateId = '.$updateId.PHP_EOL,
        ]);




        $userPhone = Yii::$app->params['b2bTestPhone'];
        $orderId = 'МУЗ006396';






//        $serverResponse = $this->orders([
//            'phone' => $userPhone,
//        ]);
//
//        Yii::info([
//            'action'=>'response from Server',
//            'updateId'=>$updateId,
//            'serverResponse'=>$serverResponse,
//        ], 'b2bBot');
//
//        $resp = '';
//        foreach ($serverResponse as $item) {
//            $resp .= 'Заказ '. $item['orderId'].PHP_EOL;
//
//        }


//        $this->sendMessage([
//            'chat_id' => $message['from']['id'],
//            'text' => 'username = '.$user['username'].'; updateId = '.$updateId.PHP_EOL. $resp,
//        ]);

        return [
            'message' => 'ok',
            'code' => 200,
        ];


    }



    private function order(array $options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdOrder'], $options);
        return Json::decode($jsonResponse);
    }


    private function orders(array $options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdLastOrders'], $options);
        return Json::decode($jsonResponse);
    }

    private function sendToServer($url, $options=array())
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
        return json_decode($jsonResponse);
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
//        $optionJs = json_encode($option);
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'] .
            "/answerInlineQuery", $options);
        return json_decode($jsonResponse);
    }

    public function sendMessage(array $options)
    {
        $chat_id = $options['chat_id'];
        $urlEncodedText = urlencode($options['text']);
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'].
            "/sendMessage?chat_id=".$chat_id .
            '&text='.$urlEncodedText, $options);
        return json_decode($jsonResponse);
    }

    private function sendToUser($url, $options = [], $optionsInBody = false)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, "Telebot");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($options)) {
            curl_setopt($ch, CURLOPT_POST, true);
            if ($optionsInBody) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $options);
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
                    'optionsInBody'=>$optionsInBody,
                ] + $info;
            Yii::info($info, 'b2bBot');
        }
        curl_close($ch);
        return $r;
    }


}
//
