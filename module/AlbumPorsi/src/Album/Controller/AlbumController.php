<?php

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//use Album\Model\AlbumTable;

class AlbumController extends AbstractActionController
{
    protected $albumTable;

    public function indexAction()
    {
      /*
      return new ViewModel(array(
           'albums' => $this->getAlbumTable()->fetchAll(),
       ));
       */
       return new ViewModel();
    }
    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

    // module/Album/src/Album/Controller/AlbumController.php:
    /*
     public function getAlbumTable()
     {
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Model\AlbumTable');
         }
         return $this->albumTable;
     }
     */
}
