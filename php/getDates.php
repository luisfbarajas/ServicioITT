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
    <td>
    <div class='row'>
      
        <a href='?id=".$resultados["id"]."&&accion=2'  ><i class='glyphicon glyphicon-pencil pr' style='color:#82E0AA;'></i></a>

      
        <div class='col-md-1 col-lg-1 col-sm-1 col-xs-1'>
        
        <a href='php/eliminar.php?id=".$resultados["id"]."&&accion=1' onclick='return pregunta();'><i class='glyphicon glyphicon-trash' style='color:#C70039;' ></i></a>
      
        </div>
    </div>
       
        </td>
  
 </tr>";
}
 $tabla .= "</table><br>";
mysqli_close($conexion);
echo $tabla;
}
include_once 'Conexion.php';
if($_GET){
    $id=$_GET['id'];
    $query = "SELECT * FROM $Fechas WHERE id=$id";
    $Consulta =mysqli_query($conexion,$query);
    $vuelve=mysqli_fetch_assoc($Consulta);
}