<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "statistic".
 *
 * @property int $id
 * @property int|null $user_count
 * @property int|null $order_count
 * @property int|null $product_count
 * @property int|null $product_item
 */
class Statistic extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_count', 'order_count', 'product_count', 'product_item'], 'default', 'value' => null],
            [['user_count', 'order_count', 'product_count', 'product_item'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_count' => 'User Count',
            'order_count' => 'Order Count',
            'product_count' => 'Product Count',
            'product_item' => 'Product Item',
        ];
    }

}
