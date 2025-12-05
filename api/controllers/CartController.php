<?php

namespace api\controllers;

use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class CartController extends ActiveController
{
    public $modelClass = 'api\models\Cart';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'carts',
    ];

    public function actions()
    {
       return ArrayHelper::merge(parent::actions(), [
           'index' => [
               'pagination' => [
                   'pageSize' => 6,
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