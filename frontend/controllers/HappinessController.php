<?php

namespace frontend\controllers;

use common\models\Happypage;
use common\models\Happysection;

class HappinessController extends FrontController
{
    public $layout = 'happiness';

    public function actionIndex()
    {
        $this->view->params['bodyclass'] = 'trueblack';
        $pageID = 1;
        $metapage = Happypage::findOne($pageID);
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        return $this->render('index');
    }
    public function actionOrigin()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 2;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);
    }
    public function actionMeaning()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 3;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);
    }
    public function actionBiochemistry()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 4;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);
    }
    public function actionKinds()
    {
        $this->view->params['bodyclass'] = 'trueblack';
        $pageID = 5;
        $metapage = Happypage::findOne($pageID);
        $this->view->params['sunitem'] = 12;
        $this->view->params['meta'] = $metapage;
        return $this->render('index');
    }
    public function actionBody()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 6;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 12;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('kinds', ['sections'=> $sections]);
    }
    public function actionSoul()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 7;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 12;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('kinds', ['sections'=> $sections]);
    }
    public function actionLife()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 8;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 12;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('kinds', ['sections'=> $sections]);
    }
    public function actionQuotes()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 9;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('quotes', ['sections'=> $sections]);

    }
    public function actionMedicine()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 10;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('kinds', ['sections'=> $sections]);
    }
    public function actionPhilosophy()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 11;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('philisophy', ['sections'=> $sections]);
    }
    public function actionEconomy()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 12;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);
    }
    public function actionSymbols()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 13;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);
    }
    public function actionHoliday()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 14;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);

    }
    public function actionMuseum()
    {
        $this->view->params['bodyclass'] = 'happiness';
        $pageID = 15;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        $this->on(\yii\web\Controller::EVENT_AFTER_ACTION, function($event){
            \common\modules\statistics\CountNs::init();
        });
        return $this->render('section', ['sections'=> $sections]);
    }
    public function actionAll()
    {
        $this->layout = 'happinessold';
        $this->view->params['bodyclass'] = 'article';
        $pageID = 16;
        $metapage = Happypage::findOne($pageID);
        $sections = $metapage->sections;
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta'] = $metapage;
        return $this->render('all', ['sections'=> $sections]);
    }

}
