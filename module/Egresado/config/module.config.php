<?php
namespace Egresado;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Interop\Container\ContainerInterface;

return [
    'controllers' => [
        'factories' => [
            Controller\EgresadoController::class => function(ContainerInterface $sm){
                return new Controller\EgresadoController($sm);
            },
        ],
    ],
    //paso 2
    'router' => [
        'routes' => [
            'egresado' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/egresado[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-z0-9_-]*',
                        'id'    => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\EgresadoController::class,
                        'action'    => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            'egresado' => __DIR__ . '/../view',
        ],
    ],
];