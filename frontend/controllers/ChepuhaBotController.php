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
        if (in_array($action->id, ['dialog','dialog-dev'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function actionDialogDEV()
    {
        $message = Yii::$app->request->post('message'); // array
        $this->sendMessage([
            'chat_id' => $message['chat']['id'],  // $message['from']['id']
            'parse_mode' => 'html',
            'text' =>
                'Извините, я на тех-обслуживании 5-10 мин',

        ]);
        return [
            'message' => 'ok',
            'code' => 200,
        ];
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

        $cleanInput = Json::decode($input);
        $updateId = isset($cleanInput['update_id'])?$cleanInput['update_id']:null;
        $message = isset($cleanInput['message'])?$cleanInput['message']:null;
        $callbackQuery = isset($cleanInput['callback_query'])?$cleanInput['callback_query']:null;
        $inlineQuery = isset($cleanInput['inline_query'])?$cleanInput['inline_query']:null;



        Yii::info($input, 'chepuhoBot');


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
                    'is_personal' => true,
                    'results'=> Json::encode($results)
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
                    'is_personal' => true,
                    'results'=> Json::encode($results)
                ]);
            }



//           dev

//           список сцен play - все
            elseif ($inlineQuery['query'] == 'play_dev') {
                $plays = ChBotPlay::find()->orderBy('name')->all();
                $results = [];
                foreach ($plays as $play) {
                    $results[] = [
                        'type' => 'article',
                        'id' => $play['id'],
                        'title' => $play['name'],
                        'description' => $play['description'],
                        'input_message_content'=>[
                            'message_text'=> 'play_dev/' . $play['hrurl'],
                            'parse_mode'=> 'html',
                            'disable_web_page_preview'=> true,
                        ],
                    ];
                };
                $this->answerInlineQuery([
                    'inline_query_id' => $inlineQuery['id'],
                    'is_personal' => true,
                    'results'=> Json::encode($results)
                ]);
            }

//           список сцен phrase - все
            elseif ($inlineQuery['query'] == 'phrase_dev'){
                $plays = ChBotPhrase::find()->orderBy('name')->all();
                $results = [];
                foreach ($plays as $play) {
                    $results[] = [
                        'type' => 'article',
                        'id' => $play['id'],
                        'title' => $play['name'],
                        'description' => $play['description'],
                        'input_message_content'=>[
                            'message_text'=> 'phrase_dev/' . $play['hrurl'],
                            'parse_mode'=> 'html',
                            'disable_web_page_preview'=> true,
                        ],
                    ];
                };
                $this->answerInlineQuery([
                    'inline_query_id' => $inlineQuery['id'],
                    'is_personal' => true,
                    'results'=> Json::encode($results)
                ]);
            }

//           остальные $inlineQuery['query']
            else {

                $plays =  ChBotPlay::find()->where('name != :value', ['value' => 'work'])->orderBy('name')->all();
                $phrases = ChBotPhrase::find()->where('name != :value', ['value' => 'work'])->orderBy('name')->all();
                $results = [];

                foreach ($plays as $play) {
                    $results[] = [
                        'type' => 'article',
                        'id' => $play['id'],
                        'title' => 'чс '.$play['name'],
                        'description' => $play['description'],
                        'input_message_content'=>[
                            'message_text'=> 'play/' . $play['hrurl'],
                            'parse_mode'=> 'html',
                            'disable_web_page_preview'=> true,
                        ],
                    ];
                };

                foreach ($phrases as $phrase) {
                    $results[] = [
                        'type' => 'article',
                        'id' => '2000'.$phrase['id'],
                        'title' => 'чф '.$phrase['name'],
                        'description' => $phrase['description'],
                        'input_message_content'=>[
                            'message_text'=> 'phrase/' . $phrase['hrurl'],
                            'parse_mode'=> 'html',
                            'disable_web_page_preview'=> true,
                        ],
                    ];
                };



                $this->answerInlineQuery([
                    'inline_query_id' => $inlineQuery['id'],
                    'is_personal' => true,
                    'results'=> Json::encode($results)
                ]);
            }




            return [
                'message' => 'ok',
                'code' => 200,
            ];
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
                    $user['username'] = $message['from']['username'] ? $message['from']['username'] : 'noUsername';
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
                    'chat_id' => $message['chat']['id'],  // $message['from']['id']
                    'parse_mode' => 'html',
                    'text' =>
                        'Я - <b>Чепухо Dev</b>. '.PHP_EOL.
                        'Прервать игру можно командой /end '.PHP_EOL.
                        'Cписок опций:',
                    'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Чепусценка dev",'switch_inline_query_current_chat'=> 'play_dev'],
                            ],
                            [
                                ['text'=>"Чепуфраза dev",'switch_inline_query_current_chat'=> 'phrase_dev'],
                            ],
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

                if ($session != null) {
                    $vars = $session->vars;
                    if ($vars != null) {
                        foreach ($vars as  $var) {
                            $var->delete();
                        }
                    }
                    $use = BotUse::find()->where(['id'=>intval($session['description'])])->one();
                    $session->delete();
                    $use['done'] = 'interrupt';
                    $use->save();
                }


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

//          play_dev/hrurl     phrase_dev/hrurl
            elseif (substr($message['text'],0,9) == 'play_dev/' OR  substr($message['text'],0,11) == 'phrase_dev/'){
                $this->gameInit($message,'dev');
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

                $activeVar = ChBotSessionVars::find()
                    ->where(['session_id'=>$session['id'],'status'=>'active'])
                    ->one();
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

                $newActiveVar = ChBotSessionVars::find()
                    ->where(['session_id'=>$session['id'],'status'=>'raw'])
                    ->one();
// question
                if ($newActiveVar != null) {
                    $newActiveVar['status'] = 'active';
                    $newActiveVar->save();
                    $text = $newActiveVar['question'];
                    $vars = $session->vars;
                    foreach ($vars as  $var) {  // замена упоминаний переменных на них самих
                        $text = str_replace('#'.$var['item_var_id'],$var['value'], $text);
                    }
                    if ($session['user_response']=='dev') {   // dev question
                        $text = '#'.$newActiveVar['item_var_id'].' '.$text;
                    }
                    $this->sendMessage([
                        'chat_id' => $message['from']['id'],
                        'text' => $text.'?',
                    ]);
                    return 'ok';
                }

// final text
                if ($newActiveVar == null
                    && ChBotSessionVars::find()
                        ->where(['session_id'=>$session['id'],'status'=>'done'])
                        ->one()) {

                    if ($session['item_type']=='play' ) {
                        $play = ChBotPlay::find()->where(['id'=>$session['item_id']])->one();
                    }
                    elseif ($session['item_type']=='phrase'){
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
                    $user['username'] = $message['from']['username'] ? $message['from']['username'] : 'noUsername';
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




    private function gameInit(array $message, $mode = null)
    {
        $commands = explode('/', $message['text']);
        $type = $commands[0];
        if ($type == 'play_dev') {
            $type ='play';
        } elseif ($type =='phrase_dev'){
            $type ='phrase';
        }

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
            $user['username'] = $message['from']['username'] ? $message['from']['username'] : 'noUsername';
            $user['language_code'] = $message['from']['language_code'];
            $user->save();
        }

//  18+
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
        if (isset($user['id'])) {
            $use['user_id'] = $user['id'];
        } else {
            Yii::info('no_user_id', 'chepuhoBot');
            Yii::info($user, 'chepuhoBot');
        }

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
        if ($mode == 'dev') {
            $session['user_response'] = 'dev';
        }
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
//        $chat_id = $option['chat_id'];
//        $text = urlencode($option['text']);
//        unset($option['chat_id']);
//        unset($option['text']);

        $jsonResponse = $this->curlCall(
            Yii::$app->params['totUrl'].'?tourl='.
            Yii::$app->params['patch'] .
            Yii::$app->params['chepuBotToken'].
            "/sendMessage", $option);
//        $jsonResponse = $this->curlCall(
//            Yii::$app->params['totUrl'].'?tourl='.
//            Yii::$app->params['patch'] .
//            Yii::$app->params['chepuBotToken'].
//            "/sendMessage?chat_id=".$chat_id .
//            '&text='.$text, $option);
        return $jsonResponse;
    }


    public function answerCallbackQuery(array $options = [])
    {
        $jsonResponse = $this->curlCall(
            Yii::$app->params['totUrl'].'?tourl='.
            Yii::$app->params['patch'] .
            Yii::$app->params['chepuBotToken'] .
            "/answerCallbackQuery", $options);
        return $jsonResponse;
    }


    public function answerInlineQuery(array $options = [])
    {
        $jsonResponse = $this->curlCall(
            Yii::$app->params['totUrl'].'?tourl='.
            Yii::$app->params['patch'] .
            Yii::$app->params['chepuBotToken'] .
            "/answerInlineQuery", $options);
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
            $text = 'error '.curl_error($ch);
            Yii::info($text, 'chepuhoBot');
        }
//        else {
//            $info = curl_getinfo($ch);
//            Yii::info($info, 'chepuhoBot');
//        }
        curl_close($ch);
        return $r;
    }



}

