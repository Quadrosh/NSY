<a  class="menu_beam_<?= $item['num_order'] ?>"  title="mam" href="<?=  $item ['link'] ?>">
    <defs><path id="beam_<?= $item['num_order'] ?>_defs"/></defs>
    <path id="beam_<?= $item['num_order'] ?>_path" fill="none" d="M-50,248l355.5-249"/>
    <text ><textPath id="beam_<?= $item['num_order'] ?>_text" xlink:href="#beam_<?= $item['num_order'] ?>_path" startOffset="0">
            <tspan  class="sunbeam" style="fill:#FAC119; font-family:'Roboto-Regular'; font-size:18px;"><?=  $item ['name']; ?></tspan></textPath>
    </text>
</a>


<!--<li>-->
<!--    <a href="">-->
<!--        --><?//= $item['name'] ?>
<!--        --><?php //if (isset($item['childs'])) : ?>
<!--            <span >-->
<!--                <i class="glyphicon glyphicon-align-left"></i>-->
<!--            </span>-->
<!--        --><?php //endif; ?>
<!--    </a>-->
<!--    --><?php //if (isset($item['childs'])) : ?>
<!--        <ul>-->
<!--            --><?//= $this->getMenuHtml($item['childs']) ?>
<!--        </ul>-->
<!--    --><?php //endif; ?>
<!--</li>-->

