$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
   /*
validacion de contraseña igual
*/
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
/*
Validacion de nombre
*/
$('#nombre').focusout(function(){
   var nameregex = /^[a-zA-Z ]{4,}$/;

   if ($('#nombre').val().match(nameregex)) {
   	$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#nombre").parent().children("span").text("").remove();
		$("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#nombre").parent().children("span").text("").remove();
		$("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
   });
/*************************
Validacion Apellido
***************************/
$('#Apellido').focusout(function(){
   var Apellido = /^[a-zA-Z ]{4,}$/;

   if ($('#Apellido').val().match(Apellido)) {
   	$("#iconotexto").remove();
		$("#Apellido").parent().attr("class","form-group has-success has-feedback");
		$("#Apellido").parent().children("span").text("").remove();
		$("#Apellido").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconotexto").remove();
		$("#Apellido").parent().attr("class","form-group has-error has-feedback");
		$("#Apellido").parent().children("span").text("").remove();
		$("#Apellido").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }
/*
Validacion de correo institucional
*/
});

$('#email').keyup(function(){
   var nameregex2 = /^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})?@tectijuana\.edu\.mx$/;

   if ($('#email').val().match(nameregex2)) {
   	$("#iconotexto").remove();
		$("#email").parent().parent().attr("class","form-group has-success has-feedback");
		$("#email").parent().children("span").text("").remove();
		$("#email").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconotexto").remove();
		$("#email").parent().parent().attr("class","form-group has-error has-feedback");
		$("#email").parent().children("span").text("").remove();
		$("#email").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }


});
/****************************************
VALIDACION DE NUMERO DE CONTROL
*****************************************/
$('#NCtrl').keyup(function(){
   var control = /^[0-9]{8,}$/;

   if ($('#NCtrl').val().match(control)) {
   	$("#iconotexto").remove();
		$("#NCtrl").parent().parent().attr("class","form-group has-success has-feedback");
		$("#NCtrl").parent().children("span").text("").remove();
		$("#NCtrl").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconotexto").remove();
		$("#NCtrl").parent().parent().attr("class","form-group has-error has-feedback");
		$("#NCtrl").parent().children("span").text("").remove();
		$("#NCtrl").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }


});
/****************************************
VALIDACION DE CONTRASEÑA
*****************************************/
$('#popover').keyup(function(){
   var contra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;

   if ($('#popover').val().match(contra)) {
   	$("#iconotexto").remove();
		$("#popover").parent().parent().attr("class","form-group has-success has-feedback");
		$("#popover").parent().children("span").text("").remove();
		$("#popover").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconotexto").remove();
		$("#popover").parent().parent().attr("class","form-group has-error has-feedback");
		$("#popover").parent().children("span").text("").remove();
		$("#popover").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }


});
});

