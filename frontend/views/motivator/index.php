<?php
use yii\helpers\Url;
?>







        <section id="motivators" class="manifestor white">
            <h2 id="pagename"  ><?= Yii::$app->view->params['meta']['pagehead'] ?></h2>
            <p><?= Yii::$app->view->params['meta']['pagedescription'] ?></p>
            <div class=" container mt120 mb100">

                <div class="m_table">
                    <div class="m_table_row">
                        <div class="m_table_name m_table_head">Тематические</div>
                        <div class="m_table_button m_table_head">позиция</div>
                    </div>

                    <?php if (isset(Yii::$app->view->params['catMotivators'])) : ?>
                        <?php foreach (Yii::$app->view->params['catMotivators'] as $catMotivator) : ?>
                            <div class="m_table_row">
                                <div class="m_table_name"><?= $catMotivator['list_name'] ?></div>
                                <div class="m_table_button">
                                <?php if (isset($catMotivator['i'])) : ?>

                                    <a href="<?= 'motivator/'. $catMotivator['i'] ;  ?>" class="btn-success fl">Я</a>
                                <?php endif; ?>
                                <?php if (isset($catMotivator['you'])) : ?>
                                    <a href="<?= 'motivator/'.  $catMotivator['you'];  ?>" class="btn-success fr">ТЫ</a>
                                <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>



                    <div class="m_table_row">
                        <div class="m_table_name m_table_head">Профессиональные</div>
                        <div class="m_table_button m_table_head"></div>

                    </div>

                    <?php if (isset(Yii::$app->view->params['proMotivators'])) : ?>
                        <?php foreach (Yii::$app->view->params['proMotivators'] as $proMotivator) : ?>
                            <div class="m_table_row">
                                <div class="m_table_name"><?= $proMotivator['list_name'] ?></div>
                                <div class="m_table_button">
                                    <?php if (isset($proMotivator['i'])) : ?>
                                        <a href="<?= 'motivator/'. $proMotivator['i'] ?>" class="btn-success fl">Я</a>
                                    <?php endif; ?>
                                    <?php if (isset($proMotivator['you'])) : ?>
                                        <a href="<?= 'motivator/'. $proMotivator['you'] ?>" class="btn-success fr">ТЫ</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>



                    <div class="m_table_row">
                        <div class="m_table_name m_table_head">Мой дом</div>
                        <div class="m_table_button m_table_head"></div>

                    </div>

                    <?php if (isset(Yii::$app->view->params['cityMotivators'])) : ?>
                        <?php foreach (Yii::$app->view->params['cityMotivators'] as $cityMotivator) : ?>
                            <div class="m_table_row">
                                <div class="m_table_name"><?= $cityMotivator['list_name'] ?></div>
                                <div class="m_table_button">
                                    <?php if (isset($cityMotivator['i'])) : ?>
                                        <a href="<?= 'motivator/'. $cityMotivator['i'] ?>" class="btn-success fl">Я</a>
                                    <?php endif; ?>
                                    <?php if (isset($cityMotivator['you'])) : ?>
                                        <a href="<?= 'motivator/'. $cityMotivator['you'] ?>" class="btn-success fr">ТЫ</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

<!--                    <div class="m_table_row">-->
<!--                        <div class="m_table_name">Воронеж</div>-->
<!--                        <div class="m_table_button">-->
<!--                            <a href="voroneg.html" class="btn-success fl">Я</a>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="m_table_row">-->
<!--                        <div class="m_table_name">Москва</div>-->
<!--                        <div class="m_table_button">-->
<!--                            <a href="moscow.html" class="btn-success fl">Я</a>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="m_table_row">-->
<!--                        <div class="m_table_name">Тула</div>-->
<!--                        <div class="m_table_button">-->
<!--                            <a href="tula.html" class="btn-success fl">Я</a>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </section>

        <section class=" white">
            <div class="container ">
                <div class="row mb30">

                    <div class="col-xs-4 mt22">

                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,linkedin,lj,surfingbird,viber,whatsapp"></div>
                        <h4> Поделиться </h4>
                    </div>

                    <div class="col-xs-4">
                        <svg
                            version="1.1" id="logosun"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px"
                            width="100px" height="100px"
                            viewBox="0 0 100 100"
                            style="enable-background:new 0 0 100 100;"
                            xml:space="preserve"
                        >

