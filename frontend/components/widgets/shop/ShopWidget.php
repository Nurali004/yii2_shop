<?php

namespace frontend\components\widgets\shop;
class ShopWidget extends \yii\base\Widget
{
    public function run()
    {
        $products = \common\models\Product::find()->orderBy(['id'=> SORT_DESC])->limit(4)->all();

        return $this->render('index', ['products' => $products]);


    }



}