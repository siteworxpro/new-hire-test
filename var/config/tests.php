<?php

/**
 * Config
 */
return [

    /*
    |--------------------------------------------------------------------------
    | App Settings
    |--------------------------------------------------------------------------
    */
    'settings' => [
        'route_cache' => '/var/cache/routes.php',
        /*
        |--------------------------------------------------------------------------
        | Database Config
        |--------------------------------------------------------------------------
        */
        'db' => [
            'driver' => 'sqlite',
            'username' => '',
            'password' => '',
            'host' => './tests/_data/database.sqlite3',
            'database' => dirname(__FILE__, 3) . '/tests/_data/database.sqlite3',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
    ],

    'skip_encryption' => true,
    'dev_mode' => true,
    'app_env' => 'test',
    'force_ssl' => false,
    'run_dir' => dirname(__FILE__, 3),
    'app_url' => 'tests.local',
    'encryption_key' => '__encryption_key__',

    /*
    |--------------------------------------------------------------------------
    | Log
    |--------------------------------------------------------------------------
    */
    'logs' => [
        'log_folder' => '/var/logs',
        'log_level' => \Psr\Log\LogLevel::DEBUG
    ],


    /*
   |--------------------------------------------------------------------------
   | AWS
   |--------------------------------------------------------------------------
   */
    'aws' => [
        /*
        |--------------------------------------------------------------------------
        | S3
        |--------------------------------------------------------------------------
        */
        's3' => [
            'bucket' => 'retail-sandbox-web',
            'config' => [
                'credentials' => [
                    'key' => '__KEY__',
                    'secret' => '__SECRET__'
                ],
                'region' => 'us-east-1',
                'version' => 'latest'
            ]
        ],

        /*
        |--------------------------------------------------------------------------
        | sqs
        |--------------------------------------------------------------------------
        */
        'sqs' => [
            'config' => [
                'credentials' => [
                    'key' => '__KEY__',
                    'secret' => '__SECRET__'
                ],
                'region' => 'us-east-1',
                'version' => 'latest'
            ],
            'queue' => 'http://localhost:4100/queue/tests'
        ]
    ]
];
