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
 * @property string|null $img
 * @property string|null $address
 *
 * @property User $user
 */
class Customer extends \yii\db\ActiveRecord
{

    public $imageFile;


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
            [['user_id', 'f_name', 'l_name', 'phone', 'address', 'img'], 'default', 'value' => null],
            [['user_id'], 'integer'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, webp'],
            [['f_name', 'l_name', 'phone', 'address', 'img'], 'string', 'max' => 255],
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
            'user_id' => Yii::t('app', 'User ID'),
            'f_name' => Yii::t('app', 'F Name'),
            'l_name' => Yii::t('app', 'L Name'),
            'phone' => Yii::t('app', 'Phone'),
            'img' => Yii::t('category', 'Img'),
            'address' => Yii::t('app', 'Address'),
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

    public function upload()
    {
        if ($this->validate()) {
            $filePath = 'uploads/customer/' . $this->imageFile->baseName .'_'. Yii::$app->security->generateRandomString(4). '.' . $this->imageFile->extension;
            $fileSavePath = Yii::getAlias('@frontend').'/web/' . $filePath;
            $this->imageFile->saveAs($fileSavePath);
            $this->img = $filePath;

            return true;

        }
        return false;

    }

}
