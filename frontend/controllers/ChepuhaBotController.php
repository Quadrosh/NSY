<?php

namespace frontend\controllers;

use common\models\BotUse;
use common\models\BotUser;
use common\models\ChBotPhrase;
use common\models\ChBotPlay;
use common\models\ChBotPlayVars;
use common\models\ChBotSession;
use common\models\ChBotSessionVars;
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


class ChepuhaBotController extends \yii\web\Controller
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

//
//
//    public function actionDialog()
//    {
//
//        $input = Yii::$app->request->getRawBody();
//        $updateId = Yii::$app->request->post('update_id');
//        $message = Yii::$app->request->post('message'); // array
//        $callbackQuery = Yii::$app->request->post('callback_query'); // array
//        $inlineQuery = Yii::$app->request->post('inline_query'); // array
//
//
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
//
//
//
//        if ($message != null) {
//
//            //   /start
//            //
//            //
//
//            if ($message['text'] == '/start') {
//                $this->sendMessage([
//                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
//                    'text' => 'Привет, я бот Мотиватор, ниже список опций',
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/you/1'],
//                            ],
//                            [
//                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/you/2'],
//                            ],
//                            [
//                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/you/4'],
//                            ],
//                            [
//                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
//                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],
//                            ],
//                        ]
//                    ]),
//                ]);
//
//            }
//
//            //  Опции текст
//
//            elseif ($message['text'] == '/options') {
//                $this->sendMessage([
//                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
//                    'text' => 'Список опций',
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/you/1'],
//                            ],
//                            [
//                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/you/2'],
//                            ],
//                            [
//                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/you/4'],
//                            ],
//                            [
//                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
//                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],
//                            ],
//                        ]
//                    ]),
//                ]);
//
//            } elseif (Motivator::find()->where(['hrurl'=>$text])->one()){
//                $motivator = Motivator::find()->where(['hrurl'=>$text])->one();
//                $quotes = $motivator->mLines;
//                if ($text == 'accept-the-life-daemon') { // daemon
//                    $quotesCount = count($quotes);
//                    $now = date_timestamp_get(new \DateTime());
//                    $timeMark = $now;
//                    $stepI = 1;
//                    $blockI = 1;
//
//                    foreach ($quotes as $quote) {
//
//                        $process = new MotivatorBotProcess();
//                        $process['chat_id'] = $chatId;
//                        $process['first_name'] = $fromFirstName;
//                        $process['chat_date'] = $date;
//                        $process['command'] = $text;
//                        $process['motivator_id'] = $motivator['id'];
//                        $process['steps_qnt'] = $quotesCount;
//
//                        $process['current_step'] = $stepI;
//                        $process['current_block'] = $quote['block_num'];
//                        if ($process['current_block'] != $blockI) {
//                            $process['new_block'] = true;
//                            $process['start_time'] = $timeMark + 4;
//                            $blockI++;
//                        } else {
//                            $process['start_time'] = $timeMark + 2;
//                        }
//                        $timeMark = $process['start_time'];
//                        $process['mline_id'] = $quote['id'];
//                        $process['text'] = $quote['text'];
//
//                        $process->save();
//                        $stepI++;
//
//                    }
//
//                    $daemon = Daemons::find()->where(['daemon'=>'motivator-bot-daemon'])->one();
//                    if ($daemon == null) {
//                        $daemon = new Daemons();
//                        $daemon['daemon'] = 'motivator-bot-daemon';
//                    }
//                    $daemon['enabled'] = true;
//                    $daemon->save();
//
//                    Yii::$app->telegram->sendMessage([
//                        'chat_id' => $chatId,
//                        'text' => $motivator['list_name'].' ('.$quotesCount.')',
//                    ]);
//                }
//                else {   // no daemon
//                    $quoteText = '';
//                    $quiteBox = null;
//                    foreach ($quotes as $quote) {
//                        if ($quiteBox !=$quote['block_num']) {
//                            $quiteBox = $quote['block_num'];
//                            $quoteText .= '——————————————'.PHP_EOL;
//                        }
//                        $quoteText .= $quote['text'].PHP_EOL;
//                    }
//
//                    $this->sendMessage([
//                        'chat_id' => $chatId,
//                        'text' => $motivator['list_name'],
//                    ]);
//                    $this->sendMessage([
//                        'chat_id' => $chatId,
//                        'text' => $quoteText,
//                        'reply_markup' => json_encode([
//                            'inline_keyboard'=>[
//                                [
//                                    ['text'=>"Список мотиваторов",'callback_data'=> 'motivatorList/you'],
//                                    ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
////                                    ['text'=>'switch','switch_inline_query'=>''],
//                                ],
//                                [
//                                    ['text'=>"Раздел",'callback_data'=> 'theme/1'],
//                                ],
//
//                            ]
//                        ]),
//                    ]);
//                }
//            } else {      //  непонятная команда
//                $this->sendMessage([
//                    'chat_id' => $chatId,
//                    'text' => 'чево?',
//                ]);
//                $this->sendMessage([
//                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
//                    'text' => 'То есть я хотел сказать - вот список опций )',
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/you/1'],
//                            ],
//                            [
//                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/you/2'],
//                            ],
//                            [
//                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/you/4'],
//                            ],
//                            [
//                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
//                                ['text'=>'Опции','callback_data'=> 'options/you/1/one'],
////                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],
//
//                            ],
//                        ]
//                    ]),
//                ]);
//            }
//
//            return 'end return message';
//
//        }
//
////       Callback
//
//        if ($callbackQuery != null) {
//            $commandParts = explode('/', $callbackQuery['data']);
//            $action = $commandParts[0];
//
//            // motivatorList
//
//            if ($action == 'motivatorList') { // motivatorList / pointOfView / section / mode
//                $this->answerCallbackQuery([
//                    'callback_query_id' => $callbackQuery['id'],
//                    'text' => 'список строится',
//                ]);
//                $section = $commandParts[2];
//                if ($section==1) {
//                    $type = 'Тематические';
//                } elseif ($section==2) {
//                    $type = 'Профессиональные';
//                } elseif ($section==4) {
//                    $type = 'Романтичные';
//                } else {
//                    $type = 'Тематические';
//                }
//                if (isset($commandParts[3])) {
//                    $mode = $commandParts[3];
//                } else {
//                    $mode =  'one';
//                }
//
//                if (isset($commandParts[1])) {
//                    $pointOfView = $commandParts[1];
//                    if ($pointOfView == 'you') {
//                        $motivators = Motivator::find()
//                            ->where(['list_section'=>$section,'position'=>'1'])
//                            ->orderBy('list_num')
//                            ->all();
//                    } else {
//                        $motivators = Motivator::find()
//                            ->where(['list_section'=>$section,'position'=>'0'])
//                            ->orderBy('list_num')
//                            ->all();
//                    }
//                } else {
//                    $pointOfView = 'you';
//                    $motivators = Motivator::find()
//                        ->where(['list_section'=>$section,'position'=>'1'])
//                        ->orderBy('list_num')
//                        ->all();
//                }
//                $data = [];
//                foreach ($motivators as $motivator) {
//                    $row = [];
//                    $row[] = ['text'=>$motivator['list_name'],'callback_data'=> 'motivator/' . $motivator['hrurl'].'/'.$pointOfView.'/'.$mode];
//                    $data[] = $row;
//                };
//                // options
//                $data[] = [
//                    ['text'=>'Точка восприятия','callback_data'=> 'pointOfView/'. $pointOfView.'/'.$section.'/'.$mode],
//                    ['text'=>'Опции','callback_data'=> 'options/'.$pointOfView .'/' . $section .'/'.$mode],
//                ];
//
//                $this->sendMessage([
//                    'chat_id' => $callbackQuery['from']['id'],
//                    'text' => $type . ' мотиваторы',
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=> $data
//                    ]),
//                ]);
//
//            }
//
//            // motivator
//
//            if ($action == 'motivator') {   // motivator / hrurl /pointOfView  / mode
//                $this->answerCallbackQuery([
//                    'callback_query_id' => $callbackQuery['id'], //require
//                    'text' => 'ответ получен', //Optional
//                ]);
//                $hrurl = $commandParts[1];
//                if (isset($commandParts[2])) {
//                    $pointOfView = $commandParts[2];
//                } else {
//                    $pointOfView = 'you';
//                }
//                $motivator = Motivator::find()->where(['hrurl'=>$hrurl])->one();
//                $quoteText = '';
//                $quiteBox = null;
//
//
//                $section = $motivator['list_section'];
//                if ($section == 1) {
//                    $type = 'Тематические';
//                } elseif ($section==2) {
//                    $type = 'Профессиональные';
//                } elseif ($section==4) {
//                    $type = 'Романтичные';
//                } else {
//                    $type = 'Тематические';
//                }
//
//                if (isset($commandParts[3])) {
//                    $mode = $commandParts[3];
//                } else {
//                    $mode =  'one';
//                }
//
//
//                if ($mode ==  'all') {
//
//                    $quotes = $motivator->mLines;
//                    foreach ($quotes as $quote) {
//                        if ($quiteBox !=$quote['block_num']) {
//                            $quiteBox = $quote['block_num'];
//                            $quoteText .= '——————————————'.PHP_EOL;
//                        }
//                        $quoteText .= $quote['text'].PHP_EOL;
//                    }
//                    $this->sendMessage([
//                        'chat_id' => $callbackQuery['from']['id'],
//                        'text' => $motivator['list_name'],
//                    ]);
//                    $this->sendMessage([
//                        'chat_id' => $callbackQuery['from']['id'],
//                        'text' => $quoteText,
//                        'reply_markup' => json_encode([
//                            'inline_keyboard'=>[
//                                [
//                                    ['text'=>$type .' мотиваторы','callback_data'=> 'motivatorList/'.$pointOfView . '/' . $section .'/all'],
//                                    ['text'=>'Опции','callback_data'=> 'options/'.$pointOfView .'/' . $section .'/all'],
//                                ]
//                            ]
//                        ]),
//                    ]);
//                } else { // $mode ==  'one'
//                    if (isset($commandParts[4])) {
//                        $quoteBlock = $commandParts[4];
//                    } else {
//                        $quoteBlock =  '1';
//                    }
//                    $quotes = MLine::find()
//                        ->where(['motivator_id'=>$motivator['id'], 'block_num'=>$quoteBlock])
//                        ->orderBy('quote_num')
//                        ->all();
//                    foreach ($quotes as $quote) {
//                        $quoteText .= $quote['text'].PHP_EOL;
//                    }
//                    if (!empty(MLine::find()->where(['motivator_id'=>$motivator['id'], 'block_num'=>intval($quoteBlock)+1])->one())) {
//                        $next = intval($quoteBlock)+1;
//                        $nextButtonName = 'Дальше';
//                        $nextButtonValue = 'motivator/' . $motivator['hrurl'].'/'.$pointOfView.'/one/'.$next;
//                    } else {
//                        $nextButtonName = 'Мотиваторы';
//                        $nextButtonValue = 'motivatorList/'.$pointOfView . '/' . $section .'/one';
//                    }
//
//                    if ($quoteBlock == '1') {
//                        $this->sendMessage([
//                            'chat_id' => $callbackQuery['from']['id'],
//                            'text' => $motivator['list_name'],
//                        ]);
//                    }
//
//                    $this->sendMessage([
//                        'chat_id' => $callbackQuery['from']['id'],
//                        'text' => $quoteText,
//                        'reply_markup' => json_encode([
//                            'inline_keyboard'=>[
//                                [
//                                    ['text'=>$nextButtonName,'callback_data'=> $nextButtonValue],
//                                ]
//                            ]
//                        ]),
//                    ]);
//                }
//
//
//            }
//
//            // pointOfView
//
//            if ($action == 'pointOfView') {   // pointOfView / pointOfView / section / mode
//                $this->answerCallbackQuery([
//                    'callback_query_id' => $callbackQuery['id'], //require
//                    'text' => 'ответ получен', //Optional
//                ]);
//
//                if (isset($commandParts[1])) {
//                    $pointOfView = $commandParts[1];
//                } else {
//                    $pointOfView = 'you';
//                }
//                $section = $commandParts[2];
//                if ($section==1) {
//                    $type = 'Тематические';
//                } elseif ($section==2) {
//                    $type = 'Профессиональные';
//                } elseif ($section==4) {
//                    $type = 'Романтичные';
//                } else {
//                    $type = 'Тематические';
//                }
//
//                if (isset($commandParts[3])) {
//                    $mode = $commandParts[3];
//                } else {
//                    $mode =  'one';
//                }
//
//                $this->sendMessage([
//                    'chat_id' => $callbackQuery['from']['id'],
//                    'text' => $pointOfView=='i'?'Текущая точка зрения - Я':'Текущая точка зрения - Ты',
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=> 'Я','callback_data'=> 'motivatorList/i/'.$section.'/'.$mode],
//                                ['text'=> 'Ты','callback_data'=> 'motivatorList/you/'.$section .'/'.$mode],
//                            ]
//                        ]
//                    ]),
//                ]);
//            }
//
//            // Опции
//
//            if ($action == 'options') {    // options / pointOfView / section / mode
//                $this->answerCallbackQuery([
//                    'callback_query_id' => $callbackQuery['id'], //require
//                    'text' => 'ответ получен', //Optional
//                ]);
//                if (isset($commandParts[1])) {
//                    $pointOfView = $commandParts[1];
//                } else {
//                    $pointOfView = 'you';
//                }
//                $section = $commandParts[2];
//
//                if (isset($commandParts[3])) {
//                    $mode = $commandParts[3];
//                } else {
//                    $mode =  'one';
//                }
//
//                $this->sendMessage([
//                    'chat_id' => $callbackQuery['from']['id'],
//                    'text' => 'Список опций',
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=>"Тематические мотиваторы",'callback_data'=> 'motivatorList/'.$pointOfView.'/1/'.$mode],
//                            ],
//                            [
//                                ['text'=>"Профессиональные мотиваторы",'callback_data'=> 'motivatorList/'.$pointOfView.'/2/'.$mode],
//                            ],
//                            [
//                                ['text'=>"Романтичные мотиваторы",'callback_data'=> 'motivatorList/'.$pointOfView.'/4/'.$mode],
//                            ],
//                            [
//                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/'.$pointOfView.'/'.$section.'/'.$mode],
//                                ['text'=>"Режим показа",'callback_data'=> 'mode/'.$pointOfView.'/'.$section.'/'.$mode],
//                            ],
//                            [
//                                ['text'=>'Перейти на сайт','url'=> 'https://nashe-schastye.ru/'],
//                            ],
//                        ]
//                    ]),
//                ]);
//            }
//
//            // Режим показа
//
//            if ($action == 'mode') {
//                $this->answerCallbackQuery([
//                    'callback_query_id' => $callbackQuery['id'], //require
//                    'text' => 'ответ получен', //Optional
//                ]);
//                if (isset($commandParts[1])) {
//                    $pointOfView = $commandParts[1];
//                } else {
//                    $pointOfView = 'you';
//                }
//                $section = $commandParts[2];
//                if (isset($commandParts[3])) {
//                    $mode = $commandParts[3];
//                    if ($mode == 'all') {
//                        $modeName = 'Все сразу';
//                    } else {
//                        $modeName = 'По одному';
//
//                    }
//                } else {
//                    $mode =  'all';
//                    $modeName = 'Все сразу';
//                }
//                $this->sendMessage([
//                    'chat_id' => $callbackQuery['from']['id'],
//                    'text' => 'Режим - ' . $modeName,
//                    'reply_markup' => json_encode([
//                        'inline_keyboard'=>[
//                            [
//                                ['text'=>"По одному",'callback_data'=> 'motivatorList/'.$pointOfView.'/'.$section.'/one'],
//                                ['text'=>"Все сразу",'callback_data'=> 'motivatorList/'.$pointOfView.'/'.$section.'/all'],
//                            ]
//                        ]
//                    ]),
//                ]);
//
//
//            }
//
//
//        }
//
//
//
//        return 'end return';
//    }
//
//




    public function actionDialog()
    {

        $input = Yii::$app->request->getRawBody();
        $updateId = Yii::$app->request->post('update_id');
        $message = Yii::$app->request->post('message'); // array
        $callbackQuery = Yii::$app->request->post('callback_query'); // array
        $inlineQuery = Yii::$app->request->post('inline_query'); // array


//        $messageId = $message['message_id'];
//        $from = $message['from'];  // array
//        $fromId = $message['from']['id'];
//        $fromIsBot = $message['from']['is_bot'];
//        $fromFirstName = $message['from']['first_name'];
//        $fromLastName = $message['from']['last_name'];
//        $fromUserName = $message['from']['username'];
//        $fromLanguageCode = $message['from']['language_code'];
//        $chat = $message['chat'];
//        $chatId = $message['chat']['id'];
//        $chatType = $message['chat']['type'];
//        $date = $message['date'];
//        $text = $message['text'];
//        $query = $inlineQuery['query'];







//      Inline
        if ($inlineQuery != null) {
            Yii::info($inlineQuery, 'chepuhoBot');

//           список сцен play
            if ($inlineQuery['query'] == 'play') {
                $plays = ChBotPlay::find()->where('name != :value', ['value' => 'work'])->orderBy('name')->all();
                $results = [];
                foreach ($plays as $play) {
                    $results[] = [
                        'type' => 'article',
                        'id' => $play['id'],
                        'title' => $play['name'],
                        'description' => $play['description'],
                        'input_message_content'=>[
                            'message_text'=> 'play/' . $play['hrurl'],
                            'parse_mode'=> 'html',
                            'disable_web_page_preview'=> true,
                        ],
                    ];
                };
                $this->answerInlineQuery([
                    'inline_query_id' => $inlineQuery['id'],
                    'results'=> json_encode($results)
                ]);
            }

//           список сцен phrase
            elseif ($inlineQuery['query'] == 'phrase'){
                $plays = ChBotPhrase::find()->where('name != :value', ['value' => 'work'])->orderBy('name')->all();
                $results = [];
                foreach ($plays as $play) {
                    $results[] = [
                        'type' => 'article',
                        'id' => $play['id'],
                        'title' => $play['name'],
                        'description' => $play['description'],
                        'input_message_content'=>[
                            'message_text'=> 'phrase/' . $play['hrurl'],
                            'parse_mode'=> 'html',
                            'disable_web_page_preview'=> true,
                        ],
                    ];
                };
                $this->answerInlineQuery([
                    'inline_query_id' => $inlineQuery['id'],
                    'results'=> json_encode($results)
                ]);
            }

            return 'ok';
        }

        if ($message != null) {

//          /start
            if (trim(strtolower($message['text'])) == '/start') {
                $user = BotUser::find()->where(['user_id'=>$message['from']['id']])->one();
                if ($user == null) {
                    $user = new BotUser();
                    $user['user_id'] = $message['from']['id'];
                    $user['first_name'] = $message['from']['first_name'];
                    $user['last_name'] = $message['from']['last_name'];
                    $user['username'] = $message['from']['username'];
                    $user['language_code'] = $message['from']['language_code'];
                    $user->save();
                }
                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' =>
                        'Я - <b>Чепухобот</b>. '.PHP_EOL.
                        'Я задаю странные вопросы и составляю из твоих ответов предложения.'.PHP_EOL.
                        'В названии игры указано количество вопросов и (если есть) возрастное ограничение.'.PHP_EOL.
                        'Прервать игру можно командой /end '.PHP_EOL.
                        'Помощь - /help '.PHP_EOL.

                        'Ниже список опций:',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Чепусценка",'switch_inline_query_current_chat'=> 'play'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'switch_inline_query_current_chat'=> 'phrase'],
                            ],

                        ]
                    ]),
                ]);
                return [
                    'message' => 'ok',
                    'code' => 200,
                ];


            }

