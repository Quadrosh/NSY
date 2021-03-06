<?php

namespace frontend\controllers;

use common\models\Daemons;
use common\models\Feedback;
use common\models\Masters;
use common\models\MLine;
use common\models\Motivator;
use common\models\MotivatorBotProcess;
use common\models\Pages;
use yii\filters\ContentNegotiator;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use Yii;
use yii\web\Response;


class MotivatorBotController extends \yii\web\Controller
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
        if (in_array($action->id, ['dialog'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionDialog()
    {

        $input = Yii::$app->request->getRawBody();
        $updateId = Yii::$app->request->post('update_id');
        $message = Yii::$app->request->post('message'); // array
        $callbackQuery = Yii::$app->request->post('callback_query'); // array
        $inlineQuery = Yii::$app->request->post('inline_query'); // array


//        $messageId = $message['message_id'];
//        $from = $message['from'];  // array
//        $fromId = $from['id'];
//        $fromIsBot = $from['is_bot'];
//        $fromFirstName = $from['first_name'];
//        $fromLastName = $from['last_name'];
//        $fromUserName = $from['username'];
//        $fromLanguageCode = $from['language_code'];
//        $chat = $message['chat'];
//        $chatId = $chat['id'];
//        $chatType = $chat['type'];
//        $date = $message['date'];
//        $text = $message['text'];



        $cleanInput = Json::decode($input);
        $updateId = isset($cleanInput['update_id'])?$cleanInput['update_id']:null;
        $message = isset($cleanInput['message'])?$cleanInput['message']:null;
        $callbackQuery = isset($cleanInput['callback_query'])?$cleanInput['callback_query']:null;
        $inlineQuery = isset($cleanInput['inline_query'])?$cleanInput['inline_query']:null;

        $from = isset($message['from'])?$message['from']:null;    // array
        $fromFirstName = isset($from['first_name'])?$from['first_name']:null;
        $chat = isset($message['chat'])?$message['chat']:null;
        $chatId = isset($chat['id'])?$chat['id']:null;
        $date = isset($message['date'])?$message['date']:null;
        $text = isset($message['text'])?$message['text']:null;



        if ($message != null) {

            //   /start
            //
            //


            if ($message['text'] == '/start') {
//                Yii::info([
//                    'action'=>'$message->text == start',
////                'input'=>Json::decode($input),
////                    '$message'=>$message,
//                    '$message->text'=>$message['text'],
//                ], 'motivatorBot');

                return  $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'text' => 'Привет, я бот Мотиватор, ниже список опций',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/you/1'],
                            ],
                            [
                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/you/2'],
                            ],
                            [
                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/you/4'],
                            ],
                            [
                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],
                            ],
                        ]
                    ]),
                ]);


            }

            //  Опции текст

            elseif ($message['text'] == '/options') {
                return $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'text' => 'Список опций',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/you/1'],
                            ],
                            [
                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/you/2'],
                            ],
                            [
                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/you/4'],
                            ],
                            [
                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],
                            ],
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
                                    ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList/you'],
                                    ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
//                                    ['text'=>'switch','switch_inline_query'=>''],
                                ],
                                [
                                    ['text'=>"Раздел",'callback_data'=> 'theme/1'],
                                ],

                            ]
                        ]),
                    ]);
                }
            } else {      //  непонятная команда
                $this->sendMessage([
                    'chat_id' => $chatId,
                    'text' => 'чево?',
                ]);
                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'text' => 'То есть я хотел сказать - вот список опций )',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/you/1'],
                            ],
                            [
                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/you/2'],
                            ],
                            [
                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/you/4'],
                            ],
                            [
                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
                                ['text'=>'Опции','callback_data'=> 'options/you/1/one'],
//                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],

                            ],
                        ]
                    ]),
                ]);
            }

            return 'end return message';

        }

