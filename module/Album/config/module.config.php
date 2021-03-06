<?php

return array(
     'controllers' => array(
         'invokables' => array(
             'Album\Controller\Album' => 'Album\Controller\AlbumController',
         ),
     ),
     'router'=>array(
         'routes'=>array(
             'albun'=>array(
                 'type'=>'Segment',
                 'options'=>array(

                     'route' => '/album[/:action][/:id]',
                     //'route' => '/album[/[:action]]',
                     'constraints' => array(
                         'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),

                     'defaults'  =>  array(
                         'controller' => 'Album\Controller\Album',
                         'action'     => 'index'

                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'album' => __DIR__ . '/../view',
         ),
     ),
 );
 /*
return array(
    'controllers'=>array(
        'invokables'=>array(
            'Album\Controller\Album'=>'Album\Controller\AlbumController'
        ),
    ),

    'router'=>array(
        'routes'=>array(
            'albun'=>array(
                'type'=>'Segment',
                'options'=>array(

                    'route' => '/album[/[:action]]',
                    'constraints' => array(
                        'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),

                    'defaults'  =>  array(
                        'controller' => 'Album\Controller\Album',
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
            'album/publicacion/index' => __DIR__ . '/../view/album/album/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'album' =>  __DIR__ . '/../view',
        ),
    ),
);
*/
