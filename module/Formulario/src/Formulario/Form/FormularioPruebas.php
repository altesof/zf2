<?php
namespace Formulario\Form;

use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Form\Factory;

use Formulario\Form\FormularioPruebasValidator;

class FormularioPruebas extends Form
{
    public function __construct($name = null)
     {
        parent::__construct($name);

        //Definimos los filtros del formulario, instanciamos el objeto de validaciones
        //$this->setInputFilter(new \Modulo\Form\FormularioPruebasValidator);

        parent::__construct(null);
        $this->setAttribute('method', 'POST');
        $this->setInputFilter(new FormularioPruebasValidator());

        $this->add(array(
            'name' => 'nombre',
            'options' => array(
                'label' => 'Nombre: ',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input',
                'required'=>'required'
            )
        ));


        $factory = new Factory();

        $email = $factory->createElement(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => array(
                'label' => 'Email: ',
            ),
            'attributes' => array(
                'required'=>'required',
                'class' => 'input_email',
                'id' => 'input_email'
            ),
          ));
        $this->add($email);

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar'
            ),
        ));


     }
}

?>
