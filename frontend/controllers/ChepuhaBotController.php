<?php

namespace frontend\controllers;

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

    public function actionDialog()
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


//      Inline
        if ($inlineQuery != null) {
            Yii::info($inlineQuery, 'chepuhoBot');
//            $commands = explode('/', $inlineQuery['query']);
//            $action = $commands[0];


//           список сцен play
            if ($inlineQuery['query'] == 'play') {
                $plays = ChBotPlay::find()->where('hrurl != :value', ['value' => 'work'])->orderBy('name')->all();
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
                $plays = ChBotPhrase::find()->where('hrurl != :value', ['value' => 'work'])->orderBy('name')->all();
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

            return 'ok';
        }

        if ($message != null) {

//          /start
            if (trim(strtolower($message['text'])) == '/start') {
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
                                ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
                            ],

//                            [
//                                ['text'=>"Точка восприятия",'callback_data'=> 'pointOfView/you'],
//                                ['text'=>"Режим показа",'callback_data'=> 'mode/you/one'],
//                            ],
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
                                ['text'=>"Чепу-сценка",'switch_inline_query_current_chat'=> 'play'],
                            ],
                            [
                                ['text'=>"Чепу-фраза",'switch_inline_query_current_chat'=> 'phrase'],
                            ],
//                            [
//                                ['text'=>"Выбрать чат",'switch_inline_query'=> 'phrase/all'],
//                            ],

                        ]
                    ]),
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
                $session->delete();

                $this->sendMessage([
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' => 'Игра прервана,'.PHP_EOL.
                        'начать новую?',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
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
                                ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                            ],
                            [
                                ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
                            ],
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

//          play/hrurl
            elseif (explode('/', $message['text'])[0]=='play'){

                Yii::info($message, 'chepuhoBot');


                $hrurl = explode('/', $message['text'])[1];
                $play = ChBotPlay::find()->where(['hrurl'=>$hrurl])->one();

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
                $session['item_type'] = 'play';
                $session['item_id'] = $play['id'];
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


            elseif (explode('/', $message['text'])[0]=='phrase'){

                Yii::info($message, 'chepuhoBot');

                $hrurl = explode('/', $message['text'])[1];
                $play = ChBotPhrase::find()->where(['hrurl'=>$hrurl])->one();

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
                $session['item_type'] = 'play';
                $session['item_id'] = $play['id'];
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
                                    ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                                ],
                                [
                                    ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
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
                                    ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                                ],
                                [
                                    ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
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
                        $text = $play['text'];
                        $vars = $session->vars;
                        foreach ($vars as  $var) {
                            $text = str_replace('#'.$var['item_var_id'],$var['value'], $text);
                            $var->delete();
                        }
                        $this->sendMessage([
                            'chat_id' => $message['from']['id'],
                            'text' => $text,
                        ]);
                        $session->delete();
                        return 'ok';
                    }

                    if ($session['item_type']=='phrase') {
                        $play = ChBotPhrase::find()->where(['id'=>$session['item_id']])->one();
                        $text = $play['text'];
                        $vars = $session->vars;
                        foreach ($vars as  $var) {
                            $text = str_replace('#'.$var['item_var_id'],$var['value'], $text);
                            $var->delete();
                        }
                        $this->sendMessage([
                            'chat_id' => $message['from']['id'],
                            'text' => $text,
                        ]);
                        $session->delete();
                        return 'ok';
                    }

                }



            }

            return 'ok';
        }


