<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_back_articles' => [[], ['_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::list'], [], [['text', '/back-office/articles']], [], [], []],
    'app_back_articles_delete' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/articles/delete']], [], [], []],
    'app_back_articles_add' => [[], ['_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::create'], [], [['text', '/back-office/articles/ajouter']], [], [], []],
    'app_back_articles_edit' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\ArticleBackOfficeController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/articles']], [], [], []],
    'app_back_office' => [[], ['_controller' => 'App\\Controller\\BackOffice\\BackOfficeController::index'], [], [['text', '/back-office']], [], [], []],
    'app_back_gif' => [[], ['_controller' => 'App\\Controller\\BackOffice\\GifBackOfficeController::list'], [], [['text', '/back-office/gif-musique']], [], [], []],
    'app_back_gif_add' => [[], ['_controller' => 'App\\Controller\\BackOffice\\GifBackOfficeController::create'], [], [['text', '/back-office/gif-musique/ajouter']], [], [], []],
    'app_back_gif_delete' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\GifBackOfficeController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/gif']], [], [], []],
    'app_back_quiz' => [[], ['_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::list'], [], [['text', '/back-office/quiz']], [], [], []],
    'app_back_quiz_show' => [['title', 'id'], ['_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'title', true], ['text', '/back-office/quiz/question']], [], [], []],
    'app_back_quiz_add' => [[], ['_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::create'], [], [['text', '/back-office/quiz/ajouter']], [], [], []],
    'app_back_quiz_edit' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/quiz/modifier']], [], [], []],
    'app_back_quiz_delete' => [['quizId', 'questionId', 'quizTitle'], ['_controller' => 'App\\Controller\\BackOffice\\QuizBackOfficeController::delete'], [], [['variable', '/', '[^/]++', 'quizTitle', true], ['variable', '/', '[^/]++', 'questionId', true], ['variable', '/', '[^/]++', 'quizId', true], ['text', '/back-office/quiz/delete']], [], [], []],
    'app_back_reward' => [[], ['_controller' => 'App\\Controller\\BackOffice\\RewardBackOfficeController::list'], [], [['text', '/back-office/recompenses']], [], [], []],
    'app_back_reward_add' => [[], ['_controller' => 'App\\Controller\\BackOffice\\RewardBackOfficeController::create'], [], [['text', '/back-office/recompenses/ajouter']], [], [], []],
    'app_back_reward_delete' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\RewardBackOfficeController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/recompenses']], [], [], []],
    'app_back_users' => [[], ['_controller' => 'App\\Controller\\BackOffice\\UserBackOfficeController::list'], [], [['text', '/back-office/utilisateurs']], [], [], []],
    'app_back_users_edit' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\UserBackOfficeController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/utilisateur/modifier']], [], [], []],
    'app_back_users_delete' => [['id'], ['_controller' => 'App\\Controller\\BackOffice\\UserBackOfficeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back-office/utilisateur/delete']], [], [], []],
    'app_categorie' => [['categorySlug'], ['_controller' => 'App\\Controller\\FrontOffice\\ArticleController::getArticlesByCategory'], [], [['variable', '/', '[^/]++', 'categorySlug', true], ['text', '/articles']], [], [], []],
    'app_article_show' => [['categorySlug', 'articleSlug'], ['_controller' => 'App\\Controller\\FrontOffice\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'articleSlug', true], ['variable', '/', '[^/]++', 'categorySlug', true], ['text', '/articles']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\FrontOffice\\MainController::home'], [], [['text', '/']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\FrontOffice\\MainController::contact'], [], [['text', '/qui-sommes-nous']], [], [], []],
    'app_mention_legal' => [[], ['_controller' => 'App\\Controller\\FrontOffice\\MainController::mention'], [], [['text', '/mention-legal']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\FrontOffice\\MainController::search'], [], [['text', '/search']], [], [], []],
    'app_quiz_list' => [[], ['_controller' => 'App\\Controller\\FrontOffice\\QuizController::list'], [], [['text', '/les-quiz']], [], [], []],
    'app_quiz_show' => [['title', 'id'], ['_controller' => 'App\\Controller\\FrontOffice\\QuizController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'title', true], ['text', '/les-quiz']], [], [], []],
    'app_quiz_submit' => [['title', 'id'], ['_controller' => 'App\\Controller\\FrontOffice\\QuizController::quizSubmit'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'title', true], ['text', '/les-quiz']], [], [], []],
    'app_quiz_result' => [['id'], ['_controller' => 'App\\Controller\\FrontOffice\\QuizController::quizResult'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/les-quiz-resultat']], [], [], []],
    'app_profil' => [[], ['_controller' => 'App\\Controller\\FrontOffice\\UserController::index'], [], [['text', '/mon-profil']], [], [], []],
    'app_profil_show' => [['id'], ['_controller' => 'App\\Controller\\FrontOffice\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mon-profil/recompenses']], [], [], []],
    'app_security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/inscription']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
