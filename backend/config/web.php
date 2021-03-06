<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
	
	'modules' => [
			'api' => [
				'class' => 'app\modules\api\Module',
			],
		],		
	
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'STVGKS_Ct5zwkBmcM0Uuqv_x7H0w__ia',
			
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			]		
		
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
        'db' => $db,
		

		
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
			'rules' => [
				['class'=>'yii\rest\UrlRule', 
				 'controller'=>['api/contact','api/group'],
				 'tokens' => [
						'{id}' => '<id:\\w+>',
						'{type}'=>'<type:\\w+>'
						],			 
				],
				
				['class'=>'yii\rest\UrlRule', 
				 'controller'=>['api/group-member'],
				 'tokens' => [
						'{id}' => '<id:\\w+>',
						'{type}'=>'<type:\\w+>'
					],			 
	             'extraPatterns' => [
                        'GET bygroup/{id}' => 'bygroup',
						'GET notingroup/{id}' => 'notingroup',
						
                    ], 
				],
				
				//'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				//'<module:\w+>/<controller:\w+><action:\w+>' => '<module>/<controller>/<action>'
			]
        ], 
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
