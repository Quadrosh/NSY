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
        $callbackQuery = Yii::$app->request->post('callback_query'); // array
        $inlineQuery = Yii::$app->request->post('inline_query'); // array


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

        if ($message != null) {
//            $this->sendMessage([
//                'chat_id' => $chatId,
//                'text' => 'input-'.Json::encode($input),
//            ]);

            if ($message['text'] == '/options') {
                $this->sendMessage([
//                    'chat_id' => $chatId,
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'text' => 'Список опций',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList'],
//                                ['text'=>'doc','url'=>'https://core.telegram.org/bots/api#replykeyboardmarkup'],
//                                ['text'=>'switch','switch_inline_query'=>''],
                            ]
                        ]
                    ]),
                ]);

            } elseif (Motivator::find()->where(['hrurl'=>$text])->one()){
                $motivator = Motivator::find()->where(['hrurl'=>$text])->one();
                $quotes = $motivator->mLines;
                if ($text == 'accept-the-life-daemon') { // daemon
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
                }
                else {   // no daemon
                    $quoteText = '';
                    $quiteBox = null;
                    foreach ($quotes as $quote) {
                        if ($quiteBox !=$quote['block_num']) {
                            $quiteBox = $quote['block_num'];
                            $quoteText .= '——————————————'.PHP_EOL;
                        }
                        $quoteText .= $quote['text'].PHP_EOL;
                    }

                    $this->sendMessage([
                        'chat_id' => $chatId,
                        'text' => $motivator['list_name'],
                    ]);
                    $this->sendMessage([
                        'chat_id' => $chatId,
                        'text' => $quoteText,
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList'],
//                                    ['text'=>'doc','url'=>'https://core.telegram.org/bots/api#replykeyboardmarkup'],
//                                    ['text'=>'switch','switch_inline_query'=>''],
                                ]
                            ]
                        ]),
                    ]);
                }
            } else { //
                $this->sendMessage([
                    'chat_id' => $chatId,
                    'text' => 'чево?',
                ]);
            }

            return 'end return message';

        }

        if ($callbackQuery != null) {
//            $callbackQuery['id'];
//            $callbackQuery['data'];
            if ($callbackQuery['data']== 'motivatorList') {
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'список строится', //Optional
//                    'show_alert' => 'my alert',  //Optional
//                    'url' => 'http://sample.com', //Optional
    //                'cache_time' => 123231,  //Optional
                ]);
                $motivators = Motivator::find()
                    ->where(['list_section'=>1,'position'=>0])
                    ->orderBy('list_num')
                    ->all();
                $data = [];
                $i = 0;
                $rowI = 0;
//                $arr = [];
                foreach ($motivators as $motivator) {
                    $data[$rowI][$i] = ['text'=>$motivator['list_name'],'callback_data'=> $motivator['hrurl']];
//                    $data[$i]['text'] = $motivator['list_name'];
//                    $data[$i]['callback_data'] = $motivator['hrurl'];
                    $i++;
                    $rowI++;
                }
                $oldData =  [
                    [
                        ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList'],
                    ],
                    [
                        ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList'],
                    ]
                ];

                $this->sendMessage([
                    'chat_id' => $callbackQuery['from']['id'],
                    'text' => '$data='.Json::encode($data).' _=_   $oldData='.Json::encode($oldData),
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>$oldData
//                        'inline_keyboard'=>$data
//                        'inline_keyboard'=>[  $data
////                            [
//////
////                                ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList'],
////////                                    ['text'=>'doc','url'=>'https://core.telegram.org/bots/api#replykeyboardmarkup'],
////////                                    ['text'=>'switch','switch_inline_query'=>''],
////                            ],
////                            [
//////
////                                ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList'],
////////                                    ['text'=>'doc','url'=>'https://core.telegram.org/bots/api#replykeyboardmarkup'],
////////                                    ['text'=>'switch','switch_inline_query'=>''],
////                            ],
//                        ]
                    ]),
                ]);

            }

            $this->sendMessage([
//                'chat_id' => '232544919',
                'chat_id' => $callbackQuery['from']['id'],
                'text' => 'callbackQuery -'.Json::encode($callbackQuery),
            ]);
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
            $text = 'error '.curl_error($ch);
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

    /**
     *   @var array
     *   $this->answerCallbackQuery([
     *       'callback_query_id' => '3343545121', //require
     *       'text' => 'text', //Optional
     *       'show_alert' => 'my alert',  //Optional
     *       'url' => 'http://sample.com', //Optional
     *       'cache_time' => 123231,  //Optional
     *   ]);
     *   The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
     *  On success, True is returned.
     */
    public function answerCallbackQuery(array $option = [])
    {
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['telegramBotToken'] .
            "/answerCallbackQuery", $option);
        return json_decode($jsonResponse);
    }

}
//
