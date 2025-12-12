<?php

use yii\filters\ContentNegotiator;
use yii\web\Response;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',

    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => [
        'log',
        [
            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
                'application/xml' => Response::FORMAT_XML,
            ],

    ],

        ],

    'modules' => [
        'v1' => [
            'class' => 'api\modules\v1\Module',
            ],
        'v2' => [
            'class' => 'api\modules\v2\Module',
        ],
        ],
    'components' => [


        'assetManager' => [],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/api',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession' => false,
            'loginUrl' => null,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [

                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => [
                        'user',
                        'product',
                        'category',
                        'cart',
                        'customer',
                        'favorite',
                        'order',
                        'partner',
                        'product-image',
                        'v1/user',
                        'v1/product',
                        'v2/user',


                    ],
                 //   'pluralize' => true,

                ],

                'auth' => 'auth/login',

            ],
        ]

    ],
    'params' => $params,


];
