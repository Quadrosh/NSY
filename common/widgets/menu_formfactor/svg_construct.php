
<div class="sunmenu">
    <svg version="1.1"
         id="sun_menu"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px"
         viewBox="0 0 504.2 496.1"
         style="enable-background:new 0 0 504.2 496.1;"
         xml:space="preserve" >




        <?php if (isset($tree['grandparent'])) : ?>
            <a class="menu_center_3" xlink:href="<?= $tree['grandparent']['link']; ?>">
                <defs><path id="center_3_defs"/></defs>
                <path id="center_3_path" fill="none" d="<?= $centerlocation[3] ?>"/>
                <text ><textPath id="center_3_text" xlink:href="#center_3_path" startOffset="-50%">
                        <tspan  class="suncenter" style="fill:#F9C11B; font-family:'Helvetica-Bold'; font-size:14px;"><?= $tree['grandparent'] ['name']; ?></tspan></textPath>
                </text>
            </a>
        <?php endif; ?>

        <?php if (isset($tree['parent'])) : ?>
            <a class="menu_center_2" xlink:href="<?= $tree['parent']['link']; ?>">
                <defs><path id="center_2_defs"/></defs>
                <path id="center_2_path" fill="none" d="<?= $centerlocation[2] ?>"/>
                <text ><textPath id="center_2_text" xlink:href="#center_2_path" startOffset="-50%">
                        <tspan  class="suncenter" style="fill:#F9C11B; font-family:'Helvetica-Bold'; font-size:16px;"><?= $tree['parent'] ['name']; ?></tspan></textPath>
                </text>
            </a>
        <?php endif; ?>


        <a class="menu_center_1" xlink:href="<?= $tree['current']['link']; ?>">
            <defs><path id="center_1_defs"/></defs>
            <path id="center_1_path" fill="none" d="<?= $centerlocation[1] ?>"/>
            <text ><textPath id="center_1_text" xlink:href="#center_1_path" startOffset="-50%">
                    <tspan class="centerfirst"  fill-opacity="1" style="fill:#F9C11B; font-family:'Helvetica-Bold'; font-size:23px;"><?= $tree['current'] ['name']; ?></tspan></textPath>
            </text>
        </a>



        <?php if (isset($tree['childs'])) : ?>
<!--        //смещение от количества элементов меню (max 13)-->
            <?php if (count($tree['childs'])<=13) $beamiter=1; ?>
            <?php if (count($tree['childs'])<11) $beamiter=2; ?>
            <?php if (count($tree['childs'])<9) $beamiter=3; ?>
            <?php if (count($tree['childs'])<5) $beamiter=4; ?>
            <?php if (count($tree['childs'])<3) $beamiter=5; ?>
            <?php  foreach ($tree['childs'] as $item) : ?>
                <a  class="menu_beam_<?= $item['num_order'] ?>"  title="mam" href="<?=  $item ['link'] ?>">
                    <defs><path id="beam_<?= $item['num_order'] ?>_defs"/></defs>
                    <path id="beam_<?= $item['num_order'] ?>_path" fill="none" d="<?= $beamlocation[$beamiter] ?>"/>
                    <text ><textPath id="beam_<?= $item['num_order'] ?>_text" xlink:href="#beam_<?= $item['num_order'] ?>_path" startOffset="0">
                            <tspan  class="sunbeam" style="fill:#FAC119; font-family:'Roboto-Regular'; font-size:18px;">
                                <?=  $item ['name']; ?>
                                <?php if(isset($item['haschild'])) : ?>
                                <tspan class="subchild" baseline-shift="-1" stroke-miterlimit="5" style="fill:#FAC119; font-family:'Roboto-Regular'; font-size:24px;"><</tspan>


                                <?php endif; ?>
                            </tspan></textPath>
                    </text>
                </a>
            <?php $beamiter++; endforeach; ?>
        <?php endif; ?>

        <g id="logosun">
            <g id="XMLID_72_">
                <circle id="XMLID_73_" fill="#F9C11B" cx="18.6" cy="225.1" r="1.5"/>
            </g>
            <path id="XMLID_71_" fill="#F9C11B" d="M23.2,235.3c-0.5-0.4-2.2-1.5-4.6-1.5c-2.4,0-4.1,1.1-4.6,1.5c0.4-0.5,1.6-2.2,1.5-4.6
		c0-2.4-1.2-4.1-1.5-4.6c0.5,0.4,2.2,1.5,4.6,1.5c2.4,0,4.1-1.2,4.6-1.5c-0.4,0.5-1.5,2.2-1.5,4.6C21.7,233.1,22.9,234.8,23.2,235.3
		z"/>
            <path id="XMLID_70_" fill="#F9C11B" d="M25.1,233.1"/>
            <g id="XMLID_68_">
                <circle id="XMLID_69_" fill="#F9C11B" cx="1.5" cy="237.6" r="1.5"/>
            </g>
            <path id="XMLID_62_" fill="#F9C11B" d="M12.7,236.3c-0.5,0.4-2.1,1.6-2.9,3.9c-0.7,2.3-0.2,4.2,0,4.8c-0.4-0.5-1.6-2.1-3.9-2.9
		c-2.3-0.8-4.3-0.2-4.9,0c0.5-0.4,2.1-1.6,2.9-3.9c0.7-2.3,0.2-4.2,0-4.9c0.4,0.5,1.6,2.1,3.9,2.9C10.1,237.1,12.1,236.5,12.7,236.3
		z"/>
            <g id="XMLID_60_">
                <circle id="XMLID_61_" fill="#F9C11B" cx="8.1" cy="257.6" r="1.5"/>
            </g>
            <path id="XMLID_59_" fill="#F9C11B" d="M10.4,246.6c0.2,0.6,0.9,2.5,2.9,3.9c1.9,1.4,3.9,1.5,4.6,1.5c-0.6,0.2-2.5,0.9-4,2.8
		c-1.4,2-1.5,4-1.5,4.6c-0.2-0.6-0.9-2.5-2.8-4c-2-1.4-4-1.5-4.6-1.5c0.6-0.2,2.5-0.9,3.9-2.8C10.3,249.3,10.4,247.3,10.4,246.6z"/>
            <g id="XMLID_57_">
                <circle id="XMLID_58_" fill="#F9C11B" cx="29.2" cy="257.6" r="1.5"/>
            </g>
            <path id="XMLID_56_" fill="#F9C11B" d="M19.5,252c0.7,0,2.7-0.1,4.6-1.5c1.9-1.4,2.6-3.3,2.8-3.9c0,0.6,0,2.7,1.5,4.6
		c1.4,2,3.3,2.6,4,2.8c-0.6,0-2.7,0-4.6,1.5c-2,1.4-2.6,3.3-2.8,4c0-0.7-0.1-2.7-1.5-4.6C22,252.9,20.1,252.2,19.5,252z"/>
            <g id="XMLID_54_">
                <circle id="XMLID_55_" fill="#F9C11B" cx="35.8" cy="237.5" r="1.5"/>
            </g>
            <path id="XMLID_53_" fill="#F9C11B" d="M27.4,245c0.2-0.6,0.7-2.6,0-4.9c-0.7-2.3-2.3-3.5-2.8-3.9c0.6,0.2,2.6,0.8,4.9,0
		c2.3-0.8,3.5-2.4,3.9-2.9c-0.2,0.6-0.8,2.6,0,4.9c0.8,2.3,2.4,3.5,2.9,3.9c-0.6-0.2-2.6-0.8-4.8,0C29.1,242.9,27.8,244.5,27.4,245z
		"/>
        </g>



    </svg>

</div>