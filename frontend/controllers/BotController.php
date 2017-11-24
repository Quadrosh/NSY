<?php

namespace frontend\controllers;

use common\models\Daemons;
use common\models\Feedback;
use common\models\Masters;
use common\models\Motivator;
use common\models\MotivatorBotProcess;
use common\models\Pages;
use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Json;
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

    public function actionDialog()
    {

        $input = Yii::$app->request->getRawBody();
        $updateId = Yii::$app->request->post('update_id');
        $message = Yii::$app->request->post('message'); // array
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

        $this->sendMessage([
            'chat_id' => $chatId,
            'text' => 'input-'.Json::encode($input),
        ]);


        $motivator = Motivator::find()->where(['hrurl'=>$text])->one();

        if ($motivator == null) {
            $this->sendMessage([
                'chat_id' => $chatId,
                'text' => 'нет такого мотиватора',
            ]);
        } else {
            $quotes = $motivator->mLines;
            if ($text == 'accept-the-life-daemon') {
                $quotesCount = count($quotes);
                $now = date_timestamp_get(new \DateTime());
                $timeMark = $now;
                $stepI = 1;
                $blockI = 1;

                foreach ($quotes as $quote) {

                    $process = new MotivatorBotProcess();
                    $process['chat_id'] = $chatId;
                    $process['first_name'] = $fromFirstName;
                    $process['chat_date'] = $date;
                    $process['command'] = $text;
                    $process['motivator_id'] = $motivator['id'];
                    $process['steps_qnt'] = $quotesCount;

                    $process['current_step'] = $stepI;
                    $process['current_block'] = $quote['block_num'];
                    if ($process['current_block'] != $blockI) {
                        $process['new_block'] = true;
                        $process['start_time'] = $timeMark + 4;
                        $blockI++;
                    } else {
                        $process['start_time'] = $timeMark + 2;
                    }
                    $timeMark = $process['start_time'];
                    $process['mline_id'] = $quote['id'];
                    $process['text'] = $quote['text'];

                    $process->save();
                    $stepI++;

                }

                $daemon = Daemons::find()->where(['daemon'=>'motivator-bot-daemon'])->one();
                if ($daemon == null) {
                    $daemon = new Daemons();
                    $daemon['daemon'] = 'motivator-bot-daemon';
                }
                $daemon['enabled'] = true;
                $daemon->save();

                Yii::$app->telegram->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $motivator['list_name'].' ('.$quotesCount.')',
                ]);
            } else {   // no daemon
                $quoteText = '';
                $quiteBox = null;
                foreach ($quotes as $quote) {
                    if ($quiteBox !=$quote['block_num']) {
                        $quiteBox = $quote['block_num'];
                        $quoteText .= '——————————————'.PHP_EOL;
                    }
                    $quoteText .= $quote['text'].PHP_EOL;
                }
//                Yii::$app->telegram->sendMessage([
//                    'chat_id' => $chatId,
//                    'text' => $motivator['list_name'],
//                ]);
//
//                Yii::$app->telegram->sendMessage([
//                    'chat_id' => $chatId,
//                    'text' => $quoteText,
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=>"send data",'callback_data'=> 'data']
////                                ['text'=>"Наше счастье",'url'=>'http://nashe-schastye.ru/']
//                            ]
//                        ]
//                    ]),
//                ]);
                $this->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $motivator['list_name'],
                ]);
                $this->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $quoteText,
                ]);
            }
        }
        return 'end return';
    }



    public function beforeAction($action)
    {
        if (in_array($action->id, ['dialog'])) {
        $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function sendMessage(array $option){
        $chat_id = $option['chat_id'];
        $text = urlencode($option['text']);
        unset($option['chat_id']);
        unset($option['text']);
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['telegramBotToken'].
            "/sendMessage?chat_id=".$chat_id .
            '&text='.$text, $option);
        return json_decode($jsonResponse);
    }

    private function curlCall($url, $option=array(), $headers=array())
    {
        $attachments = ['photo', 'sticker', 'audio', 'document', 'video'];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, "Telebot");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (count($option)) {
            curl_setopt($ch, CURLOPT_POST, true);
            foreach($attachments as $attachment){
                if(isset($option[$attachment])){
                    $option[$attachment] = $this->curlFile($option[$attachment]);
                    break;
                }
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $option);
        }
        $r = curl_exec($ch);
        if($r == false){
            $text = 'eroror '.curl_error($ch);
            $myfile = fopen("error_telegram.log", "w") or die("Unable to open file!");
            fwrite($myfile, $text);
            fclose($myfile);
        }
        curl_close($ch);
        return $r;
    }

    private function curlFile($path)
    {
        if (is_array($path))
            return $path['file_id'];
        $realPath = realpath($path);
        if (class_exists('CURLFile'))
            return new \CURLFile($realPath);
        return '@' . $realPath;
    }

}
//
