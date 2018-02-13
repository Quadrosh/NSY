<?php

namespace frontend\controllers;


use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use Yii;
use yii\web\Response;


class B2bBotController extends \yii\web\Controller
{

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


        $messageId = $message['message_id'];
        $from = $message['from'];  // array
        $fromId = $message['from']['id'];
        $fromIsBot = $message['from']['is_bot'];
        $fromFirstName = $message['from']['first_name'];
        $fromLastName = $message['from']['last_name'];
        $fromUserName = $message['from']['username'];
        $fromLanguageCode = $message['from']['language_code'];
        $chat = $message['chat'];
        $chatId = $message['chat']['id'];
        $chatType = $message['chat']['type'];
        $date = $message['date'];
        $text = $message['text'];
        $query = $inlineQuery['query'];


//        if ($message['text']=='dev') {
//            $orders = $this->orders([
//                'phone' => Yii::$app->params['b2bTestPhone'],
//                'orderId' => 'МУЗ006396',
//            ]);
//        }


        $this->sendMessage([
            'chat_id' => $message['from']['id'],
            'text' => 'our years',
        ]);

        return [
            'message' => 'ok',
            'code' => 200,
        ];

//        return $this->orders([
//            'phone' => Yii::$app->params['b2bTestPhone'],
//            'orderId' => 'МУЗ006396',
//        ]);
    }



    private function order(array $options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdOrder'], $options);
        return json_decode($jsonResponse);
    }


    private function orders(array $options = [])
    {
        $jsonResponse = $this->sendToServer(Yii::$app->params['b2bServerPathProdLastOrders'], $options);
        return json_decode($jsonResponse);
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
            $text = 'error '.curl_error($ch);
            Yii::info($text, 'b2bBot');
            return $text;
        } else {
//            return curl_getinfo($ch);
            $info = curl_getinfo($ch);
            Yii::info($info, 'b2bBot');
//            print_r($info) ;

        }
        curl_close($ch);
        return $r;
    }

    public function sendMessage(array $option)
    {
        $chat_id = $option['chat_id'];
        $text = urlencode($option['text']);
        unset($option['chat_id']);
        unset($option['text']);
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'].
            "/sendMessage?chat_id=".$chat_id .
            '&text='.$text, $option);
        return json_decode($jsonResponse);
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
    public function answerCallbackQuery(array $option = [])
    {
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'] .
            "/answerCallbackQuery", $option);
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
    public function answerInlineQuery(array $option = [])
    {
//        $optionJs = json_encode($option);
        $jsonResponse = $this->sendToUser("https://api.telegram.org/bot" .
            Yii::$app->params['b2bBotToken'] .
            "/answerInlineQuery", $option);
        return json_decode($jsonResponse);
    }

    private function sendToUser($url, $option=array())
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, "Telebot");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($option)) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $option);
        }
        $r = curl_exec($ch);
        if($r == false){
            $text = 'error '.curl_error($ch);
            Yii::info($text, 'b2bBot');
        } else {
            $info = curl_getinfo($ch);
//            $info['direction']='to user';
            array_unshift($info, ['direction'=>'to user']);
            Yii::info($info, 'b2bBot');

        }
        curl_close($ch);
        return $r;
    }





}
//
