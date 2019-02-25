<?php

include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';
include_once 'php/estadisticas.php';
include_once 'Conexion.php';
$call = new Estadisticas($conexion);

$hombre = $call->getMan($alumno);
$mujeres = $call->getFemale($alumno);
$ISC = $call->getCarrera($alumno,1);
$IBM = $call->getCarrera($alumno,2);
$conta = $call->getCarrera($alumno,3);
$menorQ = $call->getSemestreCount($alumno,5,0);
$sexto = $call->getSemestreCount($alumno,6,1);
$septimo = $call->getSemestreCount($alumno,7,1);
$octavo = $call->getSemestreCount($alumno,8,1);
$noveno = $call->getSemestreCount($alumno,9,1);
$decimo =  $call->getSemestreCount($alumno,10,1);
$onceavo = $call->getSemestreCount($alumno,11,1);
$doceavo = $call->getSemestreCount($alumno,12,1);
$mayorQ = $call->getSemestreCount($alumno,13,2);
?>
<div class="container mt-4">
	<h2 class="text-center">Estadísticas de alumnos</h2>

	<div class="row">
		<div class="col-lg-6">
			<h3>Genero</h3><br>
			<div id="tester" style="width:80;height:500px;">
			</div>
		</div>
		<div class="col-lg-6">
			<h3>Carrera</h3><br>
			<div id="Carrera" >
			</div>
		</div>
 	</div>
	 <div class="row">
		<div class="col-lg-6">
			<h3>Semestre</h3><br>
			<div id="semestre" style="width:80;height:500px;">
			</div>
		</div>
 	</div>
</div>
<script>
	TESTER = document.getElementById('tester');
	var data = [
  {
    x: ['Hombres', 'Mujeres'],
    y: [<?php echo $hombre['genero'];?>, <?php echo $mujeres['genero']; ?>],
    type: 'bar'
  }
];

Plotly.newPlot(TESTER, data);

var dataCarrera = [{
  values: [<?php echo $ISC['carrera'];?>, <?php echo $IBM['carrera'];  ?>, <?php echo $conta['carrera'];  ?>],
  labels: ['ISC', 'IBM', 'CP'],
  type: 'pie'
}];

var layoutCarrera = {
  height: 400,
  width: 500
};

Plotly.newPlot('Carrera', dataCarrera, layoutCarrera);
var dataCarrera = [{
  values: [<?php echo $menorQ['semestre'];?>, <?php echo $sexto['semestre'];  ?>, <?php echo $septimo['semestre'];  ?>,<?php echo $octavo['semestre'];  ?>,<?php echo $noveno['semestre'];  ?>,<?php echo $decimo['semestre'];  ?>,<?php echo $onceavo['semestre'];  ?>,<?php echo $doceavo['semestre'];  ?>,<?php echo $mayorQ['semestre'];  ?>],
  labels: ['menor 5', '6', '7','8','9','10','11','12','13 o mayor'],
  type: 'pie'
}];

var layoutCarrera = {
  height: 400,
  width: 500
};

Plotly.newPlot('semestre', dataCarrera, layoutCarrera);
</script>
<?php
include_once 'php/footerHTML.php';