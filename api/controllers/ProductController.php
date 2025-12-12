<?php

namespace api\controllers;

use common\models\User;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use yii\rest\Controller;

class ProductController extends Controller
{
    public $modelClass = 'api\models\Product';



    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // CORS filter
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [

                'Origin' => ['https://1.nugaev.uz'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'OPTIONS'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Allow-Headers' => ['Content-Type', 'Authorization'],
            ],
        ];


        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
//            'auth' => function ($token) {
//
//                return User::find()->where(['username' => $token])->one();
//            }
        ];

        return $behaviors;
    }

    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'index' => [
                'sort' => [
                    'defaultOrder' => [
                        'id' => SORT_DESC,
                    ]
                ]
            ]
        ]);
    }




}