<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section id="<?= $quotepad->view ?>"	class="quotescreen <?= $quotepad->background_color ?>">
    <div class="container ">
        <div class="row mt120">
            <div class="col-sm-6 maxwidthleft">
                <div id="textbox" class="textbox">
                    <p id="text" class="quotemain mt30 "><?= $quotepad->text ?> </p>
                    <p id="text1" class="quoteitem text-left anishow"><?= $quotepad->text1 ?> </p>
                    <p id="text2" class="quoteitem text-right anishow"><?= $quotepad->text2 ?> </p>
                    <p id="text3" class="quoteitem text-left anishow"><?= $quotepad->text3 ?> </p>
                    <p id="text4" class="quoteitem text-right anishow"><?= $quotepad->text4 ?> </p>

                    <div id="avatar_box" class="row">
                        <div class="col-sm-3 hidden-xs">
                            <?= Html::img('/img/'.$quotepad->author_avatar,['class'=>'avatar', 'alt'=>$quotepad->author_avatar_alt,'id'=>'avatar_img']) ?>
                        </div>
                        <div id="avatar_info" class="col-xs-12 col-sm-9 ">
                            <p  class="q_author mt30"> <?= $quotepad->author ?> <br> <?= $quotepad->whois ?> <br> 19-20вв</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-sm-6 maxwidthright">
                <div  id="anywrap" class="animationwrap">
                    <svg class="quoteSvgPic" id="richcar"
                         version="1.1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"

                         viewBox="0 -100 1000 1000"
                         style="enable-background:new 0 0 1000 1000;"
                         xml:space="preserve"
                         preserveAspectRatio="xMidYMin slice"
                         style="width: 100%; padding-bottom: 100%; height: 1px; overflow: visible"
                    >
