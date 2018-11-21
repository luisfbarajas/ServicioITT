<?php
include_once 'php/headerHTML.php';
?>
     
                <!--MENU DE NAVEGACION -->
         <div class="header">
            <?php include 'menu.php'; ?>
         </div>
         <br/>
         <br/>
         <br>
    <div class="container" >       
          <div class="panel panel-login forma" >
           <div class="panel-body">   
                  <!-- div para mensaje de registro -->   
             <div id="divmsj" ></div>        
                <form class="login-form " style="display: block;" role="form" name="form"  id="Registro">
                  <!--NOMBRE-->
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="form-group" id="divNombre">
                              <label for="nombre" class="control-label">Nombre(s):</label>
                                <div class="input-group">
                                 <div class="input-group-addon" >
                                    <span class="glyphicon glyphicon-user" id="Correos"></span>
                                 </div>
                                 <input type="text" name="Nombre" id="Nombre" tabindex="1" class="form-control" placeholder="Nombre" value="">
                                </div>
                                <span class="help-block" id="error"></span>                     
                            </div>
                  </div>
                    <!--APELLIDO-->
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="form-group" id="divApellido">
                         <label for="Apellido" class="control-label">Apellidos:</label>                                       
                         <input type="text" name="Apellido" id="Apellido" tabindex="2" class="form-control" placeholder="Apellido">
                        </div>
                         <span class="help-block" id="error"></span>
                     </div>
                        <!--NCTRL-->    
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">            
                          <div class="form-group" id="divNctrl">  
                           <label for="NCtrl" class="control-label">Número  de control:</label> 
                           <div class="input-group">
                             <div class="input-group-addon">
                                <span class="icon-credit-card icon"></span>
                             </div>
                             <input type="text" name="NCtrl" id="NCtrl" tabindex="3" class="form-control intento" placeholder="Número  de control." >
                           </div>
                           <span class="help-block" id="error"></span>   
                          </div>
                      </div>
                       <!--CARRERA-->
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                          <div class="form-group" id="divCarrera">
                            <label for="Carrera" class="control-label">Carrera:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <span class="icon-book icon"></span>
                              </div>
                              <select class="form-control" id="Carrera" tabindex="4" name="Carrera" style="height: 45px;">
                               <option value="Arquitectura">Arquitectura</option>
                               <option value="contador publico">Contador publico</option>
                               <option value="Ing. Ambiental">Ing. Ambiental</option>
                               <option value="Ing. Biomedica">Ing. Biomedica</option>
                               <option value="Ing. Bioquimica">Ing. Bioquimica</option>
                               <option value="Ing. Civil">Ing. Civil</option>
                               <option value="Ing. Electromecanica">Ing. Electromecanica</option>
                               <option value="Ing. Electronica">Ing. Electronica</option>
                               <option value="Ing. Aeronautica">Ing. Aeronautica</option>
                               <option value="Ing. en Diseño industrial">Ing. en Diseño industrial</option>
                               <option value="Ing. Gestion Empresarial">Ing. Gestion Empresarial</option>
                               <option value="Ing. Informatica">Ing. Informatica</option>
                               <option value="Ing. en Logistica">Ing. en Logistica</option>
                               <option value="Ing. en Nanotecnologia">Ing. en Nanotecnologia</option>
                               <option value="Ing. en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
                               <option value="Ing. en Tecnologias de la Informacion y Comunicaciones">Ing. en Tecnologias de la Informacion y Comunicaciones</option>
                               <option value="Ing. Industrial">Ing. Industrial</option>
                               <option value="Ing. Quimica">Ing. Quimica</option>
                               <option value="Ing. Mecanica">Ing. Mecanica</option>
                               <option value="Lic. en Administracion">Lic. en Administracion</option>
                              </select>
                            </div>
                            <span class="help-block" id="error"></span> 
                          </div>
                   </div>
                    <!--SEMESTRE-->                    
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 intento" id="dSemestre">
                            <div class="form-group" id="divSemestre" >
                             <label for="Semestre" class="control-label">Semestre:</label>
                             <div class="input-group">
                              <div class="input-group-addon">
                                <span class="icon-list-numbered icon"></span>
                              </div>
                                <select class="form-control" id="Semestre" tabindex="6" name="Semestre" style="height: 45px;" onChange="CambioSemestre(this)" >
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
                            <!-- ESPECIFICANCION SEMESTRE DISTINTO -->
                             <div id="dOtro" style="display:none;">
                                <label for="txtOtro">Especifique:</label>
                                <input type="text" name="txtOtro" id="txtOtro" placeholder="Especifique." class="form-control">
                           </div>
                   </div>
                       <!--CORREO ELECTRONICO-->
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">         
                         <div class="form-group" id="divEmail">
                         <label for="email">Correo electrónico :</label>
                          <div class="input-group">
                             <div class="input-group-addon">
                              <span class="glyphicon glyphicon-envelope" id="Correos"></span>
                             </div>
                             <input type="email" name="email" id="email" 
                             class="form-control" placeholder="Correo electrónico" 
                             tabindex="5" >
                          </div> 
                          <span class="help-block" id="error"></span>                            
                        </div>
                    </div>              
                    <!--CONTRASEñA-->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                        <div class="form-group" id="divPass">
                           
                          <label for="password"> Contraseña:</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <span class="glyphicon glyphicon-lock" id="Correos"></span>
                            </div>
                            <input type="password" name="password"  
                            id="popover" data-toggle="popover" 
                            data-content=" 1 letra mayuscula 1caracter 
                            especial alfanumerica longitud de 8 a 15 caracteres" 
                            data-placement="right" tabindex="7" class="form-control" 
                            placeholder="Contraseña" title="La contraseña debe contener:" >
                          </div> 
                          <span class="help-block" id="error"></span>    
                        </div>
                     </div>
                      <!--CONFIRMACION-->
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="form-group" id="divPassC">
                         <label for="passconfirm" class="control-label">Confirme contraseña:</label>
                         <div class="input-group">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock" id="Correos"></span>
                          </div>
                          <input type="password" name="passconfirm" id="passconfirm" tabindex="8" placeholder="Confirmar" class="form-control intento" >
                         </div> 
                        </div>
                       </div>
                       <!-- Genero -->
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" id="Genero">
                        <div class="form-group" >
                         <label for="rbtnSexo" class="control-label">Sexo:</label>
                         <fieldset>        
                        <label>
                            <input type="radio" name="Genero" value="H" > Hombre
                        </label>
                        <label>
                            <input type="radio" name="Genero" value="F" > Mujer
                        </label>
                        
                    </fieldset>
                        </div>
                       </div>
                   <!--botones--> 
                  <div class="form-group">                  
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login" id="btnRegistro" tabindex="0" class="form-control btn btn-success" value="Registrar"  >
                      </div>
                  </div>
                </form>         
            
             
           </div>
          </div>
    </div>
