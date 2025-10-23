<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_image}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product}}`
 */
class m251023_061004_create_product_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_image}}', [
            'id' => $this->primaryKey(),
            'image' => $this->text(),
            'product_id' => $this->integer(),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-product_image-product_id}}',
            '{{%product_image}}',
            'product_id'
        );

        // add foreign key for table `{{%product}}`
        $this->addForeignKey(
            '{{%fk-product_image-product_id}}',
            '{{%product_image}}',
            'product_id',
            '{{%product}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%product}}`
        $this->dropForeignKey(
            '{{%fk-product_image-product_id}}',
            '{{%product_image}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-product_image-product_id}}',
            '{{%product_image}}'
        );

        $this->dropTable('{{%product_image}}');
    }
}
