<?php

use yii\db\Migration;

/**
 * Handles adding status to table `masters`.
 */
class m210309_202600_add_status_column_to_masters_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('masters', 'status', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('masters', 'status');
    }
}
