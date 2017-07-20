<?php
namespace console\controllers;

use common\models\Happypage;
use common\models\LiveOutEx;
use common\models\Motivator;
use common\models\Popular;
use yii\console\Controller;
use Yii;
use yii\helpers\Url;


class DaemonController extends Controller {

    public function actionIndex() {
        echo "Cron Servise is running\n";
    }

    public function actionCollectstat()
    {
        $statistics = \common\modules\statistics\CountNs::getStat();
        $pages = [];
        foreach ($statistics as $visit) {
            $type = null;
            $link = null;
            $image = null;
            $name = null;
            if (strpos($visit['str_url'], 'happiness/')) {
                $type = 'happiness';
                $link = substr ( $visit['str_url'] , strpos($visit['str_url'], 'happiness/') );
                $id = null;
                if ($link=='happiness/origin') {$id = 2;}
                if ($link=='happiness/meaning') {$id = 3;}
                if ($link=='happiness/biochemistry') {$id = 4;}
                if ($link=='happiness/body') {$id = 6;}
                if ($link=='happiness/soul') {$id = 7;}
                if ($link=='happiness/life') {$id = 8;}
                if ($link=='happiness/quotes') {$id = 9;}
                if ($link=='happiness/medicine') {$id = 10;}
                if ($link=='happiness/philosophy') {$id = 11;}
                if ($link=='happiness/economy') {$id = 12;}
                if ($link=='happiness/symbols') {$id = 13;}
                if ($link=='happiness/holiday') {$id = 14;}
                if ($link=='happiness/museum') {$id = 15;}

                $object = Happypage::find()->where(['id'=>$id])->one();
                $image = $object['imagelink'];
                $name = $object['title'];
            }
            if (strpos($visit['str_url'], 'liveout/')) {
                $type = 'liveout';
                $id = substr ( $visit['str_url'] , strpos($visit['str_url'], 'liveout/warn/') +13 );
                $object = LiveOutEx::find()->where(['id'=>$id])->one();
                $image = 'NS-logo_sun.png';
                $name = $object['ex_name'];
                $link = 'liveout/warn/'.$id;
            }
            if (strpos($visit['str_url'], 'motivator/')) {
                $type = 'motivator';
                $hrurl = substr ( $visit['str_url'] , strpos($visit['str_url'], 'motivator/') +10 );
                $link = 'motivator/'.$hrurl;
                $object = Motivator::find()->where(['hrurl'=>$hrurl])->one();
                $image = $object['background'];
                $name = $object['pagehead'];
            }
            $pages[$visit['str_url']]['type'] = $type ;
            $pages[$visit['str_url']]['link'] = $link ;
            $pages[$visit['str_url']]['image'] = $image ;
            $pages[$visit['str_url']]['name'] = $name ;

            if(isset($pages[$visit['str_url']]['count'])){
                $pages[$visit['str_url']]['count']++;
            } else {
                $pages[$visit['str_url']]['count'] = 1 ;
            }
        }

        $now = new \DateTime();
        $today = $now->format('d-m-Y');
        foreach ($pages as $page) {
            if(Popular::find()->where(['type'=>$page['type']])->andWhere(['name'=>$page['name']])->one()){
                $popItem = Popular::find()->where(['type'=>$page['type']])->andWhere(['name'=>$page['name']])->one();
                $popItem['image'] = $page['image'];
            } else {
                $popItem = new Popular();
                $popItem['type'] = $page['type'];
                $popItem['name'] = $page['name'];
                if ($page['image']) {
                    $popItem['image'] = $page['image'];
                } else {
                    $popItem['image'] = 'NS-logo_sun.png';
                }
                $popItem['link'] = $page['link'];
            }
            if (!$popItem['image']) {
                $popItem['image'] = 'NS-logo_sun.png';
            }
            $popItem['count'] = $page['count'];
            $popItem['date'] = $today;
            $popItem->save();
        }
        echo 'Job done';
    }



}