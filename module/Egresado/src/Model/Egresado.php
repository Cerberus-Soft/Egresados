<?php
namespace Egresado\Model;
class Egresado
{
    public $Matricula;
    public $CURP;
    public $Nombre;
    public $Apellido_Paterno;
    public $Apellido_Materno;

    public function exchangeArray(array $data)
    {
        $this->Matricula = !empty($data['Matricula']) ? $data['Matricula'] : null;
        $this->CURP = !empty($data['CURP']) ? $data['CURP'] : null;
        $this->Nombre = !empty($data['Nombre'] ? $data['Nombre'] : null);
        $this->Apellido_Paterno = !empty($data['Apellido_Paterno'] ? $data['Apellido_Paterno'] : null);
        $this->Apellido_Materno = !empty($data['Apellido_Materno'] ? $data['Apellido_Materno'] : null);
    }
}