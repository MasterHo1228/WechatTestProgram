<?php
/**
 * Created by PhpStorm.
 * User: JonyHo
 * Date: 2018-04-16
 * Time: 17:43
 */

return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],
    'guards' => [
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\User::class
        ]
    ]
];