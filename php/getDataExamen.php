<?php
class DataExamen
{

    private $id = null;
    private $conexion = null;
    private $Prefix = "alumno";
    private $Prefixuser = "usuario";
    private $PrefixDate = "fechas_examen";
    private $PrefixRegister = "r_examen";
    public function __construct($id, $conexion)
    {
        $this->id = $id;
        $this->conexion = $conexion;
    }

    public function dataUser()
    {
        $query = "SELECT {$this->Prefix}.name,{$this->Prefix}.last_name,{$this->Prefix}.nctrl,{$this->Prefix}.CARRERA,{$this->Prefix}.semestre,{$this->Prefixuser}.email FROM {$this->Prefix},{$this->Prefixuser} WHERE {$this->Prefix}.id={$this->Prefixuser}.id_alumno and {$this->Prefix}.id={$this->id}";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
    public function getDateExamen()
    {
        $query = "SELECT {$this->PrefixDate}.FECHA FROM {$this->PrefixRegister} LEFT JOIN {$this->PrefixDate} ON {$this->PrefixRegister}.ID_FECHAS={$this->PrefixDate}.id LIMIT 1";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }
}
