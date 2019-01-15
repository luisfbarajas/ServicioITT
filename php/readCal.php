<?php
class readCal{
    private $conexion = null;
    private $table = "calificaciones";
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function calStudents(){
    $query = "SELECT * FROM {$this->table}";
        $execute = mysqli_query($this->conexion,$query);
        $result = mysqli_fetch_all($execute);
        return $result;
    }
}
// include_once '../Conexion.php';
// $function = new readCal($conexion);

// echo var_dump($function->calStudents());