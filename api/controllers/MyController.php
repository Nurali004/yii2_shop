<?php

namespace api\controllers;


use api\models\UserAccessToken;
use common\models\User;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;
use yii\rest\Controller;

class MyController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();


//        $behaviors['authenticator'] = [
//            'class' => HttpBasicAuth::class,
//
//
////            'auth' => function ($username, $password) {
////            $user = User::find()->where(['username' => $username])->one();
////            if ($user && $user->validatePassword($password)) {
////                return $user;
////            }
////            return null;
////            }
//        ];



        $behaviors['authenticator'] = [
            'class' => CompositeAuth::class,
            'authMethods' => [
                HttpBasicAuth::class,
                HttpBearerAuth::class,
                QueryParamAuth::class,
            ],
        ];
        return $behaviors;
        
    }

}