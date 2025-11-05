<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_image".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $product_id
 *
 * @property Product $product
 */
class ProductImage extends \yii\db\ActiveRecord
{
    public $imageFile;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'product_id'], 'default', 'value' => null],
            [['image'], 'string'],
            [['product_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => ['png', 'jpg'], 'checkExtensionByMimeType' => false],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'product_id' => 'Product ID',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }

    public function upload()
    {
        if ($this->validate()) {
            $filePath = 'uploads/product-image/' . $this->imageFile->baseName . '_' . Yii::$app->security->generateRandomString(6) . '.' . $this->imageFile->extension;
            $fileSavePath = Yii::getAlias('@frontend') . '/web/' . $filePath;
            $this->imageFile->saveAs($fileSavePath);
            $this->image = $filePath;
            return true;
        } else {
            return false;
        }
    }

}
