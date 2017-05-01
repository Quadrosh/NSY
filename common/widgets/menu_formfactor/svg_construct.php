
<div class="sunmenu" id="sunmenudiv">
    <svg version="1.1"
         id="sun_menu"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px"
        
         viewBox="0 0 504.2 496.1"
         style="enable-background:new 0 0 504.2 496.1;"
         xml:space="preserve" >

<rect width="100%" height="100%"
      fill="rgba(0,0,0,0.8)"  />
<?php if (!empty($tree['childs'])) : //смещение от количества элементов меню (max 13) ?>
<?php if (count($tree['childs'])<=13) $beamiter=1; ?>
<?php if (count($tree['childs'])<11) $beamiter=2; ?>
<?php if (count($tree['childs'])<9) $beamiter=3; ?>
<?php if (count($tree['childs'])<5) $beamiter=4; ?>
<?php if (count($tree['childs'])<3) $beamiter=5; ?>

<?php  foreach ($tree['childs'] as $item) : ?>
<a  class="menu_beam_<?= $item['num_order'] ?>"  xlink:href="/<?=  $item ['link'] ?>">
<defs>
    <path id="beam_<?= $item['num_order'] ?>_defs"/>
</defs>
<path id="beam_<?= $item['num_order'] ?>_path" fill="none" d="<?= $beamlocation[$beamiter] ?>"/>
<text ><textPath id="beam_<?= $item['num_order'] ?>_text"  xlink:href="#beam_<?= $item['num_order'] ?>_path" startOffset="0"><tspan  class="sunbeam"  font-family="RobotoRegular" fill="#FAC119" font-size="18px" ><?=  $item ['name']; ?>
<?php if(isset($item['haschild'])) : ?>
<tspan class="subchild" baseline-shift="-1" stroke-miterlimit="5" fill="#FAC119" font-size="32px" font-family="TeleskaSun" > X</tspan>
<?php endif; ?>
</tspan></textPath>
</text></a>
            <?php $beamiter++; endforeach; ?>
        <?php endif; ?>



<?php if (!empty($tree['grandparent'])) : ?>
    <a class="menu_center_3" xlink:href="/<?= $tree['grandparent']['link']; ?>">
        <defs><path id="center_3_defs"/></defs>
        <path id="center_3_path" fill="none" d="<?= $centerlocation[3] ?>"/>
        <text ><textPath id="center_3_text" xlink:href="#center_3_path" startOffset="-50%">
                <tspan  class="suncenter" fill="#F9C11B" font-family="HelveticaBold" font-size="14px"><?= $tree['grandparent'] ['name']; ?></tspan></textPath>
        </text>
    </a>
<?php endif; ?>

<?php if (!empty($tree['parent'])) : ?>
    <a class="menu_center_2" xlink:href="/<?= $tree['parent']['link']; ?>">
        <defs><path id="center_2_defs"/></defs>
        <path id="center_2_path" fill="none" d="<?= $centerlocation[2] ?>"/>
        <text ><textPath id="center_2_text" xlink:href="#center_2_path" startOffset="-50%">
                <tspan  class="suncenter" fill="#F9C11B" font-family="HelveticaBold" font-size="16px"><?= $tree['parent'] ['name']; ?></tspan></textPath>

        </text>
    </a>
<?php endif; ?>


<a class="menu_center_1"  xlink:href="/<?= $tree['current']['link']; ?>">
    <defs><path id="center_1_defs"/></defs>
    <path id="center_1_path" fill="none" d="<?=  $centerlocation[1] ?>"/>
    <text ><textPath id="center_1_text" xlink:href="#center_1_path" startOffset="-50%">
            <tspan class="centerfirst"  fill-opacity="1" fill="#F9C11B" font-family="HelveticaBold" font-size="23px"><?= $tree['current'] ['name']; ?></tspan></textPath>
    </text>
</a>



</svg>
</div>