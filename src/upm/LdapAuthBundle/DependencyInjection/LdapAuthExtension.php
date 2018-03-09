<?php
namespace App\upm\LdapAuthBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\VarDumper\VarDumper;

use App\upm\LdapAuthBundle\DependencyInjection\Configuration;

class LdapAuthExtension extends Extension
{
    /*public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration;
    }*/

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader( $container,
            new FileLocator('config/packages')
        );

        $loader->load('ldap_auth.yaml');

        if ($config['app_id']) {
            $container->setParameter('ldap_auth.app_id', $config['app_id']);
        }
    }

    public function getNamespace()
    {
        return 'ldap_auth';
    }
}

