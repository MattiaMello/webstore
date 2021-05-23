<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/order/csv' => [[['_route' => 'exportOrdersCSV', '_controller' => 'App\\Controller\\OrderController::csv'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'viewOrders', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/order/fetch' => [[['_route' => 'fetchOrders', '_controller' => 'App\\Controller\\OrderController::fetch'], null, null, null, false, false, null]],
        '/product/csv' => [[['_route' => 'exportProductsCSV', '_controller' => 'App\\Controller\\ProductsController::csv'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'viewProducts', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, false, false, null]],
        '/product/fetch' => [[['_route' => 'fetchProducts', '_controller' => 'App\\Controller\\ProductsController::fetch'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/order/(?'
                    .'|edit(?'
                        .'|/([^/]++)(*:68)'
                        .'|ed/([^/]++)(*:86)'
                    .')'
                    .'|delete/([^/]++)(*:109)'
                .')'
                .'|/product/(?'
                    .'|edit(?'
                        .'|/([^/]++)(*:146)'
                        .'|ed/([^/]++)(*:165)'
                    .')'
                    .'|delete/([^/]++)(*:189)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'editOrder', '_controller' => 'App\\Controller\\OrderController::edit'], ['orderID'], null, null, false, true, null]],
        86 => [[['_route' => 'orderEdited', '_controller' => 'App\\Controller\\OrderController::edited'], ['orderID'], null, null, false, true, null]],
        109 => [[['_route' => 'deleteOrder', '_controller' => 'App\\Controller\\OrderController::delete'], ['orderID'], null, null, false, true, null]],
        146 => [[['_route' => 'editProduct', '_controller' => 'App\\Controller\\ProductsController::edit'], ['uid'], null, null, false, true, null]],
        165 => [[['_route' => 'productEdited', '_controller' => 'App\\Controller\\ProductsController::edited'], ['uid'], null, null, false, true, null]],
        189 => [
            [['_route' => 'deleteProduct', '_controller' => 'App\\Controller\\ProductsController::delete'], ['uid'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
