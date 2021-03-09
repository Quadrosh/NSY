<?php

use yii\db\Migration;

class m170715_115649_ns_stat_ip extends Migration
{

    public function safeUp()
    {
//        $tableOptions = null;
//        // опции для mysql
//        if ($this->db->driverName === 'mysql') {
//            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
//        }
//        // создание таблицы IP пользователей
//        $this->createTable('{{%ns_ip_count}}',[
//            'id'=>$this->primaryKey(),
//            'ip'=>$this->string(15)->notNull(),
//            'str_url'=>$this->string(50),
//            'date_ip'=>$this->integer(),
//            'black_list_ip'=>$this->boolean()->defaultValue(0)->notNull(),
//            'comment'=>$this->string(50),
//        ], $tableOptions);
//        // создание таблицы IP ботов
//        $this->createTable('{{ns_ip_bots}}', [
//            'id_bot'=>$this->primaryKey(),
//            'bot_ip'=>$this->string(15)->notNull(),
//            'str_url'=>$this->string(50),
//            'bot_name'=>$this->string(30),
//            'date'=>$this->integer(),
//        ], $tableOptions);
    }
    public function safeDown()
    {
//        $this->dropTable('{{%ns_ip_count}}');
//        $this->dropTable('{{%ns_ip_bots}}');
    }
}
