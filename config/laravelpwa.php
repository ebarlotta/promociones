<?php

return [
    'name' => 'Promociones',
    'manifest' => [
        'name' => env('APP_NAME', 'Promociones'),
        'short_name' => 'Promociones',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/android/android-launchericon-72-72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/android/android-launchericon-96-96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/android/android-launchericon-128-128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/android/android-launchericon-144-144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/android/android-launchericon-152-152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/android/android-launchericon-192-192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/android/android-launchericon-384-384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/android/android-launchericon-512-512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/android/splash-640x1136.png',
            '750x1334' => '/images/icons/android/splash-750x1334.png',
            '828x1792' => '/images/icons/android/splash-828x1792.png',
            '1125x2436' => '/images/icons/android/splash-1125x2436.png',
            '1242x2208' => '/images/icons/android/splash-1242x2208.png',
            '1242x2688' => '/images/icons/android/splash-1242x2688.png',
            '1536x2048' => '/images/icons/android/splash-1536x2048.png',
            '1668x2224' => '/images/icons/android/splash-1668x2224.png',
            '1668x2388' => '/images/icons/android/splash-1668x2388.png',
            '2048x2732' => '/images/icons/android/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Promociones',
                'description' => 'Promociones',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/android/android-launchericon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
