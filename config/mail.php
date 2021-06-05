<?php

return [

    /*
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    */

    'port' => env('MAIL_PORT', 587),

    /*
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | E-Mail Encryption Protocol
    |--------------------------------------------------------------------------
    |
    | Here you may specify the encryption protocol that should be used when
    | the application send e-mail messages. A sensible default using the
    | transport layer security protocol should provide great security.
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Username
    |--------------------------------------------------------------------------
    |
    | If your SMTP server requires a username for authentication, you should
    | set it here. This will get used to authenticate with your server on
    | connection. You may also set the "password" value below this one.
    |
    */

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    /*
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

    /*
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
