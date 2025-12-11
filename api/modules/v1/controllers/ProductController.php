<?php

namespace api\modules\v1\controllers;



use api\models\Product;
use yii\data\ActiveDataProvider;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'products',
    ];
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => Cors::class,

            'cors' => [
                'Origin' => ["https://shop.nugaev.uz"],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
                'Access-Control-Request-Headers' => ['*'],
            ]
        ];

        return $behaviors;

    }

    public $modelClass = 'api\modules\v1\models\Product';
    public function actionIndex()
    {
        return Product::find()->all();

    }

}