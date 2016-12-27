<section  	class=" white">
    <div class="container">
        <div class="head_wrapper">
            <div class="row">

                <div class="member_head col-sm-12">
                    <h2><?= Yii::$app->view->params['meta']['pagehead'] ?></h2>
                </div>
                <?php foreach ($sections as $section) : ?>
                <div class="row">
                    <div class="col-sm-8 praslav">
                        <p><?= nl2br($section['text']); ?></p>
                    </div>
                    <div class="happy_image col-sm-4">
                        <?php if (!empty($section['image'])) : ?>
                            <?= \yii\helpers\Html::img('/img/'.$section['image'],['alt'=>$section['image_alt'], 'class'=>'']) ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="happy_divider col-xs-12"></div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>


