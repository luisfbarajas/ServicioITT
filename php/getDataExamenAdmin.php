<?php
class dataExamenAdmin{

    protected $conexion = null;
    private $PrefixDate = "fechas_examen";
    public function __construct($conexion){
        $this->conexion = $conexion;
    }
    public function getFullData($fecha){

    }

    public function getdates(){
    $query = "SELECT FECHA FROM {$this->PrefixDate}";
    $execute = mysqli_query($this->conexion, $query);
    $result = mysqli_fetch_array($execute);
    return $result;
    }
}