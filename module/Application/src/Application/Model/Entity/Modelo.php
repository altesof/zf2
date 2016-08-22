<?php

namespace Application\Model\Entity;

class Modelo
{

  private $texto;
  private $array;
  private $desdefuera;

  public function __construct($valor)
  {
    $this->array = array();
    $this->texto = "Hola desde mi modelo enviando datos desde dentro modelo";
    $this->desdefuera = $valor;
  }

  public function getTexto()
  {
    return $this->texto;
  }

  private function cargaArray()
  {
    $a = array('manzana', 'pera', 'naranja' );
    $comma_separated = implode(",", $a);
    array_push($this->array, $comma_separated);
  }

  public function getArray()
  {
    self::cargaArray();
    return $this->array;
  }

  public function desdeElController()
  {
    return $this->desdefuera;
  }


}

?>
