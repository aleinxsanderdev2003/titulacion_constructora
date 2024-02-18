<?php
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'users' => [
            'driver' => 'session', // Puedes usar 'session' o 'token' según tus necesidades.
            'provider' => 'users', // Cambia esto si tu proveedor se llama de otra manera.
        ],


        'administrators' => [
            'driver' => 'session',
            'provider' => 'administrators', // Esto debe coincidir con el nombre de tu proveedor de administradores.
        ],
    ],


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'administrators' => [
            'driver' => 'eloquent',
            'model' => App\Models\SuperUser::class, // Asegúrate de especificar el modelo correcto para tus administradores.
        ],
    ],


    'passwords' => [
        'administrators' => [
            'provider' => 'administrators',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
