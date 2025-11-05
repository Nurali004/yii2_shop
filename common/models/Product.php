<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property float|null $price
 * @property int|null $category_id
 * @property int|null $status
 * @property int|null $order
 * @property int|null $img
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Cart[] $carts
 * @property Category $category
 * @property OrderItem[] $orderItems
 * @property ProductImage[] $productImages
 */
class Product extends \yii\db\ActiveRecord
{

    public $imageFile;

    public $imageFiles;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price', 'category_id', 'updated_at'], 'default', 'value' => null],
            [['order'], 'default', 'value' => 0],
            [['description', 'img' ], 'string'],
            [['price'], 'number'],
            [['category_id', 'status', 'order'], 'integer'],
            [['created_at', 'updated_at', 'img'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, webp'],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, webp', 'maxFiles' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'category_id' => 'Category ID',
            'status' => 'Status',
            'img' => 'Img',
            'order' => 'Order',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Carts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[ProductImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductImages()
    {
        return $this->hasMany(ProductImage::class, ['product_id' => 'id']);
    }

    public static function ProductList()
    {
        return ArrayHelper::map(Product::find()->all(), 'id', 'name');


    }

    public function upload()
    {


            $filePath = 'uploads/product/' .$this->imageFile->baseName.'_'. Yii::$app->security->generateRandomString(6). '.' . $this->imageFile->extension;
            $fileSavePath = Yii::getAlias('@frontend'). '/web/' . $filePath;
            $this->imageFile->saveAs($fileSavePath);
            $this->img = $filePath;
            return true;


    }

    public function uploads($id = null)
    {




            ProductImage::deleteAll(['product_id' => $id]);
           $ids = [];
            foreach ($this->imageFiles as $file) {

                $filePath = 'uploads/product-images/' .$file->baseName.'_'. Yii::$app->security->generateRandomString(6). '.' . $file->extension;
                $fileSavePath = Yii::getAlias('@frontend'). '/web/' . $filePath;

                $file->saveAs($fileSavePath);

                $productImage = new ProductImage();
                $productImage->image = $filePath;
                if (!is_null($id)){
                    $productImage->product_id = $id;
                }
                $productImage->save(false);
                $ids[] = $productImage->id;


            }
            return $ids;


        }



}
