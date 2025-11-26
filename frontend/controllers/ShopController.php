<?php

namespace frontend\controllers;

use backend\models\ProductSearch;
use common\models\Product;
use common\models\ProductImage;
use Yii;
use yii\web\Controller;

class ShopController extends Controller
{
    public $layout = 'front-layout';
    public function actionImage(){
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
        $dataProvider->pagination->pageSize = 9;

        return $this->render('image', [
            'searchModel' => $searchModel,

            'dataProvider' => $dataProvider,

        ]);
    }

    public function actionShop($id)
    {
        $products = Product::find()->where(['id' => $id])->all();
        $product_images = ProductImage::find()->where(['product_id' => $id])->all();

        return $this->render('shop', ['products' => $products, 'product_images' => $product_images]);


    }

}