<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_bot".
 *
 * @property int $id
 * @property int|null $chat_id
 * @property string|null $username
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $phone
 * @property string|null $step
 * @property string|null $data
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class UserBot extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_bot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['chat_id', 'username', 'first_name', 'last_name', 'phone', 'step', 'data'], 'default', 'value' => null],
            [['chat_id'], 'integer'],
            [['step', 'data'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chat_id' => 'Chat ID',
            'username' => 'Username',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'step' => 'Step',
            'data' => 'Data',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
