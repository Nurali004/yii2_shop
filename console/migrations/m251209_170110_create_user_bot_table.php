<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_bot}}`.
 */
class m251209_170110_create_user_bot_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_bot}}', [
            'id' => $this->primaryKey(),
            'chat_id' => $this->integer(),
            'username' => $this->string(255),
            'first_name' => $this->string(255),
            'last_name' => $this->string(255),
            'phone' => $this->string(100),
            'step' => $this->text(),
            'data' => $this->text(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_bot}}');
    }
}
