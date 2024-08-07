<?php

namespace ContainerR5Az8HF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9JvgLyLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9JvgLyL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9JvgLyL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rewardRepository' => ['privates', 'App\\Repository\\RewardRepository', 'getRewardRepositoryService', true],
        ], [
            'rewardRepository' => 'App\\Repository\\RewardRepository',
        ]);
    }
}
