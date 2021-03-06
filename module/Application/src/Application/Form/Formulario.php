<?php

namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Factory;

class Formulario extends Form
{
    public function __construct($name = null)
     {
        parent::__construct($name);

        $this->add(array(
            'name' => 'nombre',
            'options' => array(
                'label' => 'Nombre Completo',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input'
            ),
        ));


         $factory = new Factory();

        $email = $factory->createElement(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => array(
                'label' => 'Correo',
            ),
            'attributes' => array(

                'class' => 'input'
            ),
                ));

        $this->add($email);
        //botón enviar
       // $this->add(new Element\Csrf('security'));
        $this->add(array(
            'name' => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar'
            ),
        ));

        //campo de tipo password
         $this->add(array(
            'name' => 'pass',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'type' => 'password',
                'class' => 'mama'
            ),
        ));
        // File Input
        $file = new Element\File('image-file');
        $file->setLabel('Suba su foto')
             ->setAttribute('id', 'image-file');
        $this->add($file);
        //radio button
        $radio = new Element\Radio('genero');
         $radio->setLabel('Cuál es tu género ?');

         $this->add($radio);
    //select
    $select = new Element\Select('lenguaje');
     $select->setLabel('Cuál en tu lengua materna?');
     $select->setAttribute('multiple', true);
    //$select->setEmptyOption('Seleccione...');
    $this->add($select);

        $pais = new Element\Select('pais');
     $pais->setLabel('Cuál es tu país?');
     $pais->setEmptyOption('Seleccione...');
     $pais->setValueOptions(array(
      'european' => array(
         'label' => 'European languages',
         'options' => array(
            '0' => 'French',
            '1' => 'Italian',
         ),
      ),
      'asian' => array(
         'label' => 'Asian languages',
         'options' => array(
            '2' => 'Japanese',
            '3' => 'Chinese',
         ),
      ),
     ));
     $this->add($pais);
        //campo oculto
        $oculto = new Element\Hidden('oculto');
        $this->add($oculto);
     // checkbox
        $condiciones = new Element\Checkbox('condiciones');
        $condiciones->setLabel('Acepto Las Condiciones');
        $this->add($condiciones);
     //multicheckbox
        $preferencias = new Element\MultiCheckbox('preferencias');
        $preferencias->setLabel('Indique sus preferencias');
        $this->add($preferencias);

     }
}

?>

<?php
/*
namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;  // crea elementos del campo
use Zend\Form\Form; // crea elementos del campo
use Zend\Captcha;
use Zend\Form\Factory; // permite crear campos con formatos de array
// hay otra forma que son los element

class Formulario extends Form
{
    public function __construct($name = null)
     {
        parent::__construct($name);

        $this->add(array(
            'name' => 'nombre',
            'options' => array(
                'label' => 'Nombre Completo :',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input'
            ),
        ));


         $factory = new Factory();

        $email = $factory->createElement(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => array(
                'label' => 'Correo :',
            ),
            'attributes' => array(

                'class' => 'input'
            ),
                ));

        $this->add($email);
        //botón enviar
       // $this->add(new Element\Csrf('security'));
        $this->add(array(
            'name' => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar'
            ),
        ));


     }
}


*/
?>
