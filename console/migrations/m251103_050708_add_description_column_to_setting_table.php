<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%setting}}`.
 */
class m251103_050708_add_description_column_to_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%setting}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%setting}}', 'description');
    }
}
