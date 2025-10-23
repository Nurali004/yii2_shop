<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int|null $pid
 * @property string|null $name
 * @property int|null $order
 *
 * @property Category[] $categories
 * @property Category $p
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{


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
            [['pid', 'name'], 'default', 'value' => null],
            [['order'], 'default', 'value' => 0],
            [['pid', 'order'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['pid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'name' => 'Name',
            'order' => 'Order',
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
        return ArrayHelper::map(Category::find()->all(), 'id', 'name');

    }

}
