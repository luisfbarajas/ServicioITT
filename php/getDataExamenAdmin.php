<?php
class dataExamenAdmin
{
    protected $conexion = null;
    private $PrefixDate = "fechas_examen";
    private $PrefixRegister = "r_examen";
    private $PrefixAlumno = "alumno";
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }
    public function getFullData()
    {
        // $query = "SELECT {$this->PrefixRegister}.FechaPago as 'Pago', {$this->PrefixRegister}.FolioPago as 'Folio', {$this->PrefixAlumno}.name as 'nombre',
        // {$this->PrefixAlumno}.last_name as 'apellido', {$this->PrefixAlumno}.nctrl as 'numero', {$this->PrefixAlumno}.CARRERA as 'carrera', 
        // {$this->PrefixAlumno}.semestre as 'semestre', {$this->PrefixDate}.FECHA as 'fechaExamen' from  {$this->PrefixRegister} 
        // LEFT JOIN {$this->PrefixDate} ON  {$this->PrefixRegister}.ID_FECHAS = {$this->PrefixDate}.id 
        // LEFT JOIN {$this->PrefixAlumno} on {$this->PrefixRegister}.ID_ALUMNO = {$this->PrefixAlumno}.id";
        $query = "SELECT r_examen.FechaPago, r_examen.FolioPago, alumno.name, alumno.last_name , alumno.nctrl, alumno.CARRERA , alumno.semestre , fechas_examen.FECHA  from r_examen LEFT JOIN fechas_examen on r_examen.ID_FECHAS = fechas_examen.id LEFT JOIN alumno on alumno.id = r_examen.ID_ALUMNO";
        // $query = "SELECT * from r_examen";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_all($execute);
        return $result;
    }

    public function getdates()
    {
        $query = "SELECT FECHA FROM {$this->PrefixDate}";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_array($execute);
        return $result;
    }
}