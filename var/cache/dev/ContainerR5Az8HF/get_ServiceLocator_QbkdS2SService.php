<?php

namespace ContainerR5Az8HF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QbkdS2SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QbkdS2S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QbkdS2S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::create' => ['privates', '.service_locator.kZcZ2iG', 'get_ServiceLocator_KZcZ2iGService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::delete' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::edit' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::list' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\BackOffice\\GifBackOfficeController::create' => ['privates', '.service_locator.v5s.1kZ', 'get_ServiceLocator_V5s_1kZService', true],
            'App\\Controller\\BackOffice\\GifBackOfficeController::delete' => ['privates', '.service_locator.v5s.1kZ', 'get_ServiceLocator_V5s_1kZService', true],
            'App\\Controller\\BackOffice\\GifBackOfficeController::list' => ['privates', '.service_locator.v5s.1kZ', 'get_ServiceLocator_V5s_1kZService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController::create' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController::delete' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController::edit' => ['privates', '.service_locator.IeDNLSu', 'get_ServiceLocator_IeDNLSuService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController::list' => ['privates', '.service_locator.3FvOVUE', 'get_ServiceLocator_3FvOVUEService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController::show' => ['privates', '.service_locator.FBnCD2y', 'get_ServiceLocator_FBnCD2yService', true],
            'App\\Controller\\BackOffice\\RewardBackOfficeController::create' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\BackOffice\\RewardBackOfficeController::delete' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\BackOffice\\RewardBackOfficeController::list' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\BackOffice\\UserBackOfficeController::delete' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\BackOffice\\UserBackOfficeController::edit' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\BackOffice\\UserBackOfficeController::list' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\FrontOffice\\ArticleController::getArticlesByCategory' => ['privates', '.service_locator.8OiHen6', 'get_ServiceLocator_8OiHen6Service', true],
            'App\\Controller\\FrontOffice\\ArticleController::show' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\FrontOffice\\MainController::home' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\FrontOffice\\MainController::search' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\FrontOffice\\QuizController::list' => ['privates', '.service_locator.3FvOVUE', 'get_ServiceLocator_3FvOVUEService', true],
            'App\\Controller\\FrontOffice\\QuizController::quizResult' => ['privates', '.service_locator.3FvOVUE', 'get_ServiceLocator_3FvOVUEService', true],
            'App\\Controller\\FrontOffice\\QuizController::quizSubmit' => ['privates', '.service_locator.uFBJN8s', 'get_ServiceLocator_UFBJN8sService', true],
            'App\\Controller\\FrontOffice\\QuizController::show' => ['privates', '.service_locator.0hgjUY4', 'get_ServiceLocator_0hgjUY4Service', true],
            'App\\Controller\\FrontOffice\\UserController::show' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.KB61Hgq', 'get_ServiceLocator_KB61HgqService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:create' => ['privates', '.service_locator.kZcZ2iG', 'get_ServiceLocator_KZcZ2iGService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:delete' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:edit' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:list' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\BackOffice\\GifBackOfficeController:create' => ['privates', '.service_locator.v5s.1kZ', 'get_ServiceLocator_V5s_1kZService', true],
            'App\\Controller\\BackOffice\\GifBackOfficeController:delete' => ['privates', '.service_locator.v5s.1kZ', 'get_ServiceLocator_V5s_1kZService', true],
            'App\\Controller\\BackOffice\\GifBackOfficeController:list' => ['privates', '.service_locator.v5s.1kZ', 'get_ServiceLocator_V5s_1kZService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController:create' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController:delete' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController:edit' => ['privates', '.service_locator.IeDNLSu', 'get_ServiceLocator_IeDNLSuService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController:list' => ['privates', '.service_locator.3FvOVUE', 'get_ServiceLocator_3FvOVUEService', true],
            'App\\Controller\\BackOffice\\QuizBackOfficeController:show' => ['privates', '.service_locator.FBnCD2y', 'get_ServiceLocator_FBnCD2yService', true],
            'App\\Controller\\BackOffice\\RewardBackOfficeController:create' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\BackOffice\\RewardBackOfficeController:delete' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\BackOffice\\RewardBackOfficeController:list' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\BackOffice\\UserBackOfficeController:delete' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\BackOffice\\UserBackOfficeController:edit' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\BackOffice\\UserBackOfficeController:list' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\FrontOffice\\ArticleController:getArticlesByCategory' => ['privates', '.service_locator.8OiHen6', 'get_ServiceLocator_8OiHen6Service', true],
            'App\\Controller\\FrontOffice\\ArticleController:show' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\FrontOffice\\MainController:home' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\FrontOffice\\MainController:search' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\FrontOffice\\QuizController:list' => ['privates', '.service_locator.3FvOVUE', 'get_ServiceLocator_3FvOVUEService', true],
            'App\\Controller\\FrontOffice\\QuizController:quizResult' => ['privates', '.service_locator.3FvOVUE', 'get_ServiceLocator_3FvOVUEService', true],
            'App\\Controller\\FrontOffice\\QuizController:quizSubmit' => ['privates', '.service_locator.uFBJN8s', 'get_ServiceLocator_UFBJN8sService', true],
            'App\\Controller\\FrontOffice\\QuizController:show' => ['privates', '.service_locator.0hgjUY4', 'get_ServiceLocator_0hgjUY4Service', true],
            'App\\Controller\\FrontOffice\\UserController:show' => ['privates', '.service_locator.9JvgLyL', 'get_ServiceLocator_9JvgLyLService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.KB61Hgq', 'get_ServiceLocator_KB61HgqService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::create' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::delete' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::edit' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController::list' => '?',
            'App\\Controller\\BackOffice\\GifBackOfficeController::create' => '?',
            'App\\Controller\\BackOffice\\GifBackOfficeController::delete' => '?',
            'App\\Controller\\BackOffice\\GifBackOfficeController::list' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController::create' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController::delete' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController::edit' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController::list' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController::show' => '?',
            'App\\Controller\\BackOffice\\RewardBackOfficeController::create' => '?',
            'App\\Controller\\BackOffice\\RewardBackOfficeController::delete' => '?',
            'App\\Controller\\BackOffice\\RewardBackOfficeController::list' => '?',
            'App\\Controller\\BackOffice\\UserBackOfficeController::delete' => '?',
            'App\\Controller\\BackOffice\\UserBackOfficeController::edit' => '?',
            'App\\Controller\\BackOffice\\UserBackOfficeController::list' => '?',
            'App\\Controller\\FrontOffice\\ArticleController::getArticlesByCategory' => '?',
            'App\\Controller\\FrontOffice\\ArticleController::show' => '?',
            'App\\Controller\\FrontOffice\\MainController::home' => '?',
            'App\\Controller\\FrontOffice\\MainController::search' => '?',
            'App\\Controller\\FrontOffice\\QuizController::list' => '?',
            'App\\Controller\\FrontOffice\\QuizController::quizResult' => '?',
            'App\\Controller\\FrontOffice\\QuizController::quizSubmit' => '?',
            'App\\Controller\\FrontOffice\\QuizController::show' => '?',
            'App\\Controller\\FrontOffice\\UserController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:create' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:delete' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:edit' => '?',
            'App\\Controller\\BackOffice\\ArticleBackOfficeController:list' => '?',
            'App\\Controller\\BackOffice\\GifBackOfficeController:create' => '?',
            'App\\Controller\\BackOffice\\GifBackOfficeController:delete' => '?',
            'App\\Controller\\BackOffice\\GifBackOfficeController:list' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController:create' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController:delete' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController:edit' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController:list' => '?',
            'App\\Controller\\BackOffice\\QuizBackOfficeController:show' => '?',
            'App\\Controller\\BackOffice\\RewardBackOfficeController:create' => '?',
            'App\\Controller\\BackOffice\\RewardBackOfficeController:delete' => '?',
            'App\\Controller\\BackOffice\\RewardBackOfficeController:list' => '?',
            'App\\Controller\\BackOffice\\UserBackOfficeController:delete' => '?',
            'App\\Controller\\BackOffice\\UserBackOfficeController:edit' => '?',
            'App\\Controller\\BackOffice\\UserBackOfficeController:list' => '?',
            'App\\Controller\\FrontOffice\\ArticleController:getArticlesByCategory' => '?',
            'App\\Controller\\FrontOffice\\ArticleController:show' => '?',
            'App\\Controller\\FrontOffice\\MainController:home' => '?',
            'App\\Controller\\FrontOffice\\MainController:search' => '?',
            'App\\Controller\\FrontOffice\\QuizController:list' => '?',
            'App\\Controller\\FrontOffice\\QuizController:quizResult' => '?',
            'App\\Controller\\FrontOffice\\QuizController:quizSubmit' => '?',
            'App\\Controller\\FrontOffice\\QuizController:show' => '?',
            'App\\Controller\\FrontOffice\\UserController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
