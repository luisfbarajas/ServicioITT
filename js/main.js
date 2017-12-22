$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
   
$('#passconfirm').keyup(function(){
if ($('#passconfirm').val() === $('#popover').val()) {

	$("#iconotexto").remove();
		$("#passconfirm").parent().parent().attr("class","form-group has-success has-feedback");
		$("#passconfirm").parent().children("span").text("").remove();
		$("#passconfirm").parent().append("<br><span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
}
else{
	$("#iconotexto").remove();
		$("#passconfirm").parent().parent().attr("class","form-group has-error has-feedback");
	
		$("#passconfirm").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
}
});

$('#nombre').focusout(function(){
   var nameregex = /^[a-zA-Z ]+$/;

   if ($('#nombre').val().match(nameregex)) {
   	$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#nombre").parent().children("span").text("").remove();
		$("#nombre").parent().append("<br><span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
   }
   else{
   		$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#nombre").parent().children("span").text("").remove();
		$("#nombre").parent().append("<br><span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
   }

});


});

