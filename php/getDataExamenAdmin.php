<?php
class dataExamenAdmin{

    protected $conexion = null;
    private $PrefixDate = "fechas_examen";
    private $PrefixRegister = "r_examen";
    private $PrefixAlumno = "alumno";
    public function __construct($conexion){
        $this->conexion = $conexion;
    }
    public function getFullData($fecha){
        $query = "SELECT {$this->PrefixDate}.FECHA FROM {$this->PrefixRegister} LEFT JOIN {$this->PrefixDate} ON {$this->PrefixRegister}.ID_FECHAS={$this->PrefixDate}.id LIMIT 1";
    $Query = "SELECT {$this->PrefixRegister}.HORA, {$this->PrefixDate}.FECHA, {$this->PrefixAlumno}.name,{$this->PrefixAlumno}.last_name,{$this->PrefixAlumno}.nctrl,{$this->PrefixAlumno}.CARRERA,{$this->PrefixAlumno}.semestre FROM {$this->PrefixRegister} INNER JOIN {$this->PrefixRegister} ON {$this->PrefixRegister}.ID_ALUMNO={$this->PrefixAlumno}.id AND {$this->PrefixRegister}.ID_FECHAS={$this->PrefixDate}.id";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_assoc($execute);
        return $result;
    }

    public function getdates(){
    $query = "SELECT FECHA FROM {$this->PrefixDate}";
    $execute = mysqli_query($this->conexion, $query);
    $result = mysqli_fetch_array($execute);
    return $result;
    }
}