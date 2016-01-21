<?php
/**
 * Created by PhpStorm.
 * User: Yangtao
 * Date: 16-1-21
 * Time: 下午12:47
 */


/*
 * Application Route Settings
 *
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Routing Prefixes
    |--------------------------------------------------------------------------
    |
    | Application Segmentation Route Prefixes
    |
    */

    'prefix' => [
        'admin' => env('ROUTE_PREFIX_ADMIN', 'admin'),
        'member' => env('ROUTE_PREFIX_MEMBER', 'member'),
    ]
];