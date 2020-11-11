<?php

return [



    // Mail Driver
    'driver' => env('MAIL_DRIVER', 'smtp'),

    // SMTP Host Address
    'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),

    // SMTP Host Port
    'port' => env('MAIL_PORT', 2525),

    // Global "From" Address
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS','hello@example.com'),
        'name' => env('MAIL_FROM_NAME','name')
    ],

    // E-Mail Encryption Protocol
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    // SMTP Server Username
    'username' => env('MAIL_USERNAME', 'e293029c5e23f4'),

    // SMTP Server Password
    'password' => env('MAIL_PASSWORD','d7e5420a92052d'),

    // Sendmail System Path
    'sendmail' => '/usr/sbin/sendmail -bs',

    // Mail "Pretend"
    'pretend' => env('MAIL_PRETEND', false),
];