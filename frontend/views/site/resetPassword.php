<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Сброс пароля';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="live_out" class="manifestor middleblue">
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста введите новый пароль:</p>

    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <div class= " regbox clearfix anyhide"  >
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                    <div class="form-submit">
                        <?= Html::submitButton('Сохранить', ['class' => 'btn nxt']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
</section>