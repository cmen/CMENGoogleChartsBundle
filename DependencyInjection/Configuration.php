<?php

namespace CMEN\GoogleChartsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cmen_google_charts');

        $rootNode
            ->children()
                ->scalarNode('version')->defaultValue('current')->end()
                ->scalarNode('language')->defaultValue('')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
