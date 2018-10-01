<!doctype html>
 <html class="no-js" lang="es"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles.|Inicio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body style="background-image: url('img/fondo-itt.jpg')">
       <?php
          include ("Conexion.php");                
         ?>
       <div class="header">
        <?php include 'menu.php'; ?>
       </div>
       <br/>
       <br/> 

        <b> <h3 class="Fecha-Titulo">Fechas de examen</h3></b>


    <div class="container">
     <br>
      <p class="Fecha-Texto">Las Fechas de los examenes de ingles estan programadas en la fecha y lugar especificados. En cada fecha se cuenta con diferentes horarios en los cuales
       se puede presentar el examen para que se tenga la flexibilidad necesaria en cuanto horario se refiere.
      A continuacion se muestran las fechas de examenes disponibles en el semestre en curso.</p><br>      
          <div class="row" >
             <?php 
             $Consulta=mysqli_query($conexion,"SELECT * FROM $Fechas ");    
               //ciclo para la lectura de datos de la consulta      
             echo $tabla="<table class=\"table table-striped table-hover \" >
                   <thead>
                   <tr>
                    <th>Fecha</th>
                    <th>Horario</th>
                    <th>Salon</th>
                    <th>Unidad</th>
                   </tr>
                   </thead>";
                  //ciclo de consulta 
             while($row = mysqli_fetch_array($Consulta))
                {             
                     echo $tablabody="
                          <tr>
                            <td>".$row["FECHA"]."</td>
                            <td>".$row["HORARIO"]."</td>
                            <td>".$row["SALON"]."</td>
                            <td>".$row["UNIDAD"]."</td>
                         </tr>";    
                }                
                 echo "</table><br><br>";
           ?>
          </div>
    </div>

    <?php
    include_once 'php/footerHTML.php';
    ?>
