<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="live_out" class="manifestor middleblue">
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните следующие поля для регистрации:</p>

    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <div class= " regbox clearfix anyhide"  >

                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-submit">
                        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn nxt', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
</section>
