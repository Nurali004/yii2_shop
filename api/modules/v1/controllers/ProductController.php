<?php

namespace api\modules\v1\controllers;



use api\controllers\MyController;
use api\models\Product;
use yii\data\ActiveDataProvider;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class ProductController extends MyController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'products',
    ];


    public $modelClass = 'api\modules\v1\models\Product';
    public function actionIndex()
    {
        return Product::find()->all();

    }

}