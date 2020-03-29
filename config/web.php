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
        'request' => [
            'cookieValidationKey' => 'z;lbkdz;blkfdv;llkfdkg;zkgf;lkgvjzdf;lvkjzfdd;glkjf'
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