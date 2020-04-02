<?php

 $config = [
    'id' => 'school',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => [
        'debug'
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'db' =>require __DIR__ . '/db.php',
        'request' => [
            'cookieValidationKey' => 'z;lbkdz;blkfdv;llkfdkg;zkgf;lkgvjzdf;lvkjzfdd;glkjf'
        ],
        'user'=> [
            'identityClass' => 'app\models\UserIdentity'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ]
    ],
    'modules' => [
        'debug' => [
           'class' => 'yii\debug\Module',
           'allowedIPs'=>['*']
        ]
        
    ]
];
 
 return $config;