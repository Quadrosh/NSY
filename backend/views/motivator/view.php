<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Motivator */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Motivators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motivator-view">

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
    <?php
    //адаптация в человечий язык секции меню для view
    function getSection ($data)
    {
        if ($data == 0) {
            return 'Unpublished';
        }
        if ($data == 1) {
            return 'By Category';
        }
        if ($data == 2) {
            return 'Professional';
        }
        if ($data == 3) {
            return 'City';
        }

    }
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'list_section',
            [
                'attribute'=>'list_section',
                'value'=> getSection($model->list_section),
                'format'=> 'html',
            ],

            'list_num',
            'list_name',
            [
                'attribute'=>'position',
                'value'=> $model->position ? '<span class="text-success">ТЫ</span>' : '<span class="text-danger">Я</span>',
                'format'=> 'html',
            ],
            [
                'attribute'=> 'cat_id',
                'value' => \common\models\Category::find()->where(['id'=>$model['cat_id']])->one()->name,
            ],
            'hrurl:url',
            'title',
            'description:ntext',
            'keywords:ntext',
            'pagehead',
            'section_name',
            'section_color',
            'background',
            'imagelink',
            'imagelink_alt',
            'imagelink2',
            'imagelink2_alt',
            'sendtopage',
            'promolink',
            'promoname',
        ],
    ]) ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <h4>Image Upload</h4>
                    <?php $form = ActiveForm::begin([
                        'method' => 'post',
                        'action' => ['/motivator/upload'],
                        'options' => ['enctype' => 'multipart/form-data'],
                    ]); ?>
                    <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                        'background'=>'Background Image',
                        'imagelink'=>'Imagelink',
                        'imagelink2'=>'Imagelink 2',
                    ])->label(false) ?>
                    <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                    <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                    <?= Html::submitButton('Upload', ['class' => 'btn btn-danger']) ?>
                    <?php ActiveForm::end() ?>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

    </section>
    <section id="<?= $motivator->section_name; ?>"
        <?php if (isset($motivator->background)) : ?>
        style=" background-image: url(<?= \yii\helpers\Url::to('/img/'. $motivator->background); ?>);"
        <?php endif; ?>
             class="manifestor <?= $motivator->section_color; ?>">
        <h1 id="pagename" class=" bigname" ><?= $motivator->pagehead; ?></h1>
        <div class=" container mt120 mb140">
            <div  class="m_textbox">
                <div class="row">
<?php $b =0; $i = 0; $bootSm=0;  foreach ($quotes as $quote) : ?>


<?php   if ($b == 0 && $i==0 ) : //первый ?>
<div id="box<?= $quote['block_num'] ?>" class="m_box anishow <?= $quote['mbox_style']; ?>">
    <p >
    <span id="<?= 'q'.$quote['block_num'].'_'.$quote['quote_num']; ?>" class="anishow <?= $quote['line_style']; ?>"><?= $quote['text']; ?></span>
<?php $b = $quote['block_num']; $i = $quote['quote_num']; ?>
<?php endif; // END первый ?>
<?php   if ($quote['block_num'] == $b && $quote['quote_num']> $i) : //new quote same block ?>
    <span id="<?= 'q'.$quote['block_num'].'_'.$quote['quote_num']; ?>" class="anishow <?= $quote['line_style']; ?>"><?= $quote['text']; ?></span>
<?php $i = $quote['quote_num']; ?>
<?php endif; // END new quote same block ?>
<?php   if ($quote['block_num'] > $b && $quote['quote_num']== 1) : //new block  ?>
    </p>
</div>
<?php  // bootstrap row iterator
if ($bootSm == 12 ) {
    echo "</div><div class=\"row\">";
    $bootSm = 0;
} ?>

<div id="box<?= $quote['block_num'] ?>" class="m_box anishow <?= $quote['mbox_style']; ?>">
    <p >
    <span id="<?= 'q'.$quote['block_num'].'_'.$quote['quote_num']; ?>" class="anishow <?= $quote['line_style']; ?>"><?= $quote['text']; ?></span>
<?php $b = $quote['block_num']; $i = $quote['quote_num']; ?>
<?php endif; ?>

<?php
// iterator for bootstrap row
$sm = explode(' ',$quote['mbox_style']);
//debug($sm);
foreach ($sm as $item=>$value) {
    if (ltrim($value,'col-sm-') == '4') {
        $boxSm = 4;
        $bootSm += $boxSm;
    }
    if (ltrim($value,'col-sm-') == '6') {
        $boxSm = 6;
        $bootSm += $boxSm;
    }
    if (ltrim($value,'col-sm-') == '8') {
        $boxSm = 8;
        $bootSm += $boxSm;
    }
    if (ltrim($value,'col-sm-') == '12') {
        $bootSm = 12;
    }
}
?>
<?php endforeach; ?>
                        </p>
                    </div>
                </div>
            </div>


    </section>

    <?php $quotes = $model->mLines; //вызываем объекты связи виртуальным свойством - геттером ?>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>M id</th>
            <th>ID </th>
            <th>Block №</th>
            <th>Quote №</th>
            <th>text</th>
            <th>line style</th>
            <th>box style</th>
            <th>action</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($quotes as $quote) : ?>
        <tr data-key="14">
            <td><?= $quote['motivator_id'] ?></td>
            <td><?= $quote['id'] ?></td>
            <td><?= $quote['block_num'] ?></td>
            <td><?= $quote['quote_num'] ?></td>
            <td><?= $quote['text'] ?></td>
            <td><?= $quote['line_style'] ?></td>
            <td><?= $quote['mbox_style'] ?></td>
            <td><a  href="/mline/updatefor?id=<?= $quote['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> <a  href="/mline/copy?id=<?= $quote['id'] ?>"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></a></td>

        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?= Html::a('ADD LINE', ['mline/createfor', 'motivid'=>$model->id], ['class' => 'btn btn-danger']) ?>
    </p>
</div>
