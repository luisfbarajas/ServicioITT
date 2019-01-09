$(document).ready(function () {
    $("#btnRegistroExamen").click(function (e) {
        e.preventDefault();
        var id = $("#Userid").text(),
            FechaExamen = $("#Fechas").val(),
            FolioP = $("#FolioP").val(),
            FechaPago = $("#fechaP").val(),
            name = $("#nombre").val(),
            lastName = $("#Apellidos").val(),
            semestre = $("#Semestre").val(),
            carrera = $("#Carrera").val(),
            email = $("#email").val(),
            nControl = $("#Nctrl").val();

        var datos = {
            "id": id,
            "FechaExamen": FechaExamen,
            "FolioP": FolioP,
            "FechaPago": FechaPago
        }
        var completeData = {
            "id": id,
            "FechaExamen": FechaExamen,
            "FolioP": FolioP,
            "FechaPago": FechaPago,
            "nombre": name,
            "apellido": lastName,
            "semestre": semestre,
            "carrera": carrera,
            "email": email,
            "nControl": nControl
        };
        console.log(datos);

        var Registro = $.ajax({
            url: "php/RegistrarExamen.php",
            data: datos,
            method: "POST",
            beforeSend: function () {
                console.log("Enviando datos");
            },
            success: function (data) {
                console.log("Excito en envio de info..."+data);
                if (data != 1) {
                    console.log(data);
                    alert(data);
                    location.reload();
                }else{
                    ajaxGenerarQR(completeData);
                }
            },
            error: function () {
                console.log("Fallo en envio");
            }
        });
function ajaxGenerarQR(completeData)
{
    $.ajax({
        url: "php/qrGenerator.php",
        data: completeData,
        method: "POST",
        beforeSend: console.log("Enviando QR"),
        success: function (data) {
            if (data) {
                location.href = `RExamenExito.php?id=${id}`;
            } else {
                console.log("Error en generacion de QR");
            }
        },
        error: function () {
            console.log("Error en QR");
        }
    }); 
}
        // Registro.promise().done(function () {
        //     //Generacion de QR
        //     $.ajax({
        //         url: "php/qrGenerator.php",
        //         data: completeData,
        //         method: "POST",
        //         beforeSend: console.log("Enviando QR"),
        //         success: function (data) {
        //             if (data) {
        //                 location.href = `RExamenExito.php?id=${id}`;
        //             } else {
        //                 console.log("Error en generacion de QR");
        //             }
        //         },
        //         error: function () {
        //             console.log("Error en QR");
        //         }
        //     });
        // });
    });

    //Configuracion de calendario
    $('#Fechas').click(function () {
        $("#Fechas").pickadate({
            format: "yyyy/mm/dd",
            // Strings and translations
            monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            weekdaysFull: ['Domigo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
            weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vier', 'Sab'],
            showMonthsShort: undefined,
            showWeekdaysFull: undefined,
            // Buttons
            today: 'Hoy',
            clear: 'Limpiar',
            close: 'Cerrar',
            editable: false,

        });
    });
});