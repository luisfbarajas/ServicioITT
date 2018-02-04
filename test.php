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
	<div class="container">
		 <!--NOMBRE-->
                  <div class="controls-group">
                    <label  class="control-label">Nombre(s):</label>
                    <div class="controls">
                      <div class="input-group">
                       <div class="input-group-addon">
                          <span class="glyphicon glyphicon-user" id="Correos"></span>
                       </div>
                    <input 
        required
        data-validation-required-message="Please fill out this field" 
        type="number" 
        data-validation-number-message="Must be a number" 
      />
                      <p class="help-block"></p>  
                       </div>                 
                  </div>
<div class="control-group">
    <label class="control-label">Nombre(s):</label>
    <div class="controls">
      <input 
        type="text" 
        data-validation-regex-regex="a.*z" 
        data-validation-regex-message="Nombre invalido." class="form-control" 
      />
      <p class="help-block"></p>
    </div>
  </div>
   <div class="control-group">
    <label class="control-label">Type something</label>
    <div class="controls">
      <input 
        required
        data-validation-required-message="Please fill out this field" 
        type="number" 
        data-validation-number-message="Must be a number" 
      />
      <p class="help-block"></p>
    </div>
  </div>
	</div>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        
		<script src="js/jqBootstrapValidation.js"></script>
<script>
	  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	   $(function() {
                $(".form-horizontal").find("input,textarea,select").jqBootstrapValidation(
                    {
                        preventSubmit: true,
                        submitError: function($form, event, errors) {
                            // Here I do nothing, but you could do something like display 
                            // the error messages to the user, log, etc.
                        },
                        submitSuccess: function($form, event) {
                            alert("OK");
                            event.preventDefault();
                        },
                        filter: function() {
                            return $(this).is(":visible");
                        }
                    }
                );
            });
        
	</script>

</body>
</html>