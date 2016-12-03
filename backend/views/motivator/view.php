<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'list_section',
            'list_num',
            'list_name',
            [
                'attribute'=>'position',
                'value'=> !$model->position ? '<span class="text-success">ТЫ</span>' : '<span class="text-danger">Я</span>',
                'format'=> 'html',
            ],
            'cat_id',
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
            'sendtopage',
            'promolink',
            'promoname',
        ],
    ]) ?>
    <section id="<?= $motivator->section_name; ?>" style=" background-image: url(<?=
  // \yii\helpers\Url::to('@imgfronturl/'. $motivator->background);
   \yii\helpers\Url::to('/img/'. $motivator->background);
    ?>);"
             class="manifestor <?= $motivator->section_color; ?>">
        <h1 id="pagename" class=" bigname" ><?= $motivator->pagehead; ?></h1>
        <div class=" container mt120 mb140">
            <div  class="m_textbox">
                <div class="row">
                    <?php $b =0; $i = 0; $bootSm=0;  foreach ($quotes as $quote) : ?>


                    <? //первый ?>
                    <?php   if ($b == 0 && $i==0 ) : ?>
                    <div id="box<?= $quote['block_num'] ?>" class="m_box anishow <?= $quote['mbox_style']; ?>">
                        <p >
                            <span id="<?= 'q'.$quote['block_num'].'_'.$quote['quote_num']; ?>" class="anishow <?= $quote['line_style']; ?>"><?= $quote['text']; ?></span>
                            <?php $b = $quote['block_num']; $i = $quote['quote_num']; ?>
                            <?php endif; ?>

                            <? //new quote same block ?>
                            <?php   if ($quote['block_num'] == $b && $quote['quote_num']> $i) : ?>
                                <span id="<?= 'q'.$quote['block_num'].'_'.$quote['quote_num']; ?>" class="anishow <?= $quote['line_style']; ?>"><?= $quote['text']; ?></span>
                                <?php $i = $quote['quote_num']?>
                            <?php endif; ?>

                            <? //new block ?>
                            <?php   if ($quote['block_num'] > $b && $quote['quote_num']== 1) : ?>
                        </p>
                    </div>
                    <?php if ($bootSm == 12 ) : // bootstrap row iterator ?>
                </div>
                <div class="row">
                    <?php $bootSm = 0 ?>
                    <?php endif; ?>
                    <div id="box<?= $quote['block_num'] ?>" class="m_box anishow <?= $quote['mbox_style']; ?>">
                        <p >
                            <span id="<?= 'q'.$quote['block_num'].'_'.$quote['quote_num']; ?>" class="anishow <?= $quote['line_style']; ?>"><?= $quote['text']; ?></span>        <?php $b = $quote['block_num']; $i = $quote['quote_num']; ?>
                            <?php endif; ?>

                            <?php
                            // iterator for bootstrap row
                            $sm = explode(' ',$quote['mbox_style']);
                            foreach ($sm as $item=>$value) {
                                if (ltrim($value,'col-sm-') == '4') {
                                    $boxSm = 4;
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
<!--    вызываем объекты связи виртуальным свойством - геттером-->
    <?php $quotes = $model->mLines; ?>

    <table class="table table-striped table-bordered"><thead>
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
            <td><a class="btn btn-primary" href="/mline/update?id=<?= $quote['id'] ?>">update</a></td>

        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?= Html::a('ADD LINE', ['mline/create'], ['class' => 'btn btn-danger']) ?>
    </p>
</div>
