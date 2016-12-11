<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Motivators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motivator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Motivator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            'id',
           'pagehead',
            [
                'attribute'=>'list_section',
                'value'=> function($data)
                {
                    if ($data->list_section == 1) {
                        return 'Cat';
                    }
                    if ($data->list_section == 2) {
                        return 'Pro';
                    }
                    if ($data->list_section == 3) {
                        return 'City';
                    }

                }
            ],
            'list_num',
            [
                'attribute'=>'position',
                'value'=> function($data)
                {
                    return !$data->position ? '<span   class="text-danger">Я</span>' : '<span   class="text-success">ТЫ</span>';
                },
                'format'=> 'html',
            ],
            'list_name',
            'hrurl:url',
             'title',
             'description:ntext',
             'keywords:ntext',

            [
                'attribute'=> 'cat_id',
                'value' => function($data)
                {
                    $theData = \backend\models\Category::find()->where(['id'=>$data['cat_id']])->one();
                    return $theData['name'];
                },
            ],
            // 'section_name',
            // 'section_color',
            // 'background',
             'imagelink',
//             'imagelink_alt',
             'sendtopage',
             'promolink',
             'promoname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
