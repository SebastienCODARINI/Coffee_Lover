<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/back-office/articles' => [[['_route' => 'app_back_articles', '_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::list'], null, null, null, false, false, null]],
        '/back-office/articles/ajouter' => [[['_route' => 'app_back_articles_add', '_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::create'], null, null, null, false, false, null]],
        '/back-office' => [[['_route' => 'app_back_office', '_controller' => 'App\\Controller\\BackOffice\\BackOfficeController::index'], null, null, null, false, false, null]],
        '/back-office/gif-musique' => [[['_route' => 'app_back_gif', '_controller' => 'App\\Controller\\BackOffice\\GifBackOfficeController::list'], null, null, null, false, false, null]],
        '/back-office/gif-musique/ajouter' => [[['_route' => 'app_back_gif_add', '_controller' => 'App\\Controller\\BackOffice\\GifBackOfficeController::create'], null, null, null, false, false, null]],
        '/back-office/quiz' => [[['_route' => 'app_back_quiz', '_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::list'], null, null, null, false, false, null]],
        '/back-office/quiz/ajouter' => [[['_route' => 'app_back_quiz_add', '_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::create'], null, null, null, false, false, null]],
        '/back-office/recompenses' => [[['_route' => 'app_back_reward', '_controller' => 'App\\Controller\\BackOffice\\RewardBackOfficeController::list'], null, null, null, false, false, null]],
        '/back-office/recompenses/ajouter' => [[['_route' => 'app_back_reward_add', '_controller' => 'App\\Controller\\BackOffice\\RewardBackOfficeController::create'], null, null, null, false, false, null]],
        '/back-office/utilisateurs' => [[['_route' => 'app_back_users', '_controller' => 'App\\Controller\\BackOffice\\UserBackOfficeController::list'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\FrontOffice\\MainController::home'], null, null, null, false, false, null]],
        '/qui-sommes-nous' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\FrontOffice\\MainController::contact'], null, null, null, false, false, null]],
        '/mention-legal' => [[['_route' => 'app_mention_legal', '_controller' => 'App\\Controller\\FrontOffice\\MainController::mention'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\FrontOffice\\MainController::search'], null, ['GET' => 0], null, false, false, null]],
        '/les-quiz' => [[['_route' => 'app_quiz_list', '_controller' => 'App\\Controller\\FrontOffice\\QuizController::list'], null, null, null, false, false, null]],
        '/mon-profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\FrontOffice\\UserController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/back\\-office/(?'
                    .'|articles/(?'
                        .'|delete/([^/]++)(*:51)'
                        .'|([^/]++)/modifier(*:75)'
                    .')'
                    .'|gif/([^/]++)/delete(*:102)'
                    .'|quiz/(?'
                        .'|question/([^/]++)/([^/]++)(*:144)'
                        .'|modifier/([^/]++)(*:169)'
                        .'|delete/([^/]++)/([^/]++)/([^/]++)(*:210)'
                    .')'
                    .'|recompenses/([^/]++)/delete(*:246)'
                    .'|utilisateur/(?'
                        .'|modifier/([^/]++)(*:286)'
                        .'|delete/([^/]++)(*:309)'
                    .')'
                .')'
                .'|/articles/([^/]++)(?'
                    .'|(*:340)'
                    .'|/([^/]++)(*:357)'
                .')'
                .'|/les\\-quiz(?'
                    .'|/([^/]++)/([^/]++)(?'
                        .'|(*:400)'
                    .')'
                    .'|\\-resultat/([^/]++)(*:428)'
                .')'
                .'|/mon\\-profil/recompenses/([^/]++)(*:470)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:509)'
                    .'|wdt/([^/]++)(*:529)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:575)'
                            .'|router(*:589)'
                            .'|exception(?'
                                .'|(*:609)'
                                .'|\\.css(*:622)'
                            .')'
                        .')'
                        .'|(*:632)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        51 => [[['_route' => 'app_back_articles_delete', '_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::delete'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'app_back_articles_edit', '_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        102 => [[['_route' => 'app_back_gif_delete', '_controller' => 'App\\Controller\\BackOffice\\GifBackOfficeController::delete'], ['id'], null, null, false, false, null]],
        144 => [[['_route' => 'app_back_quiz_show', '_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::show'], ['title', 'id'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'app_back_quiz_edit', '_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::edit'], ['id'], null, null, false, true, null]],
        210 => [[['_route' => 'app_back_quiz_delete', '_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::delete'], ['quizId', 'questionId', 'quizTitle'], null, null, false, true, null]],
        246 => [[['_route' => 'app_back_reward_delete', '_controller' => 'App\\Controller\\BackOffice\\RewardBackOfficeController::delete'], ['id'], null, null, false, false, null]],
        286 => [[['_route' => 'app_back_users_edit', '_controller' => 'App\\Controller\\BackOffice\\UserBackOfficeController::edit'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'app_back_users_delete', '_controller' => 'App\\Controller\\BackOffice\\UserBackOfficeController::delete'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\FrontOffice\\ArticleController::getArticlesByCategory'], ['categorySlug'], null, null, false, true, null]],
        357 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\FrontOffice\\ArticleController::show'], ['categorySlug', 'articleSlug'], null, null, false, true, null]],
        400 => [
            [['_route' => 'app_quiz_show', '_controller' => 'App\\Controller\\FrontOffice\\QuizController::show'], ['title', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_quiz_submit', '_controller' => 'App\\Controller\\FrontOffice\\QuizController::quizSubmit'], ['title', 'id'], ['POST' => 0], null, false, true, null],
        ],
        428 => [[['_route' => 'app_quiz_result', '_controller' => 'App\\Controller\\FrontOffice\\QuizController::quizResult'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'app_profil_show', '_controller' => 'App\\Controller\\FrontOffice\\UserController::show'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        529 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        575 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        589 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        609 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        622 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        632 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
