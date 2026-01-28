<?php

return [

    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', '127.0.0.1:5500,localhost:5500')),

    'expiration' => null,

    'middleware' => [
        'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
        'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
    ],

];
