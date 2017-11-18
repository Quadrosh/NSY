<?php

namespace frontend\controllers;

use common\models\Feedback;
use common\models\Masters;
use common\models\Motivator;
use common\models\MotivatorBotProcess;
use common\models\Pages;
use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Url;
use Yii;
use yii\web\Response;


class BotController extends \yii\web\Controller
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

    public function actionDialog()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
    {

        $input = Yii::$app->request->getRawBody();
        $updateId = Yii::$app->request->post('update_id');
        $message = Yii::$app->request->post('message');
        $messageId = $message['message_id'];
        $from = $message['from'];  // array
        $fromId = $from['id'];
        $fromIsBot = $from['is_bot'];
        $fromFirstName = $from['first_name'];
        $fromLastName = $from['last_name'];
        $fromUserName = $from['username'];
        $fromLanguageCode = $from['language_code'];
        $chat = $message['chat'];
        $chatId = $chat['id'];
        $chatType = $chat['type'];
        $date = $message['date'];
        $text = $message['text'];


        $answer = 'test';

        if ($text == 'вопрос') {
            $answer = 'ответ';
        }

        $motivator = Motivator::find()->where(['hrurl'=>$text])->one();

        if ($motivator == null) {
            Yii::$app->telegram->sendMessage([
                'chat_id' => $chatId,
                'text' => 'нет такого мотиватора',
            ]);
        } else {
            $quotes = $motivator->mLines;
            $quoteText = '';
            foreach ($quotes as $quote) {
                $quoteText .= $quote['text'].PHP_EOL;
//                $quoteText .= PHP_EOL;
            }
//            $motivatorQuotes = Html::encode($quoteText);

            Yii::$app->telegram->sendMessage([
                'chat_id' => $chatId,
                'text' => $motivator['list_name'],
            ]);

            Yii::$app->telegram->sendMessage([
                'chat_id' => $chatId,
                'text' => $quoteText,
            ]);

            $process = new MotivatorBotProcess();
            $process['chat_id'] = $chatId;
            $process['first_name'] = $fromFirstName;
            $process['chat_date'] = $date;
            $process->save();

        }



        return 'ok';

    }

    public function beforeAction($action)
    {
        if (in_array($action->id, ['dialog'])) {
        $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
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


//            foreach ($quotes as $quote) {
//                Yii::$app->telegram->sendMessage([
//                    'chat_id' => $chatId,
//                    'text' => $quote['text'],
//                ]);
//                sleep(3);
//            }


//            for ($i=0; $i < count($quotes); $i++) {
//                Yii::$app->telegram->sendMessage([
//                    'chat_id' => $chatId,
//                    'text' => $quotes[$i]['text'],
//                ]);
//                sleep(4);
//            }

//        Yii::$app->telegram->sendMessage([
//            'chat_id' => $fromId,
//            'text' => 'this is test',
//            'reply_markup' => json_encode([
//                'inline_keyboard'=>[
//                    [
//                        ['text'=>"refresh",'callback_data'=> time()]
//                    ]
//                ]
//            ]),
//        ]);




//        $feedback = new Feedback();
//        $feedback['phone'] = '-';
//        $feedback['city'] = '-';
//        $feedback['email'] = 'email@email.com';
//        $feedback['text'] =
//            'chatId - '. $chatId . '<br>'.
//            'messageId - '.$messageId. '<br>'.
//            'fromFirstName - '.$fromFirstName. '<br>'.
//            'text - ' . $text . '<br>'.
//            'response - ' . $answer
//        ;
//        $feedback->save();





//        for ($i=0; $i < 3; $i++) {
//            Yii::$app->telegram->sendMessage([
//                'chat_id' => $chatId,
//                'text' => $answer,
//            ]);
//            sleep(3);
//        }


//        Yii::$app->telegram->sendMessage([
//            'chat_id' => $chatId,
//            'text' => $answer,
//        ]);
