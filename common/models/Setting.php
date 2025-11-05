<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $phone_number
 * @property string|null $logo_img
 * @property string|null $site_name
 * @property string|null $description
 * @property string|null $facebook_url
 * @property string|null $telegram_url
 * @property string|null $instagram_url
 * @property string|null $youtube_url
 */
class Setting extends \yii\db\ActiveRecord
{
    public $imageFile;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'phone_number', 'logo_img','description', 'site_name', 'facebook_url', 'telegram_url', 'instagram_url', 'youtube_url'], 'default', 'value' => null],
            [['facebook_url', 'telegram_url', 'instagram_url', 'youtube_url', 'description'], 'string'],
            [['email', 'phone_number', 'logo_img', 'site_name'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'logo_img' => 'Logo Img',
            'site_name' => 'Site Name',
            'description' => 'Description',
            'facebook_url' => 'Facebook Url',
            'telegram_url' => 'Telegram Url',
            'instagram_url' => 'Instagram Url',
            'youtube_url' => 'Youtube Url',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $pathUrl = 'uploads/setting/'.$this->imageFile->baseName.'.'.$this->imageFile->extension;
            $pathSaveUrl = Yii::getAlias('@frontend'). '/web/'. $pathUrl;
            $this->imageFile->saveAs($pathSaveUrl);
            $this->logo_img = $pathUrl;
            return true;

        }else{
            return false;
        }

    }

}
