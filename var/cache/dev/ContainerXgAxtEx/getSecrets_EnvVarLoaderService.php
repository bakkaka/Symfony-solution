<?php

namespace ContainerXgAxtEx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_EnvVarLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'secrets.env_var_loader' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\StaticEnvVarLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'StaticEnvVarLoader.php';

        return $container->privates['secrets.env_var_loader'] = new \Symfony\Component\DependencyInjection\StaticEnvVarLoader(($container->privates['secrets.vault'] ?? $container->load('getSecrets_VaultService')));
    }
}
