<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%setting}}`.
 */
class m251030_133825_create_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%setting}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'phone_number' => $this->string(),
            'logo_img' => $this->string(),
            'site_name' => $this->string(),
            'facebook_url' => $this->text(),
            'telegram_url' => $this->text(),
            'instagram_url' => $this->text(),
            'youtube_url' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%setting}}');
    }
}
