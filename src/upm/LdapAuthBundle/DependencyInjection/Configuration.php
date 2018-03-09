<?php
namespace App\upm\LdapAuthBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ldap_auth');

        $rootNode
            ->children()
                ->scalarNode('app_id')->isRequired()->defaultValue('inv4lid-1D')->end()
            ->end();

        return $treeBuilder;
    }
}