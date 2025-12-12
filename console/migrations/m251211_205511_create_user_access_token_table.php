<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_access_token}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m251211_205511_create_user_access_token_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_access_token}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'token' => $this->string(50),
            'expire_at' => $this->dateTime(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-user_access_token-user_id}}',
            '{{%user_access_token}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-user_access_token-user_id}}',
            '{{%user_access_token}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-user_access_token-user_id}}',
            '{{%user_access_token}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-user_access_token-user_id}}',
            '{{%user_access_token}}'
        );

        $this->dropTable('{{%user_access_token}}');
    }
}