//      Callback
        if ($callbackQuery != null) {
            $commands = explode('/', $callbackQuery['data']);
            $action = $commands[0];

//          play (чепусценка)
            if ($action == 'play') {
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'],
                    'text' => 'в процессе',
                ]);

                if (isset($commands[1])) {
                    if ($commands[1]=='all') {  // Список сцен
                        $plays = ChBotPlay::find()->where('name != :value',['value'=>'work'])->orderBy('name')->all();
                        $data = [];
                        foreach ($plays as $play) {
                            $row = [];
                            $row[] = ['text'=>$play['name'],'callback_data'=> 'play/one/' . $play['id']];
                            $data[] = $row;
                        };

                        $this->sendMessage([
                            'chat_id' => $callbackQuery['from']['id'],
                            'parse_mode' => 'html',
                            'text' => 'Чепусценки
Название (уточнение) - количество вопросов.',
                            'reply_markup' => json_encode([
                                'inline_keyboard'=> $data
                            ]),
                        ]);



                    } elseif ($commands[1]=='one') { // play item
                        $playId = $commands[2];


                        $session = ChBotSession::find()->where(['user_id'=>$callbackQuery['from']['id']])->one();

                        if ($session == null) {
                            $session = new ChBotSession;
                            $session['user_id'] = $callbackQuery['from']['id'];
                            $session['item_type'] = 'play';
                            $session['item_id'] = $playId;
                            $session->save();
                        }

                        if ($session['item_type'] == 'play') {
                            $sessionPlayId = $session['item_id'];
                            if ($playId != null  && $sessionPlayId != $playId) {
                                $session['item_id'] = $playId;
                                $session->save();
                            }
                        }

                        $play = ChBotPlay::find()->where(['id'=>$playId])->one();
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
                            'chat_id' => $callbackQuery['from']['id'],
                            'text' => $goQuestion['question'],
                        ]);
                    }

                } else {
                    $this->sendMessage([
                        'chat_id' => $message['chat']['id'],  // $message['from']['id']
                        'text' => 'Список опций',
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                                ],
                                [
                                    ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
                                ],
                            ]
                        ]),
                    ]);
                }
            }

//          phrase (чепуфраза)
            if ($action == 'phrase') {
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'в процессе', //Optional
                ]);

                if (isset($commands[1])) {
                    if ($commands[1]=='all') {  // Список сценариев
                        $plays = ChBotPhrase::find()->all();  // токамо фразы

                        $data = [];
                        foreach ($plays as $play) {
                            $row = [];
                            $row[] = ['text'=>$play['name'],'callback_data'=> 'phrase/one/' . $play['id']];
                            $data[] = $row;
                        };

                        $this->sendMessage([
                            'chat_id' => $callbackQuery['from']['id'],
                            'text' => 'Чепуфразы',
                            'reply_markup' => json_encode([
                                'inline_keyboard'=> $data
                            ]),
                        ]);



                    } elseif ($commands[1]=='one') { // play item
                        $playId = $commands[2];


                        $session = ChBotSession::find()->where(['user_id'=>$callbackQuery['from']['id']])->one();

                        if ($session == null) {
                            $session = new ChBotSession;
                            $session['user_id'] = $callbackQuery['from']['id'];
                            $session['item_type'] = 'phrase';
                            $session['item_id'] = $playId;
                            $session->save();
                        }

                        if ($session['item_type'] == 'phrase') {
                            $sessionPlayId = $session['item_id'];
                            if ($playId != null  && $sessionPlayId != $playId) {
                                $session['item_id'] = $playId;
                                $session->save();
                            }
                        }

                        $play = ChBotPhrase::find()->where(['id'=>$playId])->one();
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
                            'chat_id' => $callbackQuery['from']['id'],
                            'text' => $goQuestion['question'],
                        ]);
                    }

                } else {
                    $this->sendMessage([
                        'chat_id' => $message['chat']['id'],  // $message['from']['id']
                        'text' => 'Список опций',
                        'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                                [
                                    ['text'=>"Чепусценка",'callback_data'=> 'play/all'],
                                ],
                                [
                                    ['text'=>"Чепуфраза",'callback_data'=> 'phrase/all'],
                                ],
                            ]
                        ]),
                    ]);

                }


            }

//          Опции    - пока пусто
            if ($action == 'options') {    // options / pointOfView / section / mode
                $this->answerCallbackQuery([
                    'callback_query_id' => $callbackQuery['id'], //require
                    'text' => 'ответ получен', //Optional
                ]);
            }
        }
        return 'ok';
    }








    public function sendMessage(array $option){
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
