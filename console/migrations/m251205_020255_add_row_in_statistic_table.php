<?php

use yii\db\Migration;

class m251205_020255_add_row_in_statistic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%statistic}}', [
            'user_count' => 0,
            'product_count' => 0,
            'order_count' => 0,
            'product_item' => 0
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%statistic}}', [
            'id' => 1
        ]);


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251205_020255_add_row_in_statistic_table cannot be reverted.\n";

        return false;
    }
    */
}