//          /dev
            if (trim(strtolower($message['text'])) == '/dev') {



                $this->sendMessage([
//                    'chat_id' => '232544919',  // $message['from']['id']
                    'chat_id' => $message['from']['id'],  // $message['from']['id']
//                    'parse_mode' => 'html',
//                    'text' => $message['from']['username'],
                    'text' => 'test',
//                    'text' => json_encode($user->save()),
//                    'text' => json_encode($user->hasErrors()),

                ]);
                return [
                    'message' => 'ok',
                    'code' => 200,
                ];

            }

//          /end
            if (trim(strtolower($message['text'])) == '/end') {
                $session = ChBotSession::find()->where(['user_id'=>$message['from']['id']])->one();
                $vars = $session->vars;
                foreach ($vars as  $var) {
                    $var->delete();
                }
//                $session->delete();
                $use = BotUse::find()->where(['id'=>intval($session['description'])])->one();
                $session->delete();
                $use['done'] = 'interrupt';
                $use->save();

                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' => 'Игра прервана,'.PHP_EOL.
                        'начать новую?',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Чепусценка",'switch_inline_query_current_chat'=> 'play'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'switch_inline_query_current_chat'=> 'phrase'],
                            ],
                        ]
                    ]),
                ]);

                return [
                    'message' => 'ok',
                    'code' => 200,
                ];
            }

