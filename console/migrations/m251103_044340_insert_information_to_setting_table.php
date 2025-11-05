<?php

use yii\db\Migration;

class m251103_044340_insert_information_to_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('setting', [
            'email'=> 'nurali2004@gmail.com',
            'phone_number'=> +998992907704,
            'logo_img'=> '/uploads/logo.png',
            'site_name'=> 'Online Shop',
            'facebook_url'=> 'https://www.facebook.com/',
            'instagram_url'=> 'https://www.instagram.com/',
            'youtube_url'=> 'https://www.youtube.com/',
            'telegram_url'=> 'https://telegram.me/',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m251103_044340_insert_information_to_setting_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251103_044340_insert_information_to_setting_table cannot be reverted.\n";

        return false;
    }
    */
}
