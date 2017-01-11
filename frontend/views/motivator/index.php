<?php
use yii\helpers\Url;
?>

        <section id="motivators" class="manifestor white">
            <h2 id="pagename"  ><?= Yii::$app->view->params['meta']['pagehead'] ?></h2>
            <p><?= nl2br(Yii::$app->view->params['meta']['pagedescription']) ?></p>
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

                </div>
            </div>
        </section>