//          /options   /settings
            elseif (trim(strtolower($message['text'])) == '/options' OR trim(strtolower($message['text'])) == '/settings' ) {
                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'text' => 'Доступные команды:'.PHP_EOL.
                        '/start - начало новой игры'.PHP_EOL.
                        '/help - помощь'.PHP_EOL.
                        '/about - обо мне'.PHP_EOL.
                        '/settings - все доступные команды'.PHP_EOL.
                        '/end - прервать игру'.PHP_EOL.PHP_EOL.
                         'Начать игру?',
                    'reply_markup' => json_encode([

//                        'keyboard'=>[
//                            [
//                                ['text'=>"Чепусценка"],
//                            ],
//                            [
//                                ['text'=>"Чепуфраза"],
//                            ],
//                        ],
//                        'one_time_keyboard' => true,

                        'inline_keyboard'=>[
                            [
                                ['text'=>"Чепусценка",'switch_inline_query_current_chat'=> 'play'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'switch_inline_query_current_chat'=> 'phrase'],
                            ],
//                            [
//                                ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
//                            ],
//                            [
//                                ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
//                            ],
                        ]
                    ]),
                ]);
                return [
                    'message' => 'ok',
                    'code' => 200,
                ];

            }

//          /help     /помощь
            elseif (trim(strtolower($message['text'])) == '/help' OR trim(strtolower($message['text'])) == '/помощь' ) {
                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' => 'Я - Чепухобот. '.PHP_EOL.
                        'Я задаю странные вопросы и составляю из твоих ответов различные предложения.'.PHP_EOL.
                        'У меня есть 2 типа игры - чепусценка и чепуфраза.'.PHP_EOL.
                        '<b>Чепусценка</b> - сценка с несколькими действующими лицами, по мотивам какого-либо произведения.'.PHP_EOL.
                        '<b>Чепуфраза</b> - набор вопросов, из ответов на которые собирается фраза.'.PHP_EOL.
                        'В названии игры указано количество вопросов и (если есть) возрастное ограничение.'.PHP_EOL.PHP_EOL.
                        'Доступные команды:'.PHP_EOL.
                        '/start - начало новой игры'.PHP_EOL.
                        '/help - помощь'.PHP_EOL.
                        '/about - обо мне'.PHP_EOL.
                        '/settings - все доступные команды'.PHP_EOL.
                        '/end - прервать игру',

                ]);
                return [
                    'message' => 'ok',
                    'code' => 200,
                ];

            }

