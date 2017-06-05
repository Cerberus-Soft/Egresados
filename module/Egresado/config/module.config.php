<?php
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\EgresadoController::class => InvokableFactory::class,
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
            'album' => __DIR__ . '/../view',
        ],
    ],
];