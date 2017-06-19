<?php

namespace Egresado;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\Resultset;
use Zend\Db\TableGateway\TableGateway;
class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /*public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\EgresadoTable::class => function($container){
                    $tableGateway = $container->get(Model\EgresadoTableGateway::class);
                    return new Model\EgresadoTable($tableGateway);
                },
                Model\EgresadoTableGateway::class => function ($container){
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Egresado());
                    return new TableGateway('egresado',$dbAdapter,null,$resultSetPrototype);
                },
            ],
        ];
    }*/
}
