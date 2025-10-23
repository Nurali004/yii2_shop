<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $f_name
 * @property string|null $l_name
 * @property string|null $phone
 * @property string|null $address
 *
 * @property User $user
 */
class Customer extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'f_name', 'l_name', 'phone', 'address'], 'default', 'value' => null],
            [['user_id'], 'integer'],
            [['f_name', 'l_name', 'phone', 'address'], 'string', 'max' => 255],
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
            'user_id' => 'User ID',
            'f_name' => 'F Name',
            'l_name' => 'L Name',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
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