//       Callback

        if ($callbackQuery != null) {
            $commandParts = explode('/', $callbackQuery['data']);
            $action = $commandParts[0];

            // motivatorList

            if ($action == 'motivatorList') { // motivatorList / pointOfView / section / mode
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'],
                    'text' => 'список строится',
                ]);
                $section = $commandParts[2];
                if ($section==1) {
                    $type = 'Тематические';
                } elseif ($section==2) {
                    $type = 'Профессиональные';
                } elseif ($section==4) {
                    $type = 'Романтичные';
                } else {
                    $type = 'Тематические';
                }
                if (isset($commandParts[3])) {
                    $mode = $commandParts[3];
                } else {
                    $mode =  'one';
                }

                if (isset($commandParts[1])) {
                    $pointOfView = $commandParts[1];
                    if ($pointOfView == 'you') {
                        $motivators = Motivator::find()
                            ->where(['list_section'=>$section,'position'=>'1'])
                            ->orderBy('list_num')
                            ->all();
                    } else {
                        $motivators = Motivator::find()
                            ->where(['list_section'=>$section,'position'=>'0'])
                            ->orderBy('list_num')
                            ->all();
                    }
                } else {
                    $pointOfView = 'you';
                    $motivators = Motivator::find()
                        ->where(['list_section'=>$section,'position'=>'1'])
                        ->orderBy('list_num')
                        ->all();
                }
                $data = [];
                foreach ($motivators as $motivator) {
                    $row = [];
                    $row[] = ['text'=>$motivator['list_name'],'callback_data'=> 'motivator/' . $motivator['hrurl'].'/'.$pointOfView.'/'.$mode];
                    $data[] = $row;
                };
                // options
                $data[] = [
                    ['text'=>'Точка восприятия','callback_data'=> 'pointOfView/'. $pointOfView.'/'.$section.'/'.$mode],
                    ['text'=>'Опции','callback_data'=> 'options/'.$pointOfView .'/' . $section .'/'.$mode],
                ];

                $this->sendMessage([
                    'chat_id' => $callbackQuery['from']['id'],
                    'text' => $type . ' мотиваторы',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=> $data
                    ]),
                ]);

            }

            // motivator

            if ($action == 'motivator') {   // motivator / hrurl /pointOfView  / mode
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'ответ получен', //Optional
                ]);
                $hrurl = $commandParts[1];
                if (isset($commandParts[2])) {
                    $pointOfView = $commandParts[2];
                } else {
                    $pointOfView = 'you';
                }
                $motivator = Motivator::find()->where(['hrurl'=>$hrurl])->one();
                $quoteText = '';
                $quiteBox = null;


                $section = $motivator['list_section'];
                if ($section == 1) {
                    $type = 'Тематические';
                } elseif ($section==2) {
                    $type = 'Профессиональные';
                } elseif ($section==4) {
                    $type = 'Романтичные';
                } else {
                    $type = 'Тематические';
                }

                if (isset($commandParts[3])) {
                    $mode = $commandParts[3];
                } else {
                    $mode =  'one';
                }


                if ($mode ==  'all') {

                    $quotes = $motivator->mLines;
                    foreach ($quotes as $quote) {
                        if ($quiteBox !=$quote['block_num']) {
                            $quiteBox = $quote['block_num'];
                            $quoteText .= '——————————————'.PHP_EOL;
                        }
                        $quoteText .= $quote['text'].PHP_EOL;
                    }
                    $this->sendMessage([
                        'chat_id' => $callbackQuery['from']['id'],
                        'text' => $motivator['list_name'],
                    ]);
                    $this->sendMessage([
                        'chat_id' => $callbackQuery['from']['id'],
                        'text' => $quoteText,
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>$type .' мотиваторы','callback_data'=> 'motivatorList/'.$pointOfView . '/' . $section .'/all'],
                                    ['text'=>'Опции','callback_data'=> 'options/'.$pointOfView .'/' . $section .'/all'],
                                ]
                            ]
                        ]),
                    ]);
                } else { // $mode ==  'one'
                    if (isset($commandParts[4])) {
                        $quoteBlock = $commandParts[4];
                    } else {
                        $quoteBlock =  '1';
                    }
                    $quotes = MLine::find()
                        ->where(['motivator_id'=>$motivator['id'], 'block_num'=>$quoteBlock])
                        ->orderBy('quote_num')
                        ->all();
                    foreach ($quotes as $quote) {
                        $quoteText .= $quote['text'].PHP_EOL;
                    }
                    if (!empty(MLine::find()->where(['motivator_id'=>$motivator['id'], 'block_num'=>intval($quoteBlock)+1])->one())) {
                        $next = intval($quoteBlock)+1;
                        $nextButtonName = 'Дальше';
                        $nextButtonValue = 'motivator/' . $motivator['hrurl'].'/'.$pointOfView.'/one/'.$next;
                    } else {
                        $nextButtonName = 'Мотиваторы';
                        $nextButtonValue = 'motivatorList/'.$pointOfView . '/' . $section .'/one';
                    }

                    if ($quoteBlock == '1') {
                        $this->sendMessage([
                            'chat_id' => $callbackQuery['from']['id'],
                            'text' => $motivator['list_name'],
                        ]);
                    }

                    $this->sendMessage([
                        'chat_id' => $callbackQuery['from']['id'],
                        'text' => $quoteText,
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>$nextButtonName,'callback_data'=> $nextButtonValue],
                                ]
                            ]
                        ]),
                    ]);
                }


            }

            // pointOfView

            if ($action == 'pointOfView') {   // pointOfView / pointOfView / section / mode
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'ответ получен', //Optional
                ]);

                if (isset($commandParts[1])) {
                    $pointOfView = $commandParts[1];
                } else {
                    $pointOfView = 'you';
                }
                $section = $commandParts[2];
                if ($section==1) {
                    $type = 'Тематические';
                } elseif ($section==2) {
                    $type = 'Профессиональные';
                } elseif ($section==4) {
                    $type = 'Романтичные';
                } else {
                    $type = 'Тематические';
                }

                if (isset($commandParts[3])) {
                    $mode = $commandParts[3];
                } else {
                    $mode =  'one';
                }

                $this->sendMessage([
                    'chat_id' => $callbackQuery['from']['id'],
                    'text' => $pointOfView=='i'?'Текущая точка зрения - Я':'Текущая точка зрения - Ты',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=> 'Я','callback_data'=> 'motivatorList/i/'.$section.'/'.$mode],
                                ['text'=> 'Ты','callback_data'=> 'motivatorList/you/'.$section .'/'.$mode],
                            ]
                        ]
                    ]),
                ]);
            }

            // Опции

            if ($action == 'options') {    // options / pointOfView / section / mode
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'ответ получен', //Optional
                ]);
                if (isset($commandParts[1])) {
                    $pointOfView = $commandParts[1];
                } else {
                    $pointOfView = 'you';
                }
                $section = $commandParts[2];

                if (isset($commandParts[3])) {
                    $mode = $commandParts[3];
                } else {
                    $mode =  'one';
                }

                $this->sendMessage([
                    'chat_id' => $callbackQuery['from']['id'],
                    'text' => 'Список опций',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/'.$pointOfView.'/1/'.$mode],
                            ],
                            [
                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/'.$pointOfView.'/2/'.$mode],
                            ],
                            [
                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/'.$pointOfView.'/4/'.$mode],
                            ],
                            [
                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/'.$pointOfView.'/'.$section.'/'.$mode],
                                ['text'=>"Режим показа",'callback_data'=> 'mode/'.$pointOfView.'/'.$section.'/'.$mode],
                            ],
                            [
                                ['text'=>'Перейти на сайт','url'=> 'https://nashe-schastye.ru/'],
                            ],
                        ]
                    ]),
                ]);
            }

            // Режим показа

            if ($action == 'mode') {
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'ответ получен', //Optional
                ]);
                if (isset($commandParts[1])) {
                    $pointOfView = $commandParts[1];
                } else {
                    $pointOfView = 'you';
                }
                $section = $commandParts[2];
                if (isset($commandParts[3])) {
                    $mode = $commandParts[3];
                    if ($mode == 'all') {
                        $modeName = 'Все сразу';
                    } else {
                        $modeName = 'По одному';

                    }
                } else {
                    $mode =  'all';
                    $modeName = 'Все сразу';
                }
                $this->sendMessage([
                    'chat_id' => $callbackQuery['from']['id'],
                    'text' => 'Режим - ' . $modeName,
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"По одному",'callback_data'=> 'motivatorList/'.$pointOfView.'/'.$section.'/one'],
                                ['text'=>"Все сразу",'callback_data'=> 'motivatorList/'.$pointOfView.'/'.$section.'/all'],
                            ]
                        ]
                    ]),
                ]);


            }


        }



        return 'end return';
    }





    public function sendMessage(array $option){
//        $chat_id = $option['chat_id'];
//        $text = urlencode($option['text']);
//        unset($option['chat_id']);
//        unset($option['text']);

        $jsonResponse = $this->curlCall(
            Yii::$app->params['totUrl'].'?tourl='.
            Yii::$app->params['patch'] .
            Yii::$app->params['motivBotToken'].
            "/sendMessage", $option);

        // before Blokada
//        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
//            Yii::$app->params['motivBotToken'].
//            "/sendMessage?chat_id=".$chat_id .
//            '&text='.$text, $option);

        Yii::info([
            'action'=>'sendMessage',
            '$jsonResponse'=>$jsonResponse,
        ], 'motivatorBot');

        return $jsonResponse;
    }




