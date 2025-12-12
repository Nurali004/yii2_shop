<?php

namespace api\controllers;

use common\models\Category;
use common\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\rest\Controller;
use yii\web\Response;

class CategoryController extends MyController
{


    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => 'yii\filters\ContentNegotiator',
            'only' => ['index', 'view'],
            'formats' => [
                'application/json' => Response::FORMAT_JSON,

            ]
        ];
        return $behaviors;

    }
    public $modelClass = \api\models\Category::class;


    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => \api\models\Category::find(),
        ]);
        return $dataProvider;

   }

   //categoryda status va order ko'rinmaydi



}