<?php
namespace Egresado\Model;
use Zend\Db\TableGateway\TableGateway;
use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class EgresadoTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultset = $this->tableGateway->select();
        return $resultset;
    }

    public function egresado($Matricula)
    {
        $rowset = $this->tableGateway->select(array('Matricuala'=>$Matricula));
        $row = $rowset->current();
        if (!$row){
            throw new \Exception("La matricula no existe");
        }
        return $row;
    }

    public function guardar(Egresado $egresado)
    {
        $data = array(
            'Matricula' => $egresado->Matricula,
            'CURP' => $egresado->codigo,
            'Nombre' => $egresado->nombre,
            'Apellido_Paterno' => $egresado->Apellido_Paterno,
            'Apellido_Materno' => $egresado->Apellido_Materno,
        );
        $this->tableGateway->insert($data);
    }
}