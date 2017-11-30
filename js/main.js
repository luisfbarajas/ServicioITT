$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
    	 // name validation
		  var nameregex = /^[a-zA-Z ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#Registro").submit(function(e) {
e.preventDefault();}).validate({
debug: false,
					
		  rules:
		  {
				nombre: {
					required: true,
					validname: true,
					minlength: 4
				},
				Apellido: {
					required: true,
					validemail: true
				},
				password: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				passconfirm: {
					required: true,
					equalTo: '#password'
				},
		   },
		   messages:
		   {
				nombre: {
					required: "Ingresa tu nombre",
					validname: "El nombre no puede contener numeros/simbolos",
					
					  },
			    Apellido: {
					  required: "Please Enter Email Address",
					  validname: "El apellido no puede contener numeros/simbolos",
					   },
				password:{
					required: "Ingresa una contraseña",
					minlength: "Debe tener un minimo de 8 caracteres"
					},
				passconfirm:{
					required: "Repite la contraseña.",
					equalTo: "La contraseña no coincide."
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   		submitHandler: function(form){
					
					alert('submitted');
					form.submit();
					//var url = $('#register-form').attr('action');
					//location.href=url;
					
				}
				
				/*submitHandler: function() 
							   { 
							   		alert("Submitted!");
									$("#register-form").resetForm(); 
							   }*/
		   
		   }); 
		   
		   
		   /*function submitForm(){
			 
			   
			   /*$('#message').slideDown(200, function(){
				   
				   $('#message').delay(3000).slideUp(100);
				   $("#register-form")[0].reset();
				   $(element).closest('.form-group').find("error").removeClass("has-success");
				    
			   });
			   
			   alert('form submitted...');
			   $("#register-form").resetForm();
			      
		   }*/
});


