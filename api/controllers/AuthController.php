<?php

namespace api\controllers;

use api\models\LoginForm;
use common\models\User;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;
use yii\rest\Controller;

class AuthController extends Controller
{
   public $modelClass = 'common\models\User';



    public function actionLogin()
    {
        $user = new LoginForm();
        if ($user->load(\Yii::$app->request->post(), '') && $token = $user->login()) {
            \Yii::$app->response->format  = 'json';
            return [
                'token' => $token,
            ];

    }
        return null;

    }

}