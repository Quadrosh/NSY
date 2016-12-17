<?php

namespace frontend\controllers;

use common\models\LiveOutEx;
use frontend\models\Page;
use yii\helpers\ArrayHelper;

class LiveoutController extends FrontController
{
    public function actionIndex()
    {
        $this->layout = 'liveout';
        $this->view->params['bodyclass'] = 'listofall';
        $pageID = 3;
        $metapage = Page::findOne($pageID);
        $sunitem =  1;
        $this->view->params['sunitem'] = $sunitem;

        $liveouts = LiveOutEx::find()->asArray()->all();
        $this->view->params['liveouts'] = $liveouts;

        $this->view->params['meta'] = $metapage;
        return $this->render('index');
    }
    public function actionWarn($id)
    {
        $this->layout = 'liveout';

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
        $this->layout = 'liveout';
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
        $this->layout = 'liveout';

        $sunitem =  1;
        $this->view->params['sunitem'] = $sunitem;
        $this->view->params['bodyclass'] = 'thank_you';

        $liveout = LiveOutEx::find()->where(['id'=>$id])->one();
        $this->view->params['meta']['title'] = 'Проживание - ' . $liveout->ex_name;
        $this->view->params['meta']['description'] = 'Упражнение - '. $liveout->ex_description ;
        $this->view->params['meta']['keywords'] = $liveout->ex_description;
        return $this->render('thnx', ['liveout'=> $liveout]);
    }



}
