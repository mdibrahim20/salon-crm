<?php

return [
    'name' => 'Salon CRM',
    'manifest' => [
        'name' => env('APP_NAME', 'Salon CRM'),
        'short_name' => 'SalonCRM',
        'start_url' => '/',
        'display' => 'standalone',
        'theme_color' => '#ffffff',
        'background_color' => '#ffffff',
        'orientation' => 'portrait',
        'status_bar' => 'black',
        'icons' => [
            '72x72' => '/images/icons/icon-72x72.png',
            '96x96' => '/images/icons/icon-96x96.png',
            '128x128' => '/images/icons/icon-128x128.png',
            '144x144' => '/images/icons/icon-144x144.png',
            '152x152' => '/images/icons/icon-152x152.png',
            '192x192' => '/images/icons/icon-192x192.png',
            '384x384' => '/images/icons/icon-384x384.png',
            '512x512' => '/images/icons/icon-512x512.png',
        ],
        'custom' => [],
    ],
];


?>
