<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сброс пароля';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="live_out" class="manifestor middleblue">
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста введите email, указанный при регистрации. <br> Ссылка для сброса пароля будет выслана на этот адрес.</p>

    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <div class= " regbox clearfix anyhide"  >
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-submit">
                    <?= Html::submitButton('Отправить', ['class' => 'btn nxt']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
</section>