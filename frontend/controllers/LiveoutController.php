<?php

namespace frontend\controllers;

use common\models\LiveOutEx;
use frontend\models\Page;

class LiveoutController extends FrontController
{
    public function actionIndex()
    {
        $pageID = 3;
        $metapage = Page::findOne($pageID);
        $sunitem =  1;
        $this->view->params['sunitem'] = $sunitem;

        $liveouts = LiveOutEx::find()->asArray()->all();
        $this->view->params['liveouts'] = $liveouts;

        $this->layout = 'liveout';
        $this->view->params['meta'] = $metapage;
        return $this->render('index');
    }

    public function actionShow()
    {
        return $this->render('show');
    }

    public function actionThnx()
    {
        return $this->render('thnx');
    }

    public function actionWarn()
    {
        return $this->render('warn');
    }

}
