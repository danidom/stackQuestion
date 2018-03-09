<?php
namespace App\upm\LdapAuthBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
// use App\upm\LdapAuthBundle\DependencyInjection\LdapAuthExtension;
// use App\LdapAuthenticate\DependencyInjection\Configuration;

class LdapAuth
{
    protected function bundleParams()
    {
        $container = new ContainerBuilder();
		
        $app_id = $container->getParameter('ldap_auth.app_id');

        return $app_id;
    }

    public function authenticateUser( $user, $pass )
    {
        // cURL that receives a JSON and requires the app_id to validate [$this->bundleParams()]

        return $result;
    }
}
