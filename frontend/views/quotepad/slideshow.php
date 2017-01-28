<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section id="<?= $quotepad->view ?>"	class="quotescreen <?= $quotepad->background_color ?>">
    <div class="container ">
        <div class="row mt120">

                <div id="textbox1" class="textbox_middle noborder">

                    <p id="text1" class="quoteitem text-left anishow"><?= $quotepad->text1 ?> </p>
                    <p id="text2" class="quoteitem text-right anishow"><?= $quotepad->text2 ?> </p>
                    <p id="text3" class="quoteitem text-left anishow"><?= $quotepad->text3 ?> </p>
                    <p id="text4" class="quoteitem text-right anishow"><?= $quotepad->text4 ?> </p>

                    <div id="avatar_box" class="row">
                        <div class="col-sm-3 hidden-xs">
                            <?= Html::img('/img/'.$quotepad->author_avatar,['class'=>'avatar', 'alt'=>$quotepad->author_avatar_alt,'id'=>'avatar_img']) ?>
                        </div>
                        <div id="avatar_info" class="col-xs-12 col-sm-9 anishow">
                            <p  class="q_author mt30"> <?= $quotepad->author ?> <br> <?= $quotepad->whois ?> <br> 19-20вв</p>
                        </div>
                    </div>

                </div>


            <div class="col-xs-6 col-sm-6">
<?php $iter = 1; foreach ($quotepadImages as $quotepadImage) : ?>
<?= Html::img('/img/'.$quotepadImage->name,['class'=>'quotepic '.$quotepadImage->style_key, 'id'=>'q_img'.$iter, 'alt'=>$quotepadImage->alt]) ?>

<?php $iter++; ?>
<?php endforeach; ?>

            </div>
        </div>

    </div>

</section>

