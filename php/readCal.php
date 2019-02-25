<?php
class readCal
{
    private $conexion = null;
    private $table = "calificaciones";
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function calStudents()
    {
        $query = "SELECT * FROM {$this->table}";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_all($execute);
        return $result;
    }
    public function getFilterCal($fecha, $top)
    {
        $query = "SELECT * FROM {$this->table} WHERE fecha = '{$fecha}' ORDER BY id DESC LIMIT {$top}";
        $execute = mysqli_query($this->conexion, $query);
        $result = mysqli_fetch_all($execute);
        return $result;
    }
}
// include_once '../Conexion.php';
// $function = new readCal($conexion);



