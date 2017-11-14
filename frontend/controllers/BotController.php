<?php

namespace frontend\controllers;

use common\models\Feedback;
use common\models\Masters;
use common\models\Pages;
use yii\helpers\Url;
use Yii;

class BotController extends \yii\web\Controller
{
    public function actionDialog()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
    {
        $feedback = new Feedback();



        $post = Yii::$app->request->post();
        $get = Yii::$app->request->get();
        $feedback['phone'] = '-';
        $feedback['city'] = '-';
        $feedback['email'] = 'email@email.com';


        $feedback['text'] = var_dump($post).var_dump($get);
        $feedback->save();

        return 'ok';

//        [['phone','city', 'email', 'text'], 'required'],





//        \Yii::$app->telegram->sendMessage([
//            'chat_id' => $chat_id,
//            'text' => 'test',
//        ]);
    }


    public function actionDialogClean()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
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
        return 'ok';
    }

//   https://nashe-schastye.ru/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
//   https://api.telegram.org/bot475062491:AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ/setWebhook?url=https://nashe-schastye.ru/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ


//    public function actionPage()
//    {
//
//        $this->view->params['sunitem'] = 1;
//        $this->view->params['bodyclass'] = 'library';
//        $pagename = \Yii::$app->request->get('hrurl');
//        $master = Masters::find()->where(['hrurl'=>$pagename])->one();
//
//        $this->view->params['meta'] = $master ;
//
//        $professions = $master->professions;
//        $numbers = $master->numbers;
//        $sessions = $master->sessions;
//        Url::remember();
//
//        return $this->render('page',[
//            'master'=> $master,
//            'numbers'=> $numbers,
//            'professions'=> $professions,
//            'sessions'=> $sessions
//        ]);
//    }

}
