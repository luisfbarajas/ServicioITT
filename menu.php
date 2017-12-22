<nav class="navbar navbar-default navbar-fixed-top" id="mainNav" style="border-color: green; border-bottom-width: 5px; margin-left: : 20px; width: 100%;">
          <div class="container-fluid ">
              <div class="navbar-header ">
                      
                <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border-color: green; ">

                      <span class="icon-bar" style="background-color: green;"></span>
                      <span class="icon-bar" style="background-color: green;"></span>
                      <span class="icon-bar" style="background-color: green;"></span>
                  </button>
                  <a class="navbar-brand" href="index.php" style="position: absolute;">Departamento de ingles.</a>  
              </div>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
                  <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
                   <li><a href="#">Fechas</a></li>
                   <li><a href="Proceso.php">Proceso</a></li>
              </ul>
          </div>
      </nav>


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
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Recordarme</label><br/>
                    <a href="registro.php">Registrarse.</a>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-success" value="Iniciar sesión">
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