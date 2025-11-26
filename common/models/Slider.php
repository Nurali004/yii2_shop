<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $img
 * @property int|null $order
 * @property string|null $url
 */
class Slider extends \yii\db\ActiveRecord
{



    public $imageFile;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img', 'url'], 'default', 'value' => null],
            [['order'], 'default', 'value' => 0],
            [['img', 'url'], 'string'],
            [['order'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp', 'checkExtensionByMimeType' => false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Yii::t('partner', 'Name'),
            'img' => Yii::t('partner', 'Img'),
            'order' => Yii::t('partner', 'Order'),
            'url' => Yii::t('slider', 'Url'),
            'imageFile' => Yii::t('partner', 'ImageFile'),
        ];
    }


    public function upload()
    {
        if ($this->validate()){
            $filePath = 'uploads/partner/' .$this->imageFile->baseName.'_'. Yii::$app->security->generateRandomString(6). '.' . $this->imageFile->extension;
            $fileSavePath = Yii::getAlias('@frontend'). '/web/' . $filePath;
            $this->imageFile->saveAs($fileSavePath);
            $this->img = $filePath;
            return true;
        }else{
            return false;
        }

    }

}
