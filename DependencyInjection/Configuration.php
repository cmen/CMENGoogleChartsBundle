<?php

namespace CMEN\GoogleChartsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('cmen_google_charts');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            $rootNode = $treeBuilder->root('cmen_google_charts');
        }

        $rootNode
            ->children()
                ->scalarNode('version')->defaultValue('current')->end()
                ->scalarNode('language')->defaultValue('')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
