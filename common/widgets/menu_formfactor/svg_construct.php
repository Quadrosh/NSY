<div class="sunmenu">
    <svg version="1.1"
         id="sun_menu"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px"
         viewBox="0 0 504.2 496.1"
         style="enable-background:new 0 0 504.2 496.1;"
         xml:space="preserve" >


        <?php $centeriter=1; foreach ($tree as $item) : ?>
            <a  class="menu_beam_<?= $item['num_order'] ?>" title="mam" href="<?=  $item ['link'] ?>">
                <defs><path id="beam_<?= $item['num_order'] ?>_defs"/></defs>
                <path id="beam_<?= $item['num_order'] ?>_path" fill="none" d="<?= $beamlocation[$centeriter] ?>"/>
                <text ><textPath id="beam_<?= $item['num_order'] ?>_text" xlink:href="#beam_<?= $item['num_order'] ?>_path" startOffset="0">
                        <tspan  class="sunbeam" style="fill:#FAC119; font-family:'Roboto-Regular'; font-size:18px;"><?=  $item ['name']; ?></tspan></textPath>
                </text>
            </a>
        <?php $centeriter++; endforeach; ?>

        <?php if (isset($item['childs'])) : ?>
            <?php $beamiter=1; foreach ($item['childs'] as $item) : ?>
                <a  class="menu_beam_<?= $item['num_order'] ?>" data-id="<?= $beamiter; ?>" title="mam" href="<?=  $item ['link'] ?>">
                    <defs><path id="beam_<?= $item['num_order'] ?>_defs"/></defs>
                    <path id="beam_<?= $item['num_order'] ?>_path" fill="none" d="<?= $beamlocation[$beamiter] ?>"/>
                    <text ><textPath id="beam_<?= $item['num_order'] ?>_text" xlink:href="#beam_<?= $item['num_order'] ?>_path" startOffset="0">
                            <tspan  class="sunbeam" style="fill:#FAC119; font-family:'Roboto-Regular'; font-size:18px;"><?=  $item ['name']; ?></tspan></textPath>
                    </text>
                </a>
            <?php $beamiter++; endforeach; ?>
        <?php endif; ?>





    </svg>

</div>