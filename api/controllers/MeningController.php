<?php

namespace api\controllers;

use yii\filters\auth\HttpBasicAuth;
use yii\rest\Controller;

class MeningController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
        ];
        return $behaviors;
    }
}