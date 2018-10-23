<?php

include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';

?>
<div class="container mt-4">
<h3 class="text-center">Estadisticas de alumnos</h3>
<div id="tester" style="width:600px;height:250px;"></div>
<script>
	TESTER = document.getElementById('tester');
	Plotly.plot( TESTER, [{
	x: [1, 2, 3, 4, 5],
	y: [1, 2, 4, 8, 16] }], {
	margin: { t: 0 } } );
</script>
</div>

<?php
include_once 'php/footerHTML.php';