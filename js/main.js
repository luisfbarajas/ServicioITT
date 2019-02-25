$(document).ready(function() {
  // 	/************POPOVER***************** */
  // 	$('#popover').focusin(function(){
  // 		$('#popover').popover({ trigger: "click"});
  // 		setTimeout("$('.popover').hide();", 5000);
  // 	});
  // 	/**************************** */

  /***************************************
validacion de contraseña igual
********************************************/
  $("#passconfirm").keyup(function() {
    if ($("#passconfirm").val() === $("#popover").val()) {
      $("#iconotexto").remove();
      $("#passconfirm")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#passconfirm")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#passconfirm")
        .parent()
        .append(
          "<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconotexto").remove();
      $("#passconfirm")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#passconfirm")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#passconfirm")
        .parent()
        .append(
          "<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });
  /**************************
Validacion de nombre
*****************************/
  $("#Nombre").focusout(function() {
    var nameregex = /^[a-zA-Z]{1,}$/;

    if (
      $("#Nombre")
        .val()
        .match(nameregex)
    ) {
      $("#iconoNombre").remove();
      $("#Nombre")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#Nombre")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Nombre")
        .parent()
        .append(
          "<span id='iconoNombre' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoNombre").remove();
      $("#Nombre")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#Nombre")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Nombre")
        .parent()
        .append(
          "<span id='iconoNombre' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });
  /*************************
Validacion Apellido
***************************/
  $("#Apellido").focusout(function() {
    var Apellido = /^[a-zA-Z]{1,}$/;

    if (
      $("#Apellido")
        .val()
        .match(Apellido)
    ) {
      $("#iconoApellido").remove();
      $("#Apellido")
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#Apellido")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Apellido")
        .parent()
        .append(
          "<span id='iconoApellido' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoApellido").remove();
      $("#Apellido")
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#Apellido")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Apellido")
        .parent()
        .append(
          "<span id='iconoApellido' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
    /***********************************
Validacion de correo 
************************************/
  });

  $("#email").keyup(function() {
    var nameregex2 = /^[a-zA-Z(0-9)?]{4,}((\.)?[a-zA-Z(0-9)?]{3,})*@([a-zA-Z]{2,})\.([a-zA-Z]{2,3})(\.([a-zA-Z]{2,3}))?$/;

    if (
      $("#email")
        .val()
        .match(nameregex2)
    ) {
      $("#iconoEmail").remove();
      $("#email")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#email")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#email")
        .parent()
        .append(
          "<span id='iconoEmail' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoEmail").remove();
      $("#email")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#email")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#email")
        .parent()
        .append(
          "<span id='iconoEmail' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });
  /****************************************
VALIDACION DE NUMERO DE CONTROL
*****************************************/
  $("#NCtrl").keyup(function() {
    var control = /^[c|C]{1}[0-9]{8}$|^[0-9]{8}$/;

    if (
      $("#NCtrl")
        .val()
        .match(control)
    ) {
      $("#iconoNControl").remove();
      $("#NCtrl")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#NCtrl")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#NCtrl")
        .parent()
        .append(
          "<span id='iconoNControl' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoNControl").remove();
      $("#NCtrl")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#NCtrl")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#NCtrl")
        .parent()
        .append(
          "<span id='iconoNControl' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });
  /****************************************
VALIDACION DE CONTRASEÑA
*****************************************/
  $("#popover").keyup(function() {
    if (!$("#popover").val() == null || !$("#popover").val() == "") {
      $("#iconoPass").remove();
      $("#popover")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#popover")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#popover")
        .parent()
        .append(
          "<span id='iconoPass' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoPass").remove();
      $("#popover")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#popover")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#popover")
        .parent()
        .append(
          "<span id='iconoPass' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });
  /***************************************
VALIDACION DE SEMESTRE 
*****************************************/
  $("#Semestre").focusout(function() {
    if ($("#Semestre").val() === "Otro") {
      $("#iconoSemestre").remove();
      $("#Semestre")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#Semestre")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Semestre")
        .parent()
        .append(
          "<span id='iconoSemestre' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      //LLAMADA A FUNCION
      otroSemestre();
      return false;
    } else {
      $("#iconoSemestre").remove();
      $("#Semestre")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#Semestre")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Semestre")
        .parent()
        .append(
          "<span id='iconoSemestre' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    }
  });
  /***********************************
FUNCION PARA VALIDACION DE OTRO SEMESTRE 
***********************************/
  function otroSemestre() {
    $("#txtOtro").focusout(function() {
      //EXPRESION REGULAR
      var Semestre = /^(\d){2}$/;
      if (
        $("#txtOtro")
          .val()
          .match(Semestre) &&
        $("#txtOtro").val() > 12
      ) {
        $("#iconoSemestreOtro").remove();
        $("#txtOtro")
          .parent()
          .attr("class", "form-group has-success has-feedback");
        $("#txtOtro")
          .parent()
          .children("span")
          .text("")
          .remove();
        $("#txtOtro")
          .parent()
          .append(
            "<span id='iconoSemestreOtro' class='glyphicon glyphicon-ok form-control-feedback'></span>"
          );
        return true;
      } else {
        $("#iconoSemestreOtro").remove();
        $("#txtOtro")
          .parent()
          .attr("class", "form-group has-error has-feedback");
        $("#txtOtro")
          .parent()
          .children("span")
          .text("")
          .remove();
        $("#txtOtro")
          .parent()
          .append(
            "<span id='iconoSemestreOtro' class='glyphicon glyphicon-remove form-control-feedback'></span>"
          );
        return false;
      }
    });
  }
  /************************************************
VALIDACION DE CARRERA
************************************************/
  $("#Carrera").focusout(function() {
    if ($("#Carrera").val() === "" || $("#Carrera").val() === "") {
      $("#iconoCarrera").remove();
      $("#Carrera")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#Carrera")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Carrera")
        .parent()
        .append(
          "<span id='iconoCarrera' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    } else {
      $("#iconoCarrera").remove();
      $("#Carrera")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#Carrera")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#Carrera")
        .parent()
        .append(
          "<span id='iconoCarrera' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    }
  });

  /**************************************************
	 VALIDACION DE FOLIO DE PAGO 
	 ****************************************************/
  $("#FolioP").focusout(function() {
    var control = /^[0-9]{5,}$/;
    if (
      $("#FolioP")
        .val()
        .match(control)
    ) {
      $("#iconoFolio").remove();
      $("#FolioP")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#FolioP")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#FolioP")
        .parent()
        .append(
          "<span id='iconoFolio' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoFolio").remove();
      $("#FolioP")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#FolioP")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#FolioP")
        .parent()
        .append(
          "<span id='iconoFolio' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });

  /**************************************************
	 VALIDACION DE FECHA DE PAGO 
	 ****************************************************/
  $("#fechaP").focusout(function() {
    var RegexFechaP = /^2(\d{3})(\/|-)(0[1-9]|1[0-2])(\/|-)([0-2][0-9]|3[0-1])T([0-1][0-9]|2[0-3])(:)([0-5][0-9])$/;

    if (
      $("#fechaP")
        .val()
        .match(RegexFechaP)
    ) {
      $("#iconoFechaP").remove();
      $("#fechaP")
        .parent()
        .parent()
        .attr("class", "form-group has-success has-feedback");
      $("#fechaP")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#fechaP")
        .parent()
        .append(
          "<span id='iconoFechaP' class='glyphicon glyphicon-ok form-control-feedback'></span>"
        );
      return true;
    } else {
      $("#iconoFechaP").remove();
      $("#fechaP")
        .parent()
        .parent()
        .attr("class", "form-group has-error has-feedback");
      $("#fechaP")
        .parent()
        .children("span")
        .text("")
        .remove();
      $("#fechaP")
        .parent()
        .append(
          "<span id='iconoFechaP' class='glyphicon glyphicon-remove form-control-feedback'></span>"
        );
      return false;
    }
  });

  /**************************************************
	Actualizacion de datos
	 ****************************************************/
  $("#btnUpdate").click(function(e) {
    e.preventDefault();
    console.log("funciona");
    var nombre = $("#nombre").val(),
      apellido = $("#apellido").val(),
      correo = $("#email").val(),
      numero = $("#Nctrl").val();
    (Semestre = $("#Semestre").val()),
      (carrera = $("#Carrera").val()),
      (Userid = $("#Userid").text());

    var datos = {
      nombre: nombre,
      apellido: apellido,
      email: correo,
      numero: numero,
      semestre: Semestre,
      carrera: carrera,
      id: Userid
    };
    console.log(Userid);
    $.ajax({
      url: "php/UpdateUser.php",
      method: "POST",
      data: datos,
      beforeSend: function() {
        console.log("Enviando...");
      },
      success: function(dato) {
        console.log(dato);
      },
      error: function() {
        console.log("Error en envio");
      }
    });
  });
});
/*****************************************************
INICIO DE SESION
******************************************************/
$("#login").click(function(e) {
  e.preventDefault();
  var username = $("#username").val(),
    pass = $("#password").val();
  var datosLog = { username: username, password: pass };
  $.ajax({
    url: "sesion.php",
    method: "POST",
    data: datosLog,
    beforeSend: function() {
      console.log("Iniciando sesion...");
    },
    success: function(dato) {
      console.log("Validando sesion");
      if (dato) {
        dato = null;
        window.location.href = "home.php";
      } else {
        alert("Correo o contraseña incorrectos");
      }
    },
    error: function() {
      console.log("Error en inicio");
    }
  });
});
/**************************************************************
 REGISTRO DE USUARIO
 ****************************************************************/
$("#btnRegistro").click(function(e) {
  e.preventDefault();
  //obtencion de valores
  var username = $("#Nombre").val(),
    userLastname = $("#Apellido").val(),
    Nctrl = $("#NCtrl").val(),
    carrera = $("#Carrera").val(),
    email = $("#email").val(),
    semestre = $("#Semestre").val(),
    contra = $("#popover").val(),
    contraConfim = $("#passconfirm").val(),
    genero = $("input:radio[name=Genero]:checked").val();
  if (semestre == "Otro") {
    semestre = $("#txtOtro").val();
  }
  if (genero != "H" && genero != "F") {
    genero = null;
  }
  //json para envio a php
  var datosRegistro = {
    Nombre: username,
    Apellido: userLastname,
    Nctrl: Nctrl,
    carrera: carrera,
    email: email,
    semestre: semestre,
    pass: contra,
    passconfirm: contraConfim,
    genero: genero
  };
  console.log(datosRegistro);
  if (confirm("Se guardaran los datos. ¿Desea continuar?.")) {
    $.ajax({
      url: "php/insercion.php",
      method: "POST",
      data: datosRegistro,
      beforeSend: function() {
        console.log("Registrando...");
      },
      success: function(dato) {
        console.log(dato);
        if (dato === 1 || dato === "1") {
          //mensaje de registro
          $("#divmsj").removeClass(
            "alert alert-danger alert-dismissible msjAlerta"
          );
          $("#divmsj")
            .show("slow")
            .text("Usuario registrado")
            .addClass("alert alert-success alert-dismissible msjAlerta")
            .attr("role", "alert");
          setTimeout("$('#divmsj').hide();", 5000);
          resetForm();
        } else {
          // mensaje de registro
          $("#divmsj").removeClass(
            "alert alert-success alert-dismissible msjAlerta"
          );
          $("#divmsj")
            .show("slow")
            .text(dato)
            .addClass("alert alert-danger alert-dismissible msjAlerta")
            .attr("role", "alert");
          setTimeout("$('#divmsj').hide();", 5000);
        }
      },
      error: function() {
        console.log("Ocurrio un error");
      }
    });
  }
  function resetForm() {
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

    //reinicio de formulario
    document.getElementById("Registro").reset();
  }
});
/*******************************************************************
AGREGAR NUEVA FECHA
********************************************************************/
$("#btnAddFecha").click(function(e) {
  e.preventDefault();
  var accion = 1,
    fecha = $("#txtAddFecha").val(),
    hora = $("#txtAddHr").val(),
    unidad = $("#txtAddUnidad").val(),
    salon = $("#txtAddSalon").val(),
    cupo = $("#txtAddCupo").val();
    id =  0;

  var datosAddFecha = {
    accion: accion,
    fecha: fecha,
    hora: hora,
    unidad: unidad,
    salon: salon,
    cupo: cupo,
    id:id
  };

  console.log(datosAddFecha);
  $.ajax({
    url: "php/Dates.php",
    method: "POST",
    data: datosAddFecha,
    beforeSend: function() {
      console.log("Enviando...");
    },
    success: function(dato) {
      alert("Fecha agregada");
      $("#tablafechas").load(" #tablafechas");
    },
    error: function() {
      console.log("Error...");
    }
  });
});
$("#abrir").click(function(e) {
  e.preventDefault();
  $("#miModal").modal();
});
/***********************
 * EDICION DE FECHAS
 *
 **********************/
$("#btnEditFecha").click(function(e) {
  e.preventDefault();
  var id = getParameterByName("id"),
    fecha = $("#txtEditFecha").val(),
    Hora = $("#txtEditHr").val(),
    Unidad = $("#txtEditUnidad").val(),
    Salon = $("#txtEditSalon").val(),
    cupo = $("#txtEditCupo").val();
  var datos = {
    accion: 2,
    id: id,
    fecha: fecha,
    hora: Hora,
    unidad: Unidad,
    salon: Salon,
    cupo: cupo
  };
  $.ajax({
    url: "php/Dates.php",
    method: "POST",
    data: datos,
    beforeSend: function() {
      console.log("Enviando...");
    },
    success: function(dato) {
      console.log("Excito...");
      alert("Fecha Editada");
      $("#tablafechas").load(" #tablafechas");
      //regresa a la opcion de agregar
      window.location.assign(
        window.location.href.replace(window.location.search, "")
      );
    },
    error: function() {
      console.log("Error...");
    }
  });
});
//obtiene valor del id en el url
function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
  return results === null
    ? ""
    : decodeURIComponent(results[1].replace(/\+/g, " "));
}
