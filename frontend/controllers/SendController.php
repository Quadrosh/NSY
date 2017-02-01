<?php

namespace frontend\controllers;

use common\models\Feedback;
use common\models\Masters;
use common\models\Trainings;
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
        $feedback->contacts = $master->name.' '.$master->last_name.' '.$session2mail;
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
            Yii::$app->session->setFlash('error', 'Во время сохранения произошла ошибка, попробуйте еще раз.');
//            $errors = $feedback->getErrors();
//            debug($errors);die;
            return $this->render('to',[
                'model' => $feedback,
                'session' => $session2mail,
                'master' => $master
            ]);
        }
    }

    /**
     * Training order
     */
    public function actionTraining()
    {
        $masterHrurl = Yii::$app->request->get('to');
        $master = Masters::find()->where(['hrurl' => $masterHrurl])->one();
        $trainingDate = Yii::$app->request->get('training');
        $training = Trainings::find()->where(['date'=>$trainingDate, 'master_id'=>$master->id])->one();

        $session2mail = $training->pagehead;
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Обратная связь';
        $this->view->params['meta']['description'] = 'Связаться с нами';
        $this->view->params['meta']['keywords'] = 'обратная связь';
        $feedback = new Feedback();
        $feedback->to_master_id = $master['id'];
        $feedback->contacts = $master->name.' '.$master->last_name.' '. $training->date.' '.$training->city.' '.$training->pagehead;
        if (!Yii::$app->user->isGuest) {
            $feedback->user_id = Yii::$app->user->id;
        } else {
            $feedback->user_id = 'not set';
        }

        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($master->email, 'заявка Наше Счастье, ' .$training->t_when.' '. $session2mail)) {
                Yii::$app->session->setFlash('success', 'Ваша заявка отправлена. <br> Мы свяжемся с Вами в ближайшее время.');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
                return $this->render('training', [
                    'model' => $feedback,
                    'session' => $session2mail,
                    'master' => $master,
                    'training' => $training
                ]);
            }
        } else {
            return $this->render('training', [
                'model' => $feedback,
                'session' => $session2mail,
                'master' => $master,
                'training' => $training
            ]);
        }
    }

    /**
     * Training order
     */
    public function actionQuick()
    {
        $data = Yii::$app->request->post('Feedback');

        $feedback = new Feedback();
        $feedback->name = $data['name'];
        $feedback->phone = $data['phone'];
        $feedback->to_master_id = $data['to_master_id'];
        $feedback->contacts = $data['contacts'];
        $feedback->text =  'Быстрая заявка';
        $feedback->email = 'no-email@that.form';
        $feedback->city = 'Быстрая заявка';
        $master = Masters::find()->where(['id'=>$feedback->to_master_id])->one();

        if (!Yii::$app->user->isGuest) {
            $feedback->user_id = Yii::$app->user->id;
        } else {
            $feedback->user_id = 'not set';
        }


        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($master->email, 'заявка Наше Счастье, ' .$data['contacts'])) {
                Yii::$app->session->setFlash('success', 'Ваша заявка отправлена. <br> Мы свяжемся с Вами в ближайшее время.');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
                return $this->redirect(Url::previous());
            }
        } else {
            Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз. Или отправьте заявку в свободной форме на nashe-schastye@yandex.ru');
            return $this->redirect(Url::previous());
        }

    }
    /**
     * Discount request
     */
    public function actionDiscount()
    {
        $masterHrurl = Yii::$app->request->get('to');
        $master = Masters::find()->where(['hrurl' => $masterHrurl])->one();
        $trainingDate = Yii::$app->request->get('training');
        $training = Trainings::find()->where(['date'=>$trainingDate, 'master_id'=>$master->id])->one();

        $session2mail = $training->pagehead;
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Обратная связь';
        $this->view->params['meta']['description'] = 'Связаться с нами';
        $this->view->params['meta']['keywords'] = 'обратная связь';
        $feedback = new Feedback();
        $feedback->to_master_id = $master['id'];
        $feedback->contacts = 'Скидка '.$training->discount.'% '. $master->name.' '.$master->last_name.' '. $training->date.' '.$training->city.' '.$training->pagehead;
        if (!Yii::$app->user->isGuest) {
            $feedback->user_id = Yii::$app->user->id;
        } else {
            $feedback->user_id = 'not set';
        }

        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($master->email, 'заявка Наше Счастье, ' .$training->t_when.' '. $session2mail)) {
                Yii::$app->session->setFlash('success', 'Ваша заявка отправлена. <br> Мы свяжемся с Вами в ближайшее время.');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
                return $this->render('discount', [
                    'model' => $feedback,
                    'session' => $session2mail,
                    'master' => $master,
                    'training' => $training
                ]);
            }
        } else {
            return $this->render('discount', [
                'model' => $feedback,
                'session' => $session2mail,
                'master' => $master,
                'training' => $training
            ]);
        }
    }
    /**
     * Help request
     */
    public function actionHelp()
    {
        $masterHrurl = Yii::$app->request->get('to');
        $master = Masters::find()->where(['hrurl' => $masterHrurl])->one();
        $trainingDate = Yii::$app->request->get('training');
        $training = Trainings::find()->where(['date'=>$trainingDate, 'master_id'=>$master->id])->one();

        $session2mail = $training->pagehead;
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Обратная связь';
        $this->view->params['meta']['description'] = 'Связаться с нами';
        $this->view->params['meta']['keywords'] = 'обратная связь';
        $feedback = new Feedback();
        $feedback->to_master_id = $master['id'];
        $feedback->contacts = $training->action_1_name.' / Заявка со страницы '. $training->date.' '.$training->city.' '.$training->pagehead . ' / '. $master->name.' '.$master->last_name ;
        if (!Yii::$app->user->isGuest) {
            $feedback->user_id = Yii::$app->user->id;
        } else {
            $feedback->user_id = 'not set';
        }

        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($master->email, 'заявка Наше Счастье, ' .$training->t_when.' '. $session2mail)) {
                Yii::$app->session->setFlash('success', 'Ваша заявка отправлена. <br> Мы свяжемся с Вами в ближайшее время.');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
                return $this->render('help', [
                    'model' => $feedback,
                    'session' => $session2mail,
                    'master' => $master,
                    'training' => $training
                ]);
            }
        } else {
            return $this->render('help', [
                'model' => $feedback,
                'session' => $session2mail,
                'master' => $master,
                'training' => $training
            ]);
        }
    }
    /**
     * Free action
     */
    public function actionAction()
    {
        $masterHrurl = Yii::$app->request->get('to');
        $master = Masters::find()->where(['hrurl' => $masterHrurl])->one();
        $trainingDate = Yii::$app->request->get('training');
        $training = Trainings::find()->where(['date'=>$trainingDate, 'master_id'=>$master->id])->one();

        $session2mail = $training->pagehead;
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Обратная связь';
        $this->view->params['meta']['description'] = 'Связаться с нами';
        $this->view->params['meta']['keywords'] = 'обратная связь';
        $feedback = new Feedback();
        $feedback->to_master_id = $master['id'];
        $feedback->contacts = $training->action_2_name.' / Заявка со страницы '. $training->date.' '.$training->city.' '.$training->pagehead . ' / '. $master->name.' '.$master->last_name ;
        if (!Yii::$app->user->isGuest) {
            $feedback->user_id = Yii::$app->user->id;
        } else {
            $feedback->user_id = 'not set';
        }

        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($master->email, 'заявка Наше Счастье, ' .$training->t_when.' '. $session2mail)) {
                Yii::$app->session->setFlash('success', 'Ваша заявка отправлена. <br> Мы свяжемся с Вами в ближайшее время.');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
                return $this->render('action2', [
                    'model' => $feedback,
                    'session' => $session2mail,
                    'master' => $master,
                    'training' => $training
                ]);
            }
        } else {
            return $this->render('action2', [
                'model' => $feedback,
                'session' => $session2mail,
                'master' => $master,
                'training' => $training
            ]);
        }
    }

}
