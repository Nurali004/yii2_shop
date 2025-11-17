<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%support}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m251111_123239_create_support_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%support}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'email' => $this->string(),
            'description' => $this->text(),
            'status' => $this->integer()->defaultValue(0),
            'user_id' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-support-user_id}}',
            '{{%support}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-support-user_id}}',
            '{{%support}}',
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
            '{{%fk-support-user_id}}',
            '{{%support}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-support-user_id}}',
            '{{%support}}'
        );

        $this->dropTable('{{%support}}');
    }
}
