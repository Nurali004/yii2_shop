<?php

namespace api\controllers;

use common\models\Order;
use yii\rest\ActiveController;
use yii\rest\Controller;

class OrderController extends MyController
{
    public $modelClass = 'api\models\Order';

    public function actionView($id)
    {
        $order = Order::findOne($id);
        return $order;

    }

    public function actionIndex()
    {
        return Order::find()->all();


    }

}