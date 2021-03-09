<?php

namespace frontend\controllers;

use common\models\Masters;
use common\models\Pages;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;

class MasterController extends \yii\web\Controller
{
    public $layout = 'master';
    public function actionIndex()
    {
        $this->view->params['bodyclass'] = 'library';
        $pageID = 5;
        $metapage = Pages::findOne($pageID);
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta'] = $metapage;

        $masters = Masters::find()
            ->where(['status'=>Masters::STATUS_ACTIVE])
            ->all();
        $this->view->params['masters'] = $masters;
        return $this->render('index', ['masters'=> $masters]);
    }

    public function actionPage()
    {

        $this->view->params['sunitem'] = 1;
        $this->view->params['bodyclass'] = 'library';
        $pagename = \Yii::$app->request->get('hrurl');
        $master = Masters::find()
            ->where([
                'hrurl'=>$pagename,
                'status'=>Masters::STATUS_ACTIVE,
            ])
            ->one();
        if (!$master) {
            throw new NotFoundHttpException("Страница не найдена");
        }

        $this->view->params['meta'] = $master;

        $professions = $master->professions;
        $numbers = $master->numbers;
        $sessions = $master->sessions;
        Url::remember();

        return $this->render('page',[
            'master'=> $master,
            'numbers'=> $numbers,
            'professions'=> $professions,
            'sessions'=> $sessions
        ]);
    }

}
