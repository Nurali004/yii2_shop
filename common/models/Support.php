<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "support".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $email
 * @property string|null $description
 * @property int|null $status
 * @property string|null $created_at
 */
class Support extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'email', 'description'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 0],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['created_at'], 'safe'],
            [['first_name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => Yii::t('support','First Name'),
            'email' => Yii::t('setting','Email'),
            'description' => Yii::t('setting','Description'),
            'status' => Yii::t('product','Status'),
            'created_at' => 'Created At',
        ];
    }

}
