<?php
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'clientes',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
            'log' => true,
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],


        'users' => [
            'driver' => 'session', // Puedes usar 'session' o 'token' según tus necesidades.
            'provider' => 'users', // Cambia esto si tu proveedor se llama de otra manera.
        ],

        'clientes'=>[
            'drive' =>'session',
            'provider'=>'clientes',
            'log' => true,
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
        'clientes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Cliente::class, // Asegúrate de especificar el modelo correcto para tus clientes.
        ],


        // 'administrators' => [
        //     'driver' => 'eloquent',
        //     'model' => App\Models\SuperUser::class, // Asegúrate de especificar el modelo correcto para tus administradores.
        // ],
    ],


    'passwords' => [
        'administrators' => [
            'provider' => 'administrators',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'clientes' => [
            'provider' => 'clientes',
            'table' => 'password_resets_clientes',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
