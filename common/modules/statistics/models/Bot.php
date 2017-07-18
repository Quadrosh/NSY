<?php

namespace common\modules\statistics\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "ns_ip_bots".
 *
 * @property integer $id_bot
 * @property string $bot_ip
 * @property string $str_url
 * @property string $bot_name
 * @property integer $date
 */
class Bot extends ActiveRecord
{
    const AGE_BOT = 30; // дней хранить статистику по ботам
    public $get_bot_stat;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ns_ip_bots}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bot_ip'], 'required'],
            [['str_url'], 'url'],
            [['date'], 'integer'],
            [['bot_name'], 'string'],
            [['get_bot_stat'], 'safe'],

        ];
    }

    // является ли посетитель роботом
    static function isBot(&$botname = ''){
        $bots = array(
            'rambler','googlebot','aport','yahoo','msnbot','turtle','mail.ru','omsktele',
            'yetibot','picsearch','sape.bot','sape_context','gigabot','snapbot','alexa.com',
            'megadownload.net','askpeter.info','igde.ru','ask.com','qwartabot','yanga.co.uk',
            'scoutjet','similarpages','oozbot','shrinktheweb.com','aboutusbot','followsite.com',
            'dataparksearch','google-sitemaps','appEngine-google','feedfetcher-google',
            'liveinternet.ru','xml-sitemaps.com','agama','metadatalabs.com','h1.hrn.ru',
            'googlealert.com','seo-rus.com','yaDirectBot','yandeG','yandex',
            'yandexSomething','Copyscape.com','AdsBot-Google','domaintools.com',
            'Nigma.ru','bing.com','dotnetdotcom'
        );
        foreach ($bots as $bot)
            if(stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false){
                $botname = $bot;
                return $botname;
            }
        return false;

    }

    // выводит таблицу статистики  по ботам
    protected function get_table_bot($data_bot){
        echo '
        <table class="get_table">
            <thead>
                <tr>
                    <th align="center">№</th>
                    <th align="center">Чей бот</th>
                    <th>IP</th>
                    <th>URL</th>
                    <th>Время посещения</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($data_bot as $key => $value) {
            $key = $key+1;
            echo '
                <tr>
                    <td>$key</td>
                    <td>'.$value["bot_name"].'</td>
                    <td>'.$value["bot_ip"].'</td>
                    <td>'.$value["bot_url"].'</td>
                    <td>'.date("d.m.Y H:i:s", $value['date']).'</td>
                </tr>';
        }
        echo '
            </tbody>
        </table>';
    }

    // вывод статистики посещений поисковых ботов
    public function by_bot()
    {
        //удаляем старых ботов
        $old_bot = self::AGE_BOT * 86400;
        $array_del_bot = $this->find()->where(['<','date',time() - $old_bot])->all();
        foreach ($array_del_bot as $bot) {
            $bot->delete();
        }
        $data = $this->find()->orderBy('date desc')->all();
        $this->get_table_bot($data);
    }

    // сохранение данных бота в базу
    public function set_stat_bot($bname,$str_url,$ip)
    {
        $this->bot_ip = $ip;
        $this->str_url = $str_url;
        $this->bot_name = $bname;
        $this->date = time();
        $this->save();
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bot' => 'Id Bot',
            'bot_ip' => 'Bot Ip',
            'str_url' => 'Str Url',
            'bot_name' => 'Bot Name',
            'date' => 'Date',
        ];
    }
}
