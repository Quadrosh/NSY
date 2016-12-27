<?php

namespace frontend\controllers;

class MasterController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPage()
    {
        return $this->render('page');
    }

}
