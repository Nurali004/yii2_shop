<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client_saying}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%customer}}`
 */
class m251129_180148_create_client_saying_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client_saying}}', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'text' => $this->text(),
            'count_star' => $this->integer(),
        ]);

        // creates index for column `customer_id`
        $this->createIndex(
            '{{%idx-client_saying-customer_id}}',
            '{{%client_saying}}',
            'customer_id'
        );

        // add foreign key for table `{{%customer}}`
        $this->addForeignKey(
            '{{%fk-client_saying-customer_id}}',
            '{{%client_saying}}',
            'customer_id',
            '{{%customer}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%customer}}`
        $this->dropForeignKey(
            '{{%fk-client_saying-customer_id}}',
            '{{%client_saying}}'
        );

        // drops index for column `customer_id`
        $this->dropIndex(
            '{{%idx-client_saying-customer_id}}',
            '{{%client_saying}}'
        );

        $this->dropTable('{{%client_saying}}');
    }
}
