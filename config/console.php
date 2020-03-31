<?php
$config = [
    'id' => 'school-console',
    'basePath' => dirname(__DIR__ ),
    'components' => [
            'db' => [
                'class' => 'yii\db\Connection',
                'dsn' => 'mysql:host=localhost;dbname=school',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
            ]
        ]
];
 
 return $config;

