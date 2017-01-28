<?php
/* @var $this yii\web\View */
?>
<h1>quotepad/index</h1>

<section id="motivators" class="manifestor white">
    <h2 id="pagename"  ><?= Yii::$app->view->params['meta']['pagehead'] ?></h2>
    <p><?= nl2br(Yii::$app->view->params['meta']['pagedescription']) ?></p>
    <div class=" container mt120 mb100">

        <div class="m_table">
            <div class="m_table_row">
                <div class="m_table_name m_table_head">Тема</div>
                <div class="m_table_button m_table_head"></div>
            </div>


            <?php foreach ($quotepads as $quotepad) : ?>
                <div class="m_table_row">
                    <div class="m_table_name"><?= $quotepad['list_name'] ?></div>

                    <div class="m_table_button">
                            <?= \yii\helpers\Html::a('смотреть', ['quotepad/view', 'id'=>$quotepad['id']],
                                ['class' => "btn fr gotoquotepad",]) ?>

                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>