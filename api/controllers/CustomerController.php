<?php

namespace api\controllers;

use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class CustomerController extends ActiveController
{
    public $modelClass = 'api\models\Customer';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'customers',
    ];

    public function actions(){
        return ArrayHelper::merge(parent::actions(), [
            'index' => [
                'pagination' => [
                    'pageSize' => 4,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'user_id' => SORT_DESC,
                    ]
                ]
            ]
        ]);
    }


}