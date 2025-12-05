<?php

namespace api\controllers;

use common\models\Category;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\rest\Controller;

class CategoryController extends ActiveController
{
    public $modelClass = \api\models\Category::class;

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);
        return $dataProvider;

   }

   //categoryda status va order ko'rinmaydi



}