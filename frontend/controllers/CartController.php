<?php

namespace frontend\controllers;

use common\models\Cart;
use common\models\Customer;
use common\models\Order;
use common\models\OrderItem;
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

    public function actionIndex()
    {


        if (Yii::$app->user->isGuest) {
            $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);

        } else {

            $cartItems = Cart::getCartProducts(Yii::$app->user->id);

        }


        return $this->render('index', [
            'cartItems' => $cartItems,
        ]);
    }

    public function actionCreate()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;


        $id = Yii::$app->request->post('id');
        $product = Product::findOne($id);

        if (!empty($product)) {
            if (Yii::$app->user->isGuest) {

                $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);
                $found = false;

                foreach ($cartItems as $i => $item) {
                    if ($item['id'] == $product->id) {

                        $cartItems[$i]['count'] = $item['count'] + 1;
                        $cartItems[$i]['total_price'] = $cartItems[$i]['count'] * $product->price;


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


            } else {

                $cartItem = Cart::findOne(['user_id' => Yii::$app->user->identity->id, 'product_id' => $id]);
                if (!empty($cartItem)) {
                    $cartItem->count++;
                } else {
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

        } else {

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

    public function actionCheckout()
    {
        $order = new Order();

        if (!Yii::$app->user->isGuest){
            $userId = Yii::$app->user->identity->id;
            $customer = Customer::findOne(['user_id' => $userId]);
            $order->user_id = $userId;
            $order->l_name = $customer->l_name;
            $order->f_name = $customer->f_name;
            $order->phone = $customer->phone;
            $order->address = $customer->address;


        }
        return $this->render('checkout', [
            'order' => $order
        ]);

    }

    public function actionCreateOrder()
    {
        $post = Yii::$app->request->post();

        $order = new Order();
        if (!Yii::$app->user->isGuest) {
            $userId = Yii::$app->user->identity->id;
            $order->user_id = $userId;
            $order->l_name = $post['Order']['l_name'];
            $order->f_name = $post['Order']['f_name'];
            $order->phone = $post['Order']['phone'];
            $order->address = $post['Order']['address'];
            $order->save();


            $cartItems = Cart::getCartProducts(Yii::$app->user->id);
            foreach ($cartItems as $item) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $item['id'];
                $orderItem->count = $item['count'];
                $orderItem->price = $item['total_price'];
                $orderItem->save();
            }


        }
        else{

            $order->l_name = $post['Order']['l_name'];
            $order->f_name = $post['Order']['f_name'];
            $order->phone = $post['Order']['phone'];
            $order->address = $post['Order']['address'];
            $order->save();

            $cartItems = Yii::$app->session->get(Cart::SESSION_KEY, []);
            foreach ($cartItems as $item) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $item['id'];
                $orderItem->count = $item['count'];
                $orderItem->price = $item['total_price'];
                $orderItem->save();
            }



        }

        return $this->redirect(['cart/success', 'id' => $order->id] );

    }

    public function actionSuccess($id){

        $order = Order::findOne($id);
        $orderItems = OrderItem::findAll(['order_id' => $id]);
        if (Yii::$app->user->isGuest) {
            Yii::$app->session->remove(Cart::SESSION_KEY);
        }else{
            $carts = Cart::findAll(['user_id' => Yii::$app->user->identity->id]);
            foreach ($carts as $cart) {

                $cart->delete();
            }
        }


        return $this->render('success', ['order' => $order, 'orderItems' => $orderItems]);
    }

}