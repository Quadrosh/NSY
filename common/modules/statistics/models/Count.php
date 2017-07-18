<?php

namespace common\modules\statistics\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "ns_ip_count".
 *
 * @property integer $id
 * @property string $ip
 * @property string $str_url
 * @property integer $date_ip
 * @property integer $black_list_ip
 * @property string $comment
 */
class Count extends ActiveRecord
{
    const STAT_DEFAULT = 2; // 2 дня + сегодня
    public $start_time;
    public $stop_time;
    public $add_black_list;
    public $del_black_list;
    public $del_old;
    public $reset;


    public static function tableName()
    {
        return '{{%ns_ip_count}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip'], 'required'],
            [['str_url'], 'url'],
            [['date_ip', 'start_time', 'stop_time', 'add_black_list', 'del_black_list', 'del_old', 'reset'], 'safe'],
            [['black_list_ip'], 'boolean'],
            [['comment'], 'string'],
        ];
    }

    // проверка наличия IP в черном списке (не выводить и не сохранять)
    // если есть >1 вернет true
    public function inspection_black_list($ip)
    {
        $check = $this->find()
            ->where(['ip'=>$ip])
            ->andWhere(['black_list_ip'=>1])
            ->one();
        if($check) return true;
    }

    public function setCount($ip,$str_url,$black_list_ip = 0)
    {

        $this->ip = $ip;
        $this->str_url = $str_url;
        $this->date_ip = time();
        $this->black_list_ip = $black_list_ip;
        $this->save();
    }

    public function getCount($condition = null, $days_ago = null)
    {
        $sec_today = time() - strtotime('today'); // секунд с начала дня
        // за сколько дней показывать по умолчанию (сегодня/вчера/позавчера)
        if (!$days_ago) $days_ago = time() - (86400 * self::STAT_DEFAULT) - $sec_today;

        if (in_array('date_ip',$condition)) {
            $count_ip = $this->find()
                ->where(['not',['black_list_ip'=>1]])
                ->andWhere($condition)
                ->orderBy('date_ip desc')
                ->all();
        } elseif ($condition) {
            $count_ip = $this->find()
                ->where(['not',['black_list_ip'=>1]])
                ->andWhere(['>','date_ip',$days_ago])
                ->andWhere($condition)
                ->orderBy('date_ip desc')
                ->all();
        } else {
            $count_ip = $this->find()
                ->where(['not',['black_list_ip'=>1]])
                ->andWhere(['>','date_ip',$days_ago])
                ->orderBy('date_ip desc')
                ->all();
        }
        return $count_ip;
    }

    // получаем IP в черном списке
    public function count_black_list()
    {
        $black_list = (new \yii\db\Query())
            ->select('ip')
            ->from('{{%ns_ip_count}}')
            ->where(['black_list_ip'=>1])
            ->distinct() // уникальные значения
            ->all();

        // По полученному массиву IP получаем значение ячейки 'comment'
        foreach ($black_list as $key => $arr) {
            $rez = self::find()->where(['ip'=>$arr['ip']])->one();
            $black_list[$key]['comment'] = $rez->comment;
        }
        return $black_list;
    }

    // добавление в черный список
    public function set_black_list($ip,$comment){
        $verify_black_list = self::find()->where(['ip'=>$ip])->all();
        // если такой IP уже есть
        if($verify_black_list) {
            foreach ($verify_black_list as $str) {
                $str->black_list_ip = 1;
                $str->comment = $comment;
                $str->save();
            }
        } else {
            $this->ip = $ip;
            $this->black_list_ip = 1;
            $this->comment = $comment;
            $this->save();
        }
    }
    // удаление из черного списка
    public function remove_black_list($ip){
        $verify_black_list = self::find()->where(['ip'=>$ip])->all();
        foreach ($verify_black_list as $str) {
            $str->black_list_ip = 0;
            $str->comment = null;
            $str->save();
        }
    }
    // удаление данных старше 90 дней
    public function remove_old()
    {
        $today = time();
        $old_time = $today - (86400*90);
        $old = self::find()->where(['<','date_ip',$old_time])->all();
        foreach ($old as $str) {
            $str->delete();
        }
        echo '<p class="red">Удалено '.count($old).' строк.</p>';
    }

//    /**
//     * @inheritdoc
//     */
//    public function attributeLabels()
//    {
//        return [
//            'id' => 'ID',
//            'ip' => 'Ip',
//            'str_url' => 'Str Url',
//            'date_ip' => 'Date Ip',
//            'black_list_ip' => 'Black List Ip',
//            'comment' => 'Comment',
//        ];
//    }
}
