<?php
namespace Egresado\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Egresado\Model\TablasFactory;

class EgresadoController extends AbstractActionController
{
    private $egresadoTable;
    
    public function __construct($sm)
    {
        $this->egresadoTable = (new TablasFactory($sm))->getTableEgresado();
    }
    public function listaAction()
    {
        return new ViewModel(['egresados' => $this->egresadoTable->fetchAll(),]);
    }
}