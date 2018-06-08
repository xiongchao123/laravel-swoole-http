<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server configurations.
    |--------------------------------------------------------------------------
    |
    | @see https://www.swoole.co.uk/docs/modules/swoole-server/configuration
    |
    */

    'server' => [
        'host' => env('SWOOLE_SERVER_HOST', '127.0.0.1'),

        'port' => env('SWOOLE_SERVER_PORT', '1215'),

        'options' => [
            'pid_file' => env('SWOOLE_SERVER_OPTIONS_PID_FILE', base_path('storage/logs/swoole.pid')),

            'log_file' => env('SWOOLE_SERVER_OPTIONS_LOG_FILE', base_path('storage/logs/swoole.log')),

            'daemonize' => env('SWOOLE_SERVER_OPTIONS_DAEMONIZE', 1),
        ],

        /*
        |----------------------------------------------------------------------
        | These providers will be re-registered after every request.
        |----------------------------------------------------------------------
        |
        */

        'reset_providers' => [
            // Illuminate\Auth\AuthServiceProvider::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Websocket configurations.
    |--------------------------------------------------------------------------
    |
    | Websocket server is only supported in Laravel framework now.
    |
    */

    'websocket' => [
        'enable' => false,

        'message_parser' => HuangYi\Swoole\Websocket\Message\JsonParser::class,

        'redis' => env('SWOOLE_WEBSOCKET_REDIS', 'default'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Swoole tables.
    |--------------------------------------------------------------------------
    |
    | name    - Define table name.
    |
    | columns - Define table columns.
    |           Format: [column_name, column_type, column_length]
    |           Column types: int, integer, string, varchar, char, float.
    |
    */

    'tables' => [
        // [
        //     'name' => 'users',
        //     'columns' => [
        //         ['id', 'int', 8],
        //         ['nickname', 'string', 255],
        //         ['score', 'float'],
        //     ],
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | File watcher configurations.
    |--------------------------------------------------------------------------
    |
    | directories          - The directories should be watched.
    |
    | excluded_directories - The directories should not be watched.
    |
    | suffixes             - The file suffix to be watched should be in this array.
    |
    */

    'watcher' => [
        'directories' => [
            base_path(),
        ],

        'excluded_directories' => [
            base_path('storage/'),
        ],

        'suffixes' => [
            '.php', '.env',
        ],
    ],
];
