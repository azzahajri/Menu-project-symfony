<?php

namespace ContainerN0TIcav;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RLBskxIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rLBskxI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rLBskxI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DepartementController::edit_depart' => ['privates', '.service_locator.NU4qIpi', 'get_ServiceLocator_NU4qIpiService', true],
            'App\\Controller\\EmployeController::edit' => ['privates', '.service_locator.r8eZeNu', 'get_ServiceLocator_R8eZeNuService', true],
            'App\\Controller\\ImageController::delete' => ['privates', '.service_locator.X1brop2', 'get_ServiceLocator_X1brop2Service', true],
            'App\\Controller\\ImageController::edit' => ['privates', '.service_locator.X1brop2', 'get_ServiceLocator_X1brop2Service', true],
            'App\\Controller\\ImageController::index' => ['privates', '.service_locator.fVWBnHr', 'get_ServiceLocator_FVWBnHrService', true],
            'App\\Controller\\ImageController::new' => ['privates', '.service_locator.fVWBnHr', 'get_ServiceLocator_FVWBnHrService', true],
            'App\\Controller\\ImageController::show' => ['privates', '.service_locator.xlRbV4.', 'get_ServiceLocator_XlRbV4_Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::show2' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\DepartementController:edit_depart' => ['privates', '.service_locator.NU4qIpi', 'get_ServiceLocator_NU4qIpiService', true],
            'App\\Controller\\EmployeController:edit' => ['privates', '.service_locator.r8eZeNu', 'get_ServiceLocator_R8eZeNuService', true],
            'App\\Controller\\ImageController:delete' => ['privates', '.service_locator.X1brop2', 'get_ServiceLocator_X1brop2Service', true],
            'App\\Controller\\ImageController:edit' => ['privates', '.service_locator.X1brop2', 'get_ServiceLocator_X1brop2Service', true],
            'App\\Controller\\ImageController:index' => ['privates', '.service_locator.fVWBnHr', 'get_ServiceLocator_FVWBnHrService', true],
            'App\\Controller\\ImageController:new' => ['privates', '.service_locator.fVWBnHr', 'get_ServiceLocator_FVWBnHrService', true],
            'App\\Controller\\ImageController:show' => ['privates', '.service_locator.xlRbV4.', 'get_ServiceLocator_XlRbV4_Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:show2' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\DepartementController::edit_depart' => '?',
            'App\\Controller\\EmployeController::edit' => '?',
            'App\\Controller\\ImageController::delete' => '?',
            'App\\Controller\\ImageController::edit' => '?',
            'App\\Controller\\ImageController::index' => '?',
            'App\\Controller\\ImageController::new' => '?',
            'App\\Controller\\ImageController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Controller\\SecurityController::show2' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\DepartementController:edit_depart' => '?',
            'App\\Controller\\EmployeController:edit' => '?',
            'App\\Controller\\ImageController:delete' => '?',
            'App\\Controller\\ImageController:edit' => '?',
            'App\\Controller\\ImageController:index' => '?',
            'App\\Controller\\ImageController:new' => '?',
            'App\\Controller\\ImageController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'App\\Controller\\SecurityController:show2' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
