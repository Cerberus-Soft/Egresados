<?php
namespace Egresado\Model;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

use Egresado\Model\EgresadoTable;

class TablasFactory {
    protected $sm;

    public function __construct($sm)
    {
        $this->sm = $sm;
    }
    public function getTableEgresado()
    {
        $dbAdapter = $this->sm->get('Zend\Db\Adapter\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype ->setArrayObjectPrototype(new Egresado());
        return new EgresadoTable(new TableGateway('egresado',$dbAdapter,
        null,$resultSetPrototype));
    }
}