<?php

namespace frontend\controllers;

use common\models\Feedback;
use common\models\MasterNumbers;
use common\models\Masters;
use common\models\Pages;
use common\models\Trainings;
use common\models\TrainingWhy;
use yii\helpers\Url;
use Yii;

class TrainingController extends \yii\web\Controller
{
    public $layout = 'training';
    public function actionIndex()
    {
        $this->layout = 'master';
        $this->view->params['bodyclass'] = 'library';
        $pageID = 6;
        $metapage = Pages::findOne($pageID);
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta'] = $metapage;
        Url::remember();

        $trainings = Trainings::find()->orderBy(['id'=> SORT_DESC])->all();
        return $this->render('index', ['trainings'=> $trainings]);
    }

    public function actionView()
    {
        $this->view->params['bodyclass'] = 'library';
        $this->view->params['sunitem'] = 1;

        $masterHrurl = \Yii::$app->request->get('master');
        $master = Masters::find()->where(['hrurl'=>$masterHrurl])->one();
        $trainingDate = \Yii::$app->request->get('date');
        $training = Trainings::find()->where(['date'=>$trainingDate, 'master_id'=>$master->id])->one();
        $reasons = TrainingWhy::find()->where(['training_id'=>$training->id,'direction'=>'why'])->orderBy(['order_num'=>SORT_ASC])->all();
        $methods = TrainingWhy::find()->where(['training_id'=>$training->id,'direction'=>'youllsee'])->orderBy(['order_num'=>SORT_ASC])->all();
        $ifyous = TrainingWhy::find()->where(['training_id'=>$training->id,'direction'=>'ifyou'])->orderBy(['order_num'=>SORT_ASC])->all();
        $feedback = new Feedback();
        $feedback->to_master_id = $master['id'];
        $feedback->contacts = 'Сокращенная заявка на тренинг '. $training->date.' '.$training->city.' '.$training->pagehead . ' / '. $master->name.' '.$master->last_name;



        $this->view->params['meta'] = $training;
        $this->view->params['master'] = $master;
        $this->view->params['trainingdate'] = $training->date;

        $numbers = MasterNumbers::find()->where(['master_id'=>$master->id])->orderBy(['order_num'=> SORT_ASC])->all();
        Url::remember();

        return $this->render($training->view,[
            'training'=>$training,
            'numbers'=>$numbers,
            'reasons'=>$reasons,
            'methods'=>$methods,
            'ifyous'=>$ifyous,
            'feedback'=>$feedback,
            'master'=>$master
        ]);
    }

}
