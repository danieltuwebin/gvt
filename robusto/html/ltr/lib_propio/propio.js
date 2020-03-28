function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function SoloNumeros(evt) {
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        //backspace
        return true;
    } else if (code >= 48 && code <= 57) {
        //is a number
        return true;
    } else {
        return false;
    }
}
$('.solo-numero').keyup(function() {
    this.value = (this.value + '').replace(/[^0-9]/g, '');
});

//http://jquery-manual.blogspot.com/2013/12/como-obtener-parametros-get-con.html?mensaje=ok
function $_GET(param) {
    // Obtener la url completa
    url = document.URL;
    // Buscar a partir del signo de interrogación ? 
    url = String(url.match(/\?+.+/));
    // limpiar la cadena quitándole el signo ?
    url = url.replace("?", "");
    // Crear un array con parametro=valor 
    url = url.split("&");
    //Recorrer el array url --> obtener el valor y dividirlo en dos partes a través del signo = 
    //0 = parametro
    //1 = valor
    //Si el parámetro existe devolver su valor   
    x = 0;
    while (x < url.length) {
        p = url[x].split("=");
        if (p[0] == param) {
            return decodeURIComponent(p[1]);
        }
        x++;
    }
}


window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 2000);


function Cerrar_Sesion(act) {
    $.ajax({
        type: "POST",
        url: "modulos/acceso.php",
        async: true,
        dataType: "html",
        data: ({
            action: act
        }),
        beforeSend: function() {
            //
        },
        success: function(data) {
            var url = "login.php";
            $(location).attr('href', url);
        },
        complete: function() {
            //
        }
    });
}

function limpiaForm(miForm) {
    // recorremos todos los campos que tiene el formulario
    $(':input', miForm).each(function() {
        var type = this.type;
        var tag = this.tagName.toLowerCase();
        //limpiamos los valores de los campos…
        if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'hidden' || type == 'number')
            this.value = '';
        // excepto de los checkboxes y radios, le quitamos el checked
        // pero su valor no debe ser cambiado
        else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
        // los selects le ponesmos el indice a -
        else if (tag == 'select')
            this.selectedIndex = -1;
    });
}


function MostrarFechaActual() {
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth() + 1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if (dia < 10)
        dia = '0' + dia; //agrega cero si el menor de 10
    if (mes < 10)
        mes = '0' + mes //agrega cero si el menor de 10
    var FechaActual = ano + "-" + mes + "-" + dia;
    return FechaActual;

}


function test() {
    var x = 'test';
    return x;

}



/* BEGIN TEMPORAL */

/*
    function Obtener_Tablas_Clientes(act) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {
                //alert('ok');
                //$('#txt_ven_numcor').val('Cargando...');
            },
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $("#TablaClientes").append('<tr>' +
                        '<td class="text-truncate">' + json[i].Cliente_Id + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_NombreCompleto + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Dni + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_TelefonoCel + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Email + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Provincia + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Distrito + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Direccion + '</td>' +
                        '<td class="text-truncate"> <button type="button" class="btn btn-success btn-sm">' + 'Ver Detalle' + '</button> </td>' + '</tr>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }
*/

/* END TEMPORAL */