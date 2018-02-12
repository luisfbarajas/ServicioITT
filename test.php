<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
	 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="apple-touch-icon" href="apple-touch-icon.png">
     <link rel="stylesheet" href="css/icomoon.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">      
     <link rel="stylesheet" href="css/bootstrap-theme.min.css">
     <link rel="stylesheet" href="css/main.css">
</head>
<body>
     
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 intento" id="dSemestre">
                            <div class="form-group" >
                             <label for="Semestre" class="control-label">Semestre:</label>
                             <div class="input-group">
                              <div class="input-group-addon">
                                <span class="icon-list-numbered icon"></span>
                              </div>
                                <select class="form-control" id="Semestre" tabindex="5" name="Semestre" style="height: 45px;" onChange="CambioSemestre(this)" >
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                                 <option value="9">9</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="Otro">Otro</option>
                                </select>
                             </div>
                             <span class="help-block" id="error"></span>     
                            </div>
                             <div id="dOtro" style="display:none;">
                                <label for="txtOSemestre">Especifique:</label>
                                <input type="text" name="txtOtro" id="txtOtro" placeholder="Especifique." class="form-control">
                             </div>

                   </div>


<script >   
 function CambioSemestre(sel) {

             if (sel.value == "Otro") {
              divC = document.getElementById("dSemestre");
                divC.style.width = "50%";

                divT = document.getElementById("dOtro");
                divT.style.width = "50%";
                 divT.style.display = "block";


            } else {

                divC = document.getElementById("dSemestre");
                divC.style.display = "block";

                divT = document.getElementById("dOtro");
                divT.style.display = "none";
                
            }
        }</script>









        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>


</body>
</html>