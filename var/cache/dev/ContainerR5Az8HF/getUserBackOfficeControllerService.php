<?php

namespace ContainerR5Az8HF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserBackOfficeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BackOffice\UserBackOfficeController' shared autowired service.
     *
     * @return \App\Controller\BackOffice\UserBackOfficeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BackOffice/UserBackOfficeController.php';
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/PaginationSubscriber.php';

        $container->services['App\\Controller\\BackOffice\\UserBackOfficeController'] = $instance = new \App\Controller\BackOffice\UserBackOfficeController(($container->privates['App\\EventSubscriber\\PaginationSubscriber'] ?? ($container->privates['App\\EventSubscriber\\PaginationSubscriber'] = new \App\EventSubscriber\PaginationSubscriber())), ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\BackOffice\\UserBackOfficeController', $container));

        return $instance;
    }
}
