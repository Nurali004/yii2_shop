<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',

    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'on beforeRequest' => function ($event) {
        // Retrieve the stored language preference
        $language = Yii::$app->session->get('lang', 'en'); // Default to English if not found

        // Set the application language
        Yii::$app->language = $language;
    },
    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',


            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/dashmix.php',
            'menus' => [
                'assignment' => [
                    'label' => 'Grant Access',

                ],
                'menu' => [
                    'label' => 'Menus',
                ]
            ]

        ],
        'dynagrid' => [
    'class' => '\kartik\dynagrid\Module',
],
    ],
    'components' => [
        'i18n' => [
            'translations' => [

                '*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                   // 'basePath' => '@common/messages',
                    //'sourceLanguage' => 'en-US',

                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/admin',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
            'showScriptName' => false,
            'rules' => [
               'settings' => 'setting/update',
//                'settings/add' => 'setting/create',
//                'settings/<id:\d+>/view' => 'post/view',
//                'settings/<id:\d+>/update' => 'setting/update',

            ],
        ],

    ],
    'params' => $params,

    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
//            'admin/*',
//            'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],

];
