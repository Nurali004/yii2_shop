<?php

namespace api\controllers;

use yii\rest\ActiveController;
use yii\rest\Controller;

class PartnerController extends ActiveController
{
    public $modelClass = 'api\models\Partner';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'partners',
    ];

    public function actionIndex()
    {
        $partners = $this->modelClass::find()->all();
        return $partners;

    }

    public function actionView($id)
    {

        $fields = $this->modelClass::findOne($id);
        return $fields;

    }

    //serializer faqat index bilan ishlarkan

}