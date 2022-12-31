<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/departement' => [[['_route' => 'app_departement', '_controller' => 'App\\Controller\\DepartementController::index'], null, null, null, false, false, null]],
        '/liste_depart' => [[['_route' => 'liste_departement', '_controller' => 'App\\Controller\\DepartementController::listeDepartement'], null, null, null, false, false, null]],
        '/AjouterDepart' => [[['_route' => 'AjouterDepart', '_controller' => 'App\\Controller\\DepartementController::AjoutDepart'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\EmployeController::index'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'liste_employe', '_controller' => 'App\\Controller\\EmployeController::listeEmploye'], null, null, null, false, false, null]],
        '/AjouterEmp' => [[['_route' => 'AjouterEmp', '_controller' => 'App\\Controller\\EmployeController::AjoutEmp'], null, null, null, false, false, null]],
        '/image' => [[['_route' => 'app_image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/image/new' => [[['_route' => 'app_image_new', '_controller' => 'App\\Controller\\ImageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/number' => [[['_route' => 'app_inscription_number', '_controller' => 'App\\Controller\\InscriptionController::number'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\InscriptionController::number'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\SecurityController::users'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/departement/([^/]++)(*:28)'
                .'|/e(?'
                    .'|dit_(?'
                        .'|depart/([^/]++)(*:62)'
                        .'|employe/([^/]++)(*:85)'
                    .')'
                    .'|mploye/([^/]++)(*:108)'
                .')'
                .'|/s(?'
                    .'|upp(?'
                        .'|_depart/([^/]++)(*:144)'
                        .'|/([^/]++)(*:161)'
                    .')'
                    .'|how/([^/]++)(*:182)'
                .')'
                .'|/image/([^/]++)(?'
                    .'|(*:209)'
                    .'|/edit(*:222)'
                    .'|(*:230)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:270)'
                    .'|wdt/([^/]++)(*:290)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:336)'
                            .'|router(*:350)'
                            .'|exception(?'
                                .'|(*:370)'
                                .'|\\.css(*:383)'
                            .')'
                        .')'
                        .'|(*:393)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'departement_show', '_controller' => 'App\\Controller\\DepartementController::show'], ['id'], null, null, false, true, null]],
        62 => [[['_route' => 'departement_edit', '_controller' => 'App\\Controller\\DepartementController::edit_depart'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        85 => [[['_route' => 'employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        108 => [[['_route' => 'employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], null, null, false, true, null]],
        144 => [[['_route' => 'depart_delete', '_controller' => 'App\\Controller\\DepartementController::delete'], ['id'], null, null, false, true, null]],
        161 => [[['_route' => 'emp_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'show', '_controller' => 'App\\Controller\\SecurityController::show2'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => 'app_image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'app_image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'app_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        290 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        336 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        350 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        370 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        383 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        393 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
