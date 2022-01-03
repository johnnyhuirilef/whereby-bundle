<?php

namespace Enius\WherebyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('enius_whereby');
        if (\method_exists($builder, 'getRootNode')) {
            $rootNode = $builder->getRootNode();
        } else {
            $rootNode = $builder->root('enius_whereby');
        }
        
        $rootNode
            ->children()
            ->scalarNode('token')->isRequired()->end()
            ->end();

        return $builder;
    }
}