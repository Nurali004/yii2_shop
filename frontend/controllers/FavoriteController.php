<?php

namespace frontend\controllers;

use common\models\Favorite;
use common\models\Product;

use Yii;
use yii\web\Controller;

class FavoriteController extends Controller
{
    public $layout = 'shop-layout';
    public function actionAdd($product_id)
    {


        if (Yii::$app->user->isGuest) {
            $favorite = Favorite::findOne(['product_id' => $product_id]);
            if (!$favorite) {

            $favorite = new Favorite();
            $favorite->product_id = $product_id;
            $favorite->save();
            }
            return $this->redirect(['shop/index']);

        }


        $user = Yii::$app->user->identity;
        $favorite_p = Favorite::findOne(['user_id' => $user->id, 'product_id' => $product_id]);
        if (!$favorite_p) {

        $favorite = new Favorite();
        $favorite->user_id = $user->id;
        $favorite->product_id = $product_id;
        $favorite->save();
        }

        return $this->redirect(['shop/index']);
    }

    public function actionProductList()
    {
        if (Yii::$app->user->isGuest) {
            $favorites = Favorite::find()->select('product_id')->all();
            $products = [];
            foreach ($favorites as $favorite) {
                $product = Product::findOne($favorite->product_id);
                if ($product) {
                    $products[] = $product;
                }
            }


        }else{
            $user = Yii::$app->user->identity;
            $productIds = Favorite::find()
                ->select('product_id')
                ->where(['user_id' => $user->id])
                ->column();


            $products = Product::find()
                ->where(['id' => $productIds])
                ->all();
            return $this->render('product-list', [
                'products' => $products

            ]);
        }
        return $this->render('product-list', [
            'products' => $products,
            'favorites' => $favorites,
        ]);


    }

    public function actionRemove($product_id)
    {
        if (Yii::$app->user->isGuest) {
            $favorite = Favorite::find()->where(['product_id' => $product_id])->one();

            if ($favorite) {
                $favorite->delete();
            }
        } else {
            $favorite = Favorite::find()->where(['user_id' => Yii::$app->user->id, 'product_id' => $product_id])->one();
            if ($favorite) {
                $favorite->delete();
            }
        }

        return $this->redirect(['favorite/product-list']);
    }



}