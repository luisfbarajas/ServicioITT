console.log('funciona desde segundo javascript file');

$(document).ready(function () {
    $("#btnRegistroExamen").click(function (e) {
        e.preventDefault();
        var id = $("#Userid").text(),
            FechaExamen = $("#Fechas").val(),
            FolioP = $("#FolioP").val(),
            FechaPago = $("#fechaP").val();

        var datos = {
            "id": id,
            "FechaExamen": FechaExamen,
            "FolioP": FolioP,
            "FechaPago": FechaPago
        }
        console.log(datos);

        $.ajax({
            url: "php/RegistrarExamen.php",
            data: datos,
            method: "POST",
            beforeSend: function () {
                console.log("Enviando datos");
            },
            success: function (data) {
                console.log("Excito en envio de info...");
                if (data == 1) {
                    location.href = `RExamenExito.php?id=${id}`;
                } else {
                    console.log(data);
                    alert("Error en registro, intentelo nuevamente.");
                }

            },
            error: function () {
                console.log("Fallo en envio");
            }
        });
    });
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