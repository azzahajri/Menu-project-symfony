<?php

namespace ContainerN0TIcav;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R8eZeNuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r8eZeNu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r8eZeNu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'employe' => ['privates', '.errored..service_locator.r8eZeNu.App\\Entity\\Employe', NULL, 'Cannot autowire service ".service_locator.r8eZeNu": it references class "App\\Entity\\Employe" but no such service exists.'],
        ], [
            'employe' => 'App\\Entity\\Employe',
        ]);
    }
}
