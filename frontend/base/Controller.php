<?php

namespace frontend\base;

use common\models\Cart;
use Yii;

class Controller extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            $cartItems  = Yii::$app->session->get(Cart::SESSION_KEY, []);
            $sum = 0;
            foreach ($cartItems as $cartItem) {
                $sum += $cartItem['count'];
            }

        }else{
            $sum = Cart::find()->where(['user_id' => Yii::$app->user->id])->sum('count');
        }
        $this->view->params['cartItemCount'] = $sum;
        return parent::beforeAction($action);
        
    }


}