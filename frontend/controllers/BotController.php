<?php

namespace frontend\controllers;

use common\models\Masters;
use common\models\Pages;
use yii\helpers\Url;

class BotController extends \yii\web\Controller
{
    public function actionDialog()   //http://nsy.dev/475062491AAGxkvyWyk0xfbZzv5bKGZcFkaftHPTNEZQ
    {
        echo 'here';
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
