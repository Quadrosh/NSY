<?php

namespace frontend\controllers;

use common\models\Masters;
use common\models\Pages;

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

        $masters = Masters::find()->all();
        $this->view->params['masters'] = $masters;
        return $this->render('index', ['masters'=> $masters]);
    }

    public function actionPage()
    {

        $this->view->params['sunitem'] = 1;
        $this->view->params['bodyclass'] = 'library';
        $pagename = \Yii::$app->request->get('hrurl');
        $master = Masters::find()->where(['hrurl'=>$pagename])->one();

        $this->view->params['meta'] = $master ;
//        $this->view->params['meta']['description'] = $master['name'].' '.$master['last_name'] ;
//        $this->view->params['meta']['keywords'] = $master['name'].' '.$master['last_name'] ;
//        $this->view->params['meta']['promolink'] = $master['promolink'];
//        $this->view->params['meta']['promoname'] = $master['promoname'];
//        $this->view->params['meta']['sendtopage'] = $master['sendtopage'];
//        $this->view->params['meta']['imagelink'] = $master['imagelink'];
//        $this->view->params['meta']['imagelink_alt'] = $master['imagelink_alt'];

        $professions = $master->professions;
        $numbers = $master->numbers;
        $sessions = $master->sessions;

        return $this->render('page',['master'=> $master, 'numbers'=> $numbers, 'professions'=> $professions, 'sessions'=> $sessions]);
    }

}
