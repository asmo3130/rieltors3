<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            //зададим куда будут сохраняться наши файлы конфигураций RBAC
            'itemFile' => '@vendor/yiisoft/yii2/rbac/items.php',
            'assignmentFile' => '@vendor/yiisoft/yii2/rbac/assignments.php',
            'ruleFile' => '@vendor/yiisoft/yii2/rbac/rules.php'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

];
