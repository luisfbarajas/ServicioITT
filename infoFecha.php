
       <?php
          include ("Conexion.php"); 
          include_once 'php/headerHTML.php';               
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
