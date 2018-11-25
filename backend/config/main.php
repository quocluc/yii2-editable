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
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1'],
            'generators' => [
                'kartikgii-crud' => ['class' => 'warrence\kartikgii\crud\Generator'],
            ],
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'datecontrol' => [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'd-m-Y',
                'time' => 'H:i:s A',
                'datetime' => 'd-m-Y H:i:s A',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'Y-m-d',
                'time' => 'H:i:s',
                'datetime' => 'Y-m-d H:i:s',
            ],


            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,

        ]
    ],
    'components' => [
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
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    /*'sourcePath' => '@bower/bootstrap/dist',
                    'css'        => [
                        YII_ENV == 'dev' ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
                    ],
                    'js'         => [
                        YII_ENV == 'dev' ? 'js/bootstrap.js' : 'js/bootstrap.min.js',
                    ],*/
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ]
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ],
        /*'response'     => [
            'class'         => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                if ($response->data !== null) {
                    $response->format = yii\web\Response::FORMAT_JSON;

                    if ($response->statusCode != 200) {

                        $response->data =
                            [
                                'success'     => $response->isSuccessful,
                                'status_code' => $response->statusCode,
                                'error_msg'   => !empty($response->data['message']) ? $response->data['message'] : $response->data
                            ];
                    } else {
                        $response->data =
                            [
                                'success'     => $response->isSuccessful,
                                'data'        => $response->data,
                                'status_code' => $response->statusCode
                            ];
                    }
                    if ($response->statusCode != 401) {
                        $response->setStatusCode(200);
                    }

                }
            },
        ],*/

    ],
    'params' => $params,
];
