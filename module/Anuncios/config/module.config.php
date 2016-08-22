<?php

return array(
    'controllers'=>array(
        'invokables'=>array(
            'Anuncios\Controller\Publicacion'=>'Anuncios\Controller\PublicacionController'
        ),
    ),

    'router'=>array(
        'routes'=>array(
            'anuncios'=>array(
                'type'=>'Segment',
                'options'=>array(

                    'route' => '/anuncios[/[:action]]',
                    'constraints' => array(
                        'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),

                    'defaults'  =>  array(
                        'controller' => 'Anuncios\Controller\Publicacion',
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
            'anuncios/publicacion/index' => __DIR__ . '/../view/anuncios/publicacion/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'publicacion' =>  __DIR__ . '/../view',
        ),
    ),
);
