<?php

return [
    'prefix' => [
        'admin' => 'admin/team',
        'web' => 'team',
        'api' => 'teamapi'
    ],
    'namespace' => [
        'admin' => 'Team\Http\Controllers\Admin',
        'web' => 'Team\Http\Controllers\Web',
        'api' => 'Team\Http\Controllers\Api'
    ],
    'as' => [
        'admin' => 'admin.team.',
        'web' => 'team.'
    ]
];



