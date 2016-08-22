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

use Zend\Db\Adapter\Adapter;
//use Zend\Db\Sql\Sql;

use Application\Model\Entity\Usuarios; // llamada al modelo


class IndexController extends AbstractActionController
{
  public $dbAdapter;
  public function indexAction()
  {
      $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
      $u=new Usuarios($this->dbAdapter);
      $valores=array
      (
          "titulo"    =>  "Mostrando datos desde TableGateway",
          'datos'     =>  $u->getUsuarios()
      );
      return new ViewModel($valores);
  }
  public function verAction()
  {
      $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
      $u=new Usuarios($this->dbAdapter);
      $id = (int) $this->params()->fromRoute('id', 0); // obtener valor del parametro
      $valores=array
      (
          "titulo"    =>  "Mostrando Detalle del usuario",
          'datos'     =>  $u->getUsuarioPorId($id)
      );
      return new ViewModel($valores);
  }
  public function addAction()
  {
      $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
      $u=new Usuarios($this->dbAdapter);
      $data=array
      (
          "nombre"=>"Paul Perales Peña",
          "correo"=>"paulpe@hotmail.com"
      );
      //$u->addUsuario($data);
      $u->updateUsuario("5",$data);
      //$u->deleteUsuario('15');
      $valores=array
      (
          "titulo"    =>  "Mostrando datos desde TableGateway",
          'datos'     =>  $u->getUsuarios()
      );
      return new ViewModel($valores);
  }





/*
    public function modelAction()
    {

      $m = new Modelo("Texto parametro");
      $txt = $m->getTexto();

      $a= $m->getArray();

      $desde = $m->desdeElController();

      return new ViewModel(array('texto' => $txt, 'array'=>$a, 'desde'=>$desde) );

      return new ViewModel();
    }

    public function resultAction()
    {
      $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
      //var_dump ($this->dbAdapter);
      $result = $this->dbAdapter->query("select * from usuarios", Adapter::QUERY_MODE_EXECUTE);
      $datos = $result->toArray();
      return new ViewModel(array('titulo'=>'conextarse a la base de datos', 'datos'=>$datos));
    }

    public function sqlAction()
    {
        $this->dbAdapter=$this->getServiceLocator()->get('Zend\Db\Adapter');
        $sql = new Sql($this->dbAdapter);
        $select = $sql->select()
                      ->from('usuarios')
//                      ->where(array('id'=>'9'))
                      ->order('id desc');
        $selectString = $sql->getSqlStringForSqlObject($select);
        //echo $selectString;
        $result= $this->dbAdapter->query($selectString, Adapter::QUERY_MODE_EXECUTE);
        $datos=$result->toArray();
        return new ViewModel(array("titulo"=>"Conectarse a MySQL usando sql","datos"=>$datos));
    }
*/
}