<style type="text/css">
    .strich0{fill:#002123;}
    .strich1{fill:#606162;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich2{fill:#090909;}
    .strich3{fill:#FEFEFE;}
    .strich4{fill:#3D8C85;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich5{fill:#9FD6D3;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich6{fill:#015354;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich7{fill:#070707;}
    .strich8{fill:#3F3F3F;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich9{fill:#030F15;}
    .strich10{fill:#6F706C;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich11{opacity:0.23;fill:#9FD6D3;stroke:#000000;stroke-width:2;stroke-miterlimit:10;enable-background:new    ;}
    .strich12{fill:#FEE2D6;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich13{fill:#F2EE43;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich14{fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich15{fill:none;stroke:#000000;stroke-miterlimit:10;}
    .strich16{fill:#444FCC;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich17{fill:#FF0000;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich18{fill:#FF0100;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich19{fill:#6E0100;}
    .strich20{fill:#FFFFC0;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich21{fill:#008D89;}
    .strich22{fill:#65CED2;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich23{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich24{fill:#08A249;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich25{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
    .strich26{fill:#937500;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich27{fill:#FEE2D6;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich28{fill:#AB6526;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich29{fill:#146967;stroke:#000000;stroke-miterlimit:10;}
    .strich30{fill:#8CD1CF;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .strich31{fill:#FFFFFF;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich32{fill:#B2B3B3;stroke:#000000;stroke-miterlimit:10;}
    .strich33{fill:#6B6464;}
    .strich34{fill:#FFFFFF;}
    .strich35{fill:#746B6B;}
    .strich36{fill:#C4C4C4;}
    .strich37{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich38{fill:#999999;}
    .strich39{fill:#66972F;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich40{fill:#72AA31;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich41{fill:#88CE1C;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich42{fill:#88CE1C;stroke:#000000;stroke-miterlimit:10;}
    .strich43{fill:#FDFDFD;}
    .strich44{fill:#212020;}
    .strich45{fill:#6D6E68;}
    .strich46{fill:#292929;}
    .strich47{fill:#B9BBBC;}
    .strich48{fill:#919495;}
    .strich49{fill:#050505;}
    .strich50{fill:#FEEE57;}
    .strich51{fill:#EFD910;}
    .strich52{fill:#D5A202;}
    .strich53{fill:#D1A60A;}
    .strich54{fill:#CC9C07;}
    .strich55{fill:#C08D04;}
    .strich56{fill:#E3BF01;}
    .strich57{fill:#995900;}
    .strich58{fill:#CE9500;}
    .strich59{fill:#DDB308;}
    .strich60{fill:#EAD815;}
    .strich61{fill:#C48502;}
    .strich62{fill:#E1B607;}
    .strich63{fill:#343434;}
    .strich64{fill:#7C88B5;}
    .strich65{fill:none;}
    .strich66{fill:#9EACCF;}
    .strich67{fill:#F4CF0A;}
    .strich68{fill:#ECD412;}
    .strich69{fill:#DEB701;}
    .strich70{fill:#E7C210;}
    .strich71{fill:#ECD214;}
    .strich72{fill:#9A9FDF;}
    .strich73{fill:none;stroke:#C6B355;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich74{fill:#734500;}
    .strich75{fill:#445A7F;}
    .strich76{fill:#E1B906;}
    .strich77{fill:#F3E12D;}
    .strich78{fill:#2F2E2E;}
    .strich79{fill:#030002;}
    .strich80{fill:#F2B741;}
    .strich81{fill:#E79E25;}
    .strich82{fill:#EA7D2A;}
    .strich83{fill:#F09D2B;}
    .strich84{fill:#CF0B27;}
    .strich85{fill:#B31628;}
    .strich86{fill:#DE7F4F;}
    .strich87{fill:#F8D196;}
    .strich88{fill:#94202C;}
    .strich89{fill:#CF6A4D;}
    .strich90{fill:#E79064;}
    .strich91{fill:#FCFDFF;}
    .strich92{fill:#72B2D7;stroke:#605363;stroke-width:0.3;stroke-miterlimit:10;}
    .strich93{fill:#000002;}
    .strich94{fill:#FFFBFC;}
    .strich95{fill:#8F341C;}
    .strich96{fill:#541B22;}
    .strich97{fill:#020200;}
    .strich98{fill:none;stroke:#DB8158;stroke-width:0.7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich99{fill:#A92338;}
    .strich100{fill:#E8EBF1;}
    .strich101{fill:#D8334C;}
    .strich102{fill:#BE5E42;}
    .strich103{fill:#E29F92;}
    .strich104{fill:#F9D76D;}
    .strich105{fill:#DD0D22;}
    .strich106{fill:#D10B25;}
    .strich107{fill:#E2483C;}
    .strich108{fill:#EC8F57;}
    .strich109{fill:#D06D58;}
    .strich110{fill:#CD584D;}
    .strich111{fill:#C30B26;}
    .strich112{fill:#DD3043;}
    .strich113{fill:#B41528;}
    .strich114{fill:#E35E53;}
    .strich115{fill:#C70A29;}
    .strich116{fill:#E65B52;}
    .strich117{fill:#840416;}
    .strich118{fill:#740317;}
    .strich119{fill:#9B052A;}
    .strich120{fill:#9C1928;}
    .strich121{fill:#650214;}
    .strich122{fill:#9E482E;}
    .strich123{fill:#B91E25;}
    .strich124{fill:#91042A;}
    .strich125{fill:#E6884C;}
    .strich126{fill:#E17039;}
    .strich127{fill:#E3703A;}
    .strich128{fill:#CB5037;}
    .strich129{fill:#F1935F;}
    .strich130{fill:#E88850;}
    .strich131{fill:#77A3C2;stroke:#46414E;stroke-width:0.3;stroke-miterlimit:10;}
    .strich132{fill:#1B1511;}
    .strich133{fill:#FFFBFF;}
    .strich134{fill:#622220;}
    .strich135{fill:#DE783E;}
    .strich136{fill:#A8573B;}
    .strich137{fill:#90042F;}
    .strich138{fill:#DB7949;}
    .strich139{fill:#F49B6A;}
    .strich140{fill:#E5763D;}
    .strich141{fill:#BF143C;}
    .strich142{fill:#E73867;}
    .strich143{fill:#E73867;stroke:#BF1244;stroke-width:0.1;stroke-miterlimit:10;}
    .strich144{fill:#EE8A5B;}
    .strich145{fill:#F4A36C;}
    .strich146{fill:#E35376;}
    .strich147{fill:#8B1328;}
    .strich148{fill:#AB063A;}
    .strich149{fill:#8B1029;}
    .strich150{fill:#B1063A;}
    .strich151{fill:#C41F20;}
    .strich152{fill:#710314;}
    .strich153{fill:#DE6D37;}
    .strich154{fill:#E69255;}
    .strich155{fill:#F4BB97;}
    .strich156{fill:#E26F3B;}
    .strich157{fill:#DE824E;}
    .strich158{fill:#E07034;}
    .strich159{fill:#E16F39;}
    .strich160{fill:#E57645;}
    .strich161{fill:#E7894C;}
    .strich162{fill:#E9E5E6;}
    .strich163{fill:#DED6D9;}
    .strich164{fill:#010000;}
    .strich165{fill:#202020;}
    .strich166{fill:#303030;}
    .strich167{fill:#323131;}
    .strich168{fill:#EA8050;}
    .strich169{fill:#F4B384;}
    .strich170{fill:#F4B288;}
    .strich171{fill:#FACDA1;}
    .strich172{fill:#F0B388;}
    .strich173{fill:#EC8768;}
    .strich174{fill:#E35934;}
    .strich175{fill:#E96D3B;}
    .strich176{fill:#E05B35;}
    .strich177{fill:#ED8C62;}
    .strich178{fill:#E86E43;}
    .strich179{fill:#F9FFFA;}
    .strich180{fill:#78AAD7;stroke:#666666;stroke-width:0.3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .strich181{fill:#191716;}
    .strich182{fill:#D76F42;}
    .strich183{fill:#381A24;}
    .strich184{fill:#481E22;}
    .strich185{fill:#F1A485;}
    .strich186{fill:#E65640;}
    .strich187{fill:#C52232;}
    .strich188{fill:#FFFFFE;}
    .strich189{fill:#DE6740;}
    .strich190{fill:#DD424A;}
    .strich191{fill:#E1575C;}
    .strich192{fill:#DB5F39;}
    .strich193{fill:#212121;}
    .strich194{fill:#010101;}
    .strich195{fill:#B1007B;}
    .strich196{fill:#9A0079;}
    .strich197{fill:#D30377;}
    .strich198{fill:#E52585;}
    .strich199{fill:#D62581;}
    .strich200{fill:#B0007C;}
    .strich201{fill:#D5037A;}
</style>
                        <path id="richshadow" class="strich0" d="M189.8,617.1c0,0,15.1,31.4,52.4,7.5s211.5-37,252.3-32.7S623,626.3,623,626.3s6-8.9,18.4-6.5
	s207.4-49.5,207.4-49.5l-133.5-89l-218.5,20.3L340,492.3l-12.1-53.6L282,450.6L189.8,617.1z"/>
                        <path id="richcover1" class="strich1" d="M325.3,457.2c0,0-29.8-33.2-27.2-39.1c2.7-6,20.6-6.6,20.6-6.6l39.1,62.4L325.3,457.2z"/>
                        <path id="richwheel2back" class="strich2" d="M342.2,646.6c5.4,7.5,16.9,20.9,34.7,23.6c2.3,0.4,4,1.1,7.3,0.5
	c25.5-4.5,34.8-4.8,45.6-12.4c5-3.5,8.3-7.1,9.9-9c4.9-5.4,8.3-11.1,11.8-18.6c8.9-19.4,14.4-31.3,9.6-43.1
	c-1.4-3.4-4.8-9.7-13.9-15.2c-35,0-70,0-105,0C342.2,597.2,342.2,621.9,342.2,646.6z"/>
                        <path id="richwheeld2front" class="strich2" d="M748.5,624.1c-1.8,3.9-8.8,20-1.8,35.9c8.7,19.7,32.9,25.9,45.8,25.3
	c0.9,0,5.7-0.6,15.5-1.7c11.9-1.4,14.6-1.8,18.3-3.5c5.7-2.7,9.5-6.5,11.2-8.2c1.5-1.5,3.8-4.1,6.5-8.6c3.7-6.2,10.4-17.3,9.4-31.6
	c-0.4-6.1-2.3-12.7-4.4-16.1C839.6,600.9,798.2,604.2,748.5,624.1z"/>
                        <path id="richsmoke2" class="strich3" d="M94.2,637.6c-5-8.8-19.9-26.1-34.5-32c-13.5-5.4-41.7-11.3-27.6,10.2c-1.9-0.6-3.8-1.1-5.7-1.4
	c-3.1-0.6-18.4-3.4-21.7,3.2c-2.2,4.4,1.4,11.9,8.6,18.4c4.9,4.1,12.3,9.3,22.4,13.1c5.5,2,10.5,3.1,14.8,3.8
	c10.8-0.3,13.9-3,14.9-5.2c0-0.1,0-0.1,0.1-0.2c1.1,0.5,2.3,1,3.8,1.9c0,0,4,4.9,15.4,4.7C95.9,653.8,99.2,646.3,94.2,637.6z"/>
                        <path id="richsmoke1" class="strich3" d="M130.8,643.6c0,0,0.5-8-9.3-14.5s-8.8-9.4-14-8.7s-6.2,6.1-6.2,6.1s-2.5-9.4-12.8-13.9
	s-3.4-1.3-10.3-5.6s-14.8-2-13.7,4c1.1,6.1,10.1,14.6,10.1,14.6s15.5,15.1,21.1,16s10.8,3.8,11.7-4.3
	C107.4,637.3,126.9,660.5,130.8,643.6z"/>
                        <g id="richmuffler">
                            <path id="richmuffler1" class="strich4" d="M618.7,612.5c0,0,1.7,15.5-4.9,23.9s-20.8,6-40.5,3.8s-65.1-13.8-170.4-3.8l-55.7,5.9
		l13.1-14.9c0,0,172.4-19.5,231.3-7.5c0,0,15.5,2.7,13-7.4C602.2,602.5,618.7,612.5,618.7,612.5z"/>
                            <path id="richmuffler2" class="strich4" d="M237.3,648.6c0,0-60.9-0.5-106.5,12.3c0,0-14.6-17.7,12-40.4c0,0,97.2,8.1,113.3-8
		C272.1,596.5,237.3,648.6,237.3,648.6z"/>
                            <path id="richmuffler3" class="strich5" d="M458.8,617.1c0,0-10.8,7.8-8.4,29.5c0,0,0,1.7,2.9,0.6c2.9-1.1,62.5-4.2,95.3,4.2
		s38.1,11.2,38.1,11.2l2-44.7L458.8,617.1z"/>
                            <path id="richmuffler4" class="strich6" d="M589.5,620.7c0,0-7.9,0.3-8.3,18.1c-0.3,17.8,2.9,22.6,6,23.2c3.2,0.6,12.7-8.7,12.7-19.2
		c0,0-13.4-2.2-5.4-18.2S589.5,620.7,589.5,620.7z"/>

                            <ellipse id="richmfhole" transform="matrix(-0.5813 0.8137 -0.8137 -0.5813 1259.5156 620.1292)" class="strich7" cx="470.2" cy="634.1" rx="4.3" ry="9"/>

                            <ellipse id="richmfhole_1_" transform="matrix(-0.5813 0.8137 -0.8137 -0.5813 1299.7798 599.7407)" class="strich7" cx="495.6" cy="634.3" rx="4.3" ry="9"/>

                            <ellipse id="richmfhole_2_" transform="matrix(-0.5813 0.8137 -0.8137 -0.5813 1338.1443 581.8727)" class="strich7" cx="519.4" cy="635.2" rx="4.3" ry="9"/>

                            <ellipse id="richmfhole_3_" transform="matrix(-0.5813 0.8137 -0.8137 -0.5813 1375.5115 566.8021)" class="strich7" cx="541.9" cy="637.3" rx="4.3" ry="9"/>

                            <ellipse id="richmfhole_4_" transform="matrix(-0.5813 0.8137 -0.8137 -0.5813 1413.0255 552.8181)" class="strich7" cx="564.3" cy="640" rx="4.3" ry="9"/>
                        </g>
                        <g id="richwheelback">
                            <path id="richtyreback" class="strich2" d="M246.5,698.5c0,0,46.2,5.8,93-16.8c0,0,19.3-9.1,41.3-41.4c22-32.3,33.6-61.5,32.5-80.2
		s-47.4-33.5-93.6-25.6S246.5,698.5,246.5,698.5z"/>

                            <ellipse id="richwheeiback1_1_" transform="matrix(0.8433 0.5374 -0.5374 0.8433 376.5799 -57.6606)" class="strich8" cx="287.2" cy="617" rx="51.6" ry="92.2"/>

                            <ellipse id="richwheeiback1" transform="matrix(0.8433 0.5374 -0.5374 0.8433 376.9167 -58.5532)" class="strich5" cx="288.9" cy="617.1" rx="25.8" ry="46"/>
                        </g>
                        <g id="richwheelfront">
                            <path id="richtyre" class="strich9" d="M646.7,703.3c0,0,52.6,4.8,95.7-10.7c43.1-15.4,71.3-114.1,64.1-131.9
		c-7.2-17.8-91.2-14.7-91.2-14.7L646.7,703.3z"/>

                            <ellipse id="richwheelfront1_1_" transform="matrix(0.8692 0.4945 -0.4945 0.8692 398.4515 -256.9149)" class="strich8" cx="684.8" cy="624.6" rx="44" ry="86.9"/>

                            <ellipse id="richwheelfront1" transform="matrix(0.8692 0.4945 -0.4945 0.8692 398.4515 -256.9149)" class="strich5" cx="684.8" cy="624.6" rx="23.3" ry="46"/>
                        </g>
                        <path id="richdrivewheel" class="strich10" d="M557.8,473.8c0,0-1.3-15.9-18.9-19.2c-17.6-3.4-24.1,18.2-24.1,25.1s0,18.3,0,21.9
	s-10.8,0-10.8,0l2.2-7c0,0-6.6-27,2.2-35.1c8.8-8.1,10.8-12.6,24.8-15.8c14-3.2,32.9,10.6,35,25.1
	C570.2,483.2,557.8,473.8,557.8,473.8z"/>
                        <path id="richdashboarsd1" class="strich10" d="M528.8,488.7l1.9-5.6c0,0,46.9-29,51.3-30.7c4.4-1.7,16-1.9,20.6,0s5.1,7.3,5.1,7.3
	l-77.4,31.7L528.8,488.7z"/>
                        <path id="richdashboard2" class="strich10" d="M536.5,491.5c0,0-0.5-7.3,26.4-20.3c26.8-13.1,45-16.7,45-16.7l1.9,3.4L536.5,491.5z"/>
                        <path id="richglass" class="strich11" d="M487.9,379l51.7-3.7c0,0,45.7,44.4,74.3,90.6s-136,28.6-136,28.6L487.9,379z"/>
                        <g id="richhand1_1_">
                            <path id="richshoulder2" class="strich12" d="M412.1,399.4L521.9,451l-6.8,12c0,0-92.4-37.8-114.9-43L412.1,399.4z"/>
                            <path id="richfinger1" class="strich12" d="M558.3,436.8c0,0,12.4-4.8,8,11.2s-12.2,19.7-13.8,19.7s-2.2-4.9-2.2-4.9L558.3,436.8z"/>
                            <path id="richfinger2" class="strich12" d="M548.4,436.2c0,0,4.6-7.4,10.3,0s-2.9,24.2-8,27s-6.8,0.1-6.8-1S548.4,436.2,548.4,436.2z"
                            />
                            <path id="richfinger3" class="strich12" d="M534.8,434.1c0,0,11.6-10.3,14.2,4.7c2.6,14.9-8.5,22-10.6,22.9c-2,0.9-6.4-2.1-7.2-7.1
		C530.3,449.5,534.8,434.1,534.8,434.1z"/>
                            <path id="richfinger4" class="strich12" d="M521.7,438.7c0,0,6.7-13,11.7-1.8c5.1,11.1-2.7,21.6-4.6,22.1c-1.9,0.6-3.7,3-5.2-1.4
		c0,0,4.8-12.7-1.6-11.8C515.5,446.7,521.7,438.7,521.7,438.7z"/>
                        </g>
                        <path id="richshort" class="strich13" d="M377.9,379.4c0,0,5.1-9.2,17.9-2.6s8.7,14.3,8.7,14.3s7.9-2.9,8.9,4.2c0,0,15.4-9.2,13.7,10.6
	l-3.5-1.4c-1.5-1.8-2.8-2.2-3.6-2.2c-4-0.2-8.4,6.4-10.8,16.8c-0.1,0.6-0.1,1.5,0.1,2.5c0.2,0.8,0.4,1.8,1.2,2.4
	c1.5,1.3,4,0.3,4.2,0.3c2.1,0.7,4.3,1.4,6.4,2.1c-0.8,2.5-1.5,5-2.3,7.5c0,0,28.8,24,23.6,36c-5.2,12-74.2,22.8-82.6,9.8
	c-8.4-13-61.7-66.3-34.2-90.5c0,0,4.8-3.3,10.4-1.9c3.7,0.9,5.5,3.5,7,4.6C346.5,394.9,355.2,394.5,377.9,379.4z"/>
                        <g id="richhand2_1_">
                            <g id="richhand1">
                                <path id="richshoulder" class="strich12" d="M340.6,411.4c0,0,154.6,48.2,158.1,48.2s-6.4,11.6-6.4,11.6S391,435,340.6,434.1V411.4z"
                                />
                            </g>
                            <path id="richhand2" class="strich12" d="M502.6,446.3c0,0,26.6-0.1,29.1,18.4S517.2,488,517.2,488s-27.2-2.9-28.4-14.2
		c-1.2-11.3,5.5-13.5,5.5-13.5S490.8,448.6,502.6,446.3z"/>
                            <path class="strich14" d="M502.3,459.6c0,0,12.6,18.6,25.5,13.5"/>
                            <path class="strich15" d="M498.8,462.6c0,0,4.1,0.8,5.9,0"/>
                            <path class="strich14" d="M500,471.2c0,0,12.6,18.6,25.5,13.5"/>
                            <path class="strich15" d="M496.5,474.2c0,0,4.1,0.8,5.9,0"/>
                        </g>
                        <path id="richleg" class="strich16" d="M380.1,491.5c0,0,23.7-30.5,60.9-24.8s47.7,29.8,47.7,29.8L380.1,491.5z"/>
                        <g id="richcarcase_1_">
                            <path id="richhood" class="strich17" d="M545.5,485.5c0,0,62-43.8,178.6-34.8l84.1,11.5l40.6,77.4L545.5,485.5z"/>
                            <path id="richcarcase" class="strich17" d="M220.1,635.1c0,0-77-14.2-75-40.9s65.9-98,178.4-137.9l54.4,30.4c0,0-16.6,115.6-10.8,121.3
		c0,0,6.4-11.5,162.9-3.7c0,0-6.8-97.7,4.7-115.9c0,0,10.8-6.4,61.5-9.8S800,458.1,889.4,592.4c0,0-76.5,60.2-139.6,45.6
		c0,0-3.5,0-6-2.6c-4.8-5.2,1-15.9,4.2-26.6c5.7-18.7,6.1-45.2-6.9-61.1c-1.9-2.3-6.8-8.3-15-11.2c-26.9-9.5-58.9,24-69.4,34.9
		c-9.7,10.1-23.9,27.8-33.7,54.9c-28.1-3.4-58.2-5.8-90-6.9c-70.9-2.3-134.8,2.8-189.8,10.9c-2.4,0-5.3-0.3-6.2-2.1
		c-1.6-3.1,3.6-8.7,5-10.4c13.6-15.8,22.6-60,5-81.1c-1.7-2.1-3.7-4.4-7.1-6.2c-23.4-12.9-66.1,21.5-86.9,45.3
		C243.4,586.9,229.4,606.1,220.1,635.1z"/>
                            <path id="richcar_x5F_back2" class="strich18" d="M139.8,564.7c0,0-8.5-1.6-10.7-11.2c-2.1-9.6,87.5-106.7,173.4-114.7
		c0,0,11.7,9.1,7.5,14.4L139.8,564.7z"/>
                            <path id="richcar_x5F_back1" class="strich18" d="M138.7,569c0,0-3.7-2.7,0.5-6.9c4.3-4.3,69.4-86.5,164.9-106.2c0,0,8.5-2.7,5.9,8
		c-2.7,10.7-9.1,9.9-9.1,9.9S197.4,513,158.4,567.4C158.4,567.4,141.4,580.7,138.7,569z"/>
                            <path id="richback_x5F_bumper1" class="strich18" d="M130.8,570.9H121c0,0-3.3,4.4-3.3,7.6s0,22.3,0,22.3h13.1V570.9z"/>
                            <path id="richback_x5F_bumper2" class="strich18" d="M129.9,566.3c-0.9,1.6-2,4.1-2.8,7.1c-0.9,3.3-1.3,6.5-1.3,10.8
		c0,9.3,1.7,18.4,2.8,23.1c0,0,10.9,2.2,18.5,0s0-40.8,0-40.8C141.4,566.5,135.7,566.4,129.9,566.3z"/>
                            <path id="richdoor_2_" class="strich18" d="M605.1,460.5c0,0-58.7-80.5-66-81.4c-8.3-1-28.8,1-36.6,3.1c0,0-3.7,0-2.5,3.9
		s32,86.1,33.6,93.1s0.5,10.4,0.5,10.4s-8.3,93.6-3.9,113.3c0,0,0.8,3.9-4.9,3.9s-132.2-4.7-159.2,2.1c0,0-3.4,1-2.1-7.3
		s7.5-111.9,12.4-115.4l2-3.4c0,0,124.7-2.8,146.4,2.8c0,0,4.3-2.5,2.5-6.9c-1.8-4.3-33.1-91.2-36.4-90.1c0,0-0.1,0-0.1,0.1
		c-0.5,0.5-0.6,1.2-0.6,1.7c-0.1,0.7-0.2,1.4-0.2,2.1c0,1,0,2.6-0.2,4.9c-1.7,28.3-3.4,56.7-5.2,85l-10.7-0.2L482,379
		c0,0,0.3-3.9,4.9-6.5c4.7-2.6,41.5-4.4,45.9-4.1s8.8,2.9,8.8,2.9c9.3,9.1,18.9,19.1,28.5,30c17.3,19.7,31.7,39,43.7,57L605.1,460.5
		z"/>
                            <path id="richotherside" class="strich18" d="M899.5,496c0,0,2.8-2.3,0.5-6.7c-2.4-4.4-44.7-29.8-71.4-28.8s-22,4.4-22,4.4l133,96.1
		l7.4-11.2L899.5,496z"/>
                            <path id="richhole_4_" class="strich9" d="M592.6,579.3c1.8-8.9,3.7-16.6,5.3-23c2.7-10.5,5.1-18.3,5.7-20.5c1.9-6.2,3.6-11.5,5.1-15.7
		c3.3,0,6.6,0,9.9,0c-2.9,8.7-5.2,16.2-6.8,22c-2,6.9-4,14.1-6,23.9c-1.1,5.5-1.9,10-2.5,13.3C599.8,579.3,596.2,579.3,592.6,579.3z
		"/>
                            <path id="richhole_1_" class="strich9" d="M578.6,579.3c1.8-8.9,3.7-16.6,5.3-23c2.7-10.5,5.1-18.3,5.7-20.5c1.9-6.2,3.6-11.5,5.1-15.7
		c3.3,0,6.6,0,9.9,0c-2.9,8.7-5.2,16.2-6.8,22c-2,6.9-4,14.1-6,23.9c-1.1,5.5-1.9,10-2.5,13.3C585.7,579.3,582.1,579.3,578.6,579.3z
		"/>
                            <path id="richhole" class="strich9" d="M564.3,579.3c1.8-8.9,3.7-16.6,5.3-23c2.7-10.5,5.1-18.3,5.7-20.5c1.9-6.2,3.6-11.5,5.1-15.7
		c3.3,0,6.6,0,9.9,0c-2.9,8.7-5.2,16.2-6.8,22c-2,6.9-4,14.1-6,23.9c-1.1,5.5-1.9,10-2.5,13.3C571.4,579.3,567.8,579.3,564.3,579.3z
		"/>
                        </g>
                        <path id="richcover2" class="strich1" d="M330.2,459.6c0,0-51.5-29.4-51.3-29.7l0,0c0.6-0.1,0.9-1.3,0.9-1.3c0.2-0.7,1-1.6,2.7-3.6
	c2-2.2,4.8-3.6,6.5-4.4c2-0.9,5.1-2.1,9.1-2.6C308.8,431.9,319.5,445.8,330.2,459.6z"/>
                        <path id="richback_x5F_bumper_x5F_grey" class="strich5" d="M157.3,570c-4.6-1-9.3,0.5-12.4,4c-6.8,7.6-14.7,21.9,4.5,35.2
	c0,0,3.3,2.9,10.1,3.3c6.8,0.3,32.5-0.3,38.4-4.9c4.3-3.4,8.6-11,10.6-14.8c1-1.9,1.5-3.9,1.4-6c-0.1-3-1-6.7-5.2-7.1
	C199.3,579.1,170.4,572.9,157.3,570z"/>
                        <g id="richintake">
                            <path id="richair_x5F_intakeshadow" class="strich19" d="M674.8,450.6h33.9c0,0-8.4-8-19.5-8.5C678,441.7,674.8,450.6,674.8,450.6z"/>
                            <path id="richair_x5F_intake1" class="strich18" d="M595.1,475c0,0,56.8-7.2,68.9-5.4l7.2-2.2c-0.3-2.3-1-9.6,3.6-16.7
		c1.2-1.9,4.3-6.5,10.1-8.3c10.1-3.1,19,5.3,19.4,6.6c0,0.1,0.4,1.4,0.4,1.4l0,0h8.2c0,0-11.9-28.4-71.5-10.4
		C641.3,440.1,604,449.6,595.1,475z"/>
                            <path id="richair_x5F_intakefront" class="strich18" d="M664.5,468.5c0,0-2.6-26.4,20.2-32.7c0,0,16.5-2.4,27.7,14.5h-6.7
		c-1.1-1.5-4.3-5.5-10.3-7.4c-6.6-2.1-12.2-0.2-13.8,0.4c-1.8,1.1-4.3,2.9-6.4,5.8c-5.2,7.3-3.6,15.7-3.2,17.5
		C672.1,466.5,666.9,466.9,664.5,468.5z"/>
                        </g>
                        <g id="richheadlights">
                            <path id="richheadlightleft1" class="strich5" d="M903.7,493.5c0,0,36.8,22.4,42.1,38.6c5.3,16.1-2.8,17.9-7,16.8
		c-4.2-1.1-17.5-7.7-22.8-11.9s-26.7-29.4-26.7-37s2.8-7.6,5.6-8.3C897.7,491,903.7,493.5,903.7,493.5z"/>
                            <path id="richheadlightleft2" class="strich20" d="M901.4,501.4c0,0,0-0.7,0.6-1.2c1.2-1,3.9,0.3,5.7,1.2c7.4,4,14.2,10.4,14.2,10.4
		c6.5,6,9.8,9.2,13.8,13.9c0.7,0.8,4.5,5.5,4.8,10.8c0.1,1.9-0.3,2.7-0.9,3.1c-1.2,0.8-3.4-0.4-4.4-1c-13.9-8.1-19.3-14.2-19.3-14.2
		C911.8,519.8,906.1,512.2,901.4,501.4z"/>
                            <path id="richheadlighright1" class="strich5" d="M792.9,525.2c0.2-0.6,1.1-5.8,5.2-6.8c1.6-0.4,3.4-0.7,5.4-0.8
		c14.5-0.7,25.3,9.4,38.8,22c11.6,10.8,14.7,17.1,16.1,20.3c1.6,3.6,6.6,15.4,1.8,20.2c-4.2,4.3-13.7,1.1-19.2-0.8
		c-11-3.7-17.8-10-27.1-18.8c0,0-9-8.5-17.6-22.6C794,534.5,791.6,530,792.9,525.2z"/>
                            <path id="richheadlightright2" class="strich20" d="M806.5,525.4c5.7,0.6,11.7,3.8,18.9,9.1c2.6,1.9,7.5,5.8,13,11.5
		c5.3,5.6,7.8,9.4,9.5,13.5c1,2.3,3,7,1.2,8.7c-1.4,1.3-4.6-0.2-7-0.9c-7.2-2.2-35.4-28.2-38-32.8s-3.5-4.7-3.3-8
		C801,524.6,805.3,525.2,806.5,525.4z"/>
                        </g>
                        <g id="richgrille">
                            <polygon id="richgrillefrontbase" class="strich21" points="916.7,580.9 910.1,583.8 822.4,491.6 823.5,471.9 858.4,484.5 940.5,572.3
			"/>
                            <line id="richgrilleline" class="strich14" x1="917.3" y1="580.9" x2="820.7" y2="478.7"/>
                            <line id="richgrilleline_1_" class="strich14" x1="932.8" y1="584.7" x2="826.3" y2="472.5"/>
                            <line id="richgrilleline_2_" class="strich14" x1="934.8" y1="576.2" x2="838.3" y2="474.1"/>
                            <polygon id="richgrille1" class="strich5" points="798,460.5 798,493.6 812.6,492.3 815,462.6 	"/>
                            <polygon id="richgrille2" class="strich5" points="889.3,591.9 798,493.6 812.6,492.3 903.2,586.6 	"/>
                            <path id="richgrille3" class="strich22" d="M940.5,559.1l-77.4-80c0,0-23.2-11-48.2-16.4l-2.4,29.7l90.6,94.3l6.9-2.9l-87.7-92.2
		l1.1-19.7l35,12.6l82.1,87.8L940.5,559.1L940.5,559.1z"/>
                        </g>
                        <g id="richbumper">
                            <path id="richbumperfront1" class="strich5" d="M777,616.2c0,0,117.7-13.7,159-46.6c0.7-0.6,1.5-1.1,2.4-1.6c2.4-1.3,8-4.3,12.5-6.8
		c6-3.3,15.4,10.7,15.4,10.7v15c0,0-91.9,69.1-185.9,63.5c0,0-15.2,3.4-23.2-17.8C757.2,632.6,750.4,617.1,777,616.2z"/>
                            <path id="richbumperfrontlefttooth" class="strich5" d="M812.9,608.7c0,0,0.6-18.2,12.5-21.6c11.9-3.5,39.3,19.7,23.2,63.6
		c0,0-4.8,11.5-20,10.1c0,0-9.8-0.7-9.5-12c0,0,12.8-2.7,14.2-12.2c1.3-9.2-2.6-35.1-19.2-26.4c-0.5,0.3-1.1-0.1-1.1-0.7v-0.8
		L812.9,608.7L812.9,608.7z"/>
                            <path id="richbumperfrontlefttooth_1_" class="strich5" d="M940.5,564.9c0,0,0.5-17.4,11.3-20.7c10.7-3.3,35.3,17.9,20.7,59.9
		c0,0-4.2,10.9-18,9.5c0,0-8.2-1.7-9.1-10.8c-0.1-1.2,0.5-2.3,1.6-2.8c3-1.4,9.1-5,10-11.7c1.2-8.9-0.6-30.4-15.5-22.1
		c-0.4,0.2-1-0.1-1-0.6V564.9z"/>
                        </g>
                        <path id="richline" class="strich23" d="M409,398c0,0-4.7,23.3,0,27.5s10.8,8.6,10.8,8.6"/>
                        <g id="richscarf_1_">
                            <path id="richscarf" class="strich24" d="M210,382c0,0-1.7,5.1,3,17.3c0,0-1.3,9.1-6.4,13.4c0,0,23.9-12.6,53.4,1.6c0,0,7.7,1.8,12-6.7
		s19.6-3.2,23.1-2.5c3.4,0.8,9.5,2,9.5,2s10.3,7.3,13,7.3s12.6-11.8,12.6-11.8s40.9,16.9,68.6-3.4c0,0,11.9-12.6-6.8-14.4
		c0,0,2.9-12.6-7-13.6s-11-0.8-11-0.8h-2.3l2.3,12c-2.5,1.7-11.6,7.5-24,6.1c-8.4-1-14.3-4.9-17-6.9c0.4-0.3,1.4-1,1.9-2.3
		c0.7-1.6,0.5-3,0.4-3.5c-5.7,0.4-10.4,3.4-12.1,7.8c-0.6,1.5-0.8,3.3-0.4,5.5l-0.1,3.8c0,0-4-0.3-4.5,1.9c0,0-12.3-5.9-18.2-0.1
		c0,0-22.6-7.3-32.6-0.3C267.3,394.3,221.1,378.4,210,382z"/>
                            <path id="richline_3_" class="strich23" d="M362.6,387.5c3.1-0.5,7.8-1.6,12.7-4.8c2-1.3,3.6-2.7,4.8-4"/>
                            <path id="richline_4_" class="strich23" d="M359.4,393.9c0,0,24.4,2.1,32.5-9"/>
                            <path id="richline_5_" class="strich25" d="M304.5,392.4c0,0-9.6,6.9,0,14.5"/>
                        </g>
                        <g id="richsleeve_1_">
                            <path id="richsleeve" class="strich13" d="M359,463.5c0,0-32.8-35.6-36.9-43c-4.2-7.4-4.5-11-4.5-13.1s0.6-20.3,15.5-19.7l19.5,13.6
		c0,0,4.4,0.4,4.4,1.5s5.7,0.9,5.7,0.9S344.8,414.3,359,463.5z"/>
                            <path id="richsleeveshadow2" class="strich26" d="M376.5,422.2c0,0-0.9-15.9-13.9-18.3c-0.6,0.5-1.3,1.1-2.1,2c-1.8,2-2.7,3.8-3.3,5
		c-0.6,1.3-1.4,3-2,5.2L376.5,422.2z"/>
                            <path id="richsleeveshshadow1" class="strich26" d="M374.8,438.1c0,0-4.8,24.4-11.1,26.5c0,0-2.4,1.4-4.7-1.2
		c-1.2-4.1-2.4-8.7-3.3-13.8c-1-5.2-1.6-10.1-1.9-14.5c3.3,0.3,6.7,0.6,10.2,1.1C367.7,436.9,371.4,437.5,374.8,438.1z"/>
                            <path id="richline_1_" class="strich25" d="M348.2,438.7c0,0-5.8-33.9,12.7-34.9"/>
                            <line id="richline_2_" class="strich25" x1="347.3" y1="403.3" x2="352.6" y2="401.4"/>
                        </g>
                        <g id="richhead">
                            <path id="richheadbase" class="strich27" d="M332.9,381.6c0.4-0.3,1-0.8,1.4-1.6c0.7-1.2,0.7-2.3,0.8-3.4c0.1-1.4,0.6-3.6-0.2-6.2
		c-2.8-10.2-5.3-9.4-7.1-13.7c0,0-0.8,13-10.3,14.9c0,0-6.9,0-9.8-4.8c0,0-21.2-3-27.1-22.8c-6-19.7,6.9-26.3,6.9-26.3
		s-18.9-37,21.2-60.2c40.1-23.1,73.3-18.1,88.1-8.4c14.9,9.8,37.8,38.7,38.2,51c0.4,12.3-9.8,16.1-9.8,16.1l2.5,3.6
		c0,0,17.5,5.5,18.8,17.7c0,0,10.7,4.4,5.5,13.8s-16.2,3.7-16.2,3.7s-3.9,3.9-6.8,0.7c-2.8-3.3-13.3,19.5-13.3,19.5
		s-12.9,11.3-13.3,15.8c0,0-12.9,4.4-17-0.9c-0.1-0.2-0.1-0.1-0.5-0.5c-4.2-4.1-11.1-7.3-11.1-7.3c-1.4,1.1-3.8,2-6.6,3.2
		c-1.4,0.6-7.4,3.3-15.5,2.9C342.4,388.1,335.6,383.7,332.9,381.6z"/>
                            <path class="strich27" d="M374.8,376.2c0,0,11.6,15.1,15.1,16.3"/>
                            <path class="strich23" d="M327.9,357.6c0,0,8.8,11.9,19.4,13.9"/>
                            <path class="strich23" d="M360.8,291.5c0,0,4-9.3,12-11.4"/>
                            <path class="strich23" d="M368.5,288.7c0,0,3.7-4.3,10.8-4.9"/>
                            <path class="strich23" d="M410.5,286.2c0,0,12.3,3.4,13.9,2.5"/>
                            <path class="strich23" d="M366.8,299.5c0,0,0.9-8.9,8-9.4s17.3-0.9,28.5,1.4s25.4,3.1,25.4,3.1"/>
                            <line class="strich23" x1="362.6" y1="297.7" x2="367.7" y2="296"/>
                            <path class="strich23" d="M428.8,337.9c0,0-0.7,5.2,1.2,6.3"/>
                            <path class="strich23" d="M428,340.3c0,0-9.6-0.1-9.7,6.8s8.3,6.9,8.3,6.9"/>
                            <line class="strich23" x1="411.8" y1="351.9" x2="418.4" y2="346.2"/>
                            <path id="richmustasche" class="strich28" d="M442.1,365.6c0,0-5.6-8.3-12.7-9.8s-10.1-2.8-17,0s-9,12.1-9,12.1s-0.9,4.9-3.8,6
		c-2.8,1.1-3.3,4.3-2.4,6.4s10.2-3.3,10.2-3.3s4.9,0.8,5.8-1.7c0,0,2.7,2.1,5.3,0c0,0,1.7,3.1,5.6,0c0,0,2.2,1.1,5.3-3.1
		c0,0,1.6,2.1,3.4-3.7c0,0,2.4,5.6,3.8-1.1l2.6,3.2l-1.1-6.2L442.1,365.6z"/>
                            <path id="richhair" class="strich28" d="M282.8,322c0,0-3.6-9.3-8.4-14.1c-4.8-4.8-4.1-15.1-1.4-20.4s5.5-20,25.6-27.9l-7.2-2.6h10.8
		l-3.4-6l5.5,3.1v-5.7l3.6,3.6l3.1-15.8l-1.6,14.1c0,0,11.1-11.5,18.5-12.9c0,0-4.5,4.1-4.8,8.1c0,0,16.5-15.8,54.2-9.3
		c0,0,18.4,4.3,25.8,12.4c0,0,18.6,5.7,23.4,17.9c0,0-8-7.6-16.1-6.7c0,0-9.5-9.3-15-11.9l2.3,2.4c0,0-2.8-1-6.6-0.7l6.6,4.5
		c0,0-5.9-2.4-9.2-2.4l1.3,3.1c0,0-11.3-8.4-21.4-7.9v2.1l-7.7-1.9l4.3,6l-6-2.9v4.3l-5.5-6l-1,6.2l-4-6.4c0,0-1.7,3.8-4.3,5.7
		c-2.6,1.9-2.9-5.5-2.9-5.5s-0.2,6-2.4,6.4s-6.2-2.4-6.2-2.4l1.4,5.7l-8.4-0.7l3.6,4.8c0,0-5.9-1.7-9.6-1l3.4,4.3l-6.4-1.7
		c0,0-1.2,3.8,1.7,6c0,0-11,0.2-4.5,11s18.9,11.2,23.5,23.9l-5.6-2.6c0,0,1.9,2.6,1.2,6l-5.3-3.6c0,0,3.4,5.7,2.9,10.5l-4.8-2.4
		c0,0-1.4,4.3,1.9,9.1l-6-1.4l1.4,6.2l-6.9-5.3l1.9,7.9c0,0-4.8-12.7-19.6-12.7C284,316.7,282.8,322,282.8,322z"/>
                            <polygon class="strich29" points="322.9,322.4 365.2,322.8 365.2,324.8 322.9,324.8 	"/>
                            <path class="strich29" d="M365.2,321.2c0,0-0.3,5.8,0,6.2c0.3,0.3,1.7,0.8,1.7,0.8h4.6v-7H365.2z"/>
                            <rect x="368.2" y="323.6" class="strich29" width="0.6" height="1.2"/>
                            <path id="richfrontglass" class="strich30" d="M372.1,325.5c0,0,0.7,16.1,5.8,23.2c5.1,7.1,13.4,17.8,26.2,6.2s13-24.8,13-24.8
		s3.3-11.1,14.6-9.1l11.6,7.4v-14c0,0-36.5,0.1-45.7,1.3s-22.1,2.7-24.9,4.9C372.6,320.6,372,323,372.1,325.5z"/>
                            <path id="richear" class="strich23" d="M320,357.6c0,0-2-2.8-5.4-2.6c-3.4,0.2-5.9,1.8-10,1.3s-11.9-3.7-14.5-8.3
		c-2.6-4.6-4.6-13.7-2.8-18.9c1.8-5.2,10.8-4.2,10.8-4.2s8.7,1.6,10.7,7.2s-1.6,7.8,4.2,10c5.8,2.2,7,5.8,7,5.8"/>
                            <path id="richearline" class="strich23" d="M295,338.9c0,0-1.2-7.2,6.2-8.2c7.4-1,7.9,3.3,7.9,3.3l0.2,1.8c0,0-12.2-2.6-7.2,13.7"/>
                        </g>
                        <g id="moneyclowd">
                            <path id="moneycloud" class="strich31" d="M462.4,297.9l58.6-71.7c0,0-8.1,7.3-21.1,3.1c-13-4.2-8.8-21.1-8.8-21.1
		c-1.5,1.1-4.5,3-8.6,3.2c-7.9,0.3-16.5-6.2-17.2-14.6c-0.6-6.5,3.7-11.3,4.7-12.3c-1.3-0.3-8.7-2.1-12.7-9.2
		c-3.3-5.9-3.4-14,1.1-19.8c3.5-4.5,8.3-5.9,10-6.3c-2.3-1.9-9.5-8.2-10.8-18.6c-1.5-12.3,5.9-26,17.9-29.6
		c7.7-2.3,14.6,0.3,17.2,1.5c-0.1-1.9-0.5-14.7,9.8-24.3c0.8-0.8,10.7-9.7,23.1-8.2c12.3,1.5,24.1,12.9,24.1,12.9
		c1.1-2.1,8-14.4,22.8-18.1c2.3-0.6,18.8-4.3,30,6.9c6.6,6.7,7.8,15,8.1,18c8.8-9.1,21.7-12.7,33.3-9.1c13,4,22.9,16.7,22.3,29.6
		c-0.3,6.2-2.8,11.1-4.8,13.9c2.9,1.1,10.3,4.3,15.4,12.1c5.9,9,7.3,22,1.8,30.4c-5.6,8.6-19.2,13.4-19.2,13.4
		c1.1,2.7,3.4,9,1.6,16.6c-2.5,10.7-11.9,18.6-22.3,20.5c-13.1,2.3-22.8-5.8-24.2-7c0.5,3.2,1.1,9.8-2.2,16.4
		c-6.6,12.9-24.3,18-34,13.3c-5.5-2.7-12.2-10.3-12.2-10.3l0,0L462.4,297.9z"/>
                            <g id="moneycoins3">
                                <path id="moneyXMLID_44_" class="strich32" d="M568.2,104.7l0.2,20.3c0,0-0.2,7.1,21,7.9c21.3,0.8,22.5-7.9,22.5-7.9v-20.3"/>
                                <g id="moneyblicks_1_">
                                    <polygon id="moneyXMLID_43_" class="strich33" points="577.2,111 577.2,130.7 579.9,131.5 579.9,111.6 			"/>
                                    <polygon id="moneyXMLID_42_" class="strich33" points="582,111.9 582,131.9 582.6,131.9 582.6,112.1 			"/>
                                    <polygon id="moneyXMLID_41_" class="strich34" points="588.5,112.5 588.5,132.4 589.3,132.4 589.3,112.5 			"/>
                                    <polygon id="moneyXMLID_40_" class="strich34" points="590.4,112.5 590.4,132.4 592.5,132.5 592.5,112.5 			"/>
                                    <polygon id="moneyXMLID_39_" class="strich34" points="593.7,112.5 593.7,118.1 594.4,118.1 594.4,112.3 			"/>
                                    <polygon id="moneyXMLID_38_" class="strich35" points="606.3,109.8 606.3,120.9 607.4,120.3 607.4,109.5 			"/>
                                    <path id="moneyXMLID_37_" class="strich35" d="M608.6,108.7v15.5c0,0,2.9-2.2,3.3-3.3v-15.7C611.8,105.2,611,108,608.6,108.7z"/>
                                    <path id="moneyXMLID_36_" class="strich36" d="M574.1,129.9V110l-5.9-5.7v20.2C568.2,124.6,568.6,127.7,574.1,129.9z"/>
                                </g>
                                <ellipse id="moneyXMLID_35_" class="strich32" cx="590.1" cy="104.7" rx="21.7" ry="7.9"/>
                                <path id="moneyXMLID_34_" class="strich15" d="M568.3,110.2c0,0-0.2,7.1,21,7.9c21.3,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_33_" class="strich15" d="M568.3,115.4c0,0-0.2,7.1,21,7.9s22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_32_" class="strich15" d="M568.3,120c0,0-0.2,7.1,21,7.9c21.2,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_31_" class="strich15" d="M568.3,124.6c0,0-0.2,7.1,21,7.9s22.4-7.9,22.4-7.9"/>
                                <line id="moneyXMLID_30_" class="strich37" x1="568.3" y1="104.1" x2="568.3" y2="124.8"/>
                                <line id="moneyXMLID_29_" class="strich37" x1="611.7" y1="124.8" x2="611.7" y2="104.1"/>
                                <path id="moneyXMLID_28_" class="strich38" d="M589.6,110.1c0,0-13.8,0.8-17.4-4.5c-3.6-5.3,14-7.9,24.9-6.6
			c10.9,1.4,12.6,5.6,10.9,6.6c-1.8,0.9,1.2-4.6-11.3-4c-1.5,1.2-3,1.9-4,2.2c-4.5,1.8-9.3,1.5-10.9,1.2c-0.5-0.1-1-0.1-2-0.2
			c-1.3-0.1-1.9,0-2.4,0.3c-0.2,0.1-0.7,0.5-0.7,0.9c0,0.6,0.8,1,1.4,1.2c3.2,1.5,6.8,1.6,6.8,1.6c2.9,0.1,4.8-0.2,5,0.4
			C590.1,109.6,589.8,109.9,589.6,110.1z"/>
                            </g>
                            <g id="moneypack_1_">
                                <polygon id="moneyvertical_x5F_left_1_" class="strich39" points="496.4,144.3 496.4,160 578.3,197.1 578.3,179.1 		"/>
                                <polygon id="moneyvertical_x5F_front_1_" class="strich40" points="578.7,179.1 578.7,197.1 634,184.6 634,166.9 		"/>
                                <polygon id="moneytop_1_" class="strich41" points="547.2,137.7 496.6,144.3 578.7,179.1 634,166.9 		"/>
                                <polygon id="moneytop_x5F_pic_1_" class="strich39" points="510,145.2 578.5,174.8 619.1,165.9 544.4,140.5 		"/>
                                <path id="moneycircle_1_" class="strich42" d="M539.3,154.9c0,0-0.9-9.1,26-4.7c26.8,4.4,14.5,17.9-13.8,12.4
			C551.5,162.6,544,161.1,539.3,154.9z"/>
                                <polygon id="moneypaperline1_1_" class="strich36" points="527.1,157.3 527.1,173.8 543.1,181.1 543.1,164 		"/>
                                <polygon id="moneypaperline2_1_" class="strich43" points="593.7,153.3 543.1,164 527.1,157.3 577.8,148 		"/>
                                <polyline id="moneyXMLID_8_" class="strich37" points="543.1,181.1 543.1,164 593.7,153.3 		"/>
                                <polyline id="moneyXMLID_7_" class="strich37" points="527.1,173.8 527.1,157.3 577.8,148 		"/>
                            </g>
                            <g id="moneypack_2_">
                                <polygon id="moneyvertical_x5F_left_2_" class="strich39" points="505.6,128.4 505.6,144.1 587.5,181.3 587.5,163.3 		"/>
                                <polygon id="moneyvertical_x5F_front_2_" class="strich40" points="587.9,163.3 587.9,181.3 643.2,168.7 643.2,151 		"/>
                                <polygon id="moneytop_2_" class="strich41" points="556.3,121.8 505.8,128.4 587.9,163.3 643.2,151 		"/>
                                <polygon id="moneytop_x5F_pic_2_" class="strich39" points="519.2,129.3 587.7,158.9 628.3,150 553.6,124.6 		"/>
                                <path id="moneycircle_2_" class="strich42" d="M548.5,139.1c0,0-0.9-9.1,26-4.7c26.8,4.4,14.5,17.9-13.8,12.4
			C560.7,146.7,553.2,145.2,548.5,139.1z"/>
                                <polygon id="moneypaperline1_2_" class="strich36" points="536.2,141.4 536.2,157.9 552.3,165.2 552.3,148.1 		"/>
                                <polygon id="moneypaperline2_2_" class="strich43" points="602.9,137.5 552.3,148.1 536.2,141.4 587,132.1 		"/>
                                <polyline id="moneyXMLID_10_" class="strich37" points="552.3,165.2 552.3,148.1 602.9,137.5 		"/>
                                <polyline id="moneyXMLID_9_" class="strich37" points="536.2,157.9 536.2,141.4 587,132.1 		"/>
                            </g>
                            <g id="moneypack">
                                <polygon id="moneyvertical_x5F_left" class="strich39" points="493.2,109.6 493.2,125.3 575.1,162.5 575.1,144.5 		"/>
                                <polygon id="moneyvertical_x5F_front" class="strich40" points="575.5,144.5 575.5,162.5 630.8,149.9 630.8,132.2 		"/>
                                <polygon id="moneytop" class="strich41" points="543.9,103 493.4,109.6 575.5,144.5 630.8,132.2 		"/>
                                <polygon id="moneytop_x5F_pic" class="strich39" points="506.8,110.5 575.3,140.2 615.9,131.3 541.1,105.8 		"/>
                                <path id="moneycircle" class="strich42" d="M536.1,120.3c0,0-0.9-9.1,26-4.7c26.8,4.4,14.5,17.9-13.8,12.4
			C548.3,128,540.8,126.4,536.1,120.3z"/>
                                <polygon id="moneypaperline1" class="strich36" points="523.8,122.7 523.8,139.1 539.9,146.4 539.9,129.4 		"/>
                                <polygon id="moneypaperline2" class="strich43" points="590.5,118.7 539.9,129.4 523.8,122.7 574.5,113.3 		"/>
                                <polyline id="moneyXMLID_1_" class="strich37" points="539.9,146.4 539.9,129.4 590.5,118.7 		"/>
                                <polyline id="moneyXMLID_5_" class="strich37" points="523.8,139.1 523.8,122.7 574.5,113.3 		"/>
                            </g>
                            <g id="moneycoins2">
                                <path id="moneyXMLID_18_" class="strich32" d="M484.9,164.4l0.2,20.3c0,0-0.2,7.1,21,7.9c21.3,0.8,22.5-7.9,22.5-7.9v-20.3"/>
                                <g id="moneyblicks">
                                    <polygon id="moneyXMLID_16_" class="strich33" points="493.9,170.7 493.9,190.4 496.6,191.2 496.6,171.3 			"/>
                                    <polygon id="moneyXMLID_19_" class="strich33" points="498.7,171.7 498.7,191.6 499.3,191.6 499.3,171.9 			"/>
                                    <polygon id="moneyXMLID_20_" class="strich34" points="505.2,172.3 505.2,192.2 506,192.2 506,172.3 			"/>
                                    <polygon id="moneyXMLID_21_" class="strich34" points="507.2,172.3 507.2,192.2 509.3,192.2 509.3,172.3 			"/>
                                    <polygon id="moneyXMLID_22_" class="strich34" points="510.4,172.3 510.4,177.8 511.2,177.8 511.2,172.1 			"/>
                                    <polygon id="moneyXMLID_23_" class="strich35" points="523,169.6 523,180.7 524.2,180 524.2,169.2 			"/>
                                    <path id="moneyXMLID_25_" class="strich35" d="M525.3,168.4v15.5c0,0,2.9-2.2,3.3-3.3V165C528.6,165,527.7,167.7,525.3,168.4z"/>
                                    <path id="moneyXMLID_24_" class="strich36" d="M490.9,189.7v-19.9l-5.9-5.7v20.2C485,184.3,485.3,187.4,490.9,189.7z"/>
                                </g>
                                <ellipse id="moneyXMLID_6_" class="strich32" cx="506.8" cy="164.4" rx="21.7" ry="7.9"/>
                                <path id="moneyXMLID_11_" class="strich15" d="M485,169.9c0,0-0.2,7.1,21,7.9c21.3,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_13_" class="strich15" d="M485,175.1c0,0-0.2,7.1,21,7.9c21.2,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_14_" class="strich15" d="M485,179.7c0,0-0.2,7.1,21,7.9c21.3,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_15_" class="strich15" d="M485,184.3c0,0-0.2,7.1,21,7.9c21.3,0.8,22.4-7.9,22.4-7.9"/>
                                <line id="moneyXMLID_12_" class="strich37" x1="485" y1="163.8" x2="485" y2="184.5"/>
                                <line id="moneyXMLID_17_" class="strich37" x1="528.5" y1="184.5" x2="528.5" y2="163.8"/>
                                <path id="moneyXMLID_27_" class="strich38" d="M506.3,169.8c0,0-13.8,0.8-17.4-4.5s14-7.9,24.9-6.6c10.9,1.4,12.6,5.6,10.9,6.6
			c-1.8,0.9,1.2-4.6-11.3-4c-1.5,1.2-3,1.9-4,2.2c-4.5,1.8-9.3,1.5-10.9,1.2c-0.5-0.1-1-0.1-2-0.2c-1.3-0.1-1.9,0-2.4,0.3
			c-0.2,0.1-0.7,0.5-0.7,0.9c0,0.6,0.8,1,1.4,1.2c3.2,1.5,6.8,1.6,6.8,1.6c2.9,0.1,4.8-0.2,5,0.4
			C506.8,169.3,506.5,169.6,506.3,169.8z"/>
                            </g>
                            <g id="moneycoins2_1_">
                                <path id="moneyXMLID_61_" class="strich32" d="M534.1,186.4l0.2,20.3c0,0-0.2,7.1,21,7.9c21.3,0.8,22.5-7.9,22.5-7.9v-20.3"/>
                                <g id="moneyblicks_2_">
                                    <polygon id="moneyXMLID_60_" class="strich33" points="543.1,192.7 543.1,212.4 545.8,213.2 545.8,193.3 			"/>
                                    <polygon id="moneyXMLID_59_" class="strich33" points="547.9,193.7 547.9,213.6 548.5,213.6 548.5,193.9 			"/>
                                    <polygon id="moneyXMLID_58_" class="strich34" points="554.4,194.3 554.4,214.2 555.2,214.2 555.2,194.3 			"/>
                                    <polygon id="moneyXMLID_57_" class="strich34" points="556.3,194.3 556.3,214.2 558.4,214.2 558.4,194.3 			"/>
                                    <polygon id="moneyXMLID_56_" class="strich34" points="559.6,194.3 559.6,199.8 560.4,199.8 560.4,194.1 			"/>
                                    <polygon id="moneyXMLID_55_" class="strich35" points="572.2,191.6 572.2,202.7 573.4,202 573.4,191.2 			"/>
                                    <path id="moneyXMLID_54_" class="strich35" d="M574.5,190.4v15.5c0,0,2.9-2.2,3.3-3.3V187C577.8,187,576.9,189.7,574.5,190.4z"/>
                                    <path id="moneyXMLID_53_" class="strich36" d="M540.1,211.7v-19.9l-5.9-5.7v20.2C534.1,206.3,534.5,209.4,540.1,211.7z"/>
                                </g>
                                <ellipse id="moneyXMLID_52_" class="strich32" cx="556" cy="186.4" rx="21.7" ry="7.9"/>
                                <path id="moneyXMLID_51_" class="strich15" d="M534.2,191.9c0,0-0.2,7.1,21,7.9c21.2,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_50_" class="strich15" d="M534.2,197.1c0,0-0.2,7.1,21,7.9s22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_49_" class="strich15" d="M534.2,201.7c0,0-0.2,7.1,21,7.9c21.3,0.8,22.4-7.9,22.4-7.9"/>
                                <path id="moneyXMLID_48_" class="strich15" d="M534.2,206.3c0,0-0.2,7.1,21,7.9c21.3,0.8,22.4-7.9,22.4-7.9"/>
                                <line id="moneyXMLID_47_" class="strich37" x1="534.2" y1="185.8" x2="534.2" y2="206.5"/>
                                <line id="moneyXMLID_46_" class="strich37" x1="577.7" y1="206.5" x2="577.7" y2="185.8"/>
                                <path id="moneyXMLID_45_" class="strich38" d="M555.5,191.8c0,0-13.8,0.8-17.4-4.5c-3.6-5.3,14-7.9,24.9-6.6
			c10.9,1.4,12.6,5.6,10.9,6.6c-1.8,0.9,1.2-4.6-11.3-4c-1.5,1.2-3,1.9-4,2.2c-4.5,1.8-9.3,1.5-10.9,1.2c-0.5-0.1-1-0.1-2-0.2
			c-1.3-0.1-1.9,0-2.4,0.3c-0.2,0.1-0.7,0.5-0.7,0.9c0,0.6,0.8,1,1.4,1.2c3.2,1.5,6.8,1.6,6.8,1.6c2.9,0.1,4.8-0.2,5,0.4
			C556,191.3,555.7,191.6,555.5,191.8z"/>
                            </g>
                        </g>
                        <g id="lamborginicloud">
                            <path id="cloud" class="strich31" d="M269.5,289.1l-71.6-47c0,0,2.1,3.2,13.1-5.1s2.1-22.1,2.1-22.1c1.8-0.1,8.2-0.6,13.5-5.7
		c4.8-4.6,7.7-12.2,5.7-18.4c-2.4-7.7-12-12.5-12.1-12.3c0,0,0.3,0.3,0.5,0.6c1.4-1.3,8.3-7.4,9.1-17.8c0.1-1.9,0.9-12.2-7.1-19.6
		c-9-8.3-21-5.4-21.9-5.2c0.5-1.1,5.2-12.2-1.2-22.9c-5.7-9.5-15.9-11.3-19.1-11.7c-12.8-1.5-21.6,6.9-22.8,8.1l0,0
		c-0.2-2.3-1.3-9.8-7.4-15.4c-7.7-7.1-19.8-7.9-28.7-2.7c-10.1,5.9-11.9,17.1-12.1,18.7c-1.3-1.5-9.7-10.9-23.7-11.1
		c-1.1,0-15.8,0-23.9,10.5c-5.7,7.4-6.6,17.9-7.2,24.9l0,0c-1.6-0.6-15.8-5.6-28.8,2.9c-11.3,7.4-15.3,21.1-13.5,32.2
		c1.8,11.6,9.6,18.6,11.9,20.6c-2.1,1-11.4,5.8-15.2,16.6c-3.5,9.9-1.6,22.3,7.2,30.4c10.7,9.8,24.8,6.7,26,6.4
		c0,2.9,0.2,11.3,6.1,18.2c10,11.6,27.3,8.1,30.1,7.5c8.2-1.6,14-5.7,17-8.2c1,2.7,3.3,8,8.7,12.3c7.7,6.1,19.1,8.2,29,3.4
		c10.9-5.2,14.1-16,14.6-17.8L269.5,289.1z"/>
                            <g id="lamborgini">
                                <g id="in1">
                                    <path id="blackin" d="M48.3,186c0,0,18.9-10,25.4-10.3c0,0,18.4-4.1,26.1-2.7l7.4,27l-18.5,21.2l-22.5-6L48.3,186z"/>
                                    <path id="ins1" class="strich44" d="M71.7,191.5c0,0,2.2-11,12.2-14.5c0,0-5.1,3.9-5.9,10.5c-0.4,3.7,0.7,6.6,0.7,6.6
				c0.5,1.5,1.3,2.9,1.9,5.5c0.1,0.3,0.2,1.2,0.4,2.5c0.3,3.7,0,7.6-0.3,10.2l-8.9-2L71.7,191.5L71.7,191.5z"/>
                                    <path id="ind1" class="strich45" d="M60.7,187.4c0,0,7.1-8.1,13.8-12c0,0-12.2,10.8-13.1,12.9L60.7,187.4z"/>
                                    <path id="ind2" class="strich45" d="M67.6,189.7c0,0,4-9.9,11.2-12.8c7.2-2.9,9.1-3.4,9.1-3.4s-13.1,4.1-18.8,17.2L67.6,189.7z"/>
                                    <path id="ind3" class="strich45" d="M71.3,200.9c0,0,0.5,7.1,2,9.6l16.7,3.1v1.6l-20.5-4.7L71.3,200.9z"/>
                                    <polygon id="ind4" class="strich45" points="71.3,211.5 90.4,215.8 88.7,217.6 67.7,213.3 			"/>
                                </g>
                                <path id="wheelfront2" class="strich46" d="M171.6,223.6c0,0,4.3,7.3,8.8,8.2H193c0,0,4.2-0.7,8-8.2H171.6z"/>
                                <path id="bwheelshadow" d="M35.6,188.9c0,0-8.8,8.3-4.4,24.1S56,194.7,56,194.7L35.6,188.9z"/>
                                <g id="wheelback">
                                    <path id="btyre2" d="M37.8,230.7h14c0,0,3.8,0.1,5.1-6.1c1.3-6.2,7-30.8-19.6-27.1L37.8,230.7z"/>
                                    <path id="btyre1" class="strich46" d="M37.8,230.7c0,0-4-0.4-6.1-8.8c-2.1-8.4-0.2-18.9,1.9-22.3s5.4-1.8,5.4-1.8s5.9,6.6,4.6,21.6
				C43.6,219.5,43.3,230.5,37.8,230.7z"/>
                                    <ellipse id="bdisk1" class="strich47" cx="36.5" cy="214.1" rx="5.3" ry="13.3"/>
                                    <path id="bds1" class="strich48" d="M39,204.3c0,0-2.7-3.2-4.1,2.3c-1.4,5.5-1.1,10.2-0.8,12.1c0.3,1.9,0.5,6,3.9,6.6
				c0,0-1.4,0.6-2.9-0.6c-1.7-1.4-2.3-3.4-2.7-6.4c-0.3-2.3-0.9-6.1,0.6-10.8c0.6-2,1.6-5,3.4-5.1C37.5,202.3,38.5,203.5,39,204.3z"
                                    />
                                    <path id="bdhole1" class="strich49" d="M35.1,209.4c0,0-1.2,4.4-0.4,6.4c0,0,0.5,0.5,1.1-0.5C36.6,214.3,36.1,208.6,35.1,209.4z"/>
                                    <path id="bdhole2" class="strich49" d="M38.6,205.6c0,0-1,2.9-0.3,4.3c0.7,1.4,2.3,0,2.3,0s-0.4-4.1-1.5-5.2L38.6,205.6z"/>
                                    <path id="bdhole3" class="strich49" d="M41.1,211.7c0,0-3.1,1.4-0.7,6.1c0,0,0.4,0.3,0.6,0C41,217.5,41.2,212.1,41.1,211.7z"/>
                                    <path id="bdhole4" class="strich49" d="M39,219.5c0,0-0.8,3.4,0,4.5c0,0,1.5-2,1.3-3.6s-1.2-1.5-1.3-1"/>
                                    <path id="bdhole5" class="strich49" d="M35.4,218.2c0.1,0.1,0.3,0.4,0.4,0.6c0.3,0.9,0.4,1.8,0.5,3.1c0,0.6,0.1,1-0.1,1.1
				c-0.1,0.1-0.1,0-0.2,0c-0.1-0.3-0.3-0.7-0.5-1.1c-0.4-1-0.6-2-0.7-2.7c0-0.1,0-0.2,0.1-0.4C35.1,218.5,35.2,218.1,35.4,218.2z"/>
                                </g>
                                <g id="wheelfront">
                                    <path id="tyre" d="M101.6,234.1c0,0,13.1-1.2,15.1-1.8s7.5-3.8,7.9-6.3s4.2-27.4-7.6-27.5c-11.8-0.2-15,0-15,0L101.6,234.1z"/>
                                    <path id="tyreside" class="strich46" d="M105.6,233.2c-0.9,0.5-3.1,1.4-5.8,0.9c-2-0.3-3.3-1.3-3.9-1.7c-4.5-3.3-6.2-10.9-5.8-16.9
				c0.2-3.8,1.4-7.9,4.3-12.2c1.3-2,3.5-4.4,6.6-4.8c5.3-0.7,9.5,5.4,9.9,6.1c3,4.6,2.6,9.6,2.1,14.9c-0.5,5.4-2.1,8-2.5,8.7
				C108.9,230.8,106.9,232.4,105.6,233.2z"/>
                                    <path id="disk" class="strich47" d="M97.2,203.3c0,0-7.5,5-5.6,17.9c1.9,13,17.7,14.2,19-2.2C111.9,202.6,103.5,200.2,97.2,203.3z"/>
                                    <path id="fds1" class="strich48" d="M107,205.4c0,0-2-3.5-7-2.2c-4.9,1.3-6.5,5.8-7,6.7s-2.1,9.4,0,14.2c1.1,2.5,2.8,4.2,4.9,5.2
				c2.3,1.1,4.9,1,6.5,0.4c4.5-1.6,7.3-9.2,5.7-18.6c1.5,8.8-1,16-5.1,17.6c-1.1,0.4-4.1,1.2-6.8-0.4c-0.4-0.2-1.4-0.9-2.6-2.6
				c-1.6-2.2-2.5-5.4-2.5-10.5C93,207.7,99.4,199.8,107,205.4z"/>
                                    <path id="fdhole1" class="strich49" d="M97,208.5c0,0,2.2-2.9,3.9-2.8c0,0,1.4,5.4-1.9,6.7C95.7,213.5,96.6,209.1,97,208.5z"/>
                                    <path id="fdhole2" class="strich49" d="M106.4,206.1c0,0-5.6,2.5-3,7c0,0,1.4,1.2,3.1,0.9c1.4-0.3,2.6-1.4,2.9-2.8
				c0.2-1.2-0.5-2.3-1-3C107.6,207.1,106.4,206.1,106.4,206.1L106.4,206.1z"/>
                                    <path id="fdhole3" class="strich49" d="M110,218.7c0,0-3.9-4.6-6,0c0,0-0.9,4.8,2.6,5.9C106.6,224.6,108.7,226.2,110,218.7z"/>
                                    <path id="fdhole4" class="strich49" d="M98.2,226.3c0,0-0.2-7.3,3.3-4.3c0,0,2.5,2,1.6,5.5C103.1,227.4,100.8,228.9,98.2,226.3z"/>
                                    <path id="fdhole5" class="strich49" d="M94.9,214.7c0,0,0.2-1.8,1.6-0.7s1,5.4,0.8,6.2s-2.1,2.7-2.4,0.4
				C94.6,218.5,94.8,215.2,94.9,214.7z"/>
                                </g>
                                <g id="caseall1">
                                    <path id="_carcase1" class="strich50" d="M30.9,213c0,0-6.4-20.2,3.8-26c0,0,46.4-23,110.8-14.3c-20.4,0.1-35.3,0.5-37.8,0.7
				c-2,0.2-3.6,1.1-3.6,1.1c-0.5,0.3-1.4,0.8-2,1.6c-1.1,1.5-0.7,3.4,0,7.4c0.8,4.5,1.2,6.8,1.1,6.8c-0.4,0.1-3.6-10.8-3.2-12.7
				c0.1-0.8,0.1-1.3,0.1-2.2c0-0.3-0.1-0.7-0.1-0.7c0-0.1-0.2-0.9-0.6-0.9l0,0c-0.1,0-1.1,0-2-0.1c-2.2-0.1-9.6-0.3-13.2,0
				c-3.7,0.3-9.2,1.3-15.8,4.5c0.7-0.6,1.4-1.3,2-1.9c0,0-10.5,4-18.6,9c0,0,11.9,0.2,14.5,1.8s2.3,2.1,2.3,2.1s2.3,0.6,3,1.6
				l1.1-0.2c0,0-0.2,13.4-0.9,17.7c0,0-0.4,1.8,0.9,3.5l-5.1,1.5l22.6,4.5c0,0,0.4,8,2.8,10.6l-46.4-3.5c-0.6-1.1-1.4-2.8-2.1-5
				c-1-3.4-0.8-5.1-1.6-10.4c-0.5-3.5-0.8-5.3-1.4-6.9c-0.3-0.8-2.9-7.7-6.5-7.6c-1,0-1.7,0.5-2,0.8c-3,2.1-2.7,7.4-2.4,13.2
				C30.6,210.7,30.8,212.1,30.9,213z"/>
                                    <polygon id="carshadow1" class="strich51" points="43.6,184.5 70.1,175.7 50.1,185.2 			"/>
                                    <path id="cs5" class="strich52" d="M67.2,187.9l4.6,2.9h1.1c-0.3,5.2-0.6,9.2-0.8,12c-0.3,3.3-0.5,5-0.7,5s-0.3-2.8-0.3-8.5
				c-1.6,0-3.3-0.1-5.1,0c-1.5,0-2.9,0.1-4.3,0.2c-0.6-5.8,0.8-10.5,3.5-11.5C65.6,187.9,66.3,187.7,67.2,187.9z"/>
                                    <path id="cs4" class="strich52" d="M70.7,203.8l-0.1-0.3l-0.7-2l-2.7,3.9l3.5,0.5v0.6h-5.2c0,0-1-1.2,0.3-3.5l2.4-3h2.5L70.7,203.8
				L70.7,203.8z"/>
                                    <path id="cs6" class="strich53" d="M61.6,199.5L39,197.8c0,0,3.3,4.1,4.1,12.8s0,0.3,0,0.3l24,3.3c-0.6-0.2-1.3-0.6-2-1.2
				c-2.7-2.2-3.1-5.5-3.2-6.4L61.6,199.5z"/>
                                    <path id="cs7" class="strich54" d="M43.1,210.5c0.1,1.7,0.3,3.5,0.6,5.4c0.2,1.1,0.4,2.2,0.6,3.2c16.2,3.1,32.5,6.2,48.7,9.3
				c0,0-3-3.2-2.8-10.6L43.1,210.5z"/>
                                    <path id="cs8down" class="strich55" d="M44.3,219.1c0,0,0.6,3.9,2.3,5.9l46.4,3.5l-0.9-1.4c0,0-32.2-6.7-47.9-8.3L44.3,219.1z"/>
                                    <path id="cs9" class="strich56" d="M61.6,199.5c0,0-0.5,13,4.3,14.5c0.1,0,0.3,0.1,0.5,0.1c5.3,0.8-0.2,0-0.2,0l1.9-0.9
				c0,0-4.4-1.4-5.5-13.8L61.6,199.5z"/>
                                    <path id="cs10" class="strich57" d="M43.1,210.5l19.7,0.2c0,0,1.7,3.1,3.5,3.4L43.1,210.5z"/>
                                    <path id="cs11" class="strich58" d="M30,209.4c0,0-2.6-11.4,0.8-18.3C30.8,191.1,29.5,207.3,30,209.4z"/>
                                    <path id="cs3" class="strich59" d="M30.2,209.1c0,0-2.7-14.4,4.5-16.7c0,0,4.7-0.2,6.4,7c0,0-3.7-6.1-7.7-4
				C33.3,195.4,28.9,198.2,30.2,209.1z"/>
                                    <g id="airin">
                                        <path id="cs12" class="strich60" d="M50.1,221.2c0,0,3.1-10.4,4.7-10.8c1.6-0.4,3.4,0.8,3.4,0.8s-4.4,7.3-5.3,10.7L50.1,221.2z"/>
                                        <path id="cs13" class="strich61" d="M50.1,221.2l2.8,0.7h0.8v1.9c0,0-1.4,1-3.6,0.7C50.1,224.5,49.5,223.1,50.1,221.2z"/>
                                        <path id="csb1" d="M58.2,223.4c0,0-3.6,0.6-5.1,0.5c0,0,0-10.1,4.1-12.8c0,0,5.6,2.6,7.5,7.7c0,0,0.8,2.7-0.6,3.1
					C62.7,222.5,58.2,223.4,58.2,223.4z"/>
                                    </g>
                                    <path id="csclick" class="strich62" d="M66.2,187.4c0,0-3.5,2.3-4.6,5.3c0,0-0.3,3.8,0,6.8l9.4-0.1V199h-6.1c0,0-0.7-4.7,0.9-4.7
				s5.5,0.1,5.5,0.1v-1.8l-7.2-0.2c0,0-0.9-0.3-0.7,6.7h-0.8C62.7,199.1,60.9,192.5,66.2,187.4z"/>
                                </g>
                                <path id="door2black1" class="strich63" d="M166.9,187.4c0,0-7.9-20.9-11.5-31.7c-3.7-10.8-0.1-11.5,1.1-12.3c0,0,1.1-0.6-0.8-2.7
			c-1.9-2.2-1.1-2.1,0.8-7.7l7.8,15.6l17.6,39.9l-13.7,0.9L166.9,187.4z"/>
                                <path id="dor2glass" class="strich64" d="M181.5,186.6l-27-61.4c0,0,0.5-1.8,8.4,6.6L181.5,186.6z"/>
                                <path id="door2black2" class="strich63" d="M153.8,120.8c0,0,6.3,2.8,7.6,10c0,0-2.7-3.7-6.4-5L153.8,120.8z"/>
                                <path id="frontcase" class="strich50" d="M90.3,215.7c0,0-0.4-21.2,10.2-17.9c0,0,5.1,0.1,8.5,18.6c0,0,0,11,2.8,12.9l93.5-3.3
			c0,0,3-1.8,0.9-3.8l-0.9-14.1c0,0-1.9-8.5-10.7-15.7c0,0-6.2-3.3-9.2-3.8c0,0-12.7-27.3-20.4-60.2c0,0-3.6-0.7-3.6,2.3
			s11.2,30.2,19.3,54.5c0,0-9.3-23.6-17.7-41.2s-8.5-22.7-8.5-22.7s-1-1.2-3-1.2c0,0,13.2,34,29.5,68.5c0,0-1.7-1.5-13.9,0.2
			l-35.7,1.2c0,0-25.2-1.8-33.3,1.7C90,195.2,88.7,210.7,90.3,215.7z"/>
                                <path id="door2mirror" class="strich63" d="M176.9,174.2l3-2c0,0-0.7-4,1.3-5.9l9.2-3.3c0,0,2.7,6.6-11.7,16L176.9,174.2z"/>
                                <path id="frontcase_1_" class="strich65" d="M90.3,215.7c0,0-0.4-21.2,10.2-17.9c0,0,5.1,0.1,8.5,18.6c0,0,0,11,2.8,12.9l93.5-3.3
			c0,0,3-1.8,0.9-3.8l-0.9-14.1c0,0-1.9-8.5-10.7-15.7c0,0-6.2-3.3-9.2-3.8c0,0-12.7-27.3-20.4-60.2c0,0-3.6-0.7-3.6,2.3
			s11.2,30.2,19.3,54.5c0,0-9.3-23.6-17.7-41.2s-8.5-22.7-8.5-22.7s-1-1.2-3-1.2c0,0,13.2,34,29.5,68.5c0,0-1.7-1.5-13.9,0.2
			l-35.7,1.2c0,0-25.2-1.8-33.3,1.7C90,195.2,88.7,210.7,90.3,215.7z"/>
                                <g id="glass">
                                    <path id="glassblack" d="M102.8,190.5c0,0-0.1-0.2-0.3-0.5c-1.5-2.7-7.4-15.3,7.3-16.7c16.4-1.6,35.8-0.5,35.8-0.5
				s26.7,9.6,32.7,15.4l-32.2,4.4L102.8,190.5z"/>
                                    <path id="glassglass" class="strich66" d="M131.1,186.6c0,0-7.2-0.1-16.5,1.5s-9.3-0.3-11-4.7s-1.2-8.3,8.6-8.7s23.6,0,23.6,0
				s10.3-0.6,18.3,4.3c8,4.9,20.2,10,7.3,8.2C148.5,185.5,131.1,186.6,131.1,186.6z"/>
                                </g>
                                <path id="frontcenter" class="strich67" d="M140,206.5c0,0,37.5,0.1,57.2-1.3c0,0-8.2-6.8-30.1-16.4c0,0-17.4,0.9-35.7,1.2
			C131.4,190,133.3,192.7,140,206.5z"/>
                                <path id="fronttop1" class="strich68" d="M114.6,196c0,0,16.8,0.7,21.6,1.7c0,0-3.9-6.9-5.3-8c0,0-26.4-0.7-31.9,1.7
			C99,191.4,104.1,190.4,114.6,196z"/>
                                <path id="fronttop2" class="strich68" d="M196.1,193.7c0,0-8.1-6.1-17.8-5.6c-9.8,0.6-10.9,0.7-10.9,0.7l16.6,8.1L196.1,193.7z"/>
                                <path id="fs1" class="strich69" d="M90.3,215.7c0,0-5-25.4,16.3-23c-0.6,0.5-1.5,1.4-1.9,2.7c-0.1,0.4-0.5,1.6,0.1,4.8
			c0.2,1.3,0.7,3.1,1.5,5.2c-0.2-0.7-0.5-1.6-1.1-2.7c-0.7-1.3-2.7-5-6.1-5.3c-1.5-0.1-2.7,0.4-3,0.6c-0.9,0.4-2.2,1.4-3.3,4
			C90.3,207,90.3,213.7,90.3,215.7z"/>
                                <path id="fs2" class="strich70" d="M106.4,206.1c0,0,38.3,1.1,65.6,0s31.8-1.9,31.8-1.9s2.7,3.5,2.4,18.1c0,0,1.6,2.2-0.9,3.8
			c0,0-89.2,3.5-93.5,3.3c-0.1-0.1-0.4-0.3-0.6-0.6c-0.6-0.8-0.9-1.5-1-2c-0.8-3-1.1-6.5-1.1-6.5c-0.3-4.6-0.3-4.2-0.3-4.7
			c-0.4-2.6-1-4.8-1.4-6.3C107,207.9,106.7,206.8,106.4,206.1z"/>
                                <path id="frontgrid" class="strich71" d="M135.8,212.9c0,0-6.5,9.4-6.1,12.6c0,0,42,3.5,74.4-1.9c0,0,2-5,0.6-12.8
			C204.7,210.8,178.8,215.2,135.8,212.9z"/>
                                <path id="fronthole1" d="M130.3,225c0,0,1.3-6,5.9-11.1l17.8,0.6c0,0,0.7,3.6-1.6,10.9C152.4,225.4,139.9,224.8,130.3,225z"/>
                                <path id="fronthole2" d="M190.5,213.3c0,0,0,5.1-0.9,10.8c0,0,8.8-1.4,14-1.8c0,0,2.2-3.1,0.8-10.7
			C204.4,211.7,198.7,213.5,190.5,213.3z"/>
                                <g id="light1_1_">
                                    <path id="light1" class="strich72" d="M114.6,196c0,0,17.3,0.8,21.6,1.7l3.8,8.8h-11.8L114.6,196z"/>
                                    <path id="lw2" class="strich34" d="M130.1,203c0.1-0.2,0.5-0.8,1.3-1s1.4,0.1,1.6,0.3c0.2,0.1,0.8,0.4,1.1,1.1
				c0.3,0.7,0.3,1.6-0.2,2.3c-0.1,0.1-0.5,0.7-1.3,0.9c-0.9,0.2-1.9-0.1-2.5-0.9C129.6,204.8,129.6,203.7,130.1,203z"/>
                                </g>
                                <g id="light2_1_">
                                    <path id="light2" class="strich72" d="M184,196.9c0,0,8.7-2.5,12.1-3.2c0,0,5.2,6.5,7.2,10.5l-6.6,0.7
				C196.7,204.8,190.3,199.9,184,196.9z"/>
                                    <path id="lamp2" class="strich34" d="M194.8,199.5c-1,0.1-2,0.9-2.4,2c0.1,0.5,0.4,0.7,0.5,0.9c0.6,0.4,1.3,0.3,1.7,1c0,0,0,0,0,0.1
				l0.7,0.5c1.2-0.1,2.2-0.6,2.5-1.3C198.2,201.2,196.6,199.3,194.8,199.5z"/>
                                </g>
                                <path id="line1" class="strich73" d="M99.5,191.3c0,0,9.8-1.8,30.3,16.5"/>
                                <path id="line2" class="strich73" d="M131.1,190c0,0,4.9,5,9.4,17.9"/>
                                <path id="line3" class="strich73" d="M166.9,188.9c0,0,22.2,8.9,32.3,18.1"/>
                                <polygon id="door1caseback" class="strich74" points="89,193 92.7,188.8 82.8,188.4 83.6,192.1 83.3,193 		"/>
                                <g id="frontdoor">
                                    <path id="door1case" class="strich50" d="M82.9,197.1c0,0-17-49.1-18.6-49.7c0,0,1.3-7,2.9-11.7s3.4-6.2,4.2-6.8
				c0.4-0.3,1.4-0.9,2.7-1.1c1.3-0.2,2.9,0,3.9,1.8c2,3.3,18.6,54.1,22.2,56.8c0,0,10.1-42.8-4.6-66.2l3.4-1c0,0,14.6,16.7,4.5,70.5
				c-6,2.4-8.8,2.3-10.2,1.6c-0.2-0.1-1-0.5-2-0.7c-1.5-0.3-3,0-3.9,0.3C85.1,191.6,83.3,194.1,82.9,197.1z"/>
                                    <path id="d1glassmain" class="strich64" d="M96.9,125.2c0,0,12.5,10.1,4.7,45.9l-4.9,2.6l-16.5-43L96.9,125.2z"/>
                                    <path id="d1glassgrey" class="strich75" d="M80.7,134l14.9,40.2c0.5,0.1,0.9,0.2,1.4,0.2c-5.2-14.3-10.5-28.7-15.7-43l-1.1,0.7
				L80.7,134z"/>
                                    <path id="d1black1" class="strich63" d="M77.9,129.6c0,0,3.1-3.8,17.6-9.4l2.5,4.7c0,0-10.6,3.4-18.1,9.8L77.9,129.6z"/>
                                    <path id="d1glassblack" class="strich63" d="M80.4,132.7c10.9,29.4,15.1,40.8,15.1,41.1l-0.3,0.4c0,0,0.2-0.4,0.5-0.7
				c0.3-0.4,0.6-0.6,0.8-0.8c1-0.9,2.2-1.6,2.4-1.7c0.7-0.4,1.6-0.8,2.7-1.2c1-6.6,1.3-12.1,1.3-16.3c0-5.2,0-9.9-1.3-15.8
				c-1.3-5.8-3.3-10.4-4.9-13.5c0.3-0.2,0.5-0.3,0.8-0.5c0,0,12.7,13.9,2.7,62.7c0,0-4.3-7.8-9.1-20.9C86.3,152.3,79.3,133,79.3,133
				L80.4,132.7z"/>
                                    <path id="d1s1" class="strich76" d="M70.2,130c0,0-2.7,2.4-5.9,17.4c0,0,14.5,34.6,18.6,49.7c0,0,0.4-6.9,7.2-6.8
				C90,190.4,89.3,175.4,70.2,130z"/>
                                    <path id="d1s2" class="strich77" d="M89.2,166.6L74,127.8c0,0,2.1-1.2,4.5,2.9c2.4,4.1,13,35.8,13,35.8l-1.8,0.2L89.2,166.6z"/>
                                    <path id="d1mirror2" class="strich78" d="M92.7,168.3c0,0-12.1-4.1-13.4-3.7c-1.4,0.5,4.5,11.1,20.7,15.5c0,0,1.3-1.9,0.9-4.8
				c-0.9-0.1-2.2-0.4-3.7-1.1c-1-0.5-1.9-0.9-2.8-1.9C93.1,170.9,92.8,169.2,92.7,168.3z"/>
                                    <path id="d1mirror1" class="strich79" d="M77,166.8c0,0,0.1,4.8,19.8,13.4h3.2c0,0-20.1-9.9-20.7-15.5L77,166.8z"/>
                                </g>
                            </g>
                        </g>
                        <g id="girlscloud">
                            <path id="cloud_1_" class="strich31" d="M413.4,251.3l-13.3-79c0,0,22.2-2.2,30.4-15.8c7.1-11.8,1.9-25.2,1.9-25.2
		c1.8-0.1,8.2-0.6,13.5-5.7c4.8-4.6,7.7-12.2,5.7-18.4c-2.4-7.7-12-12.5-12.1-12.3c0,0,0.3,0.3,0.5,0.6c1.4-1.3,8.3-7.4,9.1-17.8
		c0.1-1.9,0.9-12.2-7.1-19.6c-9-8.3-21-5.4-21.9-5.2c0.5-1.1,5.2-12.2-1.2-22.9c-5.7-9.5-15.9-11.3-19.1-11.7
		c-12.8-1.5-21.6,6.9-22.8,8.1l0,0c-0.2-2.3-1.3-9.8-7.4-15.4c-7.7-7.1-19.8-7.9-28.7-2.7C330.8,14.2,329,25.4,328.8,27
		c-1.3-1.5-9.7-10.9-23.7-11.1c-1.1,0-15.8,0-23.9,10.5c-5.7,7.4-6.6,17.9-7.2,24.9l0,0c-1.6-0.6-15.8-5.6-28.8,2.9
		c-11.3,7.4-15.3,21.1-13.5,32.2c1.8,11.6,9.6,18.6,11.9,20.6c-2.1,1-11.4,5.8-15.2,16.6c-3.5,9.9-1.6,22.3,7.2,30.4
		c10.7,9.8,24.8,6.7,26,6.4c0,2.9,0.2,11.3,6.1,18.2c10,11.6,27.3,8.1,30.1,7.5c8.2-1.6,14-5.7,17-8.2c1,2.7,3.3,8,8.7,12.3
		c7.7,6.1,19.1,8.2,29,3.4c10.9-5.2,14.1-16,14.6-17.8L413.4,251.3z"/>
                            <g id="girl1">
                                <path id="g1hair" class="strich80" d="M289.7,106.1c0,0,2.6,13.6,3.2,14.4v-3.8l0.9,3.2l0.8,0.1l0.4,1h0.7l-1.5-14.9l2.2,14.9h2.4
			c0,0,0.5-10.6,0.3-17.3c0,0,0.5,15.2,0.5,17.3V92.3c0,0-1.4-24.4-4.9-26.8c-3.5-2.5-11.8,2.2-11.6,7.2c0,0-1.3,2.9,2,12.7
			c0,0,2.2,2.4,2.9,1.4c0.8-1,0.3-8.1,0.3-8.1l0.1-7.2L289.7,106.1z"/>
                                <path id="g1hairadd3" class="strich81" d="M292.4,87.8l-0.6-16.2l3.4,1.1c0,0,1.7,16.1,1.2,18C295.9,92.7,292.4,87.8,292.4,87.8z"/>
                                <path id="g1hairadd2" class="strich82" d="M291.1,106.1c0,0,0.9,7.5,1.6,8.4c0.7,0.8,0.6,0,0.6,0l-0.6-2.8l2,7.4l-1.8-14.4
			L291.1,106.1z"/>
                                <path id="g1hairadd1" class="strich83" d="M293.7,104.1c0,0,2.9,9.5,3.6,14.5c0.7,5,0,0.2,0,0.2l-0.6-9.7c0,0,1.5,8.2,1.5,9.5
			c0,1.3-0.6-14.2-0.8-21.1c-0.2-6.9-3.4,6.8-3.4,6.8"/>
                                <path id="g1body" class="strich65" d="M267.7,122.9c0,0,0.1-0.8,0.9,0.3c0.8,1.1,1.5,0.9,1.5,0.9s-0.6-0.3-1.2-1.5c0,0-0.2-1,0-1.3
			c0.2-0.2,0.8,1.4,0.8,1.4s0.6,0.7,1.1,0.5c0.4-0.1,1-0.3,1-2c0,0-1.3,1.5-1.8,0.7c0,0,1.1-0.8,1.3-2.4c0.2-1.6,0.8-3.2,1.3-3.7
			c0,0-0.3-1-3.3-3.8s-7.2-8.3-7.2-8.3s-2.2-2.6,0-3.9c2.2-1.3,3.9-3.6,9.6-7.1c5.8-3.4,9.2-6.9,9.2-6.9s1.2-2.1,5.1-0.3
			c3.8,1.7,0.9-6.1,0.9-6.1l-1.8-9.8l10.2-3.3c0,0,0.7,2.8,0.5,4.5c0,0,0.9,3.3-0.5,7.8c-1.4,4.4-3.2,2.4-3.2,2.4s0,3,0.7,4.7
			c0,0,1.9,1.2,4,1.4c2.1,0.2,6-1.1,6.6,1.3c0.5,2.4,1.1,1.5,1.8,6.6c0,0,2.7,9.9,2.3,12.4c0,0,6.4-8.1,10-12.2c0,0,2.4-6,4.5-6.1
			c2.2-0.1,4.6,1.2,6.1,0c0,0,0.6-0.5,0.8,0.1c0.2,0.6-2.6,1.4-4.6,1.5c0,0,5.5,1.4,9.2-1.7c0,0,0.9-0.6,0.4,0.3
			c-0.5,0.9-0.7,0.7-0.7,0.7l1.9-0.7c0,0,1.4-0.2,0.2,0.5s-6.8,3.5-11.2,2.8c0,0-0.9-0.4-3.5,0.3c0,0-3.2,6-6,11.6
			c-2.8,5.6-3.2,5.9-5.8,8.3c-2.5,2.4-3.1,0.1-3.1,0.1s-4.4-6.9-5.7-17.2c0,0-0.3-0.3-0.4-1.1c0,0-1.9,7.7-9.3,15
			c0,0-2.5,3.2-2.5,6.1c0,2.9,0.8,2.9,1.4,3.6c0.6,0.6,3.9,3.7,4.1,8.4c0.3,4.6-0.7,7.1-5.6,15.5c-4.9,8.5-7.1,13.1-7.1,13.1l-0.2,4
			h-7.8c0,0-0.6-2.3,0.2-4.6c0.8-2.3,1.1-6.2,1.1-6.2s-0.6-3.6-1.3-8c-0.3-2.3-0.6-4.7-0.9-7.1c-0.4-4.4-0.5-8.4,0.2-9.6
			c0,0,4.7-15.9,7-19.7l-0.1-3.2c0,0-2.5-1.8-2.6-4.2c-0.1-2.4,4.2-3.7,4.2-3.7s-3.4,2.6-4.9,2.6c0,0-5.9,4.1-8.9,5.1
			c0,0,6.3,9.9,7.8,13c0,0.1,0,0.2,0.1,0.3c0,0.2,0.1,0.5,0.1,0.6c-0.8,2.7-1.7,5.5-2.5,8.2c-0.6,0.3-1.3,0.6-2.1,0.9
			c-0.1,0-0.2,0.1-0.4,0.1c-0.3-0.2-0.5-0.4-0.9-0.7C268.2,123.9,267.7,123.4,267.7,122.9z"/>
                                <path id="g1ringback2" class="strich84" d="M240.3,133.8c0,0,0.5,4.9,8.4,1.5c7.9-3.3,16.9-10.9,19.5-13.2
			c2.7-2.3,10.6-11.1,11.1-12.7c0.4-1.6,0.4-4.5-3-6.1c-3.4-1.6-3.7,2-3.7,2l2.6,4.6c0,0-21.7,19.7-27.7,19.8
			S240.3,133.8,240.3,133.8z"/>
                                <path id="g1ringback" class="strich85" d="M246,128.5c1.2,0,2.7-0.3,5.8-2.1c3-1.7,5.6-3.6,8.7-6.1c1.6-1.3,3.8-3.1,6.3-5.3
			c6-5.8,5.7-7.3,5.4-7.7c-0.1-0.2-0.5-0.9-1.7-1.2c-6-1.9,3.8-4.6,5.7-2.8c0.6,0.6,1.2,1.3,1.6,2.3c1.3,4.1-4.1,9.5-7.8,13
			c-8.1,7.5-24.4,20.2-27.6,17.1c-1.4-1.4-0.5-6.1,1.6-7.1C244.7,128.3,245.1,128.5,246,128.5z"/>
                                <path id="g1body_1_" class="strich86" d="M267.7,122.9c0,0,0.1-0.8,0.9,0.3c0.8,1.1,1.5,0.9,1.5,0.9s-0.6-0.3-1.2-1.5c0,0-0.2-1,0-1.3
			c0.2-0.2,0.8,1.4,0.8,1.4s0.6,0.7,1.1,0.5c0.4-0.1,1-0.3,1-2c0,0-1.3,1.5-1.8,0.7c0,0,1.1-0.8,1.3-2.4c0.2-1.6,0.8-3.2,1.3-3.7
			c0,0-0.3-1-3.3-3.8s-7.2-8.3-7.2-8.3s-2.2-2.6,0-3.9c2.2-1.3,3.9-3.6,9.6-7.1c5.8-3.4,9.2-6.9,9.2-6.9s1.2-2.1,5.1-0.3
			c3.8,1.7,0.9-6.1,0.9-6.1c-0.4-0.9-0.4-1.2-0.2-1.4c0,0,0.4-0.4,5.4,2.9c0,0,0,3,0.7,4.7c0,0,1.9,1.2,4,1.4c2.1,0.2,5.9-1,6.5,1.4
			c0.5,2.4,1.1,1.5,1.8,6.6c0,0,1.8,6.4,2.4,12.3c0,0,6.4-8.1,10-12.2c0,0,2.4-6,4.5-6.1c2.2-0.1,4.6,1.2,6.1,0c0,0,0.6-0.5,0.8,0.1
			c0.2,0.6-2.6,1.4-4.6,1.5c0,0,5.5,1.4,9.2-1.7c0,0,0.9-0.6,0.4,0.3c-0.5,0.9-0.7,0.7-0.7,0.7l1.9-0.7c0,0,1.4-0.2,0.2,0.5
			s-6.8,3.5-11.2,2.8c0,0-0.9-0.4-3.5,0.3c0,0-3.2,6-6,11.6c-2.8,5.6-3.2,5.9-5.8,8.3c-2.5,2.4-3.1,0.1-3.1,0.1s-4.4-6.9-5.7-17.2
			c0,0-0.3-0.3-0.4-1.1c-0.6,2-1.3,3.6-1.9,4.7c-0.7,1.4-1.4,2.3-4.3,6.2c-1,1.3-2,2.7-3.1,4c-0.9,1.1-1.5,1.8-2,3.1
			c-0.6,1.4-0.7,2.5-0.7,3c0,0.8,0,1.9,0.7,2.8c0.3,0.5,0.7,0.7,0.9,0.8c0.6,0.6,3.9,3.7,4.1,8.4c0.3,4.6-0.7,7.1-5.6,15.5
			c-4.9,8.5-7.1,13.1-7.1,13.1l-0.2,4h-7.8c0,0-0.6-2.3,0.2-4.6c0.8-2.3,1.1-6.2,1.1-6.2s-3.8-21.5-1.9-24.6
			c1.3-3.6,2.4-6.4,3.1-8.4c1-2.6,1.9-5,3.1-8.6c0.3-1.1,0.6-2.1,0.8-2.7c0.1-0.3,0.4-0.9,0.3-1.8c-0.1-0.6-0.3-1.1-0.5-1.4
			c-2.3-1.9-2.6-3.2-2.6-4.2c-0.1-2.4,4.2-3.7,4.2-3.7s-3.4,2.6-4.9,2.6c0,0-5.9,4.1-8.9,5.1c0,0,6.3,9.9,7.8,13
			c0,0.1,0,0.2,0.1,0.3c0,0.2,0.1,0.5,0.1,0.6c-0.8,2.7-1.7,5.5-2.5,8.2c-0.6,0.3-1.3,0.6-2.1,0.9c-0.1,0-0.2,0.1-0.4,0.1
			c-0.3-0.2-0.5-0.4-0.9-0.7C268.2,123.9,267.7,123.4,267.7,122.9z"/>
                                <path id="g1b1" class="strich87" d="M278,160.3c0,0-0.3-2,1-4.2c1.4-2.2,8.5-13.8,8.7-15.8c0.3-2,1,0.9,1,0.9s-6.7,11.8-8.2,15.1
			l-0.2,4L278,160.3L278,160.3z"/>
                                <path id="g1b2" class="strich87" d="M272.8,155.6c0,0,2.4-10.4,4.6-18.9C277.4,136.7,273.6,154.8,272.8,155.6z"/>
                                <path id="g1b3" class="strich87" d="M287.3,122.5c0,0,0.7-2.8,0.8-3.4c0-0.6-0.1-0.4-0.4-0.8c-0.2-0.4-1.6-3.7,1.1-7.4
			c2.7-3.7,5.2-6.6,5.2-6.6l0.8-5.2c0,0,0.7,4.3,2.3,0.4c0,0,2-3.5,2.5-4.9c0,0-0.4,3.3-3.1,7.3c-2.4,3.5-5.5,5.9-7.8,10.2
			c-0.4,0.9-1.2,2.3-1,4.2c0.1,1.1,0.5,2,0.8,2.6c0,0,2,1.6,2.2,2.4C290.9,121.9,287.3,122.5,287.3,122.5z"/>
                                <path id="g1b4" class="strich87" d="M292,81.1c0.1,0.9,0.2,1.6,0.3,2c0,0,0.1,0.4,0.2,1c0.1,0.5,0.2,0.8,0.3,1
			c0.3,0.5,0.7,0.7,0.9,0.9c0.3,0.2,0.6,0.3,0.8,0.3c0.4,0.1,1.1,0.4,1.9,0.7c-0.7,0-2-0.2-3-0.9c-0.3-0.2-0.5-0.4-0.6-0.5
			c-0.4-0.5-0.5-1-0.6-1.6C292,83.5,291.9,82.5,292,81.1z"/>
                                <path id="g1b5" class="strich87" d="M301.1,87c0,0,1.9-0.1,2.3,1.8c0,0.1,0,0.2,0.1,0.3c0.3,0.5,1.2,2.5,1.4,5.1c0.3,3,1.9,6.1,2.4,13
			l0,0.3c0,0,9.3-11.4,9.9-12.3c0.6-0.9,1.1-2.5,1.4-2.9c0.3-0.5,1-1.3,1.2-1.5s0.5,0,0.1,0.2s-1,0.8-2.6,4.4
			c0,0-8.7,10.8-10.2,13.7c0,0-0.2-0.1-0.4-1c0,0-0.6-8.7-2.8-12.7c0,0,0.7-1.6,0-3.6C303.3,89.8,302.6,87.3,301.1,87z"/>
                                <path id="g1hatback" class="strich88" d="M262,88.2c0,0-1.2,1,2.4-0.4c3.6-1.3,28-12.7,38.6-18.5c0,0,13-6.6,13.2-7.3
			c0.2-0.7-7.5-0.5-7.5-0.5s-32.4,10.6-37.4,17.2C271.4,78.8,264.1,83.5,262,88.2z"/>
                                <path id="g1sh1" class="strich89" d="M286.9,78.2h1.8l3.5,2.9c0,0-0.6,0.1-1.7-0.2c-1-0.3-3.1,0.7-3.1,0.7L286.9,78.2z"/>
                                <g id="g1face_1_">
                                    <path id="g1face" class="strich90" d="M287.7,78.6c0,0,2.4,2.1,4.3,2.5c1.9,0.4,2.4-0.5,2.4-0.5s1.7-2.5,1.7-7c0,0,0-1.3-0.5-2.5
				c0,0,0.3-1.8-0.2-3.5c-0.5-1.7-7.7,3.3-7.7,3.3L287.7,78.6L287.7,78.6z"/>
                                    <path id="g1bface" class="strich87" d="M295.7,71c0,0,1.9,6.3-1.9,10.1C293.8,81.1,297,77.6,295.7,71z"/>
                                    <g id="g1eye1">
                                        <path id="e1white" class="strich91" d="M287.5,73.9c0.1-0.2,0.3-0.6,0.5-0.9c0.5-0.7,1.3-1,1.6-1.1c0,0,0.5,0,0.9,0.4
					c0,0.4-0.1,0.6-0.2,0.8C290,73.7,289.9,74.1,287.5,73.9z"/>
                                        <path id="e13" class="strich92" d="M288.8,72.4c-0.1,0.3-0.1,0.7,0.1,0.9c0.1,0.1,0.3,0.1,0.4,0.1c0.3,0,0.6-0.1,0.8-0.4
					c0.2-0.3,0.2-0.8,0-1C289.7,71.8,289.2,71.9,288.8,72.4z"/>
                                        <path id="e1black" class="strich93" d="M289.1,72.3c0,0-0.2,0.5,0.2,0.6c0.4,0.1,0.8-0.5,0.6-0.7S289.1,72.1,289.1,72.3z"/>
                                        <ellipse id="e1blick" class="strich94" cx="289.7" cy="72.3" rx="0.2" ry="0.2"/>
                                        <path id="e1markup" class="strich95" d="M290.5,72.4c0,0-0.2,1.1-0.8,1.4c-0.6,0.3-2,0.1-2,0.1l-0.2,0.1c1.1,0.3,2.1,0.1,2.5-0.3
					c0.1-0.1,0.3-0.3,0.5-0.8C290.6,72.6,290.6,72.4,290.5,72.4C290.6,72.4,290.5,72.5,290.5,72.4z"/>
                                        <path id="eye1brow" class="strich96" d="M287.7,73.7c0,0,0.9-1.3,2-1.5c0,0,0.4-0.1,0.8,0.3c0,0,0.5-0.1,0.9-0.5
					c0,0-0.4,0.2-0.8,0.2c0,0-0.6-1-1.9,0C288.7,72.2,288.1,72.7,287.7,73.7z"/>
                                        <path id="eye1lash" class="strich97" d="M289.6,72.2c0.1,0,0.2,0,0.3,0c0.2,0,0.4,0.1,0.5,0.1c0,0,0.5-0.2,0.7-0.6
					c0,0-0.5,0.4-0.9,0.5c0,0,0.2-0.2,0.4-0.6C290.5,71.6,290.2,71.9,289.6,72.2z"/>
                                    </g>
                                    <g id="g1eye1_1_">
                                        <path id="e1white_1_" class="strich91" d="M293.1,72c0.1-0.2,0.3-0.6,0.4-0.9c0.5-0.7,1.1-1,1.3-1.1c0,0,0.4,0,0.7,0.4
					c0,0.1,0,0.3-0.1,0.4c0,0-0.1,0.4-0.5,0.7C294.6,72,293.9,72.2,293.1,72z"/>
                                        <path id="e13_1_" class="strich92" d="M294.2,70.5c-0.1,0.3-0.1,0.7,0.1,0.9c0.1,0.1,0.3,0.1,0.3,0.1c0.2,0,0.5-0.1,0.7-0.4
					c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0-0.1,0-0.1s0-0.1-0.1-0.1c-0.1-0.1-0.4-0.1-0.6,0
					C294.5,70.2,294.3,70.4,294.2,70.5z"/>
                                        <path id="e1black_1_" class="strich93" d="M294.7,70.3c0,0-0.1,0.5,0.2,0.6c0.3,0.1,0.7-0.5,0.5-0.7S294.7,70.2,294.7,70.3z"/>
                                        <ellipse id="e1blick_1_" class="strich94" cx="295.1" cy="70.4" rx="0.2" ry="0.2"/>
                                        <path id="e1markup_1_" class="strich95" d="M295.5,70.5c0,0-0.3,0.9-0.8,1.2c-0.5,0.3-1.6,0.3-1.6,0.3h-0.1c0.3,0.1,0.7,0.1,1.3,0
					c0.2-0.1,0.6-0.2,0.9-0.5c0.1-0.2,0.2-0.4,0.3-0.6C295.6,70.7,295.6,70.6,295.5,70.5C295.6,70.5,295.6,70.5,295.5,70.5z"/>
                                        <path id="eye1brow_1_" class="strich96" d="M293.1,72c0,0,0.2-0.4,0.5-0.8c0.2-0.2,0.3-0.4,0.5-0.6c0.2-0.2,0.5-0.3,0.7-0.4
					c0,0,0.1,0,0.2,0c0.1,0,0.3,0.1,0.5,0.3c0,0,0.5-0.1,0.7-0.5c0,0-0.4,0.2-0.6,0.2c0-0.1-0.2-0.3-0.5-0.4c-0.3-0.1-0.6,0-0.6,0
					c-0.2,0.1-0.3,0.2-0.5,0.4c-0.2,0.2-0.3,0.4-0.5,0.8C293.4,71.3,293.2,71.6,293.1,72z"/>
                                        <path id="eye1lash_1_" class="strich97" d="M294.8,70.2c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0.1,0.4,0.1c0,0,0.4-0.2,0.6-0.6
					c0,0-0.4,0.4-0.8,0.5c0,0,0.2-0.2,0.3-0.6C295.6,69.7,295.4,70,294.8,70.2z"/>
                                    </g>
                                    <path id="g1nose1" class="strich98" d="M292.4,72.5c0,0-0.1,1.5,1,2.4"/>
                                    <path id="g1nose2" class="strich98" d="M292.4,75.8c0,0,0.4,0.3,0.9,0H292.4z"/>
                                    <path id="g1throat" class="strich99" d="M290.7,78.2c0.3,0.2,0.6,0.3,0.8,0.4c0.3,0.1,0.4,0,0.7,0.2c0.3,0.1,0.3,0.2,0.6,0.3
				c0.4,0.1,0.7,0,0.7,0c0.5-0.2,0.7-0.7,0.7-0.8c0,0,0.1-0.1,0.2-0.2c0.3-0.4,0.6-0.8,0.7-1.2c-0.2,0.1-0.5,0.3-0.9,0.4
				c-0.3,0.1-0.6,0.2-0.9,0.2c-0.2,0.1-0.4,0.2-0.7,0.3C291.8,78.1,291.1,78.2,290.7,78.2z"/>
                                    <path id="g1teeth" class="strich100" d="M291.8,78.1c0,0,1.2,0.9,2.6-0.7L291.8,78.1z"/>
                                    <path id="g1lip1" class="strich101" d="M290.7,78.1c0,0,0.4,0.1,0.9,0.1c0.4,0,0.8-0.1,1.1-0.2c0.3-0.1,0.6-0.1,1-0.3
				c0.3-0.1,0.8-0.4,1.2-0.8c0,0-0.3,0.1-0.6,0.1c-0.4,0.1-0.6,0.1-0.8,0c0,0-0.2,0-0.3,0c0,0-0.1,0.1-0.1,0.1
				c-0.1,0.1-0.1,0.1-0.1,0.1c-0.1,0-0.1,0-0.3,0c-0.1,0-0.2,0-0.3,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.1-0.4,0.2
				C291.3,78,290.9,78.1,290.7,78.1z"/>
                                    <path id="g1lip2" class="strich101" d="M290.7,78.2c0.5,0.3,0.7,0.5,0.9,0.6c0.2,0.2,0.2,0.2,0.2,0.2c0.1,0.1,0.2,0.2,0.3,0.2
				c0,0,0.1,0.1,0.3,0.2c0.3,0.1,0.8,0.2,1.4-0.1c0.1,0,0.5-0.3,0.7-0.7c0-0.1,0.1-0.3,0.2-0.6c0.1-0.4,0.1-0.4,0.4-1.2
				c-0.4,0.3-0.5,0.6-0.6,0.9c0,0.1-0.1,0.3-0.3,0.5c0,0-0.1,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.5,0.3c-0.1,0-0.4,0.1-0.7,0.1
				c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.6-0.2-0.6-0.2C291.5,78.5,291.2,78.4,290.7,78.2z"/>
                                    <path id="g1mouthline1" class="strich102" d="M290.7,77.9c0,0-0.2,0.4-0.2,0.6S290.8,78.1,290.7,77.9z"/>
                                    <path id="g1mouthline2" class="strich102" d="M294.9,76.5c0,0,0.1,0.3,0.4,0.5C295.7,77.2,295.1,76.7,294.9,76.5z"/>
                                    <path id="lipsblick" class="strich103" d="M292.8,79.1c0,0,0.6-0.2,1-0.3C293.8,78.8,294.2,79,292.8,79.1z"/>
                                </g>
                                <path id="g1fronthair" class="strich104" d="M282.8,74.2c0,0-1.1,8.2,1.9,11c0,0-2.7-4.1-1.6-11.3c0,0-0.6,5.9,1.9,11.4
			c0,0,3,3.4,3.1,0.4c0.1-2.9-1.2-9.3,0-13.9v-0.5c0,0-0.4,4.3,0,7.6c0.4,3.3,0.3,7.4,0,7.9c-0.3,0.5-1.1,1.1-2.3-0.5
			c0,0,0.6,1.4,1.6,1.3c1.1-0.1,1.1-2,1.2-3s0.1-3.7-0.2-5.9s0-7.9,0-7.9l-5.9,2.7L282.8,74.2z"/>
                                <path id="g1hatfront" class="strich105" d="M261.9,87.8c0,0-0.3-7.3,23.7-22c0,0,19-9,30.9-4.2c0,0-19.4,2.6-37,14.9
			C261.9,88.8,261.9,87.8,261.9,87.8z"/>
                                <path id="g1hattop" class="strich105" d="M279.5,69.8c0,0-0.4-0.6,0.5-3.3c0.9-2.7,0.9-2.5,2.6-3.6c1.7-1.1,4.5-3.1,7.4-1.5
			c2.9,1.6,3.9,1.7,3.9,1.7L279.5,69.8z"/>
                                <path id="g1ringfront2" class="strich106" d="M278.2,104.3l-0.8-1.9c0,0-11.9-5.4-25.4,10.2s-11.6,22.3-11.6,22.3s2.2,3.1,4.8-3.2
			C247.6,125.3,259.1,105.9,278.2,104.3z"/>
                                <path id="g1ringfront1" class="strich107" d="M240,125.9c0,0-2.2,3.4-0.8,7.2s2.1,0.9,3-2.2c0.9-3.1,7-24,26.8-28.5c0,0,3.8-0.8,8.4,0
			c0,0-1.4-2.9-7.5-2.1C263.7,101.1,248.2,108.1,240,125.9z"/>
                                <path id="g1breastblick" class="strich108" d="M283,96.7l1.2,4.8c0,0,1.9-1.7,2.4-3.8C286.5,97.7,284.7,99.3,283,96.7z"/>
                                <path id="g1bodyblick" class="strich108" d="M282.8,119.3c0,0,1.5,3.4-0.2,6h1.1C283.6,125.3,284.7,121.5,282.8,119.3z"/>
                                <path id="g1bsh2" class="strich109" d="M288.5,97.7c0,0-2.3,1.2-1.7,5l0.1,0.4c0,0-2.5,0.4-3.4-0.9c-0.9-1.3-4.9-0.4-4.9-0.4
			s0.9,0.3,0.5,2.6c-0.4,2.3-4.2,11.8-5.1,14.8c-0.9,2.9-2.5,7-3.4,10.9l3.1-0.4c-0.7-5,0-8.2,0.8-10.2c0.3-0.7,0.9-2,2-4.5
			c0.8-2,1.2-3,1.7-4.3c0.2-0.6,0.4-1.2,1-3.3c0.5-1.7,0.6-2,0.9-2.5c0.8-1.4,1.9-2.2,2.6-2.3c0.3,0,0.6,0,0.6,0
			c0.5,0.1,0.7,0.4,0.9,0.6c0.4,0.3,1,0.3,2.1,0.3c0,0,0.6,0,2.7-0.3l0,0c0,0-0.2-3,0.8-3.2C289.8,100,288.6,98.9,288.5,97.7z"/>
                                <path class="strich109" d="M274.2,129.1c0,0-1.5-2.3,0.6-7.3c0,0-1,4.9,0,6.6L274.2,129.1z"/>
                                <path id="g1navel" class="strich109" d="M276.4,124c0,0,0.4-0.7,1.2,0C277.6,124,277.6,124.6,276.4,124z"/>
                                <path id="g11lsh" class="strich110" d="M276.2,140.5c0,0-2.9-1.5-3.9,0.8l-0.9-5.7l5.2,3.9l-0.3,1.1L276.2,140.5z"/>
                                <path id="g1l2sh" class="strich110" d="M276.9,139.5l-1,4.7c0,0,1.3-2.3,5-1.7s5.1,1.7,5.1,1.7l0.3-0.6L276.9,139.5z"/>
                                <path id="g1cape" class="strich105" d="M270.6,128c0,0,15.2-4.1,19.3-8c0,0,0.8-0.3,0.8,0.5l1.5,1.7v0.9c0,0,0.6,0.1,1.3,3
			c0,0,0.4-0.1,1,1.2c0,0,1.2-0.3,1.1,0.6c-0.1,0.9,0.1,3.9-1.8,7.6c0,0-3.7,3.5-1.7,8.6c0,0-13.7,0.9-20.5-8.6l2.4,13.9l0.2,0.8
			l-1.6,6.8l-0.5,0.5v2.7h-0.2l-0.2-2.5l-0.2,0l-0.1,2.5l-0.3-0.1l-0.1-2.4c0,0-0.4,0.2-0.5-1.8c-0.1-2,0.4-18.8,0.8-21.6l-3,26.3
			l-5.2-0.2c0,0,0-11.6,6.2-27.2c0,0-1.2,1-0.7-2.8c0,0,0-2.2,1.8-2.1c0,0,0.2,0.1,0.2-0.3C270.3,127.9,270.6,128,270.6,128z"/>
                                <path id="g1csh1" class="strich111" d="M264.7,150c0,0,2.6-11.5,4.3-14.9l-1.5,13.5l-0.3-2.9l-1.8,9.5L267,143L264.7,150z"/>
                                <path id="g1cshlight1" class="strich112" d="M270,134.9l-3.2,24.3C266.8,159.2,270.2,142.3,270,134.9z"/>
                                <path id="g1cshlight2" class="strich112" d="M271.8,135.3c0,0,9.5,8,18.9,8.2l-0.5-0.9c0,0,0.3,0.5-1.6,0.2S277.2,139.4,271.8,135.3z"
                                />
                                <path id="g1capeshadow3" class="strich111" d="M271.8,132.2c0,0,2.3,3.1,5.7,3.6c0,0-1.4-0.8-2-2.1c0,0,6.2,2.6,11.3,1.5
			c-1.3,0-2.9-0.1-4.7-0.4c-2.1-0.4-3.8-1-5.2-1.5c0,0,12.7,0.7,16.1-2.2c-0.9,0.2-2.2,0.5-3.8,0.8c-1.5,0.2-3.6,0.5-8.4,0.6
			C278.5,132.4,275.4,132.4,271.8,132.2z"/>
                                <path id="g1capeshadow4" class="strich111" d="M283.4,138c0,0,2.2,1.5,5.9,0.9c0,0,0-0.5,0.8-0.9C290,138,286.9,138.6,283.4,138z"/>
                                <path id="g1capeshadow5" class="strich111" d="M271.8,131.1c0,0,18.6-0.5,21.8-2.6l1.5-1.1c0,0-0.1-0.2-0.6,0.1
			c-0.4,0.3-0.6-0.8-0.6-0.8s-0.1-0.5-0.6-0.4C292.7,126.4,289.7,128.8,271.8,131.1z"/>
                                <path id="g1capeshadow6" class="strich111" d="M268.4,130.2c0,0-0.6,3.1,0.3,3.3c0.9,0.2,1.8,0.1,2.1-0.6c0.3-0.7,0-2.7,0-2.7
			s0.2,1.9-0.8,2.7C269,133.5,268.5,131.6,268.4,130.2z"/>
                                <path id="g1capeshadow7" class="strich113" d="M270.6,128.7c0,0,19.1-5.2,20.3-7.2c0,0,0.7-0.3,1.2,0.8c0.5,1.1-0.1,0.9-0.1,0.9
			S274.1,130.4,270.6,128.7z"/>
                                <path id="g1capeshadow8" class="strich114" d="M270,131.5c0,0,0.8-3-0.4-2.5c0,0-0.9,1-0.2,1.2C270,130.4,270,130.2,270,131.5z"/>
                                <g id="g1lif_1_">
                                    <path id="g1lif" class="strich105" d="M285.7,86c0,0-3.3,1.7-3.7,6.8c0,0-5.3,2.7-5.8,4.7c0,0,0,6,7.7,5c0,0,1.6,1.1,3,0.6
				c0,0,4,3.4,8.1,2c0,0,1.3-1.2,1.3-2.3l-0.6-0.2c0,0-1.5-6.7-1.8-6.9c0,0,1.8-3.5,1.7-8.8h-0.3c0,0,0.1,4-1.8,8.8
				c0,0-2.4,3.1-4.2,4.4c-1.8,1.3-2.4,2.5-2.4,2.5s-1.6,0.2-2.4-0.6s-1.7-9.2-1.7-9.2s0.5-4.9,3.3-6.7L285.7,86z"/>
                                    <path id="g1lifshadow1" class="strich115" d="M276.4,98c0,0,1.2,4.9,5.6,4.1c0,0-3-0.5-3-3C279,99.1,277.5,99.1,276.4,98z"/>
                                    <path id="g1lifshadow2" class="strich115" d="M289.5,100.5c0,0-2,1.6-2.3,2.2s3.5,2.9,6.2,2.3C293.4,104.9,287.4,104.5,289.5,100.5z"
                                    />
                                    <path id="g1lifblik1" class="strich116" d="M282,94.4c0,0,0.3,2.1-0.7,2.9c0,0,1.8,2.7,2.3,4.4C284.1,103.5,282.3,95,282,94.4z"/>
                                    <path id="g1lifblik2" class="strich116" d="M293.7,96.7c0,0,0.1,1.4-0.2,2.4c-0.3,1-0.1,2-0.1,2s1.3,1.1,1.4,2.8
				C294.8,105.5,295,99.3,293.7,96.7z"/>
                                </g>
                            </g>
                            <g id="girl2">
                                <g id="backhair_1_">
                                    <path id="backhair" class="strich117" d="M356.1,94.6c0,0,8.6-1.1,4.4,9c0,0,3.5-8.4-4.4-8.5c0,0,12,3.8,4.5,12.3c0,0,6-7.2-3.6-11.3
				c0,0,6.1,3.6,2.9,11c0,0,1.7,4.9-5.3,7.8c0,0,4.9-1.9,4.8-6.9c0,0-5.2,9.1-10.6,11.6c0,0-8.3,14.9-16.9,13c0,0,4.6,0.8,10.7-6.3
				c0,0-5.4,7.2-17.8,6.4c0,0,9.6-1.1,10.6-4c0,0-4.6,2.1-7.5,2.4c0,0,7.3-2.2,8-3.6c0,0-6.5,3.3-15.5,4.4c0,0-6.7,0.8-8.8,2.4
				c0,0,1.1-2.3,10.1-3.5c0,0,3.2-0.3,4.5-1.1c0,0-4.7,0.9-7.5,1c0,0,10.1-1.6,14.1-5.7c0,0-6.1,4.8-13.5,4.5c0,0-4-0.1-8.3,2.6
				c0,0,5.1-5,11.8-5c0,0-10-0.6-13.1,4.1c0,0,1.2-3.9,9.2-4.7c0,0-5.5,0.4-7.3,1.6c0,0,0.7-0.6,0.8-0.7c0,0-5.9,2.8-5.5,6.1
				c0,0-1-3.9,3.4-6.1l-5,1.9l4.3-2.5c0,0,4-2.6,4.2-3.4c0.2-0.8,7.8-5.9,7.8-5.9s-4.3,1.8-7.9,2.1c-3.5,0.4-6.4,1.7-6.4,1.7
				s4.6-2.2,7.5-2.6c2.9-0.4,7.9-2.5,7.9-2.5s-4.8,1.2-6.6,1.1c0,0,8.6-2.3,11.1-4.8c2.5-2.5-0.4-0.3-0.4-0.3s-6.3,3.7-9.4,3.2
				c0,0,10.4-3.8,13.8-8.5c0,0-3.4,3.5-10,4.6c0,0,8.1-3,10.9-6.4c0,0-6.6,5.6-17.9,2c0,0,13.7,2.4,17.1-3.8
				c3.4-6.2,5.2-8.6,7.7-9.6c2.4-1,4.6-6.1,12-4c0,0-6.8-3.6-12.4,2.9c0,0,5.6-8.4,13.5-2c0,0-0.3-3.6-3.3-2.4c0,0,2.3-2.7,4.5,3.3
				C353.7,91.3,356.2,91.2,356.1,94.6z"/>
                                    <path id="g2backhairadd1" class="strich118" d="M343.7,102.3c0,0-5.9,6.4-5.3,12.6c0.6,6.2-6.9,12.2-8.1,12.9
				c-1.2,0.8,15-11.7,19.6-13.4S343.7,102.3,343.7,102.3z"/>
                                    <path id="g2backhairadd2" class="strich119" d="M339.5,120.6c0,0-3.4,6.8-10.8,8.8s-14.1,2.2-17.2,5.3c0,0,2.9-2,15.4-4.1
				c0,0,7.7-1.3,10.6-5c0,0-1.2,4.4-10.3,6.5c0,0,8.3,0.1,13.2-7.2c0,0-1.9,8.2-11.7,8.4c0,0,8.2,1,11.2-4.3c3-5.4,3.7-6.4,3.7-6.4
				l-3.7-1.6"/>
                                    <path id="g2backhairadd3" class="strich120" d="M308.4,126.8c0,0,6.7-3.2,12.4-4.2s11.9-7.4,12.9-10.4c1-3,9-13.6,11.2-14
				s1.4,9.8,1.4,9.8s-4.8,5.3-5.2,7.5c-0.4,2.3-2.9,7.5-5.6,9.2c0,0,4.6-6,4.6-9.6c0,0-1.1,1.9-7.4,9.6s-19.4,5.9-19.4,5.9
				s13.6,0.5,17.7-5.4s4.9-9.7,4.9-9.7s-1.5,9.3-14,12.8c-12.5,3.4-12.4,4.1-12.4,4.1s1.2-1.9,12.4-5.1c11.2-3.2,12.4-12,12.4-12
				s-6.5,6.3-13.4,7.8C314.1,124.4,308.4,126.8,308.4,126.8z"/>
                                    <path id="g2backhairadd4" class="strich121" d="M342,104.8c0,0-2.4,3.2-1.5,7c0,0,0.4-2.9,1.9-2c1.5,0.9-3.4,3.4-3.4,6.4
				c-0.1,3-3.4,6.4-3.4,6.4s4.7-1.8,4.9-5.8c0.2-4,6-5.5,6-5.5s-3.4,3.4-3.7,5.5c0,0,1.9-2.7,2.9-2.7c0,0-3.8,5-4.4,7.5
				c-0.7,2.5-4.8,7.3-4.8,7.3s5.3-4.1,5.8-6.1c0.5-2.1,0.7-2.4,1.4-4s7-5.8,7-5.8L342,104.8z"/>
                                    <path id="g2backhairadd5" class="strich122" d="M312,127.9c0,0,4.4-2.2,7.7-1.7c3.4,0.5,14.2-3.3,15.8-8.1c0,0-5,6.2-14.4,7
				C311.8,125.9,312,127.9,312,127.9z"/>
                                    <path id="xg2backhairadd6" class="strich122" d="M304,133.3c0,0,3.2-7.5,14.6-11.7C330,117.4,344.1,96,344.1,96s-8.1,17-20.4,24
				C311.4,126.9,313.8,122,304,133.3z"/>
                                    <path id="g2backhairadd7" class="strich123" d="M317.5,115.4c0,0,10.4-3.3,13.6-8.2s10.3-8.5,10.3-8.5s-6,5.4-9.1,9.5
				C329.1,112.4,317.5,115.4,317.5,115.4z"/>
                                    <path id="g2backhairadd8" class="strich122" d="M309.6,125.1c0,0,16.4-0.3,21-7.8C330.6,117.3,329.7,124.4,309.6,125.1z"/>
                                    <path id="g2backhairadd9" class="strich122" d="M323,124.4c0,0,7.8-1.8,11.6-10.3s11.8-12.3,11.8-12.3s-7.3,5.1-10.8,12.9
				S323,124.4,323,124.4z"/>
                                    <path id="g2backhairaddv1" class="strich124" d="M354.1,96.9c0,0,4.2,1.9,2.7,5.9s-3.3,4.3-3.3,4.3s2.9-0.6,3.9-4.3
				C358.4,99.1,354.1,96.9,354.1,96.9z"/>
                                    <path id="g2backhairaddv2" class="strich124" d="M354.1,96.9c0,0,6.2,3.6,2.5,10.3s-7.1,4-7.1,4s3.5,2.9,7.6-3.8s-2.3-10.9-2.3-10.9
				s6.9,4.3,1.5,13.4c0,0,3.5-4,3.2-5.9c0,0-0.8,6.3-6.1,9c0,0,8.3-4.6,6.6-10.4C358.2,96.8,354.1,96.9,354.1,96.9z"/>
                                </g>
                                <path id="g2body" class="strich125" d="M340.1,180.1c0,0-1-6.8-2.9-11.5c-1.8-4.7-1-7.9,0.7-11.7c1.8-3.8,3.5-4.8,4.6-5.9
			c1.1-1.1,2.6-1.9,3.6-2.7s1.7-2,2.3-3.1c0.6-1.1,1.9-3.6,0-7c-1.9-3.4-5.8-11-6.3-11.7c-0.5-0.7-0.8-1.6-2.5-2.4
			c-1.7-0.8-4.5-4.3-5.2-5.1c-0.7-0.8-6.6-8.6-8.8-14.2c-2.1-5.6-1.8-5.7-1.8-5.8c0-0.1,9.5-6.3,18.5-7.2c0,0,3.5-2.1,4.1-2.3
			c0.6-0.2,1.1-0.6,2.3,0c1.1,0.6,1.7,1.2,1.7,1.2l6.4,2.9c0,0,0,0.5-0.9,0.2c-0.9-0.2-3.9-1.4-3.9-1.4s0.3,1-0.4,1.4
			c-0.7,0.3-5.4,0.6-5.4,0.6l-3.1-0.6c0,0-8.8,3.1-12.5,7.4c0,0,5.8,12,11.1,14.5c0,0,1.9,1.1,2.6,1.6c0,0,3.4,0.1,4.5-1.2
			c0,0,0.7-1.2,0.3-3.3c-0.4-2.1,5.6-5.3,5.6-5.3s-0.6,6.7,1.4,8.7c1.9,1.9,2.5,2.5,6,2.4c0,0,1.1-0.2,3,1.3
			c1.9,1.5,2.1,2.8,2.2,3.2c0.2,0.4,1,3.1,1.6,3.7c0,0-1.5-8.2-1.7-8.7s-0.4-1-0.7-1.2c-0.3-0.2-1.8-1.2-2.2-2.8
			c-0.5-1.6-2.1-1.8-2.5-2s-4.7-1.3-4.4-2.2c0,0,0.9,0.1,2,0.5s3.5,1.1,4.1,0.8c0,0,0.1-0.3-1.8-1.4c-1.9-1.1-3-1.6-3-1.6
			s-0.5-0.8,0.5-0.5c1.1,0.3,3.8,2,4.2,2.1c0.3,0.1,0.4,0.1,0.4,0c0-0.2-2.6-2.6-4.1-3c0,0-1-0.7,0.3-0.6c1.3,0.1,3,1.6,3,1.6
			s-0.7-0.9-1.9-1.6c-1.2-0.6-1.5-1.2-1.2-1.4c0.3-0.1,0.3,0.1,1.3,0.8c1,0.7,1.4,0.9,2,1.1c0.6,0.2,2.3,2.2,2.5,2.5
			s3.1,5.6,3.3,5.9c0.2,0.3,0.3,1.3,0.5,1.7c0.2,0.3,0.9,2.2,2.7,4.6c1.7,2.4,4.8,8.2,5.8,13.5c0,0,0.1,2.1-0.6,3.9
			c-0.8,1.8-1.1,3.4-3.8,2.4c-2.7-1.1-7.8-7.6-7.8-7.6s0.9,3.7-0.2,6.8c-1.1,3.1-4,13.6-4.3,14.9c-0.2,1.3-0.5,4.4-1.8,7.2
			c0,0-0.6,1.2,0,2.4c0.1,0.2,0.2,0.4,0.4,0.6c1.2,1.4,3.4,9.5,3.4,9.5l1.2,3.4l-12.3,0.1c0,0-0.2-0.9-0.7-1.4l-0.4,2.2L340.1,180.1
			z"/>
                                <path id="ear" class="strich126" d="M355.3,105.7l-0.3-5.1c0,0,1.4-1.1,1.1,1.7c0,0-0.3,1.1-0.2,1.9S355.5,105.8,355.3,105.7z"/>
                                <path id="g2bodyshadow3" class="strich127" d="M354.3,109.8c0,0-1,6.9-5.9,7c0,0,1-0.6,0.7-2.3L354.3,109.8z"/>
                                <path id="g2bodyshadow4" class="strich128" d="M349.1,114.5c0,0.2,0.1,0.3,0.1,0.5c0,0.1,0,0.3,0,0.4c0.5-0.1,1.2-0.2,1.9-0.6
			c1-0.6,2.2-1.8,2.8-4.1C352.2,111.9,350.6,113.2,349.1,114.5z"/>
                                <g id="g2face_1_">
                                    <path id="g2face" class="strich129" d="M340.6,99.3c0,0-0.8,3.4,1.3,7c0,0,0.6,2.4,2,3.6c0,0,1.9,2,3.1,2.9c1.2,0.9,1.1,1,1.6,1.4
				c0.5,0.4,1.5,0.3,2.4-0.1s2.9-2.5,3.9-5.3c0,0,0.6-2.2,0.4-3.2c0,0-0.1-1.7-0.1-3.4c0-1.7-0.6-4.7-1.1-5.6
				C353.7,95.8,345.4,92.9,340.6,99.3z"/>
                                    <path id="g1e2upmarkup" class="strich130" d="M348.6,105.5c0,0-0.5-1.7-0.2-1.9c0.3-0.3,2-1.4,2-1.4l0.9-0.2c0,0,2.1-0.1,1.6,1.5
				l-1.9,1.2L348.6,105.5z"/>
                                    <path id="g2e1upmarkup" class="strich130" d="M345.4,106.3c0,0-0.2-1.5-0.6-1.5c-0.3-0.1-2.5-0.6-2.5-0.6s-1.1,0.4-1.2,0.6l0.7,1.4
				L345.4,106.3z"/>
                                    <g id="g2eye1">
                                        <path id="g2e1w" class="strich34" d="M342.1,106.2c0.1-0.1,0.3-0.2,0.5-0.4c0.5-0.4,0.5-0.5,0.8-0.6c0,0,0.5-0.1,0.8,0.1
					c0.2,0.1,0.2,0.3,0.5,0.6c0.2,0.2,0.5,0.3,0.6,0.3c-0.2,0.1-0.8,0.4-1.7,0.5C342.9,106.9,342.1,106.2,342.1,106.2z"/>
                                        <path id="g2e1blue" class="strich131" d="M343.1,105.6c0,0-0.3,0.8,0.2,1.1h1c0,0,0.6-0.7,0-1.1
					C343.7,105.1,343.1,105.6,343.1,105.6z"/>
                                        <circle id="g2e1black" class="strich132" cx="343.9" cy="106" r="0.4"/>
                                        <circle id="g2e1blick" class="strich133" cx="344.1" cy="105.9" r="0.2"/>
                                        <path id="g2e1markup" class="strich134" d="M341.9,106.1c0.4-0.2,0.6-0.3,0.7-0.5c0.1-0.1,0.2-0.2,0.3-0.3c0.2-0.2,0.5-0.2,0.6-0.3
					c0.1,0,0.4-0.1,0.8,0.1c0,0,0.1,0.1,0.2,0.2c0.2,0.2,0.3,0.3,0.3,0.4c0.1,0.2,0.3,0.4,0.6,0.5c-0.6-0.1-0.9-0.3-1.1-0.5
					c0,0-0.1-0.1-0.3-0.2c-0.1,0-0.4-0.1-0.7-0.1c-0.1,0-0.3,0.1-0.6,0.4c-0.3,0.2-0.4,0.3-0.6,0.3
					C342.1,106.2,342,106.2,341.9,106.1z"/>
                                        <path id="g2e1down" class="strich135" d="M342.1,106.2c0,0,0.4,0.5,0.5,0.7c0.1,0.2,1.1,0.5,1.9-0.1c0,0,0.6-0.6,0.9-0.6
					c0,0-0.8,0.2-1.2,0.4c-0.3,0.2-1.3,0.2-1.8-0.3L342.1,106.2z"/>
                                        <g id="g2e1line">
                                            <path class="strich136" d="M342.1,106.2c0,0,0.2,0,0.6,0.1c0,0,0.2,0,0.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0
						c0,0,0.2,0,0.3-0.1c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2,0,0.3,0c0.2,0,0.3,0,0.4,0c0.1,0,0.1,0,0.1,0c0,0,0,0,0,0s0,0,0,0
						c0,0.1,0,0.1-0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.1-0.2,0.2c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0.1-0.3,0.1
						c-0.1,0-0.2,0-0.4,0.1c-0.3,0-0.5,0-0.7-0.1c-0.2-0.1-0.2-0.1-0.3-0.1c-0.1-0.1-0.1-0.1-0.3-0.2
						C342.3,106.4,342.1,106.2,342.1,106.2z"/>
                                        </g>
                                    </g>
                                    <g id="g2eye2">
                                        <path id="g2e2w" class="strich34" d="M348.8,105.4c0.1-0.2,0.2-0.5,0.3-0.6c0.1-0.2,0-0.3,0.1-0.5c0.1-0.2,0.3-0.4,0.4-0.4
					c0.2-0.1,0.5-0.1,0.8-0.1c0.3,0,0.4,0.1,0.8,0.1c0.3,0,0.6,0,0.8,0c-0.4,1-0.9,1.2-1.1,1.3c-0.3,0.1-0.8,0.2-1.4,0.2
					C349.2,105.4,348.9,105.4,348.8,105.4z"/>
                                        <path id="g2e2blue" class="strich131" d="M349.7,104.5c0,0.1,0.1,0.3,0.2,0.5c0.1,0.2,0.4,0.3,0.6,0.2l0.4-0.2
					c0.2-0.1,0.3-0.3,0.3-0.5c0-0.3,0-0.6-0.5-0.7c-0.4-0.1-0.7,0-0.9,0.2C349.7,104.2,349.6,104.4,349.7,104.5z"/>
                                        <circle id="g2e2black" class="strich132" cx="350.5" cy="104.3" r="0.4"/>
                                        <circle id="g2e2blick" class="strich133" cx="350.7" cy="104.2" r="0.2"/>
                                        <path id="g2e2down" class="strich135" d="M348.6,105.5c0,0,0.8-0.1,1.2,0.2c0.4,0.2,1.2,0.1,1.8-0.6c0-0.1,0.1-0.1,0.1-0.2
					c0.1-0.2,0.3-0.7,0.5-0.9c0,0-0.7,0.6-1,0.9c-0.3,0.3-0.5,0.4-1,0.5c-0.2,0-0.8,0-1,0L348.6,105.5z"/>
                                        <g id="g2e1line_1_">
                                            <path class="strich136" d="M348.7,105.5c0,0,0.3-0.2,0.6-0.3c0.1-0.1,0.2-0.1,0.4-0.1c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1
						c0.1,0,0.2-0.1,0.3-0.1l0.3-0.2c0.1,0,0.1-0.1,0.2-0.1l0,0c0,0,0.1,0,0,0l0,0l0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.2
						c0.1-0.1,0.2-0.1,0.3-0.2c0.4-0.2,0.7-0.3,0.7-0.3s-0.1,0.3-0.4,0.6c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3
						l-0.1,0.1l0,0l-0.1,0l0,0c-0.1,0-0.1,0.1-0.2,0.1l-0.3,0.2c-0.2,0.1-0.3,0.1-0.5,0.2c-0.1,0-0.3,0.1-0.5,0.1
						c-0.1,0-0.3,0-0.4,0c-0.1,0-0.2,0-0.3-0.1C349,105.5,348.7,105.5,348.7,105.5z"/>
                                        </g>
                                        <path id="g2e2markup" class="strich134" d="M348.7,105.5c0.2-0.3,0.2-0.6,0.2-0.8c0-0.2-0.1-0.4,0-0.6c0.1-0.1,0.2-0.2,0.3-0.3
					c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.5,0,0.9,0c0.2,0,0.4,0,0.5,0.1c0.1,0,0.3,0.1,0.5,0.1c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.3-0.1
					c0.1,0,0.2-0.1,0.3-0.1c-0.1,0.2-0.4,0.5-0.8,0.6c-0.2,0-0.4,0-0.6,0c-0.3,0-0.3-0.1-0.6-0.1c-0.1,0-0.4,0-0.7,0
					c-0.3,0.1-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.6-0.3,0.6c0,0.1-0.1,0.2-0.2,0.3C348.8,105.4,348.7,105.5,348.7,105.5z"/>
                                        <path class="strich134" d="M348.2,104.8"/>
                                    </g>
                                    <path id="g2e1eyebrow" class="strich137" d="M341.2,104.7c0,0,1-0.8,2.3-0.1c1.2,0.7,1.5,0.2,1.5,0.1c0-0.1,0.2-0.3-1.1-0.4
				S342.3,103.5,341.2,104.7z"/>
                                    <path id="g2e2eyebrow" class="strich137" d="M352.2,102c0,0-1.4-0.3-2.5,0.8c-1.1,1.2-1.5,0.8-1.6,0.8s-0.3-0.2,1-0.8
				C350.5,102.2,350.5,101.4,352.2,102z"/>
                                    <g id="g2nose">
                                        <path id="g2nose2" class="strich138" d="M347.9,109.6c0,0,0.3-0.6,1-0.4c0,0,0.1,0.2-0.1,0.2C348.5,109.4,348.2,109.3,347.9,109.6z"
                                        />
                                        <path id="g2nose1" class="strich138" d="M346.9,108.6c0,0-0.3,1.1,0.5,1.2C347.4,109.8,346.9,109.8,346.9,108.6z"/>
                                        <path id="noseblik" class="strich139" d="M347,105.9c0,0,0.2,3,0.4,3.2c0.2,0.2,0.2-0.4,0.2-0.4S347.4,107.4,347,105.9z"/>
                                    </g>
                                    <path id="g2mouthshadow" class="strich140" d="M347.7,112.2c0,0,1.1,1,2,0.6c0.9-0.5,0.8-1.3,0.8-1.3L347.7,112.2z"/>
                                    <g id="g2mouth">
                                        <path id="g2throat" class="strich141" d="M346.6,111.5c0,0,1.7,1.1,2.9,0.3c0,0,1.6-0.6,1.8-1.4
					C351.3,110.4,347.5,112.2,346.6,111.5z"/>
                                        <path id="g2teeth" class="strich34" d="M348,111.4c0,0,1,0.6,2.1-0.5L348,111.4z"/>
                                        <path id="g2lipdown" class="strich142" d="M346.7,111.6c0,0,1.4,0.5,2.6,0.1c1.2-0.4,2.1-1.4,2.1-1.4c-0.1,0.2-0.2,0.5-0.3,0.8
					c-0.3,0.6-0.4,0.9-0.7,1.1c-0.3,0.3-0.7,0.3-1.2,0.4c-0.4,0.1-0.7,0.1-1,0c-0.2-0.1-0.4-0.2-0.7-0.4
					C347.1,111.9,346.9,111.7,346.7,111.6z"/>
                                        <path id="g2lipup" class="strich143" d="M346.7,111.6c0,0,0.3,0.1,0.8-0.4c0.5-0.5,1.1-0.3,1.1-0.3s0.1-0.5,1.4-0.4
					c0,0,0.8,0.1,1.3-0.2c0,0,0,0.9-1.7,0.9c0,0-1,0-1.5,0.3S347.2,112,346.7,111.6z"/>
                                    </g>
                                    <path id="g2blush2" class="strich144" d="M353.8,104.4c0,0-1.9,2.1-1.9,2.6s0,2.4,0.5,2.2c0.5-0.2,2-1.4,1.8-4.3
				C354.2,104.9,354.1,104.1,353.8,104.4z"/>
                                    <path id="g2blush1" class="strich144" d="M342.7,107.5c0,0,1.1,0.4,1.4,0.3c0.3,0,1,0.6,1.3,1.3s0.2,1.3,0,1.4
				c-0.2,0.1-1.4-0.8-1.8-1.4S342.7,107.5,342.7,107.5z"/>
                                    <path id="g2e2upblik" class="strich145" d="M351.1,102.8c0,0,1-1,1.6,0c0,0,0,0.2-0.3,0.1C352,102.7,351.5,102.3,351.1,102.8z"/>
                                    <path id="g2e1upblik" class="strich145" d="M342.7,104.7c0,0-0.8-0.4-1.1,0.6c0,0,0.1,0.2,0.3,0C342.1,105.1,342.1,104.8,342.7,104.7
				z"/>
                                    <path id="g2lipblik1" class="strich146" d="M349,110.7c0,0,0.3-0.2,0.8-0.1c0.5,0,0.7,0,0.7,0S349.3,110.8,349,110.7z"/>
                                    <path id="g2lipblik2" class="strich146" d="M349.3,111.9c0,0,0,0.5,0.1,0.5C349.5,112.3,349.5,111.7,349.3,111.9z"/>
                                    <path id="g2lipblik3" class="strich146" d="M349.8,111.7c0,0-0.3,0.2-0.1,0.4c0.2,0.2,0.5,0,0.5-0.2
				C350.2,111.7,350.1,111.6,349.8,111.7z"/>
                                </g>
                                <path id="g2fh4" class="strich147" d="M338.4,105.6c0,0-1.7-10.6,2.6-12.2l4.3-0.7c0,0,5.3-2.9,8.2,2.2c0.3,0.7,0.5,1.4,0.8,2.1
			c-0.7-0.1-1.6-0.2-2.6-0.3c-1.8-0.2-2.5-0.3-3.5-0.2c-0.3,0-0.7,0-1.2,0.1c0,0-1.6,0.3-3.2,1.4C342.3,99,340.1,101.6,338.4,105.6z
			"/>
                                <path id="g2fh11" class="strich124" d="M353.6,96.3c0,0-1.2,3.2,0,3.9c1.2,0.7,3.4,0.3,3.5,1.8C357,101.9,357.2,96.6,353.6,96.3z"/>
                                <path id="fh1" class="strich148" d="M338.4,102.3c0,0,4.3,1.5,6.8-2s5.6-4.6,8.8-3.9c0,0-4.6-1.1-6.2,0c-1.5,1.1-3.8,3.3-4.4,4.3
			C343.4,100.7,341.3,102.5,338.4,102.3z"/>
                                <path id="fh2" class="strich149" d="M340,104.5c0,0,2.8-6.2,5.7-6.7c3-0.5,8.4-1.2,8.4-1.2s-7.2-1-10,1.3
			C341.3,100.3,340,104.5,340,104.5z"/>
                                <path id="gh3" class="strich123" d="M354.1,96.7c-2.8-1.7-5.9-1.1-7.2-0.8c-3,0.7-3.8,3.2-7.3,4.6c-2.4,1-4.8,0.8-6.5,0.5
			c0,0,6.5-0.2,9.9-4.6C346.6,92.1,353.2,95.1,354.1,96.7z"/>
                                <path id="g2fh5" class="strich150" d="M338.1,93.9c0,0,11.1-6.3,16.5,2.1C354.6,96,350.2,89.9,338.1,93.9z"/>
                                <path id="g2fh10" class="strich124" d="M354,96.4c0,0-4.5,2.3-2.5,2.3c2,0,3.2-0.6,4.5-0.5s1.8,0.3,2.3,1.1c0.5,0.7-1.1,4.1-1.1,4.1
			s1.2-3.1,0.1-3.8c-0.2-0.2-0.5-0.2-0.7-0.2c-3.3,0.1-5.4,0.7-6.5-0.2c-0.1-0.1-0.5-0.5-0.5-0.9c0-0.7,0.8-1.2,1.1-1.4
			C351.8,96,353.4,96.3,354,96.4z"/>
                                <path id="g2fh7" class="strich151" d="M360.7,104.5c0,0,2-2.4-0.7-3.5c-2.7-1.1-9-1.8-8.5-2.6c0.5-0.8,2.6-1.8,2.6-1.8
			s-1.9-0.3-2.6,0.4c-0.7,0.7-1.6,2.3-0.5,2.3c1.1,0,9.3,2.1,9.7,2.7C360.7,102,361.7,102.9,360.7,104.5z"/>
                                <path id="g2fh6" class="strich150" d="M354.1,96.7c0,0-1.5,1.5,1.9,2.1s4.9,4.2,4.7,5c0,0-2.7-4.6-5.4-4.7c-2.8-0.1-3.3-1.4-2.9-1.7
			C352.6,97.1,353,96.5,354.1,96.7z"/>
                                <path id="g2fh8" class="strich152" d="M359.1,102.1c0,0-0.5-2-4.5-1.6c-4,0.4-0.6-3.9-0.6-3.9s-2.7,1.5-2.6,3.1s3.2,1.4,3.2,1.4
			S358.1,100.5,359.1,102.1z"/>
                                <path id="g2fh9" class="strich124" d="M356.4,107.5"/>
                                <path id="g2bodyshadow6" class="strich153" d="M366.2,126.5l3.1,4.2c0,0,0.3-0.4,0-2.1s-2-10.6-2-10.6s6.1,23.5,7.9,23.8
			c0,0-2.7-1-5.2-3.6c0,0-6-5.8-6.2-6.2C363.5,131.6,366.2,126.5,366.2,126.5z"/>
                                <path id="g2breast1" class="strich154" d="M347.4,127.5c0,0,1.6-5.6,9.3-0.3c0,0,2,1.7,1.5,4.5S346.2,136.9,347.4,127.5z"/>
                                <path id="g2bblik1" class="strich155" d="M347.9,89.3c0,0,3.8,1.8,4.2,3.5C352.1,92.8,351.1,91.2,347.9,89.3z"/>
                                <polygon id="g2bblik2" class="strich155" points="349.3,91.2 350.2,92 349.8,91.9 		"/>
                                <path id="g2bblik3" class="strich155" d="M350.6,90.9l4.4,2C354.9,92.9,352.3,91.5,350.6,90.9z"/>
                                <path id="g2bblik4" class="strich155" d="M324.2,98.9c0,0,8.1-5.4,17.2-6.9C341.4,92,332.3,94.1,324.2,98.9z"/>
                                <path id="g2bblik5" class="strich155" d="M330.7,101.4c0,0,5.6,11.5,9.5,13.5s6.8,4.8,6.7,6.9c0,0-0.8-2.6-6.9-6.2
			c0,0-8.5-9.8-9.7-13.9C330.3,101.8,330.5,101.1,330.7,101.4z"/>
                                <path id="g2bblik6" class="strich155" d="M354.6,109.5c0,0-0.6,8,4.3,9.2C359,118.7,353.8,119.2,354.6,109.5z"/>
                                <path id="g2bblik7" class="strich155" d="M355,115.9c0,0,0.6,2.8,0.6,3.1s0.1,0.3-0.3-0.1L355,115.9z"/>
                                <path id="g2bblik8" class="strich155" d="M360.7,118.9c0,0,2.8-0.4,4.4,1.3s1.2,0.6,2.6,4.3c1.4,3.7,1.9,5.7,1.9,5.7l1.5,6.5
			c0.3,0.1-2.9-10-4.3-13.2C365.7,120.5,363.4,119.2,360.7,118.9z"/>
                                <path id="g2bblik9" class="strich155" d="M364,107.6c0,0,1.4,1.3,1.8,2c0.4,0.7,3.6,5.8,3.5,6.7s2.7,5.2,2.7,5.2s5.2,7.7,5.9,13.2
			c0,0,0.4,5-2.1,7.1c1.2-2.8,1.2-4.9,1.1-6.1c-0.1-1-0.4-2.3-0.6-3c-0.2-0.7-0.4-1.9-0.9-3.3c-0.6-1.8-1.3-3-1.9-4.3
			c-0.8-1.5-1.5-2.6-2.8-4.6c-0.8-1.3-1.5-2.3-2-3c0-0.2-0.1-0.5-0.1-0.7c-0.1-0.4-0.1-0.9-0.1-1.3C368.6,115.6,365.1,109,364,107.6
			z"/>
                                <path id="g2bblik10" class="strich155" d="M365.8,134.1c0,0,0.7,3.1,0.1,5.6c0,0-4.4,13.2-4.7,16.5c-0.3,3.3-1.2,5.7-1.2,5.7
			s1.1-4.2,0.8-7.3c0,0,5-15.3,5-16.4C365.9,137,365.8,134.1,365.8,134.1z"/>
                                <path id="g2bblik11" class="strich155" d="M364.6,179c0,0-3.6-11.5-4.3-12.4c-0.6-0.9-0.9-1.6-0.9-1.6l4.6,14L364.6,179z"/>
                                <path id="g2bblik12" class="strich155" d="M347,154.1c0,0,5.2,2.3,5,14.3c-0.2,12-1,11.5-1,11.5l-1.6,0c1.4-3.7,1.4-5.5,1.7-7.8
			c0.4-3.4,0.8-7.8-1.2-12.8C349,157,347.9,155.2,347,154.1z"/>
                                <path id="g2bblik13" class="strich155" d="M353.2,125.6c0,0,3.5,0.6,4,3.8C357.2,129.4,354.9,126.3,353.2,125.6z"/>
                                <path id="g2breast2" class="strich154" d="M363.1,124.3c0,0-2.7-1.3-3.4,1.9c0,0,0.7,4.4,3.1,5.5C365.2,132.7,363.1,124.3,363.1,124.3
			z"/>
                                <path id="g2bodyshadow1" class="strich156" d="M331.1,100.9c0,0,3.4-3.3,8.9-5.6C340,95.3,333.5,97.3,331.1,100.9z"/>
                                <path id="g2bodyshadow2" class="strich156" d="M323.9,99.1c0,0,5.2,13.3,10.8,18.7c5.6,5.4,6.2,6.1,8.4,7.1c2.2,1,3.2,3,3.1,4.3
			c0.1-0.4,0.3-0.7,0.4-0.9c0,0,0.2-0.3,0.9-1.2l0,0c0,0-0.9,3.6,0.7,4.7c1.6,1.1,0.9,4.1,0.9,4.1s3.3,4.7,1.9,7
			c-1.4,2.3-2.1,3.7-2.5,4.3c-0.4,0.6-5.9,4.8-7.9,5.8c0,0,2.5-3.1,5.2-4.5c2.7-1.4,3.5-5.3,3.5-5.5c0-0.2,0.8-1.8-0.6-4.3
			s-5.1-9.6-5.7-10.8c-0.6-1.2-1.7-3.2-3.2-3.7c-1.5-0.5-0.2-0.1-0.2-0.1s-3.1-1.9-4.6-4.4c0,0-7.1-9.1-9.8-16
			C325.2,103.7,323.9,100.1,323.9,99.1z"/>
                                <path id="g2bodyshadow3_1_" class="strich157" d="M347.6,127.2c0,0-0.8,4,1.2,5.1l0.3-0.7C349.1,131.5,347.5,130.1,347.6,127.2z"/>
                                <path id="g2bodyshadow5" class="strich158" d="M366.2,133.9c0,0-5.4,0.9-6.9-3.5c0,0-0.7-2.8,0.7-5.4
			C359.9,125.1,358.7,130.2,366.2,133.9z"/>
                                <path id="g2bodyshadow4_1_" class="strich157" d="M359.8,125.4c-0.1,0.5-0.1,1.3,0,2.2c0.2,1.1,0.7,1.8,0.8,2c0.4,0.6,0.8,1,1.1,1.3
			c0.2-0.3,0.3-0.5,0.5-0.8c-0.4-0.3-0.8-0.7-1.2-1.2C360,127.6,359.8,126.1,359.8,125.4z"/>
                                <ellipse id="g2navel" class="strich159" cx="358.6" cy="151.2" rx="0.4" ry="0.3"/>
                                <path id="g2bicinishadow1" class="strich160" d="M351,158.2c0,0,0.1-3.1,1.9-4.1c0,0-1.5,3.6-1,5.7L351,158.2z"/>
                                <path id="g2bicinishadow2" class="strich160" d="M356.2,161.9c0,0,2.3-1.1,2.8-4.9c0,0,0.6,2.3-1.6,5.1L356.2,161.9z"/>
                                <path id="g2legshadow1" class="strich160" d="M352,166c0,0,0.1,7.8-0.5,11.7c0,0,0.8,0.7,0.7,1.4l9.9-0.1c0,0-4.5,0.2-5-5.3
			c-0.4-5.4,1.5-11.8,3-12.8c0,0-2.5,2.1-5,2.7C352.8,164.1,352,166,352,166z"/>
                                <path id="g2legshadow2" class="strich160" d="M340.1,180.1c0,0-1.7-9.6-2.8-11.3c0,0-3-6.5,1-12.6c0,0-3.5,8.3,0.9,14.7
			c0.3,0.5,1.4,2.1,1.9,4.4c0.5,2.2,0.3,4.5,0.3,4.5c0,0.1,0,0.2,0,0.3C341,180.2,340.5,180.1,340.1,180.1z"/>
                                <path class="strich159" d="M352.9,115.9c0,0,0.5,1.4,0.1,2.1h0.4C353.4,118.1,353.5,116.9,352.9,115.9z"/>
                                <path id="g2lif" class="strich34" d="M347.4,135.2l-0.6-0.1c0,0-0.6-0.3-0.4-0.8l0.9,0.1c0,0,2.3-1.8,2.4-9.1c0,0-0.7-5.4-2.4-8.1
			c0,0,0-0.5,0.5-0.2c0,0,2.5,6.6,6.6,9.9s4.1,5.2,4.1,5.2s0.9,0.7,1.6-0.6c0,0,0-0.2,0.4-0.2s3.5-0.2,1.5-6.7c0,0-1.7-4.3-2.7-6.1
			c0,0,0.3-0.3,0.5,0.2c0,0,4.6,5.7,7.3,6.8c2.7,1.2,2.6,4.2,1.9,5.4c-0.7,1.2-0.8,2.6-4.3,2.8c0,0-3.1-0.4-3.8-1.2
			c0,0-1,1.8-2.8,0.7c0,0-2.5,3.1-6.6,3C351.6,136.5,349.1,136.4,347.4,135.2z"/>
                                <path id="g2lifhole" class="strich161" d="M358.3,132.7l-0.1,0.4c0,0,1.8,0.7,2.4-0.6l-0.3-0.4C360.3,132.1,360.2,133.3,358.3,132.7z"
                                />
                                <path id="g2lifshadow1" class="strich162" d="M346.4,134.4h1c0,0,1.8-1.8,2-4.3c0,0,0.2,5.3,4.2,4.9c0,0,1.8,0.1,4-1.5
			c0,0-1,2.3-5.4,2.9c0,0-3.3,0.1-4.9-1.4l-0.7-0.1L346.4,134.4z"/>
                                <path id="g2lifshadow2" class="strich162" d="M360.1,131.7c0,0,2.5-0.1,2.6-2.7c0.1-2.6-0.1-2.8-0.1-2.8s1.2,5.8,2.6,6.2
			c1.4,0.4,2.8,0,2.8,0s-1.2,2.1-4.3,1.2C360.6,132.7,360.6,132.3,360.1,131.7z"/>
                                <path id="g2lifshadow3" class="strich162" d="M349.1,120.9c0,0,1.9,3.7,3.8,5.8C352.9,126.8,350.3,124.4,349.1,120.9z"/>
                                <path id="g2lifshadow4" class="strich162" d="M351.9,127.7l-1.9-4.2C350,123.5,350.8,126.7,351.9,127.7z"/>
                                <path id="g2lifshadow5" class="strich162" d="M350.4,128.2c0,0,0.1-2.5-0.3-3.8C350.1,124.4,350.3,127.7,350.4,128.2z"/>
                                <path id="g2lifshadow6" class="strich162" d="M361.3,121.9c0,0,1.5,2.4,2,3.5C363.3,125.4,361.8,123,361.3,121.9z"/>
                                <path id="g2lifshadow7" class="strich162" d="M362.2,122.6c0,0,1.6,1.7,2.5,2.8s0,0.2,0,0.2S362.3,122.9,362.2,122.6z"/>
                                <path id="g2lifshadow8" class="strich162" d="M360.9,120.6c0,0,2.5,2.9,3.9,4C364.9,124.6,362.5,123,360.9,120.6z"/>
                                <path id="g2panties" class="strich34" d="M341.1,152.4h3.4c0,0,0-2.5-1.2-2c0,0-0.1,0.1-0.2,0.1c-0.1,0.1,0.1,1.2,1.2,1.9
			c0,0-1.8-0.7-1.4-2c0,0,0.1-0.6,0.9-0.3c0.9,0.3,1,1.1,1,2.3c0,0,0.7-0.2,1.2-0.9c0.5-0.7,1.9-0.5,2.2-0.2c0.3,0.3,0.8,1-0.2,1.4
			c-1.1,0.3-2.8,0.3-2.8,0.3s3.4-0.6,2.9-0.9c0,0,0.1-0.8-1.6-0.5c0,0-0.8,1-1.6,1.3s-1.5,0.3-1.3,2.5c0.2,2.2,0.6,2.8,0.6,2.8
			s-1.2-1-1.1-3.4c0.1-2.4,2.1-2,2.1-2s2.6,0.7,4.1,3.1c1.5,2.4,6.8,6.6,9.4,5.8c0,0,1.4-0.3,1.9-1.4l0.1-0.1l-0.2,0.6
			c0,0-2.8,3.9-7.5,6c0,0-0.4,0.3-0.8,0.2c0.2-0.1,0.6-6.4-3-10.8c0,0-1.5-2.3-4.3-3.2c0,0-0.2,5.1,1.9,7.6c0,0-3.1-2.8-2.2-7.9
			c0,0-1.7,0.2-3.6-0.1C340.9,152.6,340.8,152.4,341.1,152.4z"/>
                                <path id="g2pantiesshadow1" class="strich163" d="M350.5,157.8c0,0,2.2,3.2,1.7,9c0,0,0.8-0.1,0.9-0.5
			C353.2,165.9,352.6,160.7,350.5,157.8z"/>
                                <path id="g2pantiesshadow2" class="strich163" d="M351,158.2c0,0,3.7,5.2,7.5,3.9C358.5,162.1,354.8,162.8,351,158.2z"/>
                            </g>
                            <g id="girl3">
                                <g id="g3backhair">
                                    <path id="backhair_2_" class="strich164" d="M362.5,99.7c0,0,4.4-4.1,7.3-4s0.6-2,2.6-3.2c2.1-1.2,2.2-0.2,5-2.1
				c2.7-1.9,5.4-8.3,6.4-8.5c1.1-0.2-3.3,0.5-5.1,3.6s-2.8,1.2-4.3,2.4c-1.5,1.2-1.4,2.5-2.1,3.3c-0.7,0.8-2.3,1-3.5,3
				c-1.2,2-1.1,1-1.1,1s1.4-4,3.3-4.5c1.9-0.4-0.6-2.5,3.9-4.6c4.5-2.1,4-3.4,4-3.4s-3,2.5-4.2,2.4c0,0,2.2-2.7,4.9-3.9
				s1.5-1.2,3.1-1.8s6.9-6.5,11.7-4.8c0,0,5-3.3,8.4,6.7c0,0,2.7,11.8-8.3,14.4v1.1c0,0-11.9,8-19.7,9.6c0,0,15.2-6.5,15.7-8.4
				c0,0-5.2,3.7-7.4,3.8c-2.3,0.1-1.8,0.7-1.8,0.7s-3.8,2.2-5.2,2.2c0,0,0-0.8,0.5-1s-2,1.6-3.3,2.1c0,0,0.7-4.1,2.7-4.2
				c2.1-0.1,2.3-2.9,1.6-2.5c-0.7,0.4-1.7,2.3-2.7,2.5c-1,0.3-4-1-6.5,3c0,0,0.3-4.4,1.8-4.9c0,0-2,3-3.7,3.2
				c-1.6,0.2-3.4,1.7-3.4,1.7s2.1-2.4,3.9-3c0,0-1.7-0.7-3.1,0.6c0,0,0.4-1.9,2.2-2.3l-4.3,1.8c0,0,1.1-0.8,1-1.3
				C363,100,362.5,99.7,362.5,99.7z"/>
                                    <path id="g3backhairadd1" class="strich165" d="M364.9,100.6c0,0,1.3,0.2,2.8-1.6c0,0,0.6-0.8,1.5-0.5c0,0-1.1,0.3-1.8,2.2
				c0,0,0.5-0.9,1.4-1.1c0.9-0.2,2.3,0,2.9-0.8c0,0,0.5,0.9-0.6,1.3c-1.1,0.4-1.4,1.7-1.4,1.7s0.4-0.6,1.8-1.2
				c1.3-0.6,1.6-0.7,2.1-1.4c0.6-0.7,4.6-1.7,5.2-2.2c0.5-0.5,7.8-4.1,10-10.6s5-7,5-7s-11.4,13.6-14.7,14s-6.9,3.7-11,3.6
				C364.1,96.9,368.4,98.8,364.9,100.6z"/>
                                    <path id="g3backhairadd2" class="strich165" d="M386.8,92.2l-1.9,1.9l0.3-1.2c0,0-5.3,5.8-6.3,7s-2.5,1.8-2.5,1.8l3-1.2
				c0,0-2.8,2.4-3.9,2.4c0,0,1.5-0.2,3.9-1.5c2.4-1.3,6.7-6.9,6.7-6.9s-1.8,1-1.9,1.5C384,96.5,386.8,92.2,386.8,92.2z"/>
                                    <path id="g3backhairadd3" class="strich166" d="M383.4,86.8c0,0,6.2-8,13.4-9.2C396.8,77.6,387.1,79,383.4,86.8z"/>
                                    <path id="g3backhairadd4" class="strich165" d="M386.8,98c0,0,3-1.5,3-2.4s3.2-0.3,0.6,1.9c-2.6,2.3-5.5,3-5.5,3s4.4-2,4.9-3
				c0,0-0.3,0.6-1.7,1c0,0,2-1.4,2-1.8C390.1,96.7,387.8,97.9,386.8,98z"/>
                                    <path id="g3backhairadd5" class="strich165" d="M389.8,82.2c0,0-4.5,5.5-7.9,6.8c-3.4,1.3-3.5,3.2-6.8,4.9c0,0,3.1-0.6,5.4-3
				c2.3-2.4,2.3-0.1,5.5-3.7C389.2,83.6,389.8,82.2,389.8,82.2z"/>
                                    <path id="g3backhairadd6" class="strich167" d="M379,84.9c0,0,1.1-1.7,1.2-2.7c0.1-1,2.7-0.1,3.8-0.8c1.1-0.6-0.2-1.5,1.3-2
				s0.9,0.7,2.5,0c1.6-0.7,0.7-1.5,2-2.1s2-1,2.9-1.8c0,0-2.1,1.4-3.8,1.5c-1.7,0.1,0,1.4-1.5,1.9c-1.5,0.4-0.9-0.8-2.5-0.3
				s-0.6,1.3-1.5,1.9c-0.9,0.6-2.1-0.2-3.1,0.5C379.2,81.8,380,82.8,379,84.9z"/>
                                </g>
                                <path id="g3body" class="strich168" d="M388.2,165c0,0,3.6-16,4.8-19c1.2-3,0.9-7.1,1.8-9.2c0.9-2,1.4-3.2,1.4-3.2s0.6-2.9,1.5-4.9
			c0,0,0.4-0.9-0.6-2.6c-1-1.7-1.9-3.6-2.3-4.2c0,0-6.3-7.2-7.9-9.8c0,0-5-7-6-7.8c-0.9-0.8-2.5-4-3.4-7.3c-0.9-3.3-7.3-20.8-8-25.6
			s-2.3-8.6-3-8.9c-0.7-0.2-5.4-1.2-5.4-1.2s-4.5-3.2-6.9-3.7c0,0,0.5-1,2.6,0.2c0,0-2.6-1.8-2.6-2c-0.1-0.2,0.6-0.9,3.4,1.4
			c0,0-2.2-2.6-2.5-2.7c0,0,0.5-1.2,3.2,2.3c0,0,0-1.2,0-1.4c0-0.2,0.2-0.5,0.4-0.7c0.2-0.2,0.7-0.6,0.9-0.6c0.2,0,0.5,0,0.1,0.7
			c-0.4,0.6-0.3,0.2-0.4,0.5c-0.1,0.3-0.1,1,0,1.2c0.1,0.3,1.5,2.6,2.7,3.1c0,0,0.5,0.3,1,0.1c0.4-0.2,0.5-0.3,0.1-0.9
			c-0.5-0.6-0.8-0.8-1-1c-0.3-0.2-1.6-0.9-1.6-2.1c-0.1-1.2,0.9,0.2,1.2,0.5c0.3,0.3,1.8,2.4,5,3.1c0,0,1.2,0.3,1.7,1.7
			c0.5,1.4,4.8,9.2,6.6,13.7s3.8,11,4.1,11.7c0.3,0.7,5.4,11.1,6,12.6c0.6,1.5,0.6,2.4,2.6,2.9c0,0,0.9,0.7,2.4-0.6
			c1.5-1.3,2.4-1.9,3.3-5.8c0.9-3.9,5-3.7,5-3.7s-1.8,6.1-1.3,9c0,0,1.1,2.8,4.5,2.2c0,0,2.3-1,3.8-1.5c0,0,9.8-9,10.4-10.9
			c0.7-1.9,1.9-15.2,4.4-19.7c0,0,0.1-0.3,0.1-0.5c-0.1-0.2-0.1-1.1,2-2.2c0,0,3.2-2.5,3.4-4.9c0,0,1-0.6,0.5,1.5
			c0,0-0.2,0.6-0.7,1.2s-1.8,2.8,0.3,1.8c0,0,0.9-0.4,1.9-1.8c1-1.3,1.7-2.8,1.9-3.1c0.2-0.3,0.4-0.8,1-0.8c0.5,0,0.4,0.2,0.2,0.4
			c-0.2,0.2-0.7,1.3-0.8,1.4c-0.1,0.2-1.1,2.3-1.4,2.8c0,0,1.1-1.5,1.6-2.3c0.4-0.8,1-2.2,2.1-2.2c0,0,0.4,0.1,0,0.6
			c-0.4,0.4-0.9,0.7-1.7,2.4c0,0,1.7-2,2.7-1.8c0,0,0.4,0.1,0,0.4c-0.4,0.3-3.8,4-3.8,4s3.6-2.1,4.7-1.5c0,0,0.4,0.2-0.5,0.4
			c-0.9,0.2-1.6,0.3-3.7,1.7c-2.1,1.4-2.3,2-5.8,3c0,0-1.8,0.4-2.3,1.3c-0.5,1-0.4,5.9-0.5,6.6c0,0.7,0.2,7.9-0.8,10.6
			c-1,2.7-1,2.6-1.7,3.7c0,0-5.2,10.9-10.9,13.6c-5.7,2.7-0.2,0-0.2,0s7.4,0.5,3,8.1c0,0-0.5,3.9-0.1,5.5s4.1,8.2,6.7,14.3
			c0,0,3.2,3.7,1.2,10.5c-2,6.8-4,17.3-5.5,19.5c0,0-5.6,0.8-8.6-0.4l3.8-18c0,0-1.6,1.9-3.2-0.6c0,0-0.5,3.2-2.1,6.8
			s-4.5,10.5-6.5,12.1C394.5,166.6,388.2,165,388.2,165z"/>
                                <path id="g3bblik1" class="strich169" d="M358.3,56.7c0,0,1.5,2.1,1.6,2.4C360,59.3,358.3,57,358.3,56.7z"/>
                                <path id="g3bblik2" class="strich170" d="M366.5,62.6c0.1,0.1,0.3,0.2,0.5,0.4c0.1,0.2,0.2,0.3,0.2,0.4c0.3,0.8,0.8,1.6,1.5,3.8
			c0.3,1,0.6,2.3,0.8,3.7c0.4,1.9,0.9,3.8,1.5,5.7c0.8,3.1,1.9,6.6,2.7,8.4c0,0,4.8,14.5,5.1,15.1c0.3,0.6,1.2,3.4,3.2,5.1
			c0,0,8.7,12.1,13,16.6c0,0,3.2,5.1,2.8,6.8c-0.4,1.7-1,2-1.4,4.5c0,0-2.2,4.7-2.9,11.9c0,0-3.7,11.4-5.1,19.9c0,0,0.8,0.2,1,0.2
			c0.2,0,2.7-12.3,4.3-16.4c1.6-4.1,1.9-5.8,1.9-6.6s1.5-6.7,2.3-8l0.1-0.3c0,0-0.9-1.9,0.3-4.4c0,0,0.9-1-0.2-3.1
			c-1.1-2.1-2.2-4.6-2.5-5c-0.3-0.3-2.6-3.5-2.8-3.7c-0.2-0.3-2.7-3-3.4-3.6c-0.7-0.6-4.8-6.4-5.9-8.4c-1.1-1.9-3-3.1-5-8.5
			c-2-5.4-4.1-12.4-4.8-13.7c-0.6-1.3-3.6-12.6-3.9-14.4c-0.3-1.9-2-6.5-2-6.5H366.5z"/>
                                <path id="g3bblik3" class="strich171" d="M368.9,62c0,0,1.6,4.2,3.6,8.4c2,4.2,5,13,5.5,13.7c0.5,0.6,0.5,0.7,0.5,0.7s-3.1-9.6-5-13.5
			S368.9,62,368.9,62z"/>
                                <path id="g3bblik4" class="strich172" d="M400.4,102.8c0,0,0.7,0.1,1.2-0.1s3.8-1.5,3.8-1.5s7.8-7.5,9.2-9.1c1.4-1.6,1.4-2,1.7-4
			s1.8-11.1,2.5-13.5s1.5-4.2,1.5-4.2s0-0.1,0-0.4c0-0.2,0.1-0.9,1.2-1.6c1.1-0.8,1.6-1,3.3-3.1c0,0,0.9-1.1,0.9-2.2
			c0-1.2,0-0.1,0-0.1s0.6,1.7-2.7,4.7c0,0-1.5,1.2-1.9,1.6c-0.4,0.4-0.3,0.6-0.4,1c-0.1,0.4-1.9,7.1-2,7.7c-0.1,0.6-1.3,4.1-1.2,8.7
			c0.2,4.6-2.5,6.3-2.8,6.7c-0.3,0.3-3.6,4-6.1,6.1c-2.5,2-3.9,5.3-3.9,5.3S401.2,102.9,400.4,102.8z"/>
                                <path id="g3bblik5" class="strich172" d="M408.5,146.2l-3.9,18.4c0,0,1.7-2.9,2.2-7c0.5-4.1,2.3-11.5,3.1-12.3
			C410.7,144.4,408.5,146.2,408.5,146.2z"/>
                                <path id="g3bblik6" class="strich173" d="M404,130.9c0,0-1.2,4.9,0.3,8.2C404.3,139.1,404.4,133,404,130.9z"/>
                                <path id="g3bshadow2" class="strich174" d="M406.3,106.5c0,0,1.6,0,4-2.1c2.3-2.2,3.2-3.6,4.3-5c1.1-1.4,5.4-8.9,5.5-9.4
			c0.1-0.5,1-1.3,1.2-9.1c0.2-7.9-0.6-8.9,2.3-10.1c0,0,1.3-0.2,2.6-0.7c1.3-0.5,4.4-2.3,4.4-2.3s-2.2,2.2-5.3,3
			c0,0-2.7,0.4-3.3,1.6c0,0-0.2,0.4-0.3,2c-0.1,1.6-0.1,8-0.2,10.1s-0.3,5.1-1.8,7.7c-1.5,2.6-4.3,8.2-7.3,11.2
			c-3,3-2.5,2.7-4.6,3.6C405.5,107.9,406.3,106.5,406.3,106.5z"/>
                                <path id="g3bshadow3" class="strich174" d="M410.8,115.1c0,0-0.6,4.2,0,5.8c0.6,1.5,6.6,14.1,6.6,14.1s3.1,3.6,1.4,10.1
			c-1.7,6.5-4.3,18-5.6,20h-0.5c0,0,4.3-16.2,4.6-18.4c0.3-2.2,1.3-6.5-1-10.8c0,0-1-5.2-3.9-9.8s-2.4-4.5-2.4-4.5s-0.1-5.3-1.5-6.2
			c-0.9,0-1.7-0.2-2.1-0.4c-0.7-0.3-0.9-0.5-1.4-0.5c-0.6,0-0.8,0.4-1.6,0.8c-0.3,0.2-1,0.5-1.9,0.7c-1.4,0.2-2.1-0.3-3.2,0.2
			c-0.1,0.1-0.3,0.1-0.4,0.3c-0.6,0.6-0.8,1.5-1.6,1.6c0,0-0.4,0-0.5-0.1c-0.1-0.3,0.8-1.1,1.7-1.7c2.6-1,5.2-2,7.7-3.1l4.3,0.2
			C409.4,113.1,410.7,114.5,410.8,115.1z"/>
                                <path id="g3bshadow4" class="strich175" d="M405.3,145.4l-0.1,0.6c0,0-0.9,5.3-4.2,11.5c-3.3,6.2-3.4,6.5-4.4,7.5h-1.2
			c0,0,3.5-3.6,6.9-12.5c3.4-8.9,0.9-8.3,0.5-13L405.3,145.4z"/>
                                <path id="g3bshadow1" class="strich176" d="M393.3,95.3l-0.4,1.4c0,0,1.9-2.2,4.6-1.9l0.7-3.2L393.3,95.3z"/>
                                <path id="g3face" class="strich177" d="M388,83.7c0,0-0.2,0.7,0.3,2.2c0,0-0.1,4.9,1.7,6.7c0,0,1.6,1.7,1.9,2.1
			c0.3,0.4,1.9,1.5,4.4-0.7c2.5-2.3,3-2.8,3.9-5.3c0,0,0.7,0.3,1-2.2c0,0,1.1-3.2-0.4-2.1c0,0-0.9-6.4-2.6-6.3
			C396.5,78.2,390.6,78.1,388,83.7z"/>
                                <path id="g3ear" class="strich178" d="M400.7,84.6c0,0,0.1-0.6,0.6-0.5c0.5,0.1,0.3,0.7,0.3,0.7s-0.5,1.6-0.5,1.9
			c0,0.3-0.3,2.2-0.9,1.8C399.6,88.2,400.7,84.6,400.7,84.6z"/>
                                <g id="g3e1">
                                    <path id="g3e1white" class="strich179" d="M388.3,85.6c0,0,0.2-0.7,1.5-0.5c0.2,0.1,0.4,0.2,0.5,0.3c0.5,0.3,0.6,0.6,1,0.8
				c0.2,0.1,0.4,0.1,0.5,0.1c-0.2,0.1-0.6,0.3-1.1,0.3c-0.6,0.1-1.2,0-1.5-0.1C389.3,86.6,388.6,86.4,388.3,85.6z"/>
                                    <path id="g3e1blue" class="strich180" d="M388.6,85.3c-0.1,0.5,0.2,1,0.6,1.2c0.4,0.1,0.8,0,1-0.2c0.1-0.1,0.2-0.3,0.2-0.5
				c0-0.1,0-0.4,0-0.4l0,0C390.4,85.3,389.6,84.8,388.6,85.3z"/>
                                    <circle id="g3e1black" class="strich181" cx="389.4" cy="85.7" r="0.4"/>
                                    <circle id="g3e1blik" class="strich179" cx="389" cy="85.5" r="0.2"/>
                                    <path id="g3e1downmarkup" class="strich182" d="M388.5,86.2c0,0,0,1,1.5,1s1.9-0.8,1.9-0.8S389.5,87.2,388.5,86.2z"/>
                                    <path id="g3e1markup" class="strich183" d="M388.2,85.4c0.1,0.1,0.1,0.3,0.2,0.5c0.1,0.2,0.1,0.2,0.2,0.3c0.1,0.2,0.3,0.3,0.4,0.4
				c0.5,0.3,1,0.3,1.3,0.2c0.3,0,0.5-0.1,0.8-0.2c0.4-0.1,0.7-0.2,0.9-0.3c-0.5-0.1-0.7-0.1-0.7,0c0,0,0,0-0.1,0.1
				c-0.1,0.1-0.1,0.1-0.2,0.1c-0.3,0.1-0.7,0.1-0.7,0.1c-0.3,0-0.5,0-0.7,0c-0.1,0-0.3-0.1-0.5-0.2c-0.1-0.1-0.2-0.2-0.2-0.2
				c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.1-0.2-0.2-0.3C388.4,85.8,388.3,85.6,388.2,85.4z"/>
                                    <path id="g3e1upmarkup" class="strich182" d="M391.9,86.4c0,0-0.6-0.6-0.9-1.3s-2.2-1.3-2.9-0.9c0,0-0.1,1,0.1,1.1c0,0,0.4,0,1-0.3
				c0.5-0.3,1.3,0.4,1.6,0.7S391.6,86.5,391.9,86.4z"/>
                                    <path id="g3e1lash" class="strich183" d="M388.2,85.4c0,0,0.6-0.3,0.9-0.5c0.3-0.2,1-0.4,1.6,0.3c0.7,0.7,0.7,1,1.2,1.1
				c-0.1,0-0.3,0.1-0.5,0c-0.1,0-0.1,0-0.2-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.2-0.2-0.2-0.3-0.4
				c-0.1,0-0.1-0.1-0.1-0.1c-0.2-0.1-0.4-0.1-0.5-0.1c-0.1,0-0.3,0-0.6,0.1c-0.2,0.1-0.4,0.2-0.6,0.3c0,0-0.1,0.1-0.2,0.1
				c0,0,0,0-0.1-0.1C388.2,85.5,388.2,85.5,388.2,85.4z"/>
                                </g>
                                <g id="g3e2">
                                    <path id="g3e2white" class="strich179" d="M394.6,86.3c0,0-0.1-0.7,1.1-1c0.1,0,0.2,0,0.3,0c0.2,0,0.3,0,0.4,0.1
				c0.4,0.1,0.8,0.2,1.2,0.2c0.1,0,0.3,0,0.6,0.1c-0.2,0.2-0.4,0.5-0.8,0.7c-0.5,0.3-0.9,0.4-1.2,0.4c-0.2,0-0.4,0-0.7,0
				C395.1,86.7,394.8,86.5,394.6,86.3z"/>
                                    <path id="g3e2blue" class="strich180" d="M395.1,85.8c0,0.1,0,0.3,0.1,0.6c0.2,0.3,0.5,0.4,0.6,0.4c0.4,0.1,0.7-0.1,0.9-0.4
				c0,0,0.1-0.2,0.1-0.5c0-0.2-0.1-0.3-0.2-0.4c-0.2-0.2-0.4-0.2-0.4-0.2c-0.1,0-0.3-0.1-0.6,0C395.3,85.4,395.1,85.7,395.1,85.8z"
                                    />
                                    <circle id="g3e2black" class="strich181" cx="395.8" cy="85.8" r="0.4"/>
                                    <circle id="g3e2blik" class="strich179" cx="395.4" cy="85.9" r="0.2"/>
                                    <path id="g3e2downmarkup" class="strich182" d="M394.4,86.3c0,0,0.6,1.1,2.4,0.7c1.9-0.4,2-1.5,2-1.5c-0.1,0-0.3,0.1-0.5,0.2
				c-0.3,0.1-0.4,0.3-0.6,0.4c-0.3,0.2-0.5,0.3-0.7,0.4c-0.5,0.2-1.1,0.4-1.7,0.3C395.1,86.7,394.8,86.6,394.4,86.3z"/>
                                    <path id="g3e1markup_1_" class="strich183" d="M394.4,86.2c0.1,0.1,0.3,0.2,0.4,0.4c0.2,0.1,0.2,0.2,0.3,0.2c0.2,0.1,0.4,0.1,0.5,0.1
				c0.1,0,0.3,0,0.6-0.1c0.2,0,0.4-0.1,0.7-0.3c0.3-0.1,0.6-0.3,0.9-0.5c0.2-0.2,0.5-0.4,0.8-0.7c-0.1,0-0.3,0-0.5,0.1
				c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.3,0.2-0.4,0.4c-0.1,0.1-0.2,0.1-0.4,0.2c-0.2,0.1-0.4,0.2-0.6,0.2
				c-0.2,0.1-0.3,0.1-0.4,0.1c-0.2,0.1-0.4,0.1-0.5,0.1c-0.2,0-0.3,0-0.4-0.1c-0.1,0-0.2-0.1-0.3-0.1
				C394.8,86.5,394.6,86.4,394.4,86.2z"/>
                                    <path id="g3e1upmarkup_1_" class="strich182" d="M394.4,86.2c0.1-0.6,0.3-1,0.5-1.2c0.8-0.9,2.4-1.1,4-0.4c0,0.1,0,0.2,0,0.3
				c0,0.2-0.1,0.5-0.1,0.6c-0.2,0-0.4-0.1-0.7-0.1c-0.4-0.1-0.5-0.2-0.8-0.3c-0.1,0-1.3-0.4-1.9,0.2c-0.2,0.2-0.2,0.3-0.4,0.5
				C394.7,86,394.5,86.1,394.4,86.2z"/>
                                    <path id="g3e2lash" class="strich183" d="M394.4,86.2c0,0,0.5-0.6,0.7-0.9s0.9-0.8,1.8-0.5c1,0.3,1.1,0.6,1.8,0.4
				c-0.1,0.1-0.3,0.2-0.6,0.3c-0.1,0-0.2,0-0.2,0c-0.1,0-0.3,0-0.4,0c-0.2,0-0.3-0.1-0.5-0.2c-0.1,0-0.2-0.1-0.4-0.1
				c-0.3,0-0.5-0.1-0.9,0c-0.1,0-0.4,0.1-0.6,0.3c-0.2,0.1-0.4,0.3-0.5,0.6c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0
				C394.5,86.3,394.4,86.3,394.4,86.2z"/>
                                </g>
                                <path id="g3e1eyebrow" class="strich184" d="M388.2,83.5c0,0,1.3-0.5,2.5,0.4c1.2,0.9,0.2,0.8,0,0.6S389.4,83.3,388.2,83.5z"/>
                                <path id="g3e2eyebrow" class="strich184" d="M398.7,83.1c-2.1-0.3-3.1,0.2-3.5,0.5c-0.1,0.1-0.8,0.6-0.7,0.8c0,0.1,0.3,0.1,0.5,0.1
			c0.1,0,0.2-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0,0,0.1-0.1,0.5-0.5C396.2,83.4,397.3,83.1,398.7,83.1z"/>
                                <path id="g3nose1" class="strich185" d="M392.9,86.3c-0.2,1-0.3,1.6-0.5,2.1c0,0.2-0.1,0.5,0,0.6c0.1,0.1,0.2,0,0.3,0
			c0.2-0.1,0.2-0.5,0.2-0.7C392.9,87.7,392.9,87,392.9,86.3z"/>
                                <path id="g3nose2" class="strich186" d="M392.9,89.2c0,0,0.8,0.1,1,0.3c0,0,0,0.2-0.2,0.1C393.4,89.6,393.2,89.3,392.9,89.2z"/>
                                <g id="g3mouth">
                                    <path id="g3throat" class="strich187" d="M391.2,91.2C391.2,91.2,391.2,91.2,391.2,91.2c0,0,0.4,0.4,0.6,0.6c0.6,0.7,0.5,0.9,0.7,1
				c0.5,0.3,1.2,0.1,1.6-0.3c0.2-0.2,0.1-0.2,0.5-0.7c0.2-0.3,0.6-0.6,0.6-0.6l0,0C395.1,91.2,391.4,91.2,391.2,91.2z"/>
                                    <path id="g3teeth" class="strich188" d="M392,91.3c0,0,0.2,0.7,0.8,0.7c0.5,0,0.7,0.1,1.2-0.5C394.5,91,392,91.3,392,91.3z"/>
                                    <path id="g3mouthshadow" class="strich189" d="M392.2,92.9c0,0,0.7,1.1,1.7,0H392.2z"/>
                                    <path id="g3lipdown" class="strich190" d="M391.2,91.2c0.3,0.2,0.4,0.5,0.5,0.6c0.1,0.2,0.1,0.4,0.2,0.6c0.1,0.2,0.2,0.4,0.5,0.5
				c0.4,0.3,1,0.2,1.4,0c0.2-0.1,0.3-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.4-0.5c0.3-0.4,0.3-0.4,0.3-0.4c0.1-0.2,0.3-0.4,0.5-0.6
				c0,0-0.1,0-0.1,0c-0.2,0.1-0.3,0.2-0.3,0.2c-0.1,0.1-0.3,0.2-0.6,0.5c-0.3,0.2-0.4,0.3-0.6,0.4c-0.1,0-0.6,0.3-1.1,0
				c-0.1,0-0.2-0.2-0.5-0.5c-0.2-0.2-0.3-0.3-0.6-0.5C391.3,91.3,391.2,91.3,391.2,91.2z"/>
                                    <path id="g3lipup" class="strich190" d="M391.5,91.2c0,0,0.1,0,0.4-0.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0.1-0.1,0.1-0.1,0.3-0.2
				c0.1,0,0.2-0.1,0.4-0.2c0.1,0,0.2,0,0.4,0c0.1,0,0.3-0.1,0.5,0c0.2,0.1,0.3,0.1,0.5,0.2c0,0,0.1,0,0.1,0c0.1,0.1,0.4,0.2,0.7,0.2
				c0.1,0,0.2,0,0.4,0c-0.2,0.3-0.4,0.4-0.5,0.4c0,0,0,0,0,0c0,0-0.1,0-0.4,0c-0.2,0-0.3,0-0.4,0c-0.1,0-0.1,0-0.4,0
				c-0.5,0-0.4,0-0.6,0c-0.3,0-0.5,0.1-0.5,0.1c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2-0.1-0.4-0.1
				c-0.1-0.1-0.4-0.3-0.4-0.3C391.3,91.2,391.4,91.2,391.5,91.2z"/>
                                    <path id="g3lipblik" class="strich191" d="M392.4,92.6c0,0,0.3,0.4,1,0.1c0,0-0.5,0-0.6,0S392.4,92.4,392.4,92.6z"/>
                                    <path id="g3lipblik2" class="strich191" d="M393.9,91c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.1,0-0.3,0
				c-0.3,0-0.3,0.1-0.6,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0.1-0.2,0c0,0,0,0,0,0c0,0,0.2-0.2,0.5-0.3c0.1,0,0.2-0.1,0.3,0
				c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0,0.5,0.1C393.7,90.9,393.8,90.9,393.9,91z"/>
                                    <path class="strich191" d="M391.4,90.5"/>
                                </g>
                                <path id="faseshadow" class="strich192" d="M389,81.4c-0.1,0.1-0.1,0.3-0.3,0.5c-0.4,0.8-0.6,1-0.6,1.1c0.2,0.3,3-0.6,7.8-2.8
			c1.6-0.7,2.9-1.4,3.7-1.8c-0.2-0.1-0.5-0.3-1-0.4c-1.1-0.3-2-0.1-2.5,0C394.9,78.2,392.2,79.4,389,81.4z"/>
                                <path id="faseshadow2" class="strich192" d="M399.6,84.4c0.1,0,0.2,0.1,0.3,0.2c0.5,0.4,0.6,0.5,0.6,0.5c0.2-0.1-0.1-1.9-1-5
			c-0.3-1-0.6-1.9-0.8-2.4c-0.1,0.1-0.2,0.3-0.4,0.5c-0.3,0.6-0.3,1.2-0.3,1.5C398.2,80.5,398.6,82.3,399.6,84.4z"/>
                                <g id="g3fronthair">
                                    <path id="g3fronthair4" class="strich193" d="M398.7,77.8c0,0,2.6,10-0.4,13.5c0,0,4.5-5.8,2.8-10.9
				C399.4,75.4,398.7,77.8,398.7,77.8z"/>
                                    <path id="g3fhbase" class="strich193" d="M397.8,77c-0.6,0.4-1.3,0.9-2.2,1.4c0,0-1.1,0.6-2.2,1c-3.3,1.3-5.3,0.1-7.5,1.5
				c-0.6,0.4-1.5,1.1-2.2,2.6c0.7-0.7,1.9-1.6,3.5-2c1.8-0.5,2.9,0,4.2-0.1C392.9,81.4,395.1,80.5,397.8,77z"/>
                                    <path id="g3fronthair1" class="strich194" d="M382.6,88.6c0,0,5.3-10.7,16.7-11.3C399.3,77.3,388,79.6,382.6,88.6z"/>
                                    <path id="g3fronthair3" class="strich194" d="M398.9,77.3c-1.8,0.6-3.2,1.4-4.3,2c-1.3,0.7-2.5,1.4-3.8,2.7c-0.8,0.8-1.4,1.5-1.7,2
				c0.7-0.8,1.5-1.6,2.4-2.4c2.8-2.4,5.8-3.5,7.8-4l-1.8-0.6c0,0,2.7,3.1,2,9.2c-0.6,6.1-3.3,6.6-3.3,6.6s2.9-0.1,3.6-6.7
				c0.7-6.6-1-9.5-1-9.5l1,1.8c0,0-1.4,2.7-0.7,10.8c0,0,0.2-9.8,0.9-10.3c0,0-0.8,12.6-4.7,17c0.7-1,1.3-2,1.9-3.2
				c3-6,2.9-12,2.4-15.6L398.9,77.3z"/>
                                    <path id="g3fronthair4_1_" class="strich193" d="M399.1,76.6c0,0,0.3,2-2.1,2.5s-6.8,0.2-8.8,1.3c-2,1.1-3.3,2.3-3.3,2.3
				s3.4-2.6,8.1-2.7S400.1,79.2,399.1,76.6z"/>
                                    <path id="g3fronthair5" class="strich193" d="M389.8,79.1c0,0,4.5-1.2,6.7-0.5c2.2,0.7,6-2.1,2.6-2c0,0,2.2,0.8-0.2,1.2
				s-4.8-0.4-6,0.3C391.6,78.7,390.3,78.9,389.8,79.1z"/>
                                    <path id="g3fronthair6" class="strich194" d="M392,82.2c0,0,4.6,1.7,5.8-4.8c-0.1,0.3-0.3,0.7-0.5,1.3c-0.6,1.4-0.9,2.1-1.6,2.7
				c-0.1,0.1-0.7,0.6-1.6,0.8C393.2,82.5,392.4,82.3,392,82.2z"/>
                                    <path id="g3fronthair7" class="strich194" d="M385.9,82.3c0,0,3.9-0.1,5-1.7s7.4-3.1,7.4-3.1s-6.5,2.4-7.1,3.2
				C390.6,81.5,388.8,82.4,385.9,82.3z"/>
                                    <path id="g3fronthair8" class="strich194" d="M398.2,76.8c0,0-0.8,4.8,0.8,6c1.5,1.2,0.9,2.8,0.9,2.8s0.6-1.2-0.5-3
				c-1.1-1.8-1.1-1.9-1.2-5.9V76.8z"/>
                                    <path id="g3fronthair9" class="strich194" d="M386.8,82.3c0,0,8.8-1,10.7-5.3C397.5,77,397,82.2,386.8,82.3z"/>
                                    <path id="g3fronthair10" class="strich194" d="M398.7,76.1c0,0,1.8,1.9-1.3,2.5s-8.1,2.8-10.8,5.5c0,0,6.5-4.6,12.4-5.5
				C399,78.5,401.7,76.5,398.7,76.1z"/>
                                    <path id="g3fhaddnew" class="strich193" d="M397.8,76.6c0,0,0.9,2.7,1,3.7s-0.8,2.2-0.1,3c0.8,0.8,0.9,1,0.9,1s-0.8-1.2-0.8-1.9
				c0-0.7,1-2.1,0.4-3.1C398.5,78.5,397.8,76.6,397.8,76.6z"/>
                                </g>
                                <path id="g3iif" class="strich195" d="M388.2,101.9c0,0,2,1,3.5,3.6c1.6,2.5,4.4,6.5,4.5,7.7c0.1,1.2,0,2.8-0.4,3.4
			c-0.5,0.7-0.6,1.7-1.6,2.3c-0.7,0.4-1.3,0.5-1.7,0.5c0,0-0.2,0.2-0.1,0.4c0.1,0.2,0.4,0.3,0.7,0.2c0.3,0,0.7-0.2,1.1-0.4
			c0.7-0.4,1.1-1,1.4-1.4c1-1.5,1.6-2.2,2.3-2.6c1.2-0.6,1.7,0.1,3.7-0.4c1-0.3,1.8-0.8,1.9-0.9c0.2-0.1,0.4-0.3,0.6-0.4
			c0.8,0.3,2,0.6,3.5,1c1.7,0.4,2.6,0.6,3.1,0.3c1.7-0.8,2.3-4.9,0.6-6.5c-2.5-2.4-4.6-1.8-4.6-1.8s-3.8-3.3-5.3-3.7
			c0,0-0.7-0.3-0.6,0.2c0.1,0.5,2.8,0.9,4.9,3.7c0,0.1,0.1,0.2,0.1,0.3c0,0.3-0.3,0.4-0.3,0.5c-0.2,0.2-0.7,0.8-1.4,2.5
			c-0.2-1-0.7-1.5-1-1.8c-0.7-0.6-1.5-0.8-2.8-1.1c-0.2,0-0.7-0.1-1.6-0.2c-1.4-0.2-2-0.3-2.3-0.3c-0.4-0.1-2.8-0.4-4.6-2
			c-1.5-1.3-1.8-3.1-3.2-3C388.6,101.9,388.4,101.9,388.2,101.9z"/>
                                <path id="g3lifshadow" class="strich196" d="M394.7,109.9c0,0,3.3,4.3,0.4,7.5c0,0.1-0.1,0.3,0,0.5c0.1,0.2,0.4,0.1,0.5,0.1
			c1.1-0.2,1.8-2.1,3.3-2.4c0.3-0.1,0.1,0,1,0c1,0,2.1,0,3.1-0.5c0.7-0.4,1.4-1.1,1.5-1.1l0,0l0,0c0,0,5.4,1.8,6.6,1
			c0.4,0,1.5-2.7,1.5-2.7s-4,1.2-5.9-0.2l-2.2-1.6c0,0,0.6,1.8-3.7,2.5c-1.3,0.2-2.3,0-2.8-0.2C395.9,112.1,394.9,110.4,394.7,109.9
			z"/>
                                <path id="g3lifblik" class="strich197" d="M396.1,106.8c0,0.1,0.6,0.2,2.8,0.9c2.1,0.6,2.6,0.8,2.8,0.9c0.7,0.3,1.6,0.8,2.5,1.5
			c-0.1-0.3-0.3-0.7-0.6-1.2c-0.1-0.1-0.6-0.8-1.5-1.2c-0.7-0.4-1.3-0.5-2-0.5C397.4,106.8,396.1,106.6,396.1,106.8z"/>
                                <path id="g3lifblik2" class="strich197" d="M405.9,107.4c0,0,5.2-0.7,6.3,2.8c0,0-0.2-3.2-4.2-3.3l-1.3-0.1L405.9,107.4z"/>
                                <path id="g3lifblik3" class="strich197" d="M392.4,105.9c0,0,2.2,3.9,3.4,3.9C395.8,109.7,394.9,108.1,392.4,105.9z"/>
                                <path id="g3lifblik4" class="strich197" d="M393.2,106.3c0,0,2.5,2.7,4,3c0,0,1.6,0.1,0.2-0.5C395.9,108.1,393.2,106.3,393.2,106.3z"
                                />
                                <g id="g3panties">
                                    <path id="g3panties1" class="strich198" d="M386.1,144.2c0,0,3.8-2.8,3.6-6.5c0,0-0.3-1.5,3.4-3.6c0,0,0.7-0.3,0.9-0.6
				c0.2-0.3,3.2-0.1,3.2-0.1s-1.2,0.8-1.6,1.7c-0.5,0.9-2.1,5.4-3.6,6.8S386.1,144.2,386.1,144.2z"/>
                                    <path id="g3panties2" class="strich199" d="M389.7,142.4c0,0,1,0.6,2.9-3.4c1.9-4.1,2.9-4,3.4-5.2c0,0-1.9,0.6-2.4,1.5
				C393.2,136.1,391.6,141.9,389.7,142.4z"/>
                                    <path id="g3panties3" class="strich199" d="M390.9,136.9c0,0,0.8-1.2,1.7-1.7c0.9-0.5,1.4-1,1.4-1s-1.5,0.8-2,1
				C391.6,135.3,391,136.5,390.9,136.9z"/>
                                    <path id="g3pantiesmain" class="strich200" d="M396.2,133.8c0,0-0.4-0.6,0-0.6c0.4,0,2.3,0.4,2.8,1.1c0.5,0.6,1.1,1.1,1.1,1.1
				s7.8,3,14.2,0.8c0,0,2-1.3,3-1.2c0,0,0.4,0.2,0.3,0.3s-0.2,0.2-0.2,0.2s-1.7,0.4-2.5,1c0,0-1.9,3-2.8,5.5s-3.4,5.2-4,5.6
				c-0.7,0.4-2.9,0-3.1-1c-0.2-1,0.1-1.3-1.2-4c-1.3-2.7-3.5-6.2-3.9-6.8C399.5,135.2,397.5,133.7,396.2,133.8z"/>
                                    <path id="g3panties4" class="strich201" d="M400.7,135.9c0,0,1.3,2.8,3,4.1c0,0-0.1-1.3-0.3-1.6c-0.2-0.3,1.6,0.6,1.6,0.6
				s-1.2-1.3-0.2-1.3s5.7,0,6.4-0.3C411.1,137.4,402.4,137.4,400.7,135.9z"/>
                                </g>
                                <ellipse id="g3navel" class="strich174" cx="408.1" cy="131.1" rx="0.4" ry="0.4"/>
                            </g>
                        </g>
</svg>
                    <svg class="quoteSvgPic " id="happycar"
                         version="1.1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         viewBox="0 -100 1000 1000"
                         style="enable-background:new 0 0 1000 1000;"
                         xml:space="preserve"
                         preserveAspectRatio="xMidYMin slice"
                         style="width: 100%; padding-bottom: 100%; height: 1px; overflow: visible"
                    >
<style type="text/css">
    .sthappy0{fill:#A7D87F;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy1{fill:#FFFFFF;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy2{fill:#010000;}
    .sthappy3{fill:#FEFEFD;}
    .sthappy4{fill:#A9D882;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy5{fill:#FBD2B4;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy6{display:none;fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy7{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy8{fill:#D81B2A;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy9{fill:#FCFDFC;stroke:#000000;stroke-miterlimit:10;}
    .sthappy10{fill:#FCFDFC;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy11{fill:#FDBBD4;stroke:#000000;stroke-miterlimit:10;}
    .sthappy12{fill:#71CE4D;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy13{fill:#A9D882;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy14{fill:#B27A3E;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy15{opacity:0.31;fill:#C6F0F9;enable-background:new    ;}
    .sthappy16{fill:#D3D4D6;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy17{fill:#FF141F;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy18{fill:#EFF1F5;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy19{fill:#E6F284;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy20{fill:#85868A;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy21{fill:#A9ABAF;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy22{fill:#8C8D93;}
    .sthappy23{fill:#DDDEE0;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy24{fill:#E7E7E7;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
    .sthappy25{fill:#D8B36F;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy26{fill:none;stroke:#000000;stroke-miterlimit:10;}
    .sthappy27{fill:#FF141F;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy28{fill:#FFFFFF;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .sthappy29{fill:#FFFF00;stroke:#000000;stroke-width:1;stroke-miterlimit:10;}
    .sthappy30{fill:#FFFF00;}
    .sthappy31{stroke:#000000;stroke-miterlimit:10;}
    .sthappy32{fill:none;stroke:#000000;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
</style>
                        <path id="happyshirt" class="sthappy0" d="M378.5,442.4c0,0,11.4-62,34.5-89.1c0,0,52.2,50.6,70.7,43l10.9,28.8l5.5-6.4l14.5-35.3
	c0,0,30.6,31.6,35.3,69.9c0,0-30.3,16.4-68.3-2.5c0,0-6.9,28.8-21.9,31h-10.1C449.5,481.6,401,514.7,378.5,442.4z"/>
                        <g id="happyeye2">
                            <ellipse id="happyeye1_4_" class="sthappy1" cx="495.8" cy="263" rx="13.6" ry="16.6"/>
                            <circle id="happyeyeapple_1_" class="sthappy2" cx="502.4" cy="265.7" r="3.8"/>
                            <ellipse id="happyeyeblick_1_" class="sthappy3" cx="501.3" cy="265.7" rx="1" ry="1.1"/>
                        </g>
                        <path id="happycollar3" class="sthappy4" d="M517.6,372.1h21.1c0,0-31.9,15.2-35.8,59.1c0,0-6.7-10.2-7-13.6
	C495.9,417.6,512.2,376.8,517.6,372.1z"/>
                        <g id="happyhead">
                            <path id="happyheadbase" class="sthappy5" d="M420.9,344.4c0,0,16.7-38.3,16.7-54.9c0,0-32,8.5-29.3-14.9c2.6-23.4,16.4-19.2,22.9-16.9
		c6.5,2.3,11.4,5.1,11.4,5.1l-34.5-18.3c0,0-3.9-32.9,28-34.3s44,4.8,47.5,6.3c3.5,1.6,6.2,7.9,5.5,12.2c-0.7,4.2-9.7,31.2-9.7,31.2
		s56.2,23.1,57.8,23.8c1.6,0.7,4.6,4.4,1.2,11.6s-15.5,13.2-20.2,13c5.8,22.6,6.1,41.3,3.7,51.7c-2.1,9.2-5.3,14.8-5.3,14.8
		c-2.4,4.2-6.6,10.3-7,10.9c0,0-10.2,23.1-12.8,30.1c-0.1,1-0.1,2-0.2,3l-8.7-28.9C487.9,389.7,438.1,391,420.9,344.4z"/>
                            <path id="happytongueline" class="sthappy6" d="M462.5,353.3c0,0,16.8-8.5,25,3"/>
                            <path id="happyearline" class="sthappy7" d="M420.1,272.2c0,0,12.7-3.4,17.3,4.6c0,0-5.6-3.9-10,2.4"/>
                            <path id="happyeyebrow1" class="sthappy7" d="M462.9,243.5c0,0,6.1-8.5,17.8-7.5"/>
                            <path id="happyeyebrow2" class="sthappy7" d="M510.6,243.5c0,0-3.9-6.6-17.8-6.6"/>
                            <path id="happyhair" class="sthappy2" d="M408.1,269.5c0,0-10.7-2.9-7.6-22.5c0,0-4,0.6-6.7,5.3c0,0-1.6-13.1,6-18.5l-6.1,2.1
		c0,0,2.4-15.6,14.4-23.4c0,0-6,2.7-10.2,4.7c0,0,2.4-11.3,26.3-15.6c0,0-10-3.6-18.7-1.6c0,0,18-12.9,40.3,2.4
		c0,0,8.9-11.6,27.6-9.6c0,0-7.7,4.2-10.4,10c0,0,15.7-18.7,43.3-3.1c0,0-14.4-0.2-21.2,3.3c0,0,17.1,1.3,21.2,10
		c0,0-42-7.1-63.4,8.2c0,0,12.2,10.5,6,30.9c0,0-1.3-5.8-5.1-8.8c0,0,0.4,9-1.6,12.3c-2,3.3-1.8,6.1-0.7,7.2c0,0-8-7.2-17.1-6.7
		C415.2,256.7,409.2,261.7,408.1,269.5z"/>
                            <path id="happysmileline2" class="sthappy7" d="M452.1,281.6c0,0,7.8-3.3,12.2,2.4"/>
                            <path id="happysmileline1" class="sthappy7" d="M452.1,287.8c0,0,6.2-4.2,11.3,0"/>
                            <path id="happynoseline" class="sthappy7" d="M473.6,295.6c20.6,13.6,42.6,17.3,56.7,7.9c2.6-1.7,5.4-4.3,8-8"/>
                            <path id="happythroat" class="sthappy8" d="M454.4,307.5c0,0-7.4,34.4,11.3,51.5l28.7-2c0,0-7.5-15.3-1.4-22.3
		C493.1,334.6,451.4,325.8,454.4,307.5z"/>
                            <path id="happytooth1" class="sthappy9" d="M457.3,289.6c0,0-4.3,15.9-4.5,30.9c0,0,1.8,3.6,2.3,3c0.5-0.7,4.6-21.7,4.6-21.7
		c-0.5-1.7-1-3.7-1.3-5.9c-0.5-3.5-0.4-6.6-0.2-9C457.8,287.7,457.6,288.7,457.3,289.6z"/>
                            <path id="happytooth2" class="sthappy10" d="M471.9,319.5l-2.5,12c0,0-8.8,3.3-14.3-8.1l4.6-21.7C459.6,301.7,463.4,313.9,471.9,319.5z"
                            />
                            <path id="happytooth3" class="sthappy10" d="M490.3,326.3l-2.8,13c0,0-12.1,4.3-18.2-7.7l2.5-12C471.9,319.5,481.2,327,490.3,326.3z"/>
                            <path id="happytooth4" class="sthappy10" d="M508.3,325.9v12.4c0,0-13,7.7-20.9,0.9l2.8-13C490.3,326.3,501.4,327.5,508.3,325.9z"/>
                            <path id="happytongue" class="sthappy11" d="M461.2,354c0,0,12.5-7.3,20.7-2.5c0,0,19.2-6.2,23,13.6c0,0-8.8-6.1-22.7,0.4
		C482.2,365.6,468.3,364.3,461.2,354z"/>
                            <path id="happymouthlinre" class="sthappy7" d="M507.5,367.7c0,0-6.1-10.3-25.3-2.1c0,0-44.5,0-24-79.6c0,0-5.3,50.7,56.3,39"/>
                            <path class="sthappy7" d="M500,393.9c3.4-2.6,7.7-6.6,11.7-12.1c4.5-6.2,7.1-12.1,8.6-16.4"/>
                        </g>
                        <g id="happyeye1_1_">
                            <ellipse id="happyeye1" class="sthappy1" cx="482.6" cy="263.8" rx="14.6" ry="16.8"/>
                            <circle id="happyeyeapple" class="sthappy2" cx="481.2" cy="266.6" r="3.8"/>
                            <ellipse id="happyeyeblick" class="sthappy3" cx="480.2" cy="266.7" rx="1" ry="1.1"/>
                        </g>
                        <g id="happycollar_1_">
                            <path id="happycollar4" class="sthappy12" d="M519.6,388.3c0,0,6,8,7,10.1h18.5c0,0-6.8-5.5-6.3-26.3
		C538.7,372.1,525.5,379.9,519.6,388.3z"/>
                            <path id="happycollar" class="sthappy13" d="M423.2,338.9c0,0-3.6-2.9-5.7-2.2c-2.1,0.6-6.4,12.6-6.4,15.1s5.8,38.1,54.6,70.5
		c0,0,5.4-28.7,22.2-32.7c0,0-48.8,2.2-68.7-47.7c0,0-1.2-2.4,2.7,0L423.2,338.9z"/>
                            <path id="happycollar2" class="sthappy4" d="M490.6,433.9c0,0-14.6-27.2-14.3-36.1c0,0,7.1-8.2,11.6-8.1c0,0,4.1,24.7,15,41.5
		L490.6,433.9z"/>
                            <path id="happysleeve" class="sthappy4" d="M458.2,425c0,0,14.7,17.1,24.2,19.2c0,0-0.1,34.5-28.8,39.2c0,0-17.5-11.9-24.3-26.5"/>
                            <path id="happyarmpit" class="sthappy7" d="M424.4,468.7c0,0,1.6,5.7,14.2,1.4"/>
                        </g>
                        <path id="happyhand" class="sthappy5" d="M482.4,451.8c0,0,50.4,22.8,95.2-13.2c0,0-8.3,17.8-7.8,30.1l-108.6,6.4l18.6-25.5L482.4,451.8z
	"/>
                        <path id="happywheel" class="sthappy14" d="M565,468.9c-0.3-4.4-0.3-12.8,3.6-22.2c1.4-3.2,6.2-14.2,18.4-21.6
	c2.3-1.4,18.3-10.7,37.5-4.3c22.2,7.4,28.7,29.3,29.2,31.2c-2.6,0.8-5.2,1.6-7.8,2.4c-1.2-3.6-3.5-9.1-8.2-14.4
	c-8.8-9.9-19.9-12.6-23.9-13.4c-4.4-0.2-13.1,0.2-21.8,5.5c-18.5,11.4-18.8,34.8-18.8,36.5C570.4,468.7,567.7,468.8,565,468.9z"/>
                        <g id="happyfingers">
                            <path id="happyfinger1" class="sthappy5" d="M615.5,418.6c0,0,0.2-0.4,0.5-0.9c1.4-2,5.5-6.6,12.7-1.5c9,6.5,3.6,16.2,1.1,17.6
		c-2.5,1.5-9.8,0-9.8,0L615.5,418.6z"/>
                            <path id="happyfinger2" class="sthappy5" d="M602.3,418.6c0,0,5.3-8.5,12.6-2.9s9,17.7,1.7,19.9c-7.3,2.2-11.5-1.7-11.5-1.7L602.3,418.6
		z"/>
                            <path id="happyfinger3" class="sthappy5" d="M579.8,430.8c0.9-8.3,6.6-14.5,12.9-15.2c7-0.7,12.2,5.7,13.5,7.3c1.4,1.8,4.3,5.3,3.6,9.8
		c-0.1,0.8-0.6,4.4-3.6,6.2c-2.7,1.6-5.9,0.9-7.9-0.3c-1.9-1.1-1.8-2.2-4.2-5.3c-2.6-3.4-5.1-6.7-8.1-6.7
		C585.4,426.6,582.8,426.7,579.8,430.8z"/>
                        </g>
                        <path id="happyglass" class="sthappy15" d="M599.1,468.9c0,0-39.4-59.6-34.3-63.6c5.1-4,3.2-8.5,12.7-9s40.4-1,59.1,10
	s47.6,45.6,47.6,45.6L599.1,468.9z"/>
                        <path id="happyglassborder" class="sthappy16" d="M588,464c0,0-25.8-42.3-33.1-52.2c-7.3-9.9-2.8-18,15.2-19.7c0,0,14.9-0.3,32.3,2.1
	c16.7,2.2,31.1,4.4,41.8,13.1c1.5,1.3,5.2,4.5,8.8,7.7c5.2,4.8,9.1,8.6,12.8,12.4c5.4,5.5,12.4,12.7,20.8,21.6
	c-2.2,0.7-4.3,1.5-6.5,2.2c-3-3.4-14.4-15.9-25.8-27.3c-2.6-2.6-6.5-6.4-12.4-10.1c-1.6-1-4.7-2.8-9.2-4.8
	c-9.1-3.9-14.7-4.3-46.4-6.6c-2.5-0.2-7.3-0.5-9.5,2.3c-1.5,1.9-1.1,4.5-0.9,5.5c1.5,10,23.6,44.3,26.4,48.5L588,464z"/>
                        <path id="happycarcase" class="sthappy17" d="M599.1,458.8c0,0,60.7-22.7,155.4-0.6s101.6,63.6,101.6,63.6l-15.2,5.5L599.1,458.8z"/>
                        <g id="happylight1_1_">
                            <ellipse id="happylight_x5F_border1" class="sthappy18" cx="854.4" cy="537.6" rx="18.9" ry="31.3"/>
                            <ellipse id="happylight1" class="sthappy19" cx="858.5" cy="537.3" rx="17.5" ry="28.7"/>
                        </g>
                        <path id="happyotherwheel1" d="M396.1,642.6c0,0,9.3,47,77.5,7.5s51.2-164.9,51.2-164.9S380.2,560.4,396.1,642.6z"/>
                        <path id="happyotherwheel2" d="M715.2,646.8c0,0,15.1,41.8,75.5,7s-17.9-140.3-17.9-140.3S693.1,585,715.2,646.8z"/>
                        <g id="happywheelback">

                            <ellipse id="happywheelbackintyre2" transform="matrix(0.7212 -0.6927 0.6927 0.7212 -322.0577 412.7111)" class="sthappy20" cx="351.7" cy="606.5" rx="95.3" ry="57.3"/>

                            <ellipse id="happywheelbackintyre1" transform="matrix(0.7212 -0.6927 0.6927 0.7212 -323.8613 404.0252)" class="sthappy20" cx="340" cy="604.4" rx="95.3" ry="57.3"/>

                            <ellipse id="happywheelbackouttyre" transform="matrix(0.7039 -0.7103 0.7103 0.7039 -324.2661 411.3743)" class="sthappy21" cx="331.3" cy="594.6" rx="99" ry="57.3"/>

                            <ellipse id="happywheelbackcenter" transform="matrix(0.7039 -0.7103 0.7103 0.7039 -327.8537 408.9517)" class="sthappy22" cx="326.6" cy="597.7" rx="48.6" ry="22.1"/>
                            <path id="happypetal4" class="sthappy23" d="M329.1,570.8l-3,24.4h3l18.4-34.4c0,0-14.8,3-19.4,7.3L329.1,570.8z"/>
                            <polygon id="happypetal3" class="sthappy23" points="331.7,596.6 359.6,587.2 351.9,601.5 330.5,601.5 	"/>
                            <polygon id="happypetal2" class="sthappy23" points="326.1,604.2 326.1,625.7 310.2,634 321.8,604.2 	"/>
                            <polygon id="happypetal1" class="sthappy23" points="317.2,600.5 297.1,599.8 289.8,615 316.5,605.1 	"/>
                            <path class="sthappy24" d="M363,560.5c-9.9-9.8-34.4-1.1-54.7,19.5c-20.3,20.5-28.8,45.1-19,54.9c9.9,9.8,34.4,1.1,54.7-19.5
		C364.4,594.8,372.8,570.3,363,560.5z M339.8,611.2c-16.9,17-36.6,24.7-44.2,17.2c-7.5-7.5,0-27.3,16.8-44.3
		c16.9-17,36.6-24.7,44.2-17.2S356.7,594.2,339.8,611.2z"/>

                            <ellipse id="happycenter" transform="matrix(0.6974 -0.7167 0.7167 0.6974 -332.0012 414.1068)" class="sthappy23" cx="324.4" cy="600.2" rx="11.3" ry="8.5"/>
                        </g>
                        <g id="happywheelfront">

                            <ellipse id="happywheelbackintyre2_1_" transform="matrix(0.7212 -0.6927 0.6927 0.7212 -244.0983 628.9967)" class="sthappy20" cx="659.4" cy="617.8" rx="95.3" ry="57.3"/>

                            <ellipse id="happywheelbackintyre1_1_" transform="matrix(0.7212 -0.6927 0.6927 0.7212 -245.9019 620.3109)" class="sthappy20" cx="647.7" cy="615.7" rx="95.3" ry="57.3"/>

                            <ellipse id="happywheelbackouttyre_1_" transform="matrix(0.7039 -0.7103 0.7103 0.7039 -241.1709 633.2752)" class="sthappy21" cx="639" cy="605.9" rx="99" ry="57.3"/>

                            <ellipse id="happywheelbackcenter_1_" transform="matrix(0.7039 -0.7103 0.7103 0.7039 -244.7584 630.8527)" class="sthappy22" cx="634.3" cy="609" rx="48.6" ry="22.1"/>
                            <path id="happypetal4_1_" class="sthappy23" d="M636.8,582.1l-3,24.4h3l18.4-34.4c0,0-14.8,3-19.4,7.3L636.8,582.1z"/>
                            <polygon id="happypetal3_1_" class="sthappy23" points="639.4,607.9 667.3,598.5 659.7,612.8 638.2,612.8 	"/>
                            <polygon id="happypetal2_1_" class="sthappy23" points="633.8,615.5 633.8,637 617.9,645.3 629.5,615.5 	"/>
                            <polygon id="happypetal1_1_" class="sthappy23" points="624.9,611.8 604.8,611.1 597.5,626.3 624.2,616.4 	"/>
                            <path class="sthappy24" d="M670.7,571.8c-9.9-9.8-34.4-1.1-54.7,19.5c-20.3,20.5-28.8,45.1-19,54.9c9.9,9.8,34.4,1.1,54.7-19.5
		C672.1,606.1,680.6,581.5,670.7,571.8z M647.5,622.5c-16.9,17-36.6,24.7-44.2,17.2c-7.5-7.5,0-27.3,16.8-44.3
		c16.9-17,36.6-24.7,44.2-17.2C671.9,585.6,664.4,605.5,647.5,622.5z"/>

                            <ellipse id="happycenter_1_" transform="matrix(0.6974 -0.7167 0.7167 0.6974 -246.9845 638.0471)" class="sthappy23" cx="632.1" cy="611.5" rx="11.3" ry="8.5"/>
                        </g>
                        <path id="happycarcase_x5F_main" class="sthappy17" d="M547.8,611l-153.5-8.3c19.7-26.9,23.5-55,11.4-69.3c-8.6-10.2-23.4-11.1-31.8-11.5
	c-18.3-1-34.6,4.7-72.2,27.5c-17.1,10.4-39,24.5-63.5,42.6c-6.8-6.7-14.5-13.7-23.3-20.7c-11.3-9-22.2-16.4-32.2-22.5
	c0,0,5.5-25.6,22.1-33.2c0,0-22.8-28.3-30.4-27c33.4-17.5,62.9-26.1,83.3-30.7c38-8.5,82.4-18.5,122.5,4.2c12.4,7,21,15.3,26.3,21
	c34.5,2.5,69,5,103.5,7.6l73.6-27c0,0,53.2-23.5,135.5-2.1s146.6,62.2,167.3,130.7c0,0-28.3,80.9-197,27c0,0,36.6-44.6,22.3-67
	c-8.1-12.6-28.4-12.4-38.2-12.5c-0.4,0-0.9,0-1.5,0c-26.9,0.5-62.1,22.8-62.1,22.8C593.7,573,571.9,588.6,547.8,611z"/>
                        <g id="happycover_1_">
                            <path id="happyshadow" class="sthappy2" d="M351.7,430.6c0.2-8,33.8-16.1,33.8-16.1l0,0c-1.1,3.4-2.1,7-3.1,10.8
		c-1.7,6.5-2.9,12.7-3.8,18.5C355.9,438,351.7,433.5,351.7,430.6z"/>
                            <path id="happycover" class="sthappy25" d="M389.1,401.6c-6.6-0.2-45.8-1.2-62.1,20.7c-3,4-10,13.4-7,22.4c0.4,1.1,1.9,5.3,8.1,9.4
		c15.4,10.2,27-1.9,48.3,6c11.7,4.4,20.7,12.7,22.4,14.3c3.5,3.3,6.1,6.4,7.9,8.7l4.5-1.1c-2.4-5.6-6.2-12.6-11.8-19.9
		c-7.3-9.4-15-15.7-20.8-19.8c-0.8-0.5-2-1.4-3.4-2.3c-1.3-0.9-2.8-1.8-4.4-2.9c-4.1-2.7-8.4-5.5-9.5-6c-2.2-1.2,8.5-13.6,22.5-11
		C383.6,420.2,388.2,404.3,389.1,401.6z"/>
                            <circle class="sthappy26" cx="335.5" cy="448.1" r="3.7"/>
                            <circle class="sthappy26" cx="355.5" cy="449.6" r="3.7"/>
                            <circle class="sthappy26" cx="375.8" cy="452.7" r="3.7"/>
                            <path class="sthappy7" d="M351.7,428.4c0,0,13,2.6,26.1,13.4"/>
                        </g>
                        <path id="happydoor" class="sthappy27" d="M406.6,483.2c0,0-12.5,18.6-10.3,30.5c0,0,38.9,9.7,17.9,73.2c0,0,120.4,4.5,125.6,8.2
	c0,0-0.1-65.8,44.8-133C584.7,462.1,493.1,463.8,406.6,483.2z"/>
                        <path id="happycarcase_x5F_line" class="sthappy7" d="M590.8,462.1c0,0,151.1-2.7,216.5,66.5"/>
                        <g id="happylight2_1_">

                            <ellipse id="happylight_x5F_border2" transform="matrix(0.116 -0.9932 0.9932 0.116 153.3349 1296.7649)" class="sthappy18" cx="805.2" cy="562.2" rx="33.3" ry="20.4"/>

                            <ellipse id="happylight2" transform="matrix(0.116 -0.9932 0.9932 0.116 156.9604 1300.8361)" class="sthappy19" cx="809.3" cy="562.2" rx="30.5" ry="18.5"/>
                        </g>
                        <path id="happybumper" class="sthappy24" d="M873.3,552.6c0,0,30,3,30.4,23s-24.8,39-45.2,46.6c-20.4,7.7-56.5,9.5-97.7-4.4
	c-41.2-13.8-25.5-25.2-13.8-27.5c11.7-2.4,72.6,30.1,111.5,2.2c0,0,14.9-9.7,20.4-19.1l-8.1-15.8L873.3,552.6z"/>
                        <path id="happytsapa" class="sthappy24" d="M190.2,515.5c0,0-8.2-6.6-13.3-15.5s-5-6.9-3.2-10.9c1.8-3.9,10.1,0.2,16.5,7.1
	s11.9,11.9,15.1,19.2c0,0-14.9,12.4-16.4,21.5h-16.4C172.6,537,176.4,526.4,190.2,515.5z"/>
                        <path id="happybackbumper" class="sthappy24" d="M155.5,537.1l57.4,1.4c3.2,0.1,6.3,1.4,8.5,3.8c2.7,2.9,5.3,7.4,3.1,12.7
	c-1.8,4.3-6.3,7-11,7c-13.6,0-49.7,0-61.9,0c-3.2,0-6.2-1.2-8.5-3.5c-3.3-3.4-6.6-8.9-1.4-15.3C145.1,539.2,150.2,537,155.5,537.1z"
                        />
                        <g id="happyclowd1">
                            <path id="happyclowd1_2_" class="sthappy28" d="M95.3,585.2l-14.7,0.1c0.3-0.8,0.6-1.6,0.9-2.4c0.7-1.8,2.1-6.6,0.5-12.1
		c-0.5-1.6-1.4-4.8-4.3-7.2c-3.3-2.8-9.5-5-14.8-1.8c-5.8,3.5-5.2,13.2-5.2,13.2s-5.6-3.4-13.5,5.4c-7.9,8.8,3.9,18.8,3.9,18.8
		s-6.3,3.9,0,13s17.9,0,17.9,0c0.5,0.6,3.1,3.5,6.7,3.4c5.3-0.2,7.8-6.7,8.1-7.5c3-7.7-3.1-15.4-3.6-16h14.2"/>
                            <line class="sthappy7" x1="70.9" y1="585.5" x2="95.2" y2="585.5"/>
                            <line class="sthappy7" x1="65.6" y1="592.2" x2="90.9" y2="592.2"/>
                            <path class="sthappy7" d="M72.2,579c0,0-14.2,9.7-2.3,21.8"/>
                        </g>
                        <g id="happyclowd2_1_">
                            <path id="happyclowd2" class="sthappy28" d="M153.1,594.7l-31-0.2c5.5,8.8,0,13.5,0,13.5c-13.1,11.2-14-2.7-14-2.7
		c-7.1,6.1-11.8,0-11.8,0c-9.1-11.5,4.8-19.6,4.8-19.6c-11.5-9-2.5-16.9,0-18.6c2.5-1.7,17.3-4.7,19.4,5.6
		c2.2,10.3-2.8,14.5-2.8,14.5h33.8"/>
                            <path id="happyclowd2line2" class="sthappy7" d="M112.7,580.6c0,0-7.5,9.3,1.4,19"/>
                            <line id="happyclowd2line" class="sthappy7" x1="110.8" y1="587.1" x2="148.8" y2="587.1"/>
                        </g>
                        <path id="happymuffler" class="sthappy24" d="M148.3,575c0,0-0.4,21.8,16.9,31.4c0,0,20.7-8.8,45.6,0c0,0,15.3-20.3,22.2-20.3
	c0,0-10.7-10-13.8-11.1c0,0-12.3,6.5-16.1,13.8C203.1,588.8,195.5,574.2,148.3,575z"/>
                        <ellipse id="happyhandle" class="sthappy24" cx="445.6" cy="495.4" rx="28.3" ry="4.6"/>
                        <g id="smilecloud">
                            <path id="smilecloudpath" class="sthappy29" d="M591.1,354.9l30-100.9c-1.9,1.7-8.8,7.7-19.3,8c-3.8,0.1-16-0.5-22.7-10.7
		c-6.9-10.6-2-22.5-1.6-23.5c-1.1,1-9.1,8.2-19.8,6.5c-12.2-2-20.2-14.3-19.5-23.3c0.6-8.3,8.7-17.8,8.7-17.8l0,0
		c-2.9-0.6-8.5-2.1-13-6.8c-9.1-9.3-9-25.6-2.5-34c4.2-5.4,13.3-10.6,13.3-10.6l0,0c-4-3.4-14.4-13.4-16.5-29.1
		C525.3,91.4,539.2,68.9,559,63c9.6-2.9,18.3-1.2,23,0.1c-0.6-6.2-0.8-17.9,6.6-27.8c14-18.7,46-18.7,59.8-6.9
		c5.4,4.6,13.9,16.1,14.5,16.9l0,0c1-2.2,11.1-22.8,33.9-27c2.2-0.4,26.2-4.4,40.3,12.6c6.9,8.4,8.1,17.9,8.4,22.2
		c2.3-2.4,19-19,42.6-16.5c24.8,2.6,43.5,24.8,45.4,47.3c1.1,12.8-3.4,23.1-6.3,28.4c1.8,0.2,20.9,2.5,29.6,18.9
		c8.2,15.4,2.2,33.7-8.2,44.1c-9.8,9.8-22.2,11.2-26.1,11.4c2.1,3.8,6.3,12.8,4.6,23.9c-2.6,16.7-17.1,27.8-30.2,31.5
		c-23.6,6.7-42.1-10.3-43.1-11.2c0.5,4,1.2,14.1-4.8,23.8c-8.2,13.5-24.8,19.3-39,17c-12.5-2-20.3-9.8-23.2-12.9L591.1,354.9z"/>
                            <circle id="smilebody" class="sthappy30" cx="684.3" cy="146.3" r="100.1"/>
                            <ellipse id="smileeye2" class="sthappy31" cx="718.4" cy="112.7" rx="7.4" ry="22.2"/>
                            <ellipse id="smileeye1" class="sthappy31" cx="651.2" cy="112.7" rx="7.4" ry="22.2"/>
                            <path id="smilemouth" class="sthappy32" d="M741.9,179.4c-27.4,43.9-89.4,44.6-115.4,0.4"/>
                        </g>
</svg>
                </div>
            </div>


        </div>

    </div>

</section>

