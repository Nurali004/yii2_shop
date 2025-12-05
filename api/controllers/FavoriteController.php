<?php

namespace api\controllers;

use common\models\Favorite;
use yii\rest\ActiveController;

class FavoriteController extends ActiveController
{
    public $modelClass = 'api\models\Favorite';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'likes',
    ];

    public function actionIndex()
    {
        $favorites = Favorite::find()->all();
        return $favorites;


   }

}