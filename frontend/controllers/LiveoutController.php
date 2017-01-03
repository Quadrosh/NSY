<?php

namespace frontend\controllers;

use common\models\LiveOutEx;
use frontend\models\Page;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class LiveoutController extends FrontController
{
    public $layout = 'liveout';
    public function actionIndex()
    {
        $this->view->params['bodyclass'] = 'listofall';
        $pageID = 3;
        $metapage = Page::findOne($pageID);
        $sunitem =  1;
        $this->view->params['sunitem'] = $sunitem;

        $liveouts = LiveOutEx::find()->asArray()->where(['>','view_order', 0])->orderBy('view_order')->all();
        $this->view->params['liveouts'] = $liveouts;

        $this->view->params['meta'] = $metapage;
        Url::remember();
        return $this->render('index');
    }
    public function actionWarn($id)
    {

        $sunitem =  1;
        $this->view->params['sunitem'] = $sunitem;
        $this->view->params['bodyclass'] = 'warning';

        $liveout = LiveOutEx::find()->where(['id'=>$id])->one();
        $this->view->params['meta']['title'] = 'Проживание - ' . $liveout->ex_name;
        $this->view->params['meta']['description'] = 'Упражнение - '. $liveout->ex_description ;
        $this->view->params['meta']['keywords'] = $liveout->ex_description;
        return $this->render('warn', ['liveout'=> $liveout]);
    }

    public function actionStep($id, $stepnum)
    {
        $sunitem =  1;
        $this->view->params['sunitem'] = $sunitem;
        $this->view->params['bodyclass'] = 'exercise';

        $liveout = LiveOutEx::find()->where(['id'=>$id])->one();
        $this->view->params['meta']['title'] = 'Проживание - ' . $liveout->ex_name;
        $this->view->params['meta']['description'] = 'Упражнение - '. $liveout->ex_description ;
        $this->view->params['meta']['keywords'] = $liveout->ex_description;


        $steps = $liveout->steps;
        ArrayHelper::multisort($steps,['step_number'],[SORT_ASC]);

        $laststep = 1;
        foreach ($steps as $step) {
            if ($laststep < $step['step_number']) {
                $laststep = $step['step_number'];
            }
        }

        $currentstep = $steps[$stepnum -1];

        return $this->render('step', ['liveout'=> $liveout, 'currentstep'=>$currentstep, 'laststep'=>$laststep]);
    }

    public function actionThnx($id)
    {

        $this->view->params['sunitem'] = 1;
        $this->view->params['bodyclass'] = 'thank_you';

        $liveout = LiveOutEx::find()->where(['id'=>$id])->one();
        $this->view->params['meta']['title'] = 'Проживание - ' . $liveout->ex_name;
        $this->view->params['meta']['description'] = 'Упражнение - '. $liveout->ex_description ;
        $this->view->params['meta']['keywords'] = $liveout->ex_description;
        return $this->render('thnx', ['liveout'=> $liveout]);
    }

    public function actionWhyItWorks()
    {
        $this->view->params['sunitem'] = 1;
        $this->view->params['bodyclass'] = 'what_is';
        $this->view->params['meta']['title'] = 'Проживание - почему это работает';
        $this->view->params['meta']['description'] = 'Почему работают упражнения проживание, принцип действия';
        $this->view->params['meta']['keywords'] = 'Проживание, переживание, психологические упражнения';
        return $this->render('whyitworks');
    }

    public function actionRestricted()
    {
        $this->view->params['sunitem'] = 1;
        $this->view->params['bodyclass'] = 'what_is';
        $this->view->params['meta']['title'] = 'Ограничение';
        $this->view->params['meta']['description'] = 'Наше Счастье - Ограничение';
        $this->view->params['meta']['keywords'] = 'Ограничение';
        return $this->render('restricted');
    }



}
