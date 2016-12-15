<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проживание';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="liveout-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать Проживание', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'view_order',
//            'private',
            [
                'attribute'=>'private',
                'value'=> function($data)
                {
                    return !$data->private ? '<span   class="text-success">Всем</span>' : '<span   class="text-danger">Авторизованным</span>';
                },
                'format'=> 'html',
            ],
            'ex_name:ntext',
            'ex_description:ntext',
//             'ex_level',
            [
                'attribute'=>'ex_level',
                'value'=> function($data)
                {
                    if ($data->ex_level == 1) {
                        return '<span   class="text-danger">Сложный</span>';
                    }
                    if ($data->ex_level == 2) {
                        return 'Средний';
                    }
                    if ($data->ex_level == 3) {
                        return 'Простой';
                    }

                },
                'format'=> 'html',
            ],
             'ex_duration',
//             'ex_cat_id',
            [
                'attribute'=> 'Категория',
                'value' => function($data)
                {
                    $theData = \backend\models\Category::find()->where(['id'=>$data['ex_cat_id']])->one();
                    return $theData['name'];
                },
            ],
//             'warn:ntext',
//             'thanx:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
