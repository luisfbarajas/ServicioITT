<?php


function obtenerFecha(){
include "Conexion.php";
$tabla="";
$consulta="SELECT * FROM $Fechas";
$resultado = mysqli_query($conexion,$consulta);

 $tabla="<table class=\"table table-striped table-hover table- \" >
<thead>
<tr>
 <th>Fecha</th>
 <th>Horario</th>
 <th>Salon</th>
 <th>Unidad</th>
 <th>Cupo</th>
 <th>Acciones</th>
</tr>
</thead>";
while($resultados=mysqli_fetch_array($resultado)){
     $tabla .= " <tr>
    <td>".$resultados["FECHA"]."</td>
    <td>".$resultados["HORARIO"]."</td>
    <td>".$resultados["SALON"]."</td>
    <td>".$resultados["UNIDAD"]."</td>
    <td>".$resultados["cupo"]."</td>
    <td><a href='#?\$id=".$resultados["id"]."' data-toggle='modal' data-target='#miModal' ><i class='glyphicon glyphicon-pencil pr' style='color:#82E0AA;'></i></a>
        <a href='#' ><i class='glyphicon glyphicon-trash' style='color:#C70039;'></i></a>
        </td>
  
 </tr>";
}
 $tabla .= "</table><br>";
mysqli_close($conexion);
echo $tabla;
}
