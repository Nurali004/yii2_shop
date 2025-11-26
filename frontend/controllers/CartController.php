<?php

namespace frontend\controllers;

use common\models\Cart;
use common\models\Product;
use Yii;
use yii\web\Controller;

class CartController extends Controller
{
    public $layout = 'front-layout';

    public function actionIndex(){
        $user_id = Yii::$app->user->id;
        $products = Cart::find()->where(['user_id'=>$user_id])->all();
        foreach ($products as $product){

        $product_img = Product::find()->where(['id'=>$product->product_id])->all();
        }

        return $this->render('index', [
            'products' => $products,
            'product_img' => $product_img,
            
        ]);
    }

    public function actionCreate($product_id)
    {
        $user_id = Yii::$app->user->id;
        $cart = Cart::find()->where(['user_id'=>$user_id, 'product_id' => $product_id])->one();
        if($cart){
            $cart->count += 1;
            $cart->save();
        }else{
            $cart = new Cart();
            $cart->product_id = $product_id;
            $cart->count = 1;
            $cart->user_id = $user_id;
            if($cart->save()){
                Yii::$app->session->setFlash('success', 'Product added to cart successfully!');
                return $this->redirect(['index']);
            }
        }
        return false;
        
    }

    public function actionDelete($product_id)
    {
        $user_id = Yii::$app->user->id;
        $cart = Cart::find()->where(['user_id'=>$user_id, 'product_id' => $product_id])->one();
        if($cart){
            $cart->delete();
        }
        return $this->redirect(['index']);

    }

}