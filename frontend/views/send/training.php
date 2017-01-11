<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = $master['name'].' '.$master['last_name'] .'<br>'.$session;

?>

<section id="live_out" class="manifestor middleblue">
    <div class="site-login  ">
        <p>Отправить заявку:</p>
        <h1><?= $this->title ?></h1>
        <p><?= $training->city ?>, <?= $training->t_when ?></p>


        <div class="row">
            <div class="col-sm-6 col-sm-push-3">
                <div class= " regbox clearfix anyhide"  >
                    <?php if (Yii::$app->session->hasFlash('sussess')) {
                        echo Yii::$app->session->setFlash('sussess');
                    } ?>

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
<!--                    --><?//= $form->field($model, 'contacts')->textInput(['maxlength' => true]) ?>


                    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>



                    <div class="form-submit">
                        <?= Html::submitButton('Отправить', ['class' => 'btn nxt', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                                    <div class="col-sm-12">
                                        <?= Html::a('Вернуться на сайт', [\yii\helpers\Url::previous()],['class'=>'reglink']) ?>
                                    </div>


                </div>


            </div>
        </div>
    </div>
</section>
