<?php
namespace Formulario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//Incluir componentes de validación
use Zend\Validator;
use Zend\I18n\Validator as I18nValidator;

//Incluir modelos
//use Formulario\Model\Entity\PruebasModel;

//Incluir formularios
use Formulario\Form\FormularioPruebas;

class PruebasController extends AbstractActionController{

    public function indexAction(){
        return new ViewModel();
    }

    public function formularioAction(){
        /*
        * El propio método que muestra la vista del formulario,
        * también procesara los datos
        */

        //Instanciamos el formulario
        $form=new FormularioPruebas("form");

        //Esta vista se cargará por defecto
        $vista=array(
          "titulo"=>"Formularios en ZF2",
          "form"=>$form,
          'url'=>$this->getRequest()->getBaseUrl()
        );

        //Si el formulario a sido enviado
        if($this->getRequest()->isPost()) {

            //Repoblamos el formulario con los datos pasados por el usuario
            $form->setData($this->getRequest()->getPost());

            //Si el formulario es valido que haga algo
            if($form->isValid()){
              echo 'Es valido realizamos registros';
              var_dump($this->getRequest()->getPost());
              
            }else{
                //Si no, pasa los mensajes de error
                $err=$form->getMessages();
                $vista=array(
                  "titulo"=>"Formularios en ZF2",
                  "form"=>$form,
                  'url'=>$this->getRequest()->getBaseUrl(),"error"=>$err
                );
            }
        }

        //Renderiza la vista
        return new ViewModel($vista);
    }

}
