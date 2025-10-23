<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 */
class m251023_055500_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'pid' => $this->integer(),
            'name' => $this->string(),
            'order' => $this->integer()->defaultValue(0),


        ]);

        // creates index for column `pid`
        $this->createIndex(
            '{{%idx-category-pid}}',
            '{{%category}}',
            'pid'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-category-pid}}',
            '{{%category}}',
            'pid',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-category-pid}}',
            '{{%category}}'
        );

        // drops index for column `pid`
        $this->dropIndex(
            '{{%idx-category-pid}}',
            '{{%category}}'
        );

        $this->dropTable('{{%category}}');
    }
}
