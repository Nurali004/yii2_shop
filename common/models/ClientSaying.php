<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client_saying".
 *
 * @property int $id
 * @property int|null $customer_id
 * @property string|null $text
 * @property int|null $count_star
 *
 * @property Customer $customer
 */
class ClientSaying extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client_saying';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'text', 'count_star'], 'default', 'value' => null],
            [['customer_id', 'count_star'], 'integer'],
            [['text'], 'string'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'text' => 'Text',
            'count_star' => 'Count Star',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }

}
