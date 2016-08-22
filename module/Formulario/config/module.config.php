<?php

return array(
     'controllers' => array(
         'invokables' => array(
             'Formulario\Controller\Pruebas' => 'Formulario\Controller\PruebasController',
         ),
     ),
     'router'=>array(
         'routes'=>array(
             'formulario'=>array(
                 'type'=>'Segment',
                 'options'=>array(

                     'route' => '/formulario[/:action][/:id]',
                     'constraints' => array(
                         'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),

                     'defaults'  =>  array(
                         'controller' => 'Formulario\Controller\Pruebas',
                         'action'     => 'index'

                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'pruebas' => __DIR__ . '/../view',
         ),
     ),
 );
