<?php

namespace CMEN\GoogleChartsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
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
