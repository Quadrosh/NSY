<?php

namespace frontend\controllers;

use common\models\Feedback;
use common\models\Masters;
use common\models\Pages;
use yii\helpers\Url;
use Yii;

class BotController extends \yii\web\Controller
{
    public function actionDialog_()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
    {
        $feedback = new Feedback();



        $post = Yii::$app->request->post();
//        var_dump($post); die;

        $get = Yii::$app->request->get();
        $feedback['phone'] = '-';
        $feedback['city'] = '-';
        $feedback['email'] = 'email@email.com';

//        $vdPost = var_dump($post);

        $feedback['text'] = 'POST - '.json_encode($post) .'; GET - '.json_encode($get);

//        $feedback['text'] = strval() . strval(var_dump($get));
//        $feedback['text'] = 'dfa';
        $feedback->save();

        echo $feedback['text'];
        return 'ok';

//        [['phone','city', 'email', 'text'], 'required'],





//        \Yii::$app->telegram->sendMessage([
//            'chat_id' => $chat_id,
//            'text' => 'test',
//        ]);
    }

    public function beforeAction($action)
    {
        if (in_array($action->id, ['dialog'])) {
        $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionDialog()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
    {
        define('_MY_BOT_TOKEN', '475062491:AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ');
        define('_TELEGRAM_API_URL', 'https://api.telegram.org/bot'._MY_BOT_TOKEN.'/');

// read incoming info and grab the chatID
        $content = file_get_contents("php://input");
        $update = json_decode($content, true);
        $chatID = $update["message"]["chat"]["id"];

// compose reply
        $reply =  sendMessage();

// send reply
        $sendto =_TELEGRAM_API_URL."sendmessage?chat_id=".$chatID."&text=".$reply;
        file_get_contents($sendto);

        function sendMessage(){
            $message = "I am a motivator bot.";
            return $message;
        }

// Create a debug log.txt to check the response/repy from Telegram in JSON format.
// You can disable it by commenting checkJSON.
        checkJSON($chatID,$update);
        function checkJSON($chatID,$update){

            $myFile = "bot_log.txt";
            $updateArray = print_r($update,TRUE);
            $fh = fopen($myFile, 'a') or die("can't open file");
            fwrite($fh, $chatID ."nn");
            fwrite($fh, $updateArray."nn");
            fclose($fh);
        }


        $feedback = new Feedback();
        $feedback['phone'] = '-';
        $feedback['city'] = '-';
        $feedback['email'] = 'email@email.com';
        $feedback['text'] = $content;
        $feedback->save();

        return 'ok';
    }


    public function actionSend()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
    {

    }

//   https://nashe-schastye.ru/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
//   https://api.telegram.org/bot475062491:AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ/setWebhook?url=https://nashe-schastye.ru/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ


//curl --tlsv1 -v -k -X POST -H "Content-Type: application/json" -H "Cache-Control: no-cache"  -d '{
//"update_id":10000,
//"message":{
//  "date":1441645532,
//  "chat":{
//     "last_name":"Test Lastname",
//     "id":1111111,
//     "first_name":"Test",
//     "username":"Test"
//  },
//  "message_id":1365,
//  "from":{
//     "last_name":"Test Lastname",
//     "id":1111111,
//     "first_name":"Test",
//     "username":"Test"
//  },
//  "text":"/start"
//}
//}' "https://YOUR.BOT.URL:YOURPORT/"

}