//    private function curlCall($url, $option=array(), $headers=array())
//    {
//
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_USERAGENT, "Telebot");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        if (count($option)) {
//            curl_setopt($ch, CURLOPT_POST, true);
//            curl_setopt($ch, CURLOPT_POSTFIELDS, $option);
//        }
//        $r = curl_exec($ch);
//        if($r == false){
//            $text = 'error '.curl_error($ch);
//            $myfile = fopen("error_telegram.log", "w") or die("Unable to open file!");
//            fwrite($myfile, $text);
//            fclose($myfile);
//        }
//        curl_close($ch);
//        return $r;
//    }



    public function answerCallbackQuery(array $option = [])
    {
        $jsonResponse = $this->curlCall(
            Yii::$app->params['totUrl'].'?tourl='.
            Yii::$app->params['patch'] .
            Yii::$app->params['motivBotToken'] .
            "/answerCallbackQuery", $option);

//        before blokada
//        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
//            Yii::$app->params['motivBotToken'] .
//            "/answerCallbackQuery", $option);

        Yii::info([
            'action'=>'answerCallbackQuery',
            '$jsonResponse'=>$jsonResponse,
        ], 'motivatorBot');

        return $jsonResponse;
    }

    public function curlCall($url, $options = [])
    {

        $optQuery = http_build_query($options);
        $urlToInit = $url.'?'.$optQuery;

        $ch = curl_init($urlToInit);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 27);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $optQuery);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // return string
        curl_setopt($ch, CURLOPT_POST, true); // use http post
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // no check sert by remote



        $r = curl_exec($ch);

        if($r == false){

            Yii::info([
                'action'=>'curl to HLL error',
                'curl_error($ch)'=>curl_error($ch),
            ], 'motivatorBot');

            return 'error, look in logs';
        } else {
//            $info = curl_getinfo($ch);
//            $info = [
//                    'action'=>'curl to HLL success',
//                    'options'=>$options,
//                    'curl_version'=>curl_version(),
//                ] + $info;
//            Yii::info($info, 'motivatorBot');


        }
        curl_close($ch);
        return $r;
    }

}
//
