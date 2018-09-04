$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
 /***************************************
validacion de contraseña igual
********************************************/
$('#passconfirm').keyup(function(){
if ($('#passconfirm').val() === $('#popover').val()) {

	$("#iconotexto").remove();
		$("#passconfirm").parent().parent().attr("class","form-group has-success has-feedback");
		$("#passconfirm").parent().children("span").text("").remove();
		$("#passconfirm").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
}
else{
	$("#iconotexto").remove();
		$("#passconfirm").parent().parent().attr("class","form-group has-error has-feedback");
		$("#passconfirm").parent().children("span").text("").remove();
		$("#passconfirm").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
}
});
/**************************
Validacion de nombre
*****************************/
$('#Nombre').focusout(function(){
   var nameregex = /^[a-zA-Z ]{4,}$/;

   if ($('#Nombre').val().match(nameregex)) {
   	$("#iconoNombre").remove();
		$("#Nombre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#Nombre").parent().children("span").text("").remove();
		$("#Nombre").parent().append("<span id='iconoNombre' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoNombre").remove();
		$("#Nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#Nombre").parent().children("span").text("").remove();
		$("#Nombre").parent().append("<span id='iconoNombre' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
   });
/*************************
Validacion Apellido
***************************/
$('#Apellido').focusout(function(){
   var Apellido = /^[a-zA-Z ]{4,}$/;

   if ($('#Apellido').val().match(Apellido)) {
   	$("#iconoApellido").remove();
		$("#Apellido").parent().attr("class","form-group has-success has-feedback");
		$("#Apellido").parent().children("span").text("").remove();
		$("#Apellido").parent().append("<span id='iconoApellido' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoApellido").remove();
		$("#Apellido").parent().attr("class","form-group has-error has-feedback");
		$("#Apellido").parent().children("span").text("").remove();
		$("#Apellido").parent().append("<span id='iconoApellido' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
/***********************************
Validacion de correo institucional
************************************/
});

$('#email').keyup(function(){
   var nameregex2 = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;

   if ($('#email').val().match(nameregex2)) {
   	$("#iconoEmail").remove();
		$("#email").parent().parent().attr("class","form-group has-success has-feedback");
		$("#email").parent().children("span").text("").remove();
		$("#email").parent().append("<span id='iconoEmail' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoEmail").remove();
		$("#email").parent().parent().attr("class","form-group has-error has-feedback");
		$("#email").parent().children("span").text("").remove();
		$("#email").parent().append("<span id='iconoEmail' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
});
/****************************************
VALIDACION DE NUMERO DE CONTROL
*****************************************/
$('#NCtrl').keyup(function(){
   var control = /^[0-9]{8,}$/;

   if ($('#NCtrl').val().match(control)) {
   	$("#iconoNControl").remove();
		$("#NCtrl").parent().parent().attr("class","form-group has-success has-feedback");
		$("#NCtrl").parent().children("span").text("").remove();
		$("#NCtrl").parent().append("<span id='iconoNControl' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoNControl").remove();
		$("#NCtrl").parent().parent().attr("class","form-group has-error has-feedback");
		$("#NCtrl").parent().children("span").text("").remove();
		$("#NCtrl").parent().append("<span id='iconoNControl' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
});
/****************************************
VALIDACION DE CONTRASEÑA
*****************************************/
$('#popover').keyup(function(){
   var contra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;

   if ($('#popover').val().match(contra)) {
   	$("#iconoPass").remove();
		$("#popover").parent().parent().attr("class","form-group has-success has-feedback");
		$("#popover").parent().children("span").text("").remove();
		$("#popover").parent().append("<span id='iconoPass' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconoPass").remove();
		$("#popover").parent().parent().attr("class","form-group has-error has-feedback");
		$("#popover").parent().children("span").text("").remove();
		$("#popover").parent().append("<span id='iconoPass' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
});
/***************************************
VALIDACION DE SEMESTRE 
*****************************************/
$("#Semestre").focusout(function(){
	
	if ($("#Semestre").val() === "Otro") {
			$("#iconoSemestre").remove();
		$("#Semestre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#Semestre").parent().children("span").text("").remove();
		$("#Semestre").parent().append("<span id='iconoSemestre' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		//LLAMADA A FUNCION 
		otroSemestre();
		return false;		
	}
	else{
	$("#iconoSemestre").remove();		
		$("#Semestre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#Semestre").parent().children("span").text("").remove();
		$("#Semestre").parent().append("<span id='iconoSemestre' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
	}
});
/***********************************
FUNCION PARA VALIDACION DE OTRO SEMESTRE 
***********************************/
function otroSemestre(){
	$("#txtOtro").focusout(function(){
		//EXPRESION REGULAR 
		var Semestre= /^(\d){2}$/;
	if($("#txtOtro").val().match(Semestre) && $("#txtOtro").val() > 12){
$("#iconoSemestreOtro").remove();		
		$("#txtOtro").parent().attr("class","form-group has-success has-feedback");
		$("#txtOtro").parent().children("span").text("").remove();
		$("#txtOtro").parent().append("<span id='iconoSemestreOtro' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
			}
			else{
				$("#iconoSemestreOtro").remove();
		$("#txtOtro").parent().attr("class","form-group has-error has-feedback");
		$("#txtOtro").parent().children("span").text("").remove();
		$("#txtOtro").parent().append("<span id='iconoSemestreOtro' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;	
	}	   
});
	}
/************************************************
VALIDACION DE CARRERA
************************************************/
	$("#Carrera").focusout(function(){
			if ($("#Carrera").val() === "" || $("#Carrera").val()===""){
					$("#iconoCarrera").remove();
		$("#Carrera").parent().parent().attr("class","form-group has-error has-feedback");
		$("#Carrera").parent().children("span").text("").remove();
		$("#Carrera").parent().append("<span id='iconoCarrera' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
			}
			else{
				$("#iconoCarrera").remove();		
				$("#Carrera").parent().parent().attr("class","form-group has-success has-feedback");
				$("#Carrera").parent().children("span").text("").remove();
				$("#Carrera").parent().append("<span id='iconoCarrera' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
			}
	});

	/**************************************************
	 VALIDACION DE FOLIO DE PAGO 
	 ****************************************************/
	$("#FolioP").focusout(function(){
		var control = /^[0-9]{8,}$/;
		if($("#FolioP").val().match(control)){
			$("#iconoFolio").remove();
			$("#FolioP").parent().parent().attr("class","form-group has-success has-feedback");
			$("#FolioP").parent().children("span").text("").remove();
			$("#FolioP").parent().append("<span id='iconoFolio' class='glyphicon glyphicon-ok form-control-feedback'></span>");
			return true;
		}
		else{
			$("#iconoFolio").remove();		
			$("#FolioP").parent().parent().attr("class","form-group has-error has-feedback");
			$("#FolioP").parent().children("span").text("").remove();
			$("#FolioP").parent().append("<span id='iconoFolio' class='glyphicon glyphicon-remove form-control-feedback'></span>");
			return false;
		}
	});
	
	/**************************************************
	 VALIDACION DE FECHA DE PAGO 
	 ****************************************************/
	$("#fechaP").focusout(function(){
		var RegexFechaP = /^2(\d{3})(\/|-)(0[1-9]|1[0-2])(\/|-)([0-2][0-9]|3[0-1])T([0-1][0-9]|2[0-3])(:)([0-5][0-9])$/;

		if($("#fechaP").val().match(RegexFechaP)){
			$("#iconoFechaP").remove();
			$("#fechaP").parent().parent().attr("class","form-group has-success has-feedback");
			$("#fechaP").parent().children("span").text("").remove();
			$("#fechaP").parent().append("<span id='iconoFechaP' class='glyphicon glyphicon-ok form-control-feedback'></span>");
			return true;
		}
		else{
			$("#iconoFechaP").remove();		
			$("#fechaP").parent().parent().attr("class","form-group has-error has-feedback");
			$("#fechaP").parent().children("span").text("").remove();
			$("#fechaP").parent().append("<span id='iconoFechaP' class='glyphicon glyphicon-remove form-control-feedback'></span>");
			return false;
		}
	});
	/**************************************************
	DATEPICKER EN REGISTRO DE FECHAS
	 ****************************************************/
	$("#Fechas").datepicker({
		dateFormat: 'yy-mm-dd',
		// Primer dia de la semana - lunes
		firstDay: 1,
		// Días largo traducido
		dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
		// Dias cortos traducido
		dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
		// Nombres largos de los meses traducido
		monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
		// Nombres cortos de los meses traducido 
		monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec"],
		  //restinge fechas pasadas
		minDate: 0,
		onChangeMonthYear: function (year, month, inst) { $(".ui-state-default:contains('27')").attr("style", "background-color:green !important;color:white;") },
	  //quita fines de sem
		  beforeShowDay: $.datepicker.noWeekends
	}
	);
	$("#Fechas").focusin(function () {
		var x = 9;
		var d = 26;
		if (x >= 10) {
			$(".ui-state-default:contains('" + d + "')").attr("style", "background-color:red !important;color:white;");
		   
			
		}
		else {
			$(".ui-state-default:contains('27')").attr("style", "background-color:green !important;color:white;");
			$(".ui-state-default:contains('30')").attr("style", "background-color:green !important;color:white;");
		}
	});
	$("#Fechas").click(function () {
		var x = 15;
		var d = 26;
		if (x >= 10) {
			$(".ui-state-default:contains('" + d + "')").attr("style", "background-color:red !important;color:white;");


		}
		else {
			$(".ui-state-default:contains('27')").attr("style", "background-color:green !important;color:white;");
			$(".ui-state-default:contains('30')").attr("style", "background-color:green !important;color:white;");
		}
	});
	 //evita que se escriba en textbox
	 $("#Fechas").keypress(function (e) { return false; });

		/**************************************************
	Actualizacion de datos
	 ****************************************************/
	$("#btnUpdate").click(function(e){
		e.preventDefault();
		console.log("funciona");
		var nombre= $("#nombre").val(),apellido = $("#apellido").val(),correo =$("#email").val(),numero=$("#Nctrl").val()
		Semestre = $("#Semestre").val(),carrera = $("#Carrera").val(),Userid=$("#Userid").text();
		
		var datos = {"nombre": nombre, "apellido": apellido, "email":correo, "numero":numero, "semestre": Semestre,
		"carrera":carrera, "id" : Userid};
		console.log(Userid);
		$.ajax({
			url: "php/UpdateUser.php",
			method: "POST",
			data: datos,
			beforeSend:function(){console.log("Enviando...");},
			success: function(dato){console.log( dato);},
			error: function(){
				console.log("Error en envio");
			}
		});

	});
});
/*****************************************************
INICIO DE SESION
******************************************************/
$("#login").click(function(e){
	e.preventDefault();
	var username= $("#username").val(), pass= $("#password").val();
	var datosLog = {"username":username, "password": pass};
	$.ajax({
		url:"sesion.php",
		method: "POST",
		data: datosLog,
		beforeSend: function(){console.log("Iniciando sesion...");},
		success: function(dato){
			console.log("Sesion inicada");
			window.location.href="home.php";
		},
		error: function(){
			console.log("Error en inicio");
		}
	});
});
/**************************************************************
 REGISTRO DE USUARIO
 ****************************************************************/
$("#btnRegistro").click(function(e){

	e.preventDefault();
	//obtencion de valores
	var username = $("#Nombre").val(), userLastname = $("#Apellido").val(), Nctrl = $("#NCtrl").val(),
	carrera = $("#Carrera").val(), email = $("#email").val(), semestre = $("#Semestre").val(), contra = $("#popover").val(),
	contraConfim = $("#passconfirm").val(), genero = $('input:radio[name=Genero]:checked').val();
	if (semestre == "Otro" ){
		semestre = $("#txtOtro").val();
	}
	if(genero!="H"|| genero !="M"){
		genero=null;
	}
	//json para envio a php
	var datosRegistro = {"Nombre": username, "Apellido": userLastname, "Nctrl": Nctrl,
	"carrera": carrera, "email": email, "semestre": semestre,"pass": contra, "passconfirm": contraConfim,
	"genero": genero};
	if(confirm("Se guardaran los datos. ¿Desea continuar?.")){
		$.ajax({
			url: "php/insercion.php",
			method: "POST",
			data: datosRegistro,
			beforeSend: function(){console.log("Registrando...");},
			success: function(dato){
				//valores retornados 
				//0=exito
				//1=Contraseña debil/No coinciden.
				//2=Solo se aceptan numeros/Numero de control ya registrado.
				//3=Correo invalido/Ya registrado.
				//4=Todos los campos son necesarios.
				if(dato=="0"){
					console.log("Registrado con exito");
					//Quitar iconos de validacion
					$("#iconotexto").remove();
					$("#iconoNombre").remove();
					$("#iconoApellido").remove();
					$("#iconoEmail").remove();
					$("#iconoNControl").remove();
					$("#iconoSemestre").remove();
					$("#iconoSemestreOtro").remove();
					$("#iconoCarrera").remove();	
					$("#iconoPass").remove();
					//quitar clases de validacion
					$("#divNombre").removeClass("has-success has-feedback has-error");
					$("#divApellido").removeClass("has-success has-feedback has-error");
					$("#divCarrera").removeClass("has-success has-feedback has-error");
					$("#divEmail").removeClass("has-success has-feedback has-error");
					$("#divNctrl").removeClass("has-success has-feedback has-error");
					$("#divSemestre").removeClass("has-success has-feedback has-error");
					$("#divPass").removeClass("has-success has-feedback has-error");	
					$("#divPassC").removeClass("has-success has-feedback has-error");
					$("#dOtro").removeClass("has-success has-feedback has-error");
					//mensaje de registro
					$("#divmsj").show("slow").text("Usuario registrado").addClass("alert alert-success alert-dismissible msjAlerta").attr("role","alert");
					//reinicio de formulario
					document.getElementById("Registro").reset();
				}
				else{
					if(dato=="1"){
						//mensaje de registro
					$("#divmsj").show("slow").text("Contraseña debil/No coinciden.").addClass("alert alert-danger alert-dismissible msjAlerta").attr("role","alert");
					}
					if(dato=="2"){
						//mensaje de registro
					$("#divmsj").show("slow").text("Solo se aceptan numeros/Numero de control ya registrado.").addClass("alert alert-danger alert-dismissible msjAlerta").attr("role","alert");
					}
					if(dato=="3"){
						//mensaje de registro
					$("#divmsj").show("slow").text("Correo invalido/Ya registrado.").addClass("alert alert-danger alert-dismissible msjAlerta").attr("role","alert");
					}
					if(dato=="4"){
						//mensaje de registro
					$("#divmsj").show("slow").text("Todos los campos son necesarios.").addClass("alert alert-danger alert-dismissible msjAlerta").attr("role","alert");
					}
				}
			},
			error: function(){
				console.log("Ocurrio un error");
			}
		});
	}
});
/*******************************************************************
AGREGAR NUEVA FECHA
********************************************************************/
$("#btnAddFecha").click(function(e){
	e.preventDefault();
	var accion=1, fecha= $("#txtAddFecha").val(),hora = $("#txtAddHr").val(), unidad = $("#txtAddUnidad").val(),
	salon = $("#txtAddSalon").val(), cupo = $("#txtAddCupo").val();

	var datosAddFecha = {"accion": accion,"fecha":fecha,"hora": hora, "unidad": unidad, "salon": salon
	,"cupo": cupo};
	
	console.log(datosAddFecha);
	$.ajax({
		url: "php/Dates.php",
		method: "POST",
		data: datosAddFecha,
		beforeSend: function(){console.log("Enviando...");},
		success: function(dato){
			console.log("Enviado...");
			alert("Fecha agregada");
			$("#tablafechas").load(" #tablafechas");
		},
		error: function(){
			console.log("Error...");
		}
	});

});
$("#abrir").click(function(e){
e.preventDefault();
$("#miModal").modal();
});
/***********************
 * EDICION DE FECHAS 
 * 
 **********************/
$("#btnEditFecha").click(function(e){
e.preventDefault();
var id = getParameterByName("id"), fecha=$("#txtEditFecha").val(),Hora = $("#txtEditHr").val(),
 Unidad = $("#txtEditUnidad").val(), Salon = $("#txtEditSalon").val(), cupo = $("#txtEditCupo").val();
 var datos = {
	"accion": 2,
	"id": id,
	"fecha": fecha,
	"hora": Hora,
	"unidad": Unidad,
	"salon" : Salon,
	"cupo": cupo
 };
$.ajax({
	url: "php/Dates.php",
	method: "POST",
	data: datos,
	beforeSend: function(){console.log("Enviando...");},
	success: function(dato){
		console.log("Excito...");
		alert("Fecha Editada");
		$("#tablafechas").load(" #tablafechas");
		//regresa a la opcion de agregar
		window.location.assign(window.location.href.replace(window.location.search,''));
	},
	error: function(){
		console.log("Error...");
	}
});
});
//obtiene valor del id en el url
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
/***********************
 *  FIN EDICION DE FECHAS 
 * 
 **********************/
 /*******BORRAR FECHA****************/
//  $("#lkEliminar").on('click',function(e){
// e.preventDefault();
// var id= getParameterByName("id");
// console.log(id);

//  });

function pregunta(e){


}


 /********************************* */