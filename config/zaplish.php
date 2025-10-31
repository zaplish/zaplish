<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Theme
    |--------------------------------------------------------------------------
    |
    | The theme that should be used when multisite mode is disabled.
    | This should match a folder inside /themes.
    |
    */
    'theme' => env('ZAPLISH_THEME', 'zaplish'),

    /*
    |--------------------------------------------------------------------------
    | Multisite Mode
    |--------------------------------------------------------------------------
    |
    | If true, Zaplish will resolve the active site and theme dynamically
    | based on the current domain (from the `sites` table).
    |
    */
    'multisite' => env('ZAPLISH_MULTISITE', false),
];
