<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

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
            'email' => Yii::t('setting', 'Email'),
            'phone_number' => Yii::t('setting', 'Phone'),
            'logo_img' => Yii::t('setting', 'Logo'),
            'imageFile' => Yii::t('partner', 'ImageFile'),
            'site_name' => Yii::t('setting', 'Site Name'),
            'description' => Yii::t('setting', 'Description'),
            'facebook_url' => Yii::t('setting', 'Facebook Url'),
            'telegram_url' => Yii::t('setting', 'Telegram Url'),
            'instagram_url' => Yii::t('setting', 'Instagram Url'),
            'youtube_url' => Yii::t('setting', 'Youtube Url'),

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

    public static function SettingLists (){

        return ArrayHelper::map(self::find()->all(),'id','site_name');

    }

}
