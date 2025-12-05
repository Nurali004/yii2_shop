<?php

namespace frontend\controllers;


use common\models\Category;
use common\models\Product;
use common\models\ProductImage;
use frontend\models\ProductSearch;
use Yii;
use yii\web\Controller;

class ShopController extends \frontend\base\Controller
{
    public $layout = 'shop-layout';
    public function actionIndex(){



        $searchModel = new ProductSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
        $dataProvider->pagination->pageSize = 9;
        $minValue = $dataProvider->query->min('price');
        $maxValue = $dataProvider->query->max('price');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'minValue' => $minValue,
            'maxValue' => $maxValue,

        ]);
    }

    public function actionShop($id)
    {
        $products = Product::find()->where(['id' => $id])->all();
        $product_images = ProductImage::find()->where(['product_id' => $id])->all();

        return $this->render('shop', ['products' => $products, 'product_images' => $product_images]);


    }

    public function actionDetail($id)
    {
        $product = Product::findOne($id);
        $products = Product::find()->limit(4)->all();
        $category_all = Category::find()->where(['status' => 1])->all();

        $categories = Category::find()->where(['pid' => $product->category->pid])->all();

        $product_relates = [];

        foreach ($categories as $category) {
            $product_relates = Product::find()->where(['category_id' => $category->id])->all();
        }

        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 9;

        return $this->render('detail', ['product' => $product,
            'products' => $products,
            'category_all' => $category_all,
            'product_relates' => $product_relates,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);


    }

}