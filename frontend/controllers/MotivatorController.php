<?php


namespace frontend\controllers;


use common\models\Motivator;
use frontend\models\Page;
use yii\BaseYii;
use Yii;

class MotivatorController extends FrontController
{
    public $sunMenuItem;

    public function actionList()
    {
        $pageID = 2;
        $metapage = Page::findOne($pageID);
        $this->sunMenuItem = 2;
        $sunitem =  $this->sunMenuItem;
        $this->layout = 'motivator';
        $this->view->params['meta'] = $metapage;

        $catMotivatorsData = Motivator::find()->asArray()->where(['list_section'=>'1'])->all();
        $catMotivators = $this->getList($catMotivatorsData);
        $this->view->params['catMotivators'] = $catMotivators;

        $proMotivatorsData = Motivator::find()->where(['list_section'=>'2'])->all();
        $proMotivators = $this->getList($proMotivatorsData);
        $this->view->params['proMotivators'] = $proMotivators;

        $cityMotivatorsData = Motivator::find()->where(['list_section'=>'3'])->all();
        $cityMotivators = $this->getList($cityMotivatorsData);
        $this->view->params['cityMotivators'] = $cityMotivators;

        return $this->render('index', ['sunitem'=> $sunitem]);

    }
    private function getList($data)
    {
        $list = [];
        foreach ($data as $item ) {
            $list[$item['list_num']]['list_name'] = $item['list_name'];
            if ($item['position'] == 0) {
                $list[$item['list_num']]['i'] = $item['hrurl'];
            }
            if ($item['position'] == 1) {
                $list[$item['list_num']]['you'] = $item['hrurl'];
            }
        }
        ksort($list);
        return $list;
    }
    public function actionShow()
    {
        $this->layout = 'motivator';
        $metapage = Page::findOne(2);
        $this->view->params['meta'] = $metapage;


        $this->sunMenuItem = 2;
        $sunitem =  $this->sunMenuItem;
        $pagename = Yii::$app->request->get('pagename');
        $motivator = Motivator::find()->where(['hrurl'=>$pagename])->one();
        $quotes = $motivator->mLines;
//        debug($motivator);
        $this->view->params['motivator'] = $motivator;
        $this->view->params['quotes'] = $quotes;



        return $this->render('view', ['motivator'=> $motivator, 'quotes'=>$quotes]);
    }

}