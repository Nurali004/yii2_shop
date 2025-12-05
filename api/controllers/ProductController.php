<?php

namespace api\controllers;

use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'api\models\Product';

    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'index' => [
                'pagination' => [
                    'pageSize' => 2,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'id' => SORT_DESC,
                    ]
                ]
            ]
        ]);

    }



}