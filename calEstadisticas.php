<?php
include_once 'Conexion.php';
include_once 'php/estadisticas.php';
include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';

$clase = new Estadisticas($conexion);
$calObject = $clase->getCal("calificaciones");
$aprobados = $clase->getCalAproved("calificaciones");
$cali1 = $clase->getCalDynamic("calificaciones",0,10);
$cali2= $clase->getCalDynamic("calificaciones",11,20);
$cali3= $clase->getCalDynamic("calificaciones",21,30);
$cali4= $clase->getCalDynamic("calificaciones",31,40);
$cali5= $clase->getCalDynamic("calificaciones",41,50);
$cali6= $clase->getCalDynamic("calificaciones",51,60);
$cali7= $clase->getCalDynamic("calificaciones",61,70);
$cali8= $clase->getCalDynamic("calificaciones",71,80);
$cali9= $clase->getCalDynamic("calificaciones",81,90);
$cali10= $clase->getCalDynamic("calificaciones",91,100);


?>
<div class="container">
<h2 class="text-center">Estadísticas de los exámenes realizados.</h2>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
            <h4 class="text-center">Calificaciones</h4>
            <div id="cal"></div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6">
            <h4 class="text-center">Aprobados</h4>
            <div id="apro"></div>
        </div>
    </div>
</div>

<script type="text/javascript">


var cal = document.getElementById('apro');
var calif =  document.getElementById('cal');
var caldata = [
{
    y: [<?php echo $calObject['cont']; ?>,<?php echo $aprobados['cont']; ?>],
    x:["Reprobados","Aprobados"],
    type: 'bar'
}
];
var layoutCal =  {
  height: 400,
  width: 500
};
Plotly.newPlot(cal,caldata,layoutCal);

var datacal = [
    {
    y: [<?php echo $cali1['cont']; ?>,<?php echo $cali2['cont']; ?>,<?php echo $cali3['cont']; ?>
    ,<?php echo $cali4['cont']; ?>,<?php echo $cali5['cont']; ?>,<?php echo $cali6['cont']; ?>,
    <?php echo $cali7['cont']; ?>,<?php echo $cali8['cont']; ?>,<?php echo$cali9['cont']; ?>,
    <?php echo $cali10['cont']; ?>],
    x:["0-10","11-20","21-30","31-40","41-50","51-60","61-70","71-80","81-90","91-100"],
    type: 'bar'
}
];
Plotly.newPlot(calif,datacal,layoutCal);
</script>
<?php
include_once 'php/footerHTML.php';