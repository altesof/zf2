<?php


namespace Ads\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RecordController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
