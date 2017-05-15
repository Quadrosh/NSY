<?php
use yii\helpers\Html;
//debug($motivator->imagelink);
?>




<section id="<?= $motivator->section_name; ?>" itemscope itemtype="http://schema.org/CreativeWork"
    <?php if (!empty($motivator->background)) : ?>
        style=" background-image: url(<?= \yii\helpers\Url::to('/img/'. $motivator->background); ?>);"
    <?php endif; ?>
         class="manifestor <?= $motivator->section_color; ?>">
    <h1 itemprop="name" id="pagename" class=" bigname" ><?= $motivator->pagehead; ?></h1>
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
                <a href="/motivator" id="gomotivators"  >
                    <svg
                        version="1.1" id="arrow_up"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="31.1px" height="61.8px"
                        viewBox="-448.7 469.3 31.1 61.8"
                        style="enable-background:new -448.7 469.3 31.1 61.8;"
                        xml:space="preserve">

<g>
    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-432.9" y1="530.5" x2="-432.9" y2="470.6"/>
    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-418.4" y1="484.5" x2="-432.4" y2="470.5"/>
    <line fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="-433.4" y1="470.5" x2="-447.4" y2="484.5"/>
</g>
							</svg>
                </a>
                <h4 class="vertical"> Все мотиваторы </h4>
            </div>
        </section>

