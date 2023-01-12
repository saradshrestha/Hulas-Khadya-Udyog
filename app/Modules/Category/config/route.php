<?php

return [
    'prefix' => [
        'admin' => 'admin/category',
        'web' => 'category',
        'api' => 'categoryapi'
    ],
    'namespace' => [
        'admin' => 'Category\Http\Controllers\Admin',
        'web' => 'Category\Http\Controllers\Web',
        'api' => 'Category\Http\Controllers\Api'
    ],
    'as' => [
        'admin' => 'admin.category.',
        'web' => 'category.'
    ]
];



