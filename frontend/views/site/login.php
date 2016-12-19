<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="live_out" class="manifestor middleblue">
<div class="site-login  ">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните следующие поля для входа:</p>

    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <div class= " regbox clearfix anyhide"  >

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="form-submit">
                        <?= Html::submitButton('Войти', ['class' => 'btn nxt', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

                <div class="col-sm-12">
                    <?= Html::a('CБРОСИТЬ ПАРОЛЬ', ['site/request-password-reset'],['class'=>'reglink']) ?>
                </div>
                <div class="col-sm-12">
                    <?= Html::a('Зарегистрироваться', ['site/signup'],['class'=>'reglink']) ?>
                </div>

            </div>


        </div>
    </div>
</div>
</section>
