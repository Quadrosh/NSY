<?php

namespace frontend\controllers;

use common\models\Pages;
use common\models\Quotepad;
use common\models\QuotepadImg;
use frontend\models\Page;

class QuotepadController extends \yii\web\Controller
{
    public $sunMenuItem;
    public $layout = 'quotepad';
    public function actionIndex()
    {
        $pageID = 7;
        $this->layout = 'motivator';
        $this->sunMenuItem = 1;
        $this->view->params['sunitem'] = $this->sunMenuItem;
        $this->view->params['meta'] = Pages::findOne($pageID);

        $quotepads = Quotepad::find()->all();
        return $this->render('index', ['quotepads'=> $quotepads]);
    }

    public function actionView()
    {

        $id = \Yii::$app->request->get('id');
        $quotepad = Quotepad::find()->where(['id'=>$id])->one();
        $quotepadImgs = QuotepadImg::find()->where(['quotepad_id'=>$quotepad->id])->orderBy('order_weight')->all();
        $this->sunMenuItem = 1;
        $this->view->params['sunitem'] = $this->sunMenuItem;
        $this->view->params['meta'] = $quotepad;
        return $this->render($quotepad->view, [
            'quotepad'=> $quotepad,
            'quotepadImages'=> $quotepadImgs,
        ]);
    }

}
