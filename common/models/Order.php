<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $address
 * @property string|null $status
 * @property string|null $phone
 * @property string|null $l_name
 * @property string|null $f_name
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property OrderItem[] $orderItems
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const STATUS_PROCESSING = 2;

    public static function getStatuses(){
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_INACTIVE  => 'Inactive',
            self::STATUS_PROCESSING => 'Processing',
        ];

    }



    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'address', 'phone', 'updated_at', 'status'], 'default', 'value' => null],
            [['user_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['address', 'phone', 'l_name', 'f_name'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => Yii::t('order', 'User ID'),
            'address' => Yii::t('order', 'Address'),
            'phone' => Yii::t('order', 'Phone'),
            'l_name' => Yii::t('order', 'L Name'),
            'f_name' => Yii::t('order', 'F Name'),
            'status' => Yii::t('product', 'Status'),
            'created_at' => Yii::t('order', 'Created At'),
            'updated_at' => Yii::t('order', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }



}
