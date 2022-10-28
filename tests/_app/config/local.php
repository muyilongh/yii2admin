<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'Yjl\yii2admin' => '/repo',
        '@Yjl\yii2admin/web' => '/repo/web',
        '@Yjl\yii2admin/widgets' => '/repo/widgets',
        '@Yjl\yii2admin/helpers' => '/repo/helpers',
    ],
    'controllerNamespace' => 'tests\app\controllers',
    'components' => [
        'urlManager' => [
            'rules' => [
                'param/<id>' => 'sub/action/param'
            ]
        ]
    ]
];