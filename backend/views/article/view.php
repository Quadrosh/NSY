<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'list_name',
            'list_num',
            'hrurl',
            'title',
            'description:ntext',
            'keywords:ntext',
            'text:ntext',
            'pagehead',
            'cat_id',
            'topimage',
            'promolink',
            'promoname',
            'imagelink',
            'imagelink_alt',
        ],
    ]) ?>

</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <h4>Image Upload</h4>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/article/upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                    'topimage'=>'Top Image',
                    'imagelink'=>'Imagelink',
                ])->label(false) ?>
                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>

                        <th>N </th>
                        <th>Head</th>
                        <th>Arrange</th>
                        <th>Image</th>
                        <th>Image Upload</th>
                        <th>Image Alt</th>
                        <th>Promolink</th>
                        <th>PromoName</th>
                        <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($sections as $section) : ?>
                        <tr data-key="14">
                            <td><?= $section['num'] ?></td>
                            <td><?= $section['head'] ?></td>
                            <td><?= $section['arrange'] ?></td>
                            <td><?= $section['image'] ?></td>
                            <td>
                                <?php $form = ActiveForm::begin([
                                    'method' => 'post',
                                    'action' => ['/articlesection/upload'],
                                    'options' => ['enctype' => 'multipart/form-data'],
                                ]); ?>
                                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                                <?= $form->field($uploadmodel, 'toModelProperty')->hiddenInput(['value'=>'image'])->label(false) ?>
                                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$section->id])->label(false) ?>
                                <?= Html::submitButton('', ['class' => 'glyphicon glyphicon-upload']) ?>
                                <?php ActiveForm::end() ?>
                            </td>
                            <td><?= $section['image_alt'] ?></td>
                            <td><?= $section['promolink'] ?></td>
                            <td><?= $section['promoname'] ?></td>

                            <td><a  href="/articlesection/update?id=<?= $section['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                                <?= Html::a('', ['/articlesection/delete', 'id' => $section['id']], [
                                    'class' => 'glyphicon glyphicon-trash',
                                    'data' => [
                                        'confirm' => 'Удалить этот пункт?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <p>
            <?= Html::a('ДОБАВИТЬ', ['articlesection/create', 'id'=>$model->id], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</section>

<div  class=" white">


    <div class=" container mt20 mb100">
        <div class="paddind_lr_20">
            <div class="row">
                <div class="col-md-10 text-center col-md-offset-1 ">
                    <h1 class="method_h mt100"><?= nl2br($model->pagehead) ?></h1>

                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <p><?= nl2br($model->text) ?></p>
                </div>
            </div>

            <div class="row">
                <?php if (isset($sections)) : ?>
                    <?php foreach ($sections as $section) : ?>
                        <section class=" white mt50">
                            <div class="row">
                                <div class="<?= $section['stylekey'] ?>">
                                    <div class="member_head <?php
                                    if ($section['arrange'] == 'right') {echo 'col-sm-8 col-sm-offset-4';};
                                    if ($section['arrange'] == 'left') {echo 'col-sm-8';};
                                    if ($section['arrange'] == 'center') {echo 'col-sm-8 col-sm-offset-2';};
                                    ?>">
                                        <h3><?= nl2br($section['head']) ?></h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <?php if (!empty($section['image'])) : ?>
                                            <div class="article_img <?php
                                            if ($section['arrange'] == 'right') {echo 'col-sm-4';};
                                            if ($section['arrange'] == 'left') {echo 'col-sm-4 col-sm-push-8';};
                                            if ($section['arrange'] == 'center') {echo 'col-sm-6 col-sm-offset-3';};
                                            ?>">
                                                <?= \yii\helpers\Html::img('/img/'.$section['image'],['alt'=>$section['image_alt']]) ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="member_head <?php
                                        if ($section['arrange'] == 'right') {echo 'col-sm-8';};
                                        if ($section['arrange'] == 'left') {echo 'col-sm-8 col-sm-pull-4';};
                                        if ($section['arrange'] == 'center') {echo 'col-sm-8 col-sm-offset-2';};
                                        ?>">
                                            <p><?= nl2br($section['text']) ?></p>
                                            <?php if (!empty($section['extra'])) : ?>
                                                <p><?= nl2br($section['extra']) ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($section['promolink'])) : ?>
                                                <div class="bottom_buttons text-center">
                                                    <?php if (substr($section['promolink'], 0, 4) == 'http') {
                                                        echo Html::a($section['promoname'], Url::to($section['promolink'], true),['class' => 'btn btn-default method_more']);
                                                    } else {
                                                        echo  Html::a($section['promoname'], ['/'. $section['promolink']], ['class' => 'btn btn-default method_more']);
                                                    } ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>