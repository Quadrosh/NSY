<section  	class=" white">
    <div class="container">
        <div class="head_wrapper">
            <div class="row">
                <div class="col-sm-8  col-sm-offset-2">
                    <h1 class="mt50 mb50 "><?= Yii::$app->view->params['meta']['pagehead'] ?></h1>
                    <p><?php if(isset(Yii::$app->view->params['meta']['pagedescription'])){ echo Yii::$app->view->params['meta']['pagedescription']; } ?></p>
                </div>
                <?php foreach ($sections as $section) : ?>
                    <div class="row">

                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 quote ">

                                <p><?= nl2br($section['text']); ?><?php if (!empty($section['extra'])) : ?><br><span class="quote_author"><?= nl2br($section['extra']); ?></span><?php endif; ?></p>
                            </div>
                            <div class="happy_image col-sm-4 ">
                                <?php if (!empty($section['image'])) : ?>
                                    <?= \yii\helpers\Html::img('/img/'.$section['image'],['alt'=>$section['image_alt'], 'class'=>'']) ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="quote_divider col-xs-12"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
