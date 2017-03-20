<?php
namespace frontend\controllers;

use common\models\Feedback;
use common\models\FeedbackForm;
use common\models\Pages;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends FrontController
{
    public $sunMenuItem;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->sunMenuItem = 1;
        $pageID = 1;
        $metapage = Pages::findOne($pageID);
        $this->view->params['meta'] = $metapage;
        $this->view->params['sunitem'] =  $this->sunMenuItem ;
        $this->layout = 'main';
        $sunitem =  $this->sunMenuItem;
        return $this->render('index', [
            'sunitem'=> $sunitem,
        ] );
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Авторизация';
        $this->view->params['meta']['description'] = 'Вход зарегистрированного пользователя';
        $this->view->params['meta']['keywords'] = 'регистрация, авторизация';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Url::previous());
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Feedback
     */
    public function actionFeedback()
    {
        $master = Yii::$app->request->get('to');
        $session2mail = Yii::$app->request->get('session');
        $masterEmail = function($hrurl){
            if ($hrurl == 'ml') {
                return 'nashe-schastye@yandex.ru';  //nashe-schastye@yandex.ru
            }
            if ($hrurl == 'ishe') {
                return 'quadrosh@gmail.com';
            }
        };

        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Обратная связь';
        $this->view->params['meta']['description'] = 'Связаться с нами';
        $this->view->params['meta']['keywords'] = 'обратная связь';
        $feedback = new Feedback();

        if ($feedback->load(Yii::$app->request->post()) && $feedback->save()) {
            if ($feedback->sendEmail($masterEmail($master),'заявка Наше Счастье, '.$session2mail)) {
                Yii::$app->session->setFlash('success', 'Сообщение отправлено. <br> Мы свяжемся с Вами в ближайшее время.');
            } else {
                Yii::$app->session->setFlash('error', 'Во время отправки произошла ошибка, попробуйте еще раз.');
            }
        }
            return $this->render('feedbackForm',['model'=>$feedback]);

    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Регистрация нового пользователя
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Регистрация';
        $this->view->params['meta']['description'] = 'Регистрация нового пользователя';
        $this->view->params['meta']['keywords'] = 'регистрация, авторизация';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - Сброс пароля';
        $this->view->params['meta']['description'] = 'Сброс пароля';
        $this->view->params['meta']['keywords'] = 'Сброс пароля, авторизация';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Проверьте свой email.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Извините, мы не можем сбросить пароль для данного email адреса.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        $this->layout = 'login';
        $this->view->params['sunitem'] = 1;
        $this->view->params['meta']['title'] = 'Наше Счастье - изменение пароля';
        $this->view->params['meta']['description'] = 'Изменение пароля';
        $this->view->params['meta']['keywords'] = ' пароль, авторизация';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Пароль был изменен.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
