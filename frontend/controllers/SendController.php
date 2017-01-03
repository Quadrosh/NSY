<?php

namespace frontend\controllers;

use common\models\Feedback;
use common\models\Masters;
use Yii;
use yii\helpers\Url;

class SendController extends FrontController
{


    public function actionFeedback()
    {
        return $this->render('feedback');
    }


        /**
         * Feedback to master
         */
        public function actionTo()
    {
        $masterHrurl = Yii::$app->request->get('to');
        $master = Masters::find()->where(['hrurl'=>$masterHrurl])->one();
        $session2mail = Yii::$app->request->get('session');

        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Обратная связь';
        $this->view->params['meta']['description'] = 'Связаться с нами';
        $this->view->params['meta']['keywords'] = 'обратная связь';
        $feedback = new Feedback();
        $feedback->to_master_id = $master['id'];
        if (!Yii::$app->user->isGuest) {
            $feedback->user_id = Yii::$app->user->id;
        } else {
            $feedback->user_id = 'not set';
        }


        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($master->email,'заявка Наше Счастье, '.$session2mail)) {
                Yii::$app->session->setFlash('success', 'Ваша заявка отправлена. <br> Мы свяжемся с Вами в ближайшее время.');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
                return $this->render('to',[
                    'model' => $feedback,
                    'session' => $session2mail,
                    'master' => $master
                ]);
            }
        } else {
            return $this->render('to',[
                'model' => $feedback,
                'session' => $session2mail,
                'master' => $master
            ]);
        };


    }


}
