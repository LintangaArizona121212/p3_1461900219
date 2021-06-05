<?php

return [

    /*
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'lintangroot',
    ],

    /*
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'lintangroot',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'lintangroot',
        ],
    ],

    /*
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    */

    'passwords' => [
        'lintangroot' => [
            'provider' => 'lintangroot',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
