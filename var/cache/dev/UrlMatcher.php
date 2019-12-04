<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/display' => [[['_route' => 'display', '_controller' => 'App\\Controller\\DisplayController::alltransaction'], null, null, null, false, false, null]],
        '/displayten' => [[['_route' => 'displayten', '_controller' => 'App\\Controller\\DisplayController::displayten'], null, null, null, false, false, null]],
        '/displayfive' => [[['_route' => 'displayfivetransaction', '_controller' => 'App\\Controller\\DisplayController::displayfivetransaction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'general', '_controller' => 'App\\Controller\\GeneralController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
