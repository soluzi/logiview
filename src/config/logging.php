<?php

return [
    'channels' => [
        'logiview' => [
            'driver' => 'single',
            'path' => storage_path('logs/logiview.log'),
            'level' => 'debug',
        ],
        'contract_activity' => [
            'driver' => 'single',
            'path' => storage_path('logs/contract_activity.log'),
            'level' => 'info',
        ],
    ],
];
