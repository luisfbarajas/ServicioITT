<?php

include_once '../Conexion.php';
$ruta = realpath(dirname(getcwd())) . "\Upload";
foreach ($_FILES as $key) {
    $nombre = implode($key['name']);
    $ruta_temporal = implode($key["tmp_name"]);

    $fecha = getdate();
    $nombre_archivo = $fecha["month"] . "-" . $fecha["mday"] . "-" . $fecha["year"] . "_" . $fecha["weekday"] . "-" . $fecha["hours"] . "h-" . $fecha["minutes"] . "m-" . $fecha["seconds"] . "s.csv";

    $destino = "{$ruta}\\{$nombre_archivo}";
    $explo = explode(".", $nombre);

    if ($explo[1] != "csv") {
       echo "No es CSV";
    } else {
        if (move_uploaded_file($ruta_temporal, $destino)) {
            $alert=2;
        }

    }

}
$x = 0;
$data = array();
$fichero = fopen($destino, "r");

while (($datos = fgetcsv($fichero, 1000)) != false) {
    $fecha = null;
    $fecha2 = null;
    $x++;
    if ($x > 1) {
        $index = $x - 2;
        $fecha = str_replace('/', '-', $datos[2]);
 
        if (empty($datos[3])) {
            $datos[3] = 0;
        }
        $data[] = "({$datos[0]},'{$datos[1]}','{$fecha}',{$datos[3]})";
        $query = "INSERT INTO calificaciones (`Ncontrol`, `nombre`, `fecha`, `calificacion`) VALUES {$data[$index]}";
        $execute = mysqli_query($conexion, $query);
    }
}
header('Location:../readCal.php');