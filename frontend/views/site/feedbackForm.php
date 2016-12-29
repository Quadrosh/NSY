<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Обратная связь';

?>

<section id="live_out" class="manifestor middleblue">
<div class="site-login  ">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Отправить сообщение:</p>

    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <div class= " regbox clearfix anyhide"  >
                <?php if (Yii::$app->session->hasFlash('sussess')) {
                    echo Yii::$app->session->setFlash('sussess');
                } ?>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'contacts')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>



                    <div class="form-submit">
                        <?= Html::submitButton('Отправить', ['class' => 'btn nxt', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

<!--                <div class="col-sm-12">-->
<!--                    --><?//= Html::a('CБРОСИТЬ ПАРОЛЬ', ['site/request-password-reset'],['class'=>'reglink']) ?>
<!--                </div>-->


            </div>


        </div>
    </div>
</div>
</section>
