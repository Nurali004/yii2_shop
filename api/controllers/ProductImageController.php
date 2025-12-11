<?php

namespace api\controllers;

use common\models\ProductImage;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\rest\Controller;

class ProductImageController extends Controller
{
    public $modelClass = ProductImage::class;

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'productImages',
    ];

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ProductImage::find(),
        ]);
        return $dataProvider;

    }


}