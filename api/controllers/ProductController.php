<?php

namespace api\controllers;

use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'common\models\Product';

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