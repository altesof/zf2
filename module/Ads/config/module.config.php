<?php

return array(
    'controllers'=>array(
        'invokables'=>array(
            'Record\Controller\Record'=>'Ads\Controller\RecordController'
        ),
    ),

    'router'=>array(
        'routes'=>array(
            'ads'=>array(
                'type'=>'Segment',
                'options'=>array(

                    'route' => '/ads[/[:action]]',
                    'constraints' => array(
                        'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),

                    'defaults'  =>  array(
                        'controller' => 'Record\Controller\Record',
                        'action'     => 'index'

                    ),
                ),
            ),
        ),
    ),

    //Cargamos el view manager
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
//            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'record/index' => __DIR__ . '/../view/record/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'ads' =>  __DIR__ . '/../view', // alias del nombre de modulo
        ),
    ),
);