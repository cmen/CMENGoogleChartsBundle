<?php

namespace CMEN\GoogleChartsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('cmen_google_charts');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('version')->defaultValue('current')->end()
                ->scalarNode('language')->defaultValue('')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
