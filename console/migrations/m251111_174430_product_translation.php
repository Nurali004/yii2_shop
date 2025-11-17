<?php

use yii\db\Migration;

class m251111_174430_product_translation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%product}}', 'name', 'name_uz');
        $this->renameColumn('{{%product}}', 'description', 'description_uz');
        $this->addColumn('{{%product}}', 'description_ru', $this->string()->null());
        $this->addColumn('{{%product}}', 'description_en', $this->string()->null());
        $this->addColumn('{{%product}}', 'name_ru', $this->string()->null());
        $this->addColumn('{{%product}}', 'name_en', $this->string()->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('{{%product}}', 'name_uz', 'name');
        $this->renameColumn('{{%product}}', 'description', 'description_uz');
        $this->dropColumn('{{%product}}', 'description_ru');
        $this->dropColumn('{{%product}}', 'description_en');
        $this->dropColumn('{{%product}}', 'name_ru');
        $this->dropColumn('{{%product}}', 'name_en');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251111_174430_product_translation cannot be reverted.\n";

        return false;
    }
    */
}