<!--ventana modal para login -->
     <div class="modal fade" id="myModal" role="dialog">
       <div class="modal-dialog">   
        <!-- Modal content-->
          <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Iniciar sesion.</h4>
             </div>
             <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-md-offset-0">
                    <div class="panel panel-login" style="border-color: green;">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-lg-12">
                              <form class="login-form " style="display: block;" role="form" action="sesion.php" method="POST">
                                  <div class="form-group">
                                    <input type="text" name="username" id="username2" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" name="password" id="password2" tabindex="2" class="form-control" placeholder="Contraseña">
                                  </div>
                                 <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember2">
                                    <label for="remember"> Recordarme</label><br/>
                                    <a href="registro.php">Registrarse.</a>
                                 </div>
                                 <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                      <input type="submit" name="login" id="login2" tabindex="4" class="form-control btn btn-success" value="Iniciar sesión">
                                    </div>
                                  </div>
                                </div>
                              </form>     
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
         </div>     
       </div>
     </div>

<!--SCRIPTS -->
<script>
      //FUNCION PARA AVILITAR CAMPO DE OTRO SEMESTRE 
       function CambioSemestre(sel) {
          var elemento=document.getElementById("dOtro");
          var genero = document.getElementById("Genero");
             if (sel.value == "Otro") {
                divT = document.getElementById("dOtro");
                 divT.style.display = "block";
                document.getElementById("txtOtro").focus();
                genero.classList.remove('col-lg-4');
                genero.classList.add('col-lg-5');
                 
            } else {

                divC = document.getElementById("dSemestre");
                divC.style.display = "block";

                divT = document.getElementById("dOtro");
                divT.style.display = "none";
                genero.classList.remove('col-lg-5');
                genero.classList.add('col-lg-4');
                
            }
        }
</script>
  <?php
  include_once 'php/footerHTML.php';
  ?>
