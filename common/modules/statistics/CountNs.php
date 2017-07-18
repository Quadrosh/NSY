<?php

namespace common\modules\statistics;

use Yii;
use common\modules\statistics\models\Count;
use common\modules\statistics\models\Bot;

class CountNs
{
    static function init()
    {
        $ip = Yii::$app->request->userIP;
        $count_model = new Count();
        $bot_model = new Bot();
        $str_url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; //url текущей страницы


        // проверка на бота
        $bot_name = $bot_model->isBot();
        if($bot_name) {
            $bot_model->set_stat_bot($bot_name,$str_url,$ip);
        } else {
            // проверка на черный список
            $black = $count_model->inspection_black_list($ip);
            if(!$black){
                $count_model->setCount($ip, $str_url, 0);
            }
        }
    }

    static function getStat()
    {
        $count_model = new Count();
        $condition = [];
        $days_ago = 30;
        $count_data = $count_model->getCount($condition,$days_ago);
        return $count_data;
    }
}
