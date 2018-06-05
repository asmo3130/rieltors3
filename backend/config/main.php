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
    'bootstrap' => ['debug'],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*', '127.0.0.1', '::1']
        ],
        'rbac' => [
            'class' => 'githubjeka\rbac\Modu le',
            'as access' => [ // if you need to set access
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'] // all auth users
                    ],
                ]
            ]
        ],
            'models' => [
                'class' => 'app\models\Action',
            ],
        'app' => [
            'class' => 'app\modules\actions\module',
        ],
        'redactor' => 'yii\redactor\RedactorModule',
        'articles' => [
            'class' => 'backend\modules\articles\Module',
        ],
        'action' => [
            'class' => 'backend\modules\actions\Module',
        ],
        'vacancies' => [
            'class' => 'backend\modules\vacancies\Module',
        ],
        'services' => [
            'class' => 'backend\modules\services\Module',
        ],
        'Pages' => [
            'class' => 'backend\modules\pages\Module',
        ],
        'contacts' => [
            'class' => 'backend\modules\contacts\Module',
        ],
        'about' => [
            'class' => 'backend\modules\about\Module',
        ],
        'news' => [
            'class' => 'backend\modules\news\Module',
        ],
        'estate' => [
            'class' => 'backend\modules\estate\Module',
        ],

    ],
    'components' => [

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
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
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
            'request' => [
            'baseUrl' => '/admin',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',                                
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];
