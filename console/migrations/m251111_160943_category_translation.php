<?php

use yii\db\Migration;

class m251111_160943_category_translation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%category}}', 'name', 'name_uz');
        $this->addColumn('{{%category}}', 'name_ru', $this->string()->null());
        $this->addColumn('{{%category}}', 'name_en', $this->string()->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('{{%category}}', 'name_uz', 'name');
        $this->dropColumn('{{%category}}', 'name_ru');
        $this->dropColumn('{{%category}}', 'name_en');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251111_160943_category_translation cannot be reverted.\n";

        return false;
    }
    */
}
