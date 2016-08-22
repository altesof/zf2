<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Entity\Modelo; // llamada al modelo
use Application\Form\Formulario; // invoicaible para utilizar el formulario
use Application\Model\Entity\Procesa;


class FormularioController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    public function formularioAction()
    {
      /*
      $form = new Formulario('form');
      // cargar valones al formulario select
      $form->get('lenguaje')->setValueOptions(array('0' => 'Ingles', '1'=>'Español'));
      return new ViewModel(array(
        'titulo'=>"Formulario en ZF",
        'form'=>$form,
        'url'=>$this->getRequest()->getBaseUrl()
      ));
*/
      $form=new Formulario("form");
      $form->get("lenguaje")->setValueOptions(array('0'=>'Inglés','1'=>'Español'));
      $form->get("genero")->setValueOptions(array('f'=>'Femenino','m'=>'Masculino','n'=>'no definido'));
      $form->get("oculto")->setAttribute("value","87");
      $form->get("preferencias")->setValueOptions(array('m'=>'Música','d'=>'Deporte','o'=>'Ocio'));
      return new ViewModel(array("titulo"=>"Formularios en ZF2","form"=>$form,'url'=>$this->getRequest()->getBaseUrl()));

    }

    public function recibeAction()
    {
      $data = $this->request->getPost();
      $procesa = new Procesa($data);
      $datos = $procesa->getData();
      return new ViewModel(array('datos'=>$datos));
    }
}