<g>
    <circle  fill="#FFC107" cx="49.9" cy="8.6" r="3.9"/>
</g>
                            <path fill="#FFC107" d="M61.5,34.4c-1.4-1-5.6-3.8-11.6-3.8c-6,0-10.2,2.8-11.6,3.8c1-1.3,3.9-5.5,3.9-11.6c0-6.1-2.9-10.3-3.9-11.6
	c1.3,1,5.5,3.9,11.6,3.9c6.1,0,10.3-2.9,11.6-3.9c-1,1.3-3.8,5.5-3.8,11.6C57.7,28.8,60.5,33,61.5,34.4z"/>
                            <g>
                                <circle fill="#FFC107" cx="6.9" cy="40" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M35,36.9c-1.4,1-5.3,4.1-7.2,9.9c-1.9,5.7-0.5,10.6,0,12.2c-0.9-1.3-4-5.4-9.8-7.3c-5.8-1.9-10.7-0.4-12.2,0.1
	c1.3-0.9,5.4-4,7.3-9.9c1.9-5.8,0.4-10.7-0.1-12.2c1,1.4,4.1,5.3,9.8,7.2C28.5,38.8,33.4,37.4,35,36.9z"/>
                            <g>
                                <circle fill="#FFC107" cx="23.4" cy="90.5" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M29.1,62.9c0.5,1.6,2.3,6.3,7.2,9.9c4.9,3.5,9.9,3.8,11.6,3.8c-1.5,0.5-6.4,2.1-10,7.1
	c-3.6,5-3.7,10.1-3.7,11.7c-0.5-1.6-2.2-6.4-7.1-10c-4.9-3.6-10-3.7-11.7-3.7c1.6-0.5,6.3-2.2,9.9-7.1C29,69.6,29.1,64.5,29.1,62.9z
	"/>
                            <g>
                                <circle fill="#FFC107" cx="76.6" cy="90.4" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M52,76.4c1.7,0,6.7-0.2,11.6-3.8c4.9-3.5,6.6-8.2,7.2-9.9c0,1.6,0.1,6.7,3.7,11.7c3.6,5,8.4,6.6,10,7.1
	c-1.6,0-6.7,0.1-11.7,3.7c-4.9,3.6-6.6,8.4-7.1,10c0-1.7-0.2-6.7-3.7-11.6C58.4,78.6,53.6,76.9,52,76.4z"/>
                            <g>
                                <circle fill="#FFC107" cx="93" cy="39.8" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M72.1,58.8c0.5-1.6,1.9-6.5,0-12.2c-1.9-5.7-5.8-8.9-7.2-9.9c1.5,0.5,6.4,2,12.2,0.1c5.8-1.9,8.9-6,9.8-7.3
	c-0.5,1.5-2,6.4-0.1,12.3c1.9,5.8,5.9,8.9,7.3,9.8c-1.6-0.5-6.4-1.9-12.2-0.1C76.2,53.5,73.1,57.5,72.1,58.8z"/>
							</svg>


                    </div>
                    <div class="col-xs-4 mt22">
                        <a href="motivator_evolution_1.html" id="gonextpage" class="qbtn" >
                            <svg
                                version="1.1" id="arrow"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px"
                                width="66px" height="31px"
                                viewBox="0 0 66 31"
                                style="enable-background:new 0 0 66 31;"
                                xml:space="preserve"
                            >
<g >
    <line  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="15.5" x2="63" y2="15.5"/>
    <line  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"  x1="49.1" y1="30" x2="63.1" y2="16"/>
    <line  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"  x1="63.1" y1="15" x2="49.1" y2="1"/>
</g>
								</svg>
                        </a>
                        <h4 class="mt12"> Смотреть мотиватор </h4>
                    </div>




                </div> <!-- row -->
            </div>
        </section>











<a id="sendtopage"  class="vizibleOff" href="motivator_evolution_1.html"></a>

