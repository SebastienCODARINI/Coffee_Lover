<?php

namespace ContainerO8InwSE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UFBJN8sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uFBJN8s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uFBJN8s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quiz' => ['privates', '.errored..service_locator.uFBJN8s.App\\Entity\\Quiz', NULL, 'Cannot autowire service ".service_locator.uFBJN8s": it references class "App\\Entity\\Quiz" but no such service exists.'],
            'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService', true],
        ], [
            'quiz' => 'App\\Entity\\Quiz',
            'responseRepository' => 'App\\Repository\\ResponseRepository',
        ]);
    }
}
