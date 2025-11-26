<?php

namespace frontend\controllers;

use common\models\Cart;
use common\models\Product;
use Yii;
use yii\web\Controller;



class CartController extends \frontend\base\Controller
{
//    public $enableCsrfValidation = false;
    public $layout = 'shop-layout';

    public function actionIndex(){
        $name = 'name_' . Yii::$app->language;

        $cartItems = Cart::findBySql("SELECT
    p.id,
    p.name_uz,
    p.img,
    p.price,

    c.count,
    c.count * p.price AS total_price

FROM cart c
LEFT JOIN product p ON c.product_id = p.id
WHERE c.user_id = :user_id; ",
            [':user_id' => Yii::$app->user->identity->id])->asArray()->all();

        return $this->render('index', [
            'cartItems' => $cartItems,
        ]);
    }

    public function actionCreate()
    {
        $id = Yii::$app->request->post('id');
        $product = Product::findOne($id);
        if (!empty($product)) {
            $cartItem = Cart::findOne(['user_id' => Yii::$app->user->identity->id, 'product_id' => $id]);
            if (!empty($cartItem)) {
                $cartItem->count++;
            }else{
                $cartItem = new Cart();
                $cartItem->user_id = Yii::$app->user->identity->id;
                $cartItem->product_id = $id;
                $cartItem->count = 1;
            }

            $cartItem->save();


        }


    }

    public function actionDelete($id)
    {
        $cartItem = Cart::findOne(['user_id' => Yii::$app->user->identity->id, 'product_id' => $id]);
        if (!empty($cartItem)) {
            $cartItem->delete();
        }
        return $this->redirect(['cart/index']);
  }
}