<?php

/*
 * (c) Pierre-Yves Dick <hello@pierreyvesdick.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Pyrrah\Bundle\OpenWeatherMapBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class PyrrahOpenWeatherMapExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $serviceDefinition = $container->getDefinition('pyrrah.openweathermap.client');
        $serviceDefinition->setArguments(array($config['api_key'], $config['api_url'], $config['units'], $config['language']));
    }
}
