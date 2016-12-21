<?php

namespace frontend\controllers;

use common\models\Happypage;

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
        $this->view->params['bodyclass'] = 'article';
        $pageID = 2;
        $metapage = Happypage::findOne($pageID);
        $this->view->params['sunitem'] = 4;
        $this->view->params['meta'] = $metapage;
        return $this->render('origin');
    }
    public function actionBiochemistry()
    {
        $happypage = Happypage::find()->asArray()->where(['>','view_order', 0])->orderBy('view_order')->all();
        return $this->render('biochemistry');
    }

    public function actionMovies()
    {
        return $this->render('movies');
    }

    public function actionEconomy()
    {
        return $this->render('economy');
    }

    public function actionHoliday()
    {
        return $this->render('holiday');
    }



    public function actionKinds()
    {
        return $this->render('kinds');
    }

    public function actionMeaning()
    {
        return $this->render('meaning');
    }

    public function actionMedicine()
    {
        return $this->render('medicine');
    }

    public function actionMuseum()
    {
        return $this->render('museum');
    }

    public function actionMusic()
    {
        return $this->render('music');
    }



    public function actionPhilosophy()
    {
        return $this->render('philisophy');
    }

    public function actionQuotes()
    {
        return $this->render('quotes');
    }

    public function actionSymbols()
    {
        return $this->render('symbols');
    }

}
