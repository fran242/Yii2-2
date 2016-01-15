<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ui655cx3vvWbSRLwJzcJoIbWJJIlKiXK',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),

	'test' => [
           'class' => 'app\components\TestComponent',
	]


        
//        // Añadido por Fran
//        'pm' => [
//        'class' => '\yiidreamteam\perfectmoney\Api',
//        'accountId' => '3453882',
//        'accountPassword' => '15255Level2',
//        'walletNumber' => 'E10292576',
//        'merchantName' => 'Aunnar',
//        //'alternateSecret' => 'X00O8cT08pOEZTJdFmSiAwxyu',
//        'alternateSecret' => '72geGI0x4q8vRauqrzSaaIOKA',
//        'resultUrl' => ['/perfect-money/result'],
//        'successUrl' => ['/site/payment-success'],
//        'failureUrl' => ['/site/payment-failure'],
//        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