//          /about    /о проекте
            elseif (trim(strtolower($message['text'])) == '/about' OR trim(strtolower($message['text'])) == '/о проекте' ) {
                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' => 'Я - Чепухобот. '.PHP_EOL.
                        'Я задаю странные вопросы и составляю из ответов различные предложения.'.PHP_EOL.
                        'У меня есть 2 типа игры - чепусценка и чепуфраза.'.PHP_EOL.
                        '<b>Чепусценка</b> - сценка с несколькими действующими лицами, по мотивам какого-либо произведения.'.PHP_EOL.
                        '<b>Чепуфраза</b> - набор вопросов, из ответов на которые собирается фраза.'.PHP_EOL.
                        'В названии игры указано количество вопросов и (если есть) возрастное ограничение.'
                ]);
                return [
                    'message' => 'ok',
                    'code' => 200,
                ];

            }

//          play/hrurl     phrase/hrurl
            elseif (substr($message['text'],0,5) == 'play/' OR  substr($message['text'],0,7) == 'phrase/'){

                $this->gameInit($message);

            }


//          любой текст от пользователя (игра в процессе)
            else {

                $session = ChBotSession::find()->where(['user_id'=>$message['from']['id']])->one();
                if ($session == null) {   // Нет активной игры
                    $this->sendMessage([
                        'chat_id' => $message['from']['id'],
                        'text' => 'Нет активной игры, поиграем?',
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>"Чепусценка",'switch_inline_query_current_chat'=> 'play'],
                                ],
                                [
                                    ['text'=>"Чепуфраза",'switch_inline_query_current_chat'=> 'phrase'],
                                ],
                            ]
                        ]),
                    ]);
                    return [
                        'message' => 'ok',
                        'code' => 200,
                    ];
                }

                $activeVar = ChBotSessionVars::find()->where(['session_id'=>$session['id'],'status'=>'active'])->one();
                if ($activeVar == null) {   // Нет активного шага
                    $this->sendMessage([
                        'chat_id' => $message['from']['id'],
                        'text' => 'Нет активного шага, начнем сначала?',
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>"Чепусценка",'switch_inline_query_current_chat'=> 'play'],
                                ],
                                [
                                    ['text'=>"Чепуфраза",'switch_inline_query_current_chat'=> 'phrase'],
                                ],
                            ]
                        ]),
                    ]);
                    return [
                        'message' => 'ok',
                        'code' => 200,
                    ];
                }

                $activeVar['value'] = $message['text'];
                $activeVar['status'] = 'done';
                $activeVar->save();

                $newActiveVar = ChBotSessionVars::find()->where(['session_id'=>$session['id'],'status'=>'raw'])->one();

                if ($newActiveVar != null) {
                    $newActiveVar['status'] = 'active';
                    $newActiveVar->save();
                    $text = $newActiveVar['question'];
                    $vars = $session->vars;
                    foreach ($vars as  $var) {
                        $text = str_replace('#'.$var['item_var_id'],$var['value'], $text);
                    }
                    $this->sendMessage([
                        'chat_id' => $message['from']['id'],
                        'text' => $text.'?',
                    ]);
                    return 'ok';
                }

                if ($newActiveVar == null && ChBotSessionVars::find()->where(['session_id'=>$session['id'],'status'=>'done'])->one()) {

                    if ($session['item_type']=='play') {
                        $play = ChBotPlay::find()->where(['id'=>$session['item_id']])->one();
                    } elseif ($session['item_type']=='phrase'){
                        $play = ChBotPhrase::find()->where(['id'=>$session['item_id']])->one();
                    } else {
                        $play = ChBotPlay::find()->where(['id'=>$session['item_id']])->one();
                    }
                    $text = $play['text'];
                    $vars = $session->vars;
                    foreach ($vars as  $var) {
                        $text = str_replace('#'.$var['item_var_id'],$var['value'], $text);
                        $var->delete();
                    }
                    $this->sendMessage([
                        'chat_id' => $message['from']['id'],
                        'text' => $text,
                        'parse_mode' => 'html',
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>'Играть еще '.hex2bin('E29EA1'),'callback_data'=> 'newGame'],
//                                        ['text'=>'Отправить игру другу','switch_inline_query'=> 'phrase'],
                                ],
                            ]
                        ]),

                    ]);

                    $use = BotUse::find()->where(['id'=>intval($session['description'])])->one();
                    $session->delete();
                    $use['done'] = 'done';
                    $use['user_result'] = $text;
                    $use->save();

                    return 'ok';

                }



            }

            return 'ok';
        }


