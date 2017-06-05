<?php
namespace Egresado\Model;

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
        return $this->tableGateway->select();
    }

    public function getEgresado($Matricula)
    {
        $Matricula = (int) $Matricula;
        $rowset = $this->tableGateway->select(['Matricula' => $Matricula]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $Matricula
            ));
        }
        return $row;
    }

    public function saveEgresado(Egresado $egresado)
    {
        $data = [
            'CURP' => $egresado->CURP,
            'Nombre' => $egresado->Nombre,
            'Apellido_Paterno' => $egresado->Apellido_Paterno,
            'Apellido_Materno' => $egresado->Apellido_Materno,
        ];

        $Matricula = (int) $egresado->Matricula;

        if ($id == 0){
            $this->tableGateway->insert($data);
            return;
        }

        if (! $this->getEgresado($Matricula)){
            throw new RuntimeException(sprintf(
                'Cannot update egresado with identifier %d does not exist',
                $Matricula
            ));
        }
        $this->tableGateway->update($data,['Matricula' => $Matricula]);
    }
}