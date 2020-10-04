<?php
return [
    'projectName' => 'Мой магазин',
    'defaultController' => 'good',
    'components' => [
        'db' => [
            'class' => \App\services\DB::class,
            'config' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'db' => 'gbphp',
                'charset' => 'UTF8',
                'login' => 'root',
                'password' => '',
            ]
        ],
        'renderer' => [
            'class' => \App\services\TwigRenderServices::class,
        ],
        'goodRepository' => [
            'class' => \App\repositories\GoodRepository::class,
        ],
        'basketService' => [
            'class' => \App\services\BasketService::class,
        ]
    ],
];