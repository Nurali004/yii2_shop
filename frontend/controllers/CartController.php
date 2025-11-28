<?php

namespace frontend\controllers;

use common\models\Cart;
use common\models\Product;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\ServerErrorHttpException;


class CartController extends \frontend\base\Controller
{

    public $layout = 'shop-layout';
    public $enableCsrfValidation = false;

    public function behaviors()
    {

        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['create'],
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ]
            ],
        ];
    }

    public function actionIndex(){
        $name = 'name_' . Yii::$app->language;

        if (Yii::$app->user->isGuest) {
            $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);

        }else{

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

        }


        return $this->render('index', [
            'cartItems' => $cartItems,
        ]);
    }

    public function actionCreate()
    {


        $id = Yii::$app->request->post('id');
        $product = Product::findOne($id);

        if (!empty($product)) {
            if (Yii::$app->user->isGuest) {
                
                $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);
                $found = false;

                foreach ($cartItems as $i => $item) {
                    if ($item['id'] == $product->id) {

                    $cartItems[$i]['count'] = $item['count'] + 1;
                    $cartItems[$i]['total_price'] = $item['count'] * $product->price;

                    $found = true;
                    }
                }

                    if (!$found) {
                        $cartItem = [
                            'id' => $product->id,
                            'name_uz' => $product->name_uz,
                            'name_ru' => $product->name_ru,
                            'name_en' => $product->name_en,
                            'price' => $product->price,
                            'img' => $product->img,
                            'count' => 1,
                            'total_price' => $product->price,

                        ];
                    $cartItems[] = $cartItem;
                    }


                Yii::$app->session->set(Cart::SESSION_KEY, $cartItems);


            }else{

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
    }

    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);
            foreach ($cartItems as $i => $item) {
                if ($item['id'] == $id) {
                    unset($cartItems[$i]);
                }

                Yii::$app->session->set(Cart::SESSION_KEY, $cartItems);
            }

        }else{

        $cartItem = Cart::findOne(['user_id' => Yii::$app->user->identity->id, 'product_id' => $id]);
        if (!empty($cartItem)) {
            $cartItem->delete();
        }
        }

        return $this->redirect('/cart/index');
  }

    public function actionChangeQuantity()
    {
        $id = Yii::$app->request->post('id');
        $quantity = Yii::$app->request->post('quantity');

        $product = Product::findOne($id);
        if (empty($product)) {
            throw new NotFoundHttpException('Product not found');
        }

        if (Yii::$app->user->isGuest) {
            $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);
            foreach ($cartItems as $i => $item) {
                if ($item['id'] == $id) {
                    $cartItems[$i]['count'] = (int)$quantity;
                    break;
                }
            }
            Yii::$app->session->set(Cart::SESSION_KEY, $cartItems);

        } else {
            $cartItem = Cart::findOne([
                'user_id' => Yii::$app->user->id,
                'product_id' => $id
            ]);
            if (!empty($cartItem)) {
                $cartItem->count = (int)$quantity;
                if (!$cartItem->save()) {
                    Yii::error($cartItem->errors);
                    throw new ServerErrorHttpException('Failed to update cart item.');
                }
            }
        }

        return $this->asJson([
            'totalQuantity' => Cart::getTotalQuantityForUser(Yii::$app->user->id ?? null)
        ]);
    }
}