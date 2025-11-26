<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int|null $pid
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $order
 * @property int|null $img
 *
 * @property Category[] $categories
 * @property Category $p
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{

    public $imageFile;




    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid'], 'default', 'value' => null],
            [['order'], 'default', 'value' => 0],
            [['pid', 'order'], 'integer'],
            [['name_uz', 'img'], 'string', 'max' => 255],
            [['name_ru', 'img'], 'string', 'max' => 255],
            [['name_en', 'img'], 'string', 'max' => 255],
            [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['pid' => 'id']],
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
            'pid' => Yii::t('category', 'Pid'),
            'name_uz' => Yii::t('product', 'Name uz'),
            'name_ru' => Yii::t('product', 'Name ru'),
            'name_en' => Yii::t('product', 'Name en'),
            'img' => Yii::t('category', 'Img'),
            'order' => Yii::t('category', 'Order'),
            'imageFile' => Yii::t('partner', 'ImageFile'),
        ];
    }



    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::class, ['pid' => 'id']);
    }

    /**
     * Gets query for [[P]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(Category::class, ['id' => 'pid']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }

    public static function CategoryList()
    {
        return ArrayHelper::map(Category::find()->all(), 'id', 'name'.'_'.Yii::$app->language);

    }

    public function upload()
    {
        if ($this->validate()){
            $filePath = 'uploads/category/' .$this->imageFile->baseName.'_'. Yii::$app->security->generateRandomString(6). '.' . $this->imageFile->extension;
            $fileSavePath = Yii::getAlias('@frontend'). '/web/' . $filePath;
            $this->imageFile->saveAs($fileSavePath);
            $this->img = $filePath;
            return true;
        }else{
            return false;
        }

    }

}