//      Callback
        if ($callbackQuery != null) {
            Yii::info($callbackQuery, 'chepuhoBot');

//          newGame
            if ($callbackQuery['data']=='newGame') {
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'],
                    'text' => 'в процессе',
                ]);

                $this->sendMessage([
                    'chat_id' => $callbackQuery['from']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' => 'Игры:',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Чепусценка",'switch_inline_query_current_chat'=> 'play'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'switch_inline_query_current_chat'=> 'phrase'],
                            ],
                        ]
                    ]),
                ]);
                return 'ok';
            }


//          addPermission
            if (substr($callbackQuery['data'],0,14) == 'addPermission/') {
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'],
                    'text' => 'в процессе',
                ]);

                $commands = explode('/', $callbackQuery['data']);
                $restrictionShort = $commands[1];
                $type = $commands[2];
                $itemId = $commands[3];
                if ($type == 'play') {
                    $play = ChBotPlay::find()->where(['id'=>$itemId])->one();
                } elseif ($type == 'phrase') {
                    $play = ChBotPhrase::find()->where(['id'=>$itemId])->one();
                } else {
                    $play = ChBotPlay::find()->where(['id'=>$itemId])->one();
                }

//                TEST
                $user = BotUser::find()->where(['user_id'=>$callbackQuery['from']['id']])->one();
                if ($user == null) {
                    $user = new BotUser();
                    $user['user_id'] = $message['from']['id'];
                    $user['first_name'] = $message['from']['first_name'];
                    $user['last_name'] = $message['from']['last_name'];
                    $user['username'] = $message['from']['username'];
                    $user['language_code'] = $message['from']['language_code'];
                    $user->save();
                }
                if ($user->addPermission($restrictionShort)) {
                    $this->gameInit([
                        'from' => $callbackQuery['from'],  // $message['from']['id']
                        'text' => $type.'/'.$play['hrurl'],
                    ]);
                } else {
                    $this->sendMessage([
                        'chat_id' => $callbackQuery['from']['id'],
                        'text' => 'Внутренняя ошибка, попробуйте еще раз',
                    ]);
                }

                return 'ok';
            }


        }
        return 'ok';
    }




    private function gameInit(array $message)
    {
        $commands = explode('/', $message['text']);
        $type = $commands[0];
        $hrurl = $commands[1];

        if ($type == 'play') {
            $play = ChBotPlay::find()->where(['hrurl'=>$hrurl])->one();
        } elseif ($type == 'phrase') {
            $play = ChBotPhrase::find()->where(['hrurl'=>$hrurl])->one();
        } else {
            $play = ChBotPlay::find()->where(['hrurl'=>$hrurl])->one();
        }

        $user = BotUser::find()->where(['user_id'=>$message['from']['id']])->one();

        if ($user == null) {
            $user = new BotUser();
            $user['user_id'] = $message['from']['id'];
            $user['first_name'] = $message['from']['first_name'];
            $user['last_name'] = $message['from']['last_name'];
            $user['username'] = $message['from']['username'];
            $user['language_code'] = $message['from']['language_code'];
            $user->save();
        }

//              18+
        if ($play->restriction) {

            $restriction = $play->restriction;

            if (!$user->hasPermission($restriction['short'])) {

                $this->sendMessage([
                    'chat_id' => $message['from']['id'],
                    'text' => $restriction['text'],
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>hex2bin('E2AC86').' Вернуться', 'callback_data'=> 'newGame'],
                                ['text'=>'Продолжить '.hex2bin('E29EA1'), 'callback_data'=> 'addPermission/'.$restriction['short'].'/'.$type.'/'.$play['id']],
                            ],

                        ]
                    ]),
                ]);
                return [
                    'message' => 'ok',
                    'code' => 200,
                ];
            }
        }

        $use = new BotUse();
        $use['bot_name'] = 'ChepuhoBot';
        $use['user_id'] = $user['id'];
        $use['item_type'] = $type;
        $use['item_id'] = $play['id'];
        $use['done'] = 'start';
        $use->save();

        $session = ChBotSession::find()->where(['user_id'=>$message['from']['id']])->one();

        if ($session == null) {
            $session = new ChBotSession;
            $session['user_id'] = $message['from']['id'];
        } else {
            $sessionVars = $session->vars;
            if ($sessionVars != null) {
                foreach ($sessionVars as $sessionVar) {
                    $sessionVar->delete();
                }
            }
        }

        $session['item_type'] = $type;
        $session['item_id'] = $play['id'];
        $session['description'] = strval($use['id']);
        $session->save();

        $playVars = $play->vars;
        $sessionVars = $session->vars;
        if ($sessionVars == null) {
            foreach ($playVars as $playVar) {
                $sessionVar = new ChBotSessionVars();
                $sessionVar['session_id'] = $session['id'];
                $sessionVar['item_var_id'] = $playVar['id'];
                $sessionVar['question'] = $playVar['question'];
                $sessionVar['status'] = 'raw';
                $sessionVar->save();
            }
        }
        $goQuestion = ChBotSessionVars::find()->where(['session_id'=>$session['id'],'status'=>'raw'])->one();
        $goQuestion['status'] = 'active';
        $goQuestion->save();

        $this->sendMessage([
            'chat_id' => $message['from']['id'],
            'text' => $goQuestion['question'],
        ]);

        return [
            'message' => 'ok',
            'code' => 200,
        ];
    }


    public function sendMessage(array $option)
    {
        $chat_id = $option['chat_id'];
        $text = urlencode($option['text']);
        unset($option['chat_id']);
        unset($option['text']);
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['chepuBotToken'].
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
     *       'url' => 'http://sample.com', //Optional
     *       'cache_time' => 123231,  //Optional
     *   ]);
     *   The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
     *  On success, True is returned.
     */
    public function answerCallbackQuery(array $option = [])
    {
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['chepuBotToken'] .
            "/answerCallbackQuery", $option);
        return json_decode($jsonResponse);
    }

    /**
     *   @var array
     *   sample
     *   $this->answerInlineQuery([
     *       'inline_query_id' => Integer, //Required-Position in high score table for the game
     *       'user' => User, //Optional
     *       'score' => Integer,  //Optional
     *   ]);
     *
     */
    public function answerInlineQuery(array $option = [])
    {
//        $optionJs = json_encode($option);
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['chepuBotToken'] .
            "/answerInlineQuery", $option);
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
            Yii::info($text, 'chepuhoBot');
        } else {
            $info = curl_getinfo($ch);
            Yii::info($info, 'chepuhoBot');
//            Yii::info(curl_error($ch), 'chepuhoBot');

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
     *   sample
     *   $this->editMessageText([
     *       'chat_id' => '3343545121', //Optional
     *       'message_id' => 13123, //Optional
     *       'inline_message_id' => 'my alert',  //Optional
     *       'text' => 'my text', //require
     *       'parse_mode' => 123231,  //Optional
     *       'disable_web_page_preview' => false or true,  //Optional
     *       'reply_markup' => Type InlineKeyboardMarkup,  //Optional
     *   ]);
     *   Use this method to edit text and game messages sent by the bot or via the bot (for inline bots). On success,
     *  if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     */
    public function editMessageText(array $option = [])
    {
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['chepuBotToken'] .
            "/editMessageText", $option);
        return json_decode($jsonResponse);
    }
    /**
     *   @var array
     *   sample
     *   $this->editMessageText([
     *       'chat_id' => '3343545121', //Required
     *       'message_id' => 13123, //Optional
     *       'inline_message_id' => 'my alert',  //Optional
     *       'caption' => 'my text', //require
     *       'reply_markup' => Type InlineKeyboardMarkup,  //Optional
     *   ]);
     *
     *   Use this method to edit captions of messages sent by the bot or via the bot (for inline bots). On success,
     *    if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     */
    public function editMessageCaption(array $option = [])
    {
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['chepuBotToken'] .
            "/editMessageCaption", $option);
        return json_decode($jsonResponse);
    }

    /**
     *   @var array
     *   $this->deleteMessage([
     *       'chat_id' => '3343545121', //Required
     *       'message_id' => 13123, //Required
     *   ]);
     *   Use this method to delete a message, including service messages, with the following limitations:
     *   - A message can only be deleted if it was sent less than 48 hours ago.
     *   - Bots can delete outgoing messages in groups and supergroups.
     *   - Bots granted can_post_messages permissions can delete outgoing messages in channels.
     *   - If the bot is an administrator of a group, it can delete any message there.
     *   - If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.
     *   Returns True on success.
     */
    public function deleteMessage(array $option = [])
    {
        $jsonResponse = $this->curlCall("https://api.telegram.org/bot" .
            Yii::$app->params['chepuBotToken'] .
            "/deleteMessage", $option);
        return json_decode($jsonResponse);
    }




}
//
