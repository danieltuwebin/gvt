    //DECLARACIÓN DE VARIABLES
    var Usuario_Session = localStorage.getItem('Usuario');

    /* BEGIN FUNCIONES GENERALES */
    $('#Salir').click(function() {
        Cerrar_Sesion("salir");
    });
    /* END FUNCIONES GENERALES */
    function Obtener_Nombre() {
        $("#NombreUsuario").append(Usuario_Session);
    }

    function ActivarBotones() {
        $("#btnLimpiar").show();
        $("#btnActivar").hide();
        $("#btngrabar").show();
    }

    function DesactivarBotones() {
        $("#btnLimpiar").hide();
        $("#btnActivar").show();
        $("#btngrabar").hide();
    }

    function Actualizar() {
        limpiaForm($("#FormularioCliente"));
        Obtener_Provincia('MostrarProvincia');
        Obtener_Distrito('MostrarDistrito', 1)
        $("#CboProvincia").change(function() {
            Obtener_Distrito('MostrarDistrito', $('#CboProvincia').val());
        });
        ActivarBotones();
    }

    function Habilita_Desabilita(boolLimpiar, boolGrabar) {
        $("#btnLimpiar").attr('disabled', boolLimpiar);
        $("#btngrabar").attr('disabled', boolGrabar);
        //$("#btnAgendar").attr('disabled', boolAgendar);
    }

    function Obtener_Provincia(act) {
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
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboProvincia").empty();
                $.each(json, function(i, item) {
                    $("#CboProvincia").append('<option value="' + json[i].Provincia_Id + '">' + json[i].Provincia_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Distrito(act, IdProvincia) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdProvincia: IdProvincia
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboDistrito").empty();
                $.each(json, function(i, item) {
                    $("#CboDistrito").append('<option value="' + json[i].Distrito_Id + '">' + json[i].Distrito_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function ValidaCamposObligatorios(Nombre, Apellido, Celular, Direccion) {
        if (Nombre.length == 0) {
            alert('El campo nombre es obligatorio');
            $("#Txt_Nombre").focus();
            return 0;
        } else {
            if (Apellido.length == 0) {
                alert('El campo apellido es obligatorio');
                $("#Txt_Apellido").focus();
                return 0;
            } else {
                if (Celular.length == 0) {
                    alert('El campo celular es obligatorio');
                    $("#Txt_TelCelular").focus();
                    return 0;
                } else {
                    if (Direccion.length == 0) {
                        alert('El campo celular es obligatorio');
                        $("#Txt_Direccion").focus();
                        return 0;
                    } else {
                        return 1;
                    }
                }
            }
        }
    }

    $("#btnLimpiar").click(function() {
        Habilita_Desabilita(true, false)
        limpiaForm($("#FormularioCliente"));
    });
    $("#btngrabar").click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().toUpperCase().trim(),
            $('#Txt_Apellido').val().toUpperCase().trim(),
            $('#Txt_TelCelular').val().toUpperCase().trim(),
            $('#Txt_Direccion').val().toUpperCase().trim());
        if (Id == 1) {
            Grabar_Cliente("GrabarCliente",
                $("#Txt_Nombre").val().toUpperCase().trim(),
                $("#Txt_Apellido").val().toUpperCase().trim(),
                $("#Txt_Dni").val().toUpperCase().trim(),
                $("#Txt_Email").val().toUpperCase().trim(),
                $("#Txt_TelFijo").val().toUpperCase().trim(),
                $("#Txt_TelCelular").val().toUpperCase().trim(),
                $("#CboProvincia").val().toUpperCase().trim(),
                $("#CboDistrito").val().toUpperCase().trim(),
                $("#Txt_Direccion").val().toUpperCase().trim(),
                $("#Txt_Notas").val().toUpperCase().trim(),
                Usuario_Session
            )
        }
    });

    function Grabar_Cliente(act, nombre, apellido, dni, email, telfijo, telcelular, provincia, distrito, direccion, notas, usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nomb: nombre,
                Ape: apellido,
                Dni: dni,
                Email: email,
                TelFijo: telfijo,
                TelCelu: telcelular,
                Provincia: provincia,
                Distrito: distrito,
                Direccion: direccion,
                Notas: notas,
                Usuario: usuario,
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                $("#Resultado_Grabacion").show();
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Nuevo cliente registrado correctamente</strong>' +
                        '</div>')
                } else if (data == 2) {
                    Obtener_Datos_cliente('MostrarClientexDni', $("#Txt_Dni").val(), 1);
                    $("#Modal_Pregunta").modal("show");
                } else if (data == 3) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>El numero de DNI registrado ya fue registrado en el sistema</strong>' +
                        '</div>')
                } else {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Lo sentimos ocurrio un error en el proceso de grabación</strong>' +
                        '</div>')
                }
                $("#Resultado_Grabacion").fadeTo(2000, 500).slideUp(500, function() {
                    $("#Resultado_Grabacion").slideUp(500);
                });
            },
            complete: function() {
                Habilita_Desabilita(false, true)
            }
        });
    }

    $('#btnActivar').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().toUpperCase().trim(),
            $('#Txt_Apellido').val().toUpperCase().trim(),
            $('#Txt_TelCelular').val().toUpperCase().trim(),
            $('#Txt_Direccion').val().toUpperCase().trim());
        if (Id == 1) {
            Editar_Cliente("EditarCliente",
                $("#Txt_Nombre").val().toUpperCase().trim(),
                $("#Txt_Apellido").val().toUpperCase().trim(),
                $('#Txt_Dni').val().trim(),
                $("#Txt_Email").val().toUpperCase().trim(),
                $("#Txt_TelFijo").val().toUpperCase().trim(),
                $("#Txt_TelCelular").val().toUpperCase().trim(),
                $("#CboProvincia").val().toUpperCase().trim(),
                $("#CboDistrito").val().toUpperCase().trim(),
                $("#Txt_Direccion").val().toUpperCase().trim(),
                $("#Txt_Notas").val().toUpperCase().trim(),
                '1',
                Usuario_Session,
                $('#Txt_Codigo').val()
            )
            $("#Resultado_Grabacion").show();
            ActivarBotones();
        }
    });

    function Editar_Cliente(act, nombre, apellido, dni, email, telfijo, telcelular, provincia, distrito, direccion, notas, estado, usuario, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nomb: nombre,
                Ape: apellido,
                Dni: dni,
                Email: email,
                TelFijo: telfijo,
                TelCelu: telcelular,
                Provincia: provincia,
                Distrito: distrito,
                Direccion: direccion,
                Notas: notas,
                Estado: estado,
                Usuario: usuario,
                Codigo: codigo
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Se activo al cliente de la data historica</strong>' +
                        '</div>')
                } else {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Lo sentimos ocurrio un error en el proceso de grabación</strong>' +
                        '</div>')
                }
                $("#Resultado_Grabacion").fadeTo(2000, 500).slideUp(500, function() {
                    $("#Resultado_Grabacion").slideUp(500);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $("#BtnCerrarCliente").click(function() {
        $("#PreguntaCliente").html("");
    });

    $("#BtnRestaurarCliente").click(function() {
        Obtener_Datos_cliente('MostrarClientexDni', $("#Txt_Dni").val(), 2);
        $("#Modal_Pregunta").modal("hide");
        $("#PreguntaCliente").html("");
        DesactivarBotones();
        $("#Resultado_Grabacion").hide();
    })

    $('#BtnActualizarCliente').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().toUpperCase().trim(),
            $('#Txt_Apellido').val().toUpperCase().trim(),
            $('#Txt_TelCelular').val().toUpperCase().trim(),
            $('#Txt_Direccion').val().toUpperCase().trim());
        if (Id == 1) {
            Editar_Cliente("EditarCliente",
                $("#Txt_Nombre").val().toUpperCase().trim(),
                $("#Txt_Apellido").val().toUpperCase().trim(),
                $('#Txt_Dni').val().trim(),
                $("#Txt_Email").val().toUpperCase().trim(),
                $("#Txt_TelFijo").val().toUpperCase().trim(),
                $("#Txt_TelCelular").val().toUpperCase().trim(),
                $("#CboProvincia").val().toUpperCase().trim(),
                $("#CboDistrito").val().toUpperCase().trim(),
                $("#Txt_Direccion").val().toUpperCase().trim(),
                $("#Txt_Notas").val().toUpperCase().trim(),
                '1',
                Usuario_Session,
                $('#Txt_Codigo').val()
            )
            $("#PreguntaCliente").html("");
            $("#Modal_Pregunta").modal("hide");
        }
    });

    function Obtener_Datos_cliente(act, dni, condicion) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Dni: dni
            }),

            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    if (condicion == 1) {
                        $("#PreguntaCliente").append('Exite un cliente de nombre ' + json[i].Cliente_Nombre + ' ' + json[i].Cliente_Apellido + ' y numero de DNI : ' + json[i].Cliente_Dni + ' en el historico de clientes, actualmente se encuentra eliminado desea restaurarlo ?');
                        $('#Txt_Codigo').val(json[i].Cliente_Id);
                    } else if (condicion == 2) {
                        $('#Txt_Codigo').val(json[i].Cliente_Id);
                        $('#Txt_Nombre').val(json[i].Cliente_Nombre);
                        $('#Txt_Apellido').val(json[i].Cliente_Apellido);
                        $('#Txt_Dni').val(json[i].Cliente_Dni);
                        $('#Txt_Email').val(json[i].Cliente_Email);
                        $('#Txt_TelFijo').val(json[i].Cliente_TelefonoFijo);
                        $('#Txt_TelCelular').val(json[i].Cliente_TelefonoCel);
                        $('#CboProvincia').val(json[i].Cliente_Provincia)
                        Obtener_Distrito('MostrarDistrito', $('#CboProvincia').val());
                        $("#CboDistrito option[value=" + json[i].Cliente_Distrito + "]").attr("selected", true);
                        $('#Txt_Direccion').val(json[i].Cliente_Direccion);
                        $('#Txt_Notas').val(json[i].Cliente_Observacion);
                    }
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $(function() {
        ActivarBotones();
        Habilita_Desabilita(true, false)
        Obtener_Nombre();
        Obtener_Provincia('MostrarProvincia');
        Obtener_Distrito('MostrarDistrito', 1)
        $("#CboProvincia").change(function() {
            Obtener_Distrito('MostrarDistrito', $('#CboProvincia').val());
        });
    });