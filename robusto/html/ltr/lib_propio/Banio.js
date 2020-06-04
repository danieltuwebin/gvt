    //DECLARACIÓN DE VARIABLES
    var Usuario_Session = localStorage.getItem('Usuario');
    var IdAlmacen_Session = localStorage.getItem('IdAlmacen');

    var IdMascota = '';
    var ValorRb = 1;
    var IdTipoProcesoGrabacion = 0;
    var IdBanio = 0;
    var IdAgendado = 0;
    var IdSede = 0;

    //Variables para el registro de Evaluacion Medica
    var IdentificadorEm = 0;

    function Obtener_Nombre() {
        $("#NombreUsuario").append(Usuario_Session);
    }

    $('#Salir').click(function() {
        Cerrar_Sesion("salir");
    });

    function Actualizar() {
        limpiaForm($("#FormularioBanio"));
        Obtener_Banio('MostrarProductoxCondicion', 2, IdSede);
    }

    function Habilita_Desabilita(boolLimpiar, boolGrabar, boolAgendar) {
        $("#btnLimpiar").attr('disabled', boolLimpiar);
        $("#btnGrabar").attr('disabled', boolGrabar);
        $("#btnAgendar").attr('disabled', boolAgendar);
    }

    function Obtener_Sede_Usuario(act) {
        $.ajax({
            type: "POST",
            url: "modulos/inicio.php",
            async: false,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {},
            success: function(data) {
                IdSede = data;
                /* $("#CboSede option[value=" + IdSede + "]").attr("selected", true);
                $("#CboSede_Bus option[value=" + IdSede + "]").attr("selected", true); */
            },
            complete: function() {
                // $("#CboSede option[value=" + CondicionSede + "]").attr("selected", true);
                //listar();
            }
        });
    }

    // Clase Proser
    function Obtener_Banio(act, id, sede) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                Id: id,
                Sede: sede
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboProducto").empty();
                $("#CboProducto").append('<option selected="true" disabled="disabled">SELECCIONE BAÑO</option>');
                $.each(json, function(i, item) {
                    $("#CboProducto").append('<option value="' + json[i].Producto_Id + '">' + json[i].Producto_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $("#btnLimpiar").click(function() {
        limpiaForm($("#FormularioBanio"));
        $('#Txt_Nombre_Dni').html('');
        Habilita_Desabilita(true, false, false);
        if (IdTipoProcesoGrabacion == 1) {
            var url = "banio-nuevo.php";
            $(location).attr('href', url);
        }
    });

    // Clase Mascota
    function Obtener_NombreCliente_NombreMascota(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                Id: id
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    //$('#Txt_Dni').val(json[i].Cliente_Dni);
                    if (json[i].Cliente_Dni == "") {
                        $('#Txt_Dni').val('0');
                    } else {
                        $('#Txt_Dni').val(json[i].Cliente_Dni);
                    }
                    $('#Txt_Nombre_Dni').html(json[i].Mascota_Cliente);
                    $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                    $('#Txt_CodigoMascota').val(json[i].Mascota_Id);
                    Obtener_Mascotas_x_IdCliente('ObtenerMascotasxIdCliente', 2, $('#Txt_CodigoCliente').val());
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    // Clase Mascota
    function Obtener_Mascotas_x_IdCliente(act, cond, id) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                Cond: cond,
                Id: id
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboMascota").empty();
                $.each(json, function(i, item) {
                    $("#CboMascota").append('<option value="' + json[i].Mascota_Id + '">' + json[i].Mascota_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#FormularioBanio input').on('change', function() {
        ValorRb = $('input[name=Dni]:checked', '#FormularioBanio').val();
    });

    $('#btnBuscar').click(function() {
        Obtener_Nombre_x_Dni_Mascota_Cliente('ObtenerNombrexIdClienteMascota', ValorRb, $('#Txt_Dni').val().toUpperCase().trim())
    });
    $("#Txt_Dni").keypress(function(e) {
        if (e.which == 13) {
            Obtener_Nombre_x_Dni_Mascota_Cliente('ObtenerNombrexIdClienteMascota', ValorRb, $('#Txt_Dni').val().toUpperCase().trim())
        }
    });

    // Clase Mascota
    function Obtener_Nombre_x_Dni_Mascota_Cliente(act, condicion, id) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Condicion: condicion,
                Id: id
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                if (json.length != 0) {
                    if (condicion == 1) {
                        $.each(json, function(i, item) {
                            $('#Txt_Nombre_Dni').html(json[i].Cliente_Nombre);
                            $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                        });
                        Obtener_Mascotas_x_IdCliente('ObtenerMascotasxIdCliente', 2, $('#Txt_CodigoCliente').val());
                    } else if (condicion == 3) {
                        //celular
                        $.each(json, function(i, item) {
                            $('#Txt_Nombre_Dni').html(json[i].Cliente_Nombre);
                            $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                        });
                        Obtener_Mascotas_x_IdCliente('ObtenerMascotasxIdCliente', 2, $('#Txt_CodigoCliente').val());
                    } else if (condicion == 2) {
                        $.each(json, function(i, item) {
                            $('#Txt_Nombre_Dni').html(json[i].Cliente_Nombre);
                            $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                            $('#Txt_CodigoMascota').val(json[i].Mascota_Id);
                        });
                        Obtener_Mascotas_x_IdCliente('ObtenerMascotasxIdCliente', 2, $('#Txt_CodigoCliente').val());
                        $("#CboMascota option[value=" + $('#Txt_CodigoMascota').val() + "]").attr("selected", true);
                    }
                } else {
                    $('#Txt_Nombre_Dni').html('');
                    $('#Txt_CodigoCliente').val('');
                    $('#Txt_CodigoMascota').val('');
                    $("#CboMascota").empty();
                    alert('No existen registros para mostrar, verifique DNI propietario/mascota');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $("#CboMascota").change(function() {
        $('#Txt_CodigoMascota').val($("#CboMascota").val());
    });

    $("#CboProducto").change(function() {
        Obtener_Precio('MostrarPrecio', $("#CboProducto").val().trim());
    });

    // Clase proser
    function Obtener_Precio(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: id
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#Txt_Precio").empty();
                $.each(json, function(i, item) {
                    $("#Txt_Precio").val(json[i].Producto_PrecioVenta);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#btnAgendar').click(function() {
        if (IdTipoProcesoGrabacion == 0) {
            ProcesoGrabacion(1, 2000000, 2);
        } else {
            if ($("#CboEstadoBanio").val() == 3) {
                ProcesoGrabacion(2, IdBanio, 3);
            } else {
                alert('Debe cambiar el estado del baño a Reprogramado');
                $("#CboEstadoBanio").focus();
                $("#CboEstadoBanio").select();
            }
        }
    });

    $("#btnGrabar").click(function() {
        if (IdTipoProcesoGrabacion == 0) {
            ProcesoGrabacion(1, 2000000, 1)
        } else {
            if ($("#CboEstadoBanio").val() == 1) {
                ProcesoGrabacion(2, IdBanio, 1);
            } else {
                alert('Debe cambiar el estado del baño a Realizado');
                $("#CboEstadoBanio").focus();
                $("#CboEstadoBanio").select();
            }
        }
    });

    function ProcesoGrabacion(tiporegistro, idbanio, idcita) {
        var nombredni = $('#Txt_Nombre_Dni').html();
        if (nombredni == 0) {
            alert('El DNI ingresado no existe, verificar el numero por favor o ingrese el DNI por defecto')
        } else {
            var Id = ValidaCamposObligatorios(
                $('#Txt_Dni').val().toUpperCase().trim(),
                $('#CboMascota').val().toUpperCase().trim(),
                $('#CboProducto').val().toUpperCase().trim(),
                $('#Txt_Precio').val().toUpperCase().trim(),
                $('#Txt_Fecha').val());
            if (Id == 1) {
                localStorage.setItem('Observacion', $("#Txt_Notas").val());
                Registrar_Banio("GrabarBanio",
                    tiporegistro,
                    idbanio,
                    $("#Txt_Fecha").val(),
                    $("#CboProducto").val().toUpperCase().trim(),
                    $("#Txt_Precio").val().toUpperCase().trim(),
                    $("#CboMascota").val().toUpperCase().trim(),
                    $("#Txt_Notas").val().toUpperCase().trim(),
                    idcita,
                    Usuario_Session,
                    '1', '1',
                    IdAlmacen_Session
                );
            }
        }
    }

    function ValidaCamposObligatorios(dni, mascota, vacuna, precio, fecha) {
        if (dni.length == 0) {
            alert('El campo DNI es obligatorio');
            $("#Txt_Dni").focus();
            return 0;
        } else {
            if (mascota.length == 0) {
                alert('El campo mascota es obligatorio');
                $("#CboMascota").focus();
                return 0;
            } else {
                if (vacuna.length == 0) {
                    alert('El campo baño es obligatorio');
                    $("#CboProducto").focus();
                    return 0;
                } else {
                    if (precio.length == 0) {
                        alert('El campo precio es obligatorio');
                        $("#Txt_Precio").focus();
                        return 0;
                    } else {
                        if (fecha.length == 0) {
                            alert('El campo fecha es obligatorio')
                            $('#Txt_Fecha').focus();
                            return 0;
                        } else {
                            return 1;
                        }
                    }
                }
            }
        }
    }

    function Registrar_Banio(act, IdTipoRegistro, Idbanio, Fecha, IdProducto, Precio, IdMascota, Observacion, Cita, Usuario, VentaTipo, Cantidad, IdAlmacen) {
        //console.log(act+','+IdTipoRegistro+','+Idbanio+','+Fecha+','+IdProducto+','+Precio+','+IdMascota+','+Observacion+','+Cita+','+Usuario+','+VentaTipo+','+Cantidad+','+IdAlmacen);
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                IdTipoRegistro: IdTipoRegistro,
                Idbanio: Idbanio,
                Fecha: Fecha,
                IdProducto: IdProducto,
                Precio: Precio,
                IdMascota: IdMascota,
                Observacion: Observacion,
                Cita: Cita,
                Usuario: Usuario,
                VentaTipo: VentaTipo,
                Cantidad: Cantidad,
                IdAlmacen: IdAlmacen
            }),
            beforeSend: function() {
                //alert('ok');
                //console.log(act + '-' + IdTipoRegistro + '-' + Idbanio + '-' + Fecha + '-' + IdProducto + '-' + Precio + '-' + IdMascota + '-' + Observacion + '-' + Cita + '-' + Usuario + '-' + VentaTipo + '-' + Cantidad + '-' + IdAlmacen);
            },
            success: function(data) {
                var idtmp;
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    idtmp = json[i].CodigoVentaTmp;
                });
                // Redireccionar
                if (Cita == 1) {

                    if (IdentificadorEm == 1) {
                        //grabar Ev Medico
                        Registrar_Evaluacion_Medica(idtmp);
                    }

                    $("#Resultado_Grabacion").html('');
                    var url = "venta-nuevo.php?IdVen=" + idtmp + "&IdMas=" + $("#CboMascota").val() + "&Tipo=2" + "&Pro=" + IdBanio + "&A=" + IdAgendado;
                    $(location).attr('href', url);

                } else {
                    if (IdTipoProcesoGrabacion == 1) {
                        $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '<strong>Baño reprogramado correctamente </strong>' +
                            '</div>')
                    } else {
                        $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '<strong>Nuevo baño agendado correctamente</strong>' +
                            '</div>')
                    }
                }
                $("#Resultado_Grabacion").fadeTo(2000, 500).slideUp(500, function() {
                    $("#Resultado_Grabacion").slideUp(500);
                });
            },
            complete: function() {
                Habilita_Desabilita(false, true, true);
            }
        });
    }

    function Obtener_Datos_Banio(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                Id: id
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $('#Txt_CodigoProducto').val(json[i].Producto_Id);
                    $("#CboProducto option[value=" + $('#Txt_CodigoProducto').val() + "]").attr("selected", true);
                    $("#CboProducto").attr('disabled', true);
                    $('#Txt_Precio').val(json[i].Producto_PrecioVenta);
                    $('#Txt_Fecha').val(json[i].Banio_Fecha);
                    $('#Txt_Notas').val(json[i].Banio_Observacion);
                    localStorage.setItem('Observacion', json[i].Banio_Observacion);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    //*********************************************Evaluación Medica
    $('#btnEvaluacion').click(function() {
        $('#Modal_EvaluacionMedica').modal("show");
    });

    $('#BtnGrabarEm').click(function() {
        if (Validar_registro_evaluacio_medica() == true) {
            IdentificadorEm = 1;
            $('#Modal_EvaluacionMedica').modal("hide");
        } else {
            IdentificadorEm = 0;
        }
    });

    function Validar_registro_evaluacio_medica() {
        if (!$('#em input[name="Respuesta"]').is(':checked')) {
            alert('Seleccione una opción de la evaluación medica');
            return false;
        }

        if ($('input[type=checkbox]:checked').length === 0) {
            alert('Seleccione al menos un Ectoparasito presentado por la mascota');
            return false;
        }
        if ($('input[type=checkbox]:checked').length === 0) {
            alert('Seleccione al menos un Ectoparasito presentado por la mascota');
            return false;
        }
        if (!$('#vfojos input[name="RespuestaOjos"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (ojos)');
            return false;
        }
        if (!$('#vfnariz input[name="RespuestaNariz"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (nariz)');
            return false;
        }
        if (!$('#vfcavidad input[name="RespuestaCavidad"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (cavidad bucal)');
            return false;
        }
        if (!$('#vfdientes input[name="RespuestaDientes"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (dientes)');
            return false;
        }
        if (!$('#vfpiel input[name="RespuestaPiel"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (piel y pelaje)');
            return false;
        }
        if (!$('#vfcojinentes input[name="RespuestaCojinetes"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (cojinetes - almohadillas)');
            return false;
        }
        if (!$('#vfunas input[name="RespuestaUnas"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (uñas)');
            return false;
        }
        if (!$('#vfoidos input[name="RespuestaOidos"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (oidos)');
            return false;
        }
        if (!$('#vfgenitales input[name="RespuestaGenitales"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (arias genitales)');
            return false;
        }
        if (!$('#vfglandulas input[name="RespuestaGlandulas"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (glandulas mamarias)');
            return false;
        }
        if (!$('#vfextremidades input[name="RespuestaExtremidades"]').is(':checked')) {
            alert('Seleccione una opción de la valoración fisica (extremidades)');
            return false;
        }
        if (!$('input[name=Estado]:checked').val()) {
            alert('Seleccione un estado nutricional de la mascota');
            return false;
        }
        if (!$('input[name=Pelaje]:checked').val()) {
            alert('Seleccione un estado del pelaje de la mascota');
            return false;
        }
        if (!$('input[name=Sedante]:checked').val()) {
            alert('Seleccione si requiere sedante para la mascota');
            return false;
        }
        if (!$('input[name=Estado]:checked').val()) {
            alert('Seleccione el puntaje de salud de la mascota');
            return false;
        }
        //Campos textos obligatorios
        if ($('#Txt_Ectoparasitos').val() == '') {
            alert('Ingrese una observacion para en el campo descripción de ectoparasitos');
            return false;
        }
        if ($('#Txt_Recomendacion').val() == '') {
            alert('Ingrese una recomendación para la mascota');
            return false;
        }

        return true;
    }

    function Registrar_Evaluacion_Medica(idventatmp) {
        var act = 'GrabarEvaluacionMedica';
        var BanioId = '0';
        var BanioIdtmp = idventatmp;
        var Respuesta_em = $('input:radio[name=Respuesta]:checked').val();
        var ChkPulgas = $('#ChkPulgas:checked').val() != null ? $('#ChkPulgas:checked').val() : '0';
        var ChkPiojos = $('#ChkPiojos:checked').val() != null ? $('#ChkPiojos:checked').val() : '0';
        var ChkGarrapatas = $('#ChkGarrapatas:checked').val() != null ? $('#ChkGarrapatas:checked').val() : '0';
        var ChkGusanos = $('#ChkGusanos:checked').val() != null ? $('#ChkGusanos:checked').val() : '0';
        var Txtectoparasitos = $('#Txt_Ectoparasitos').val();
        var Respuesta_ojos = $('input:radio[name=RespuestaOjos]:checked').val();
        var Respuesta_nariz = $('input:radio[name=RespuestaNariz]:checked').val();
        var Respuesta_cavidad = $('input:radio[name=RespuestaCavidad]:checked').val();
        var Respuesta_dientes = $('input:radio[name=RespuestaDientes]:checked').val();
        var Respuesta_piel = $('input:radio[name=RespuestaPiel]:checked').val();
        var Respuesta_cojinetes = $('input:radio[name=RespuestaCojinetes]:checked').val();
        var Respuesta_unias = $('input:radio[name=RespuestaUnas]:checked').val();
        var Respuesta_oidos = $('input:radio[name=RespuestaOidos]:checked').val();
        var Respuesta_genitales = $('input:radio[name=RespuestaGenitales]:checked').val();
        var Respuesta_glandulas = $('input:radio[name=RespuestaGlandulas]:checked').val();
        var Respuesta_extremidades = $('input:radio[name=RespuestaExtremidades]:checked').val();
        var Respuesta_nh_estado = $('input:radio[name=Estado]:checked').val();
        var Respuesta_nh_pelaje = $('input:radio[name=Pelaje]:checked').val();
        var Respuesta_nh_sedante = $('input:radio[name=Sedante]:checked').val();
        var Respuesta_nh_puntaje = $('input:radio[name=Puntaje]:checked').val();
        var Txt_Recomendacion = $('#Txt_Recomendacion').val();
        var Usuario = Usuario_Session;
        //console.log(act + ' : ' + Respuesta_em + ' : ' + ChkPulgas + ' : ' + ChkPiojos + ' : ' + ChkGarrapatas + ' : ' + ChkGusanos);
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                BanioId: BanioId,
                BanioIdtmp: BanioIdtmp,
                Respuesta_em: Respuesta_em,
                ChkPulgas: ChkPulgas,
                ChkPiojos: ChkPiojos,
                ChkGarrapatas: ChkGarrapatas,
                ChkGusanos: ChkGusanos,
                Txtectoparasitos: Txtectoparasitos,
                Respuesta_ojos: Respuesta_ojos,
                Respuesta_nariz: Respuesta_nariz,
                Respuesta_cavidad: Respuesta_cavidad,
                Respuesta_dientes: Respuesta_dientes,
                Respuesta_piel: Respuesta_piel,
                Respuesta_cojinetes: Respuesta_cojinetes,
                Respuesta_unias: Respuesta_unias,
                Respuesta_oidos: Respuesta_oidos,
                Respuesta_genitales: Respuesta_genitales,
                Respuesta_glandulas: Respuesta_glandulas,
                Respuesta_extremidades: Respuesta_extremidades,
                Respuesta_nh_estado: Respuesta_nh_estado,
                Respuesta_nh_pelaje: Respuesta_nh_pelaje,
                Respuesta_nh_sedante: Respuesta_nh_sedante,
                Respuesta_nh_puntaje: Respuesta_nh_puntaje,
                Txt_Recomendacion: Txt_Recomendacion,
                Usuario: Usuario
            }),
            beforeSend: function() {
                //alert('ok');
                //console.log(act + '-' + IdTipoRegistro + '-' + Idbanio + '-' + Fecha + '-' + IdProducto + '-' + Precio + '-' + IdMascota + '-' + Observacion + '-' + Cita + '-' + Usuario + '-' + VentaTipo + '-' + Cantidad + '-' + IdAlmacen);
            },
            success: function(data) {},
            complete: function() {
                Habilita_Desabilita(false, true, true);
            }
        });

    }

    $('#btnLimpiarEm').click(function() {
        clearForm();
    });

    function clearForm() {
        $('#Txt_Ectoparasitos').val('');
        $('.chkectoparasitos').attr('checked', false);
        unselect();
        $('#Txt_Recomendacion').val('');
        IdentificadorEm = 0;
    }

    function unselect() {
        document.querySelectorAll('[name=Respuesta]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaOjos]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaNariz]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaCavidad]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaDientes]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaPiel]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaCojinetes]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaUnas]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaOidos]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaGenitales]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaGlandulas]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=RespuestaExtremidades]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=Estado]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=Pelaje]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=Sedante]').forEach((x) => x.checked = false);
        document.querySelectorAll('[name=Puntaje]').forEach((x) => x.checked = false);
        //$("input[type=radio]").attr('disabled', true);  // desabilita todos los controles
    }

    $(function() {
        Habilita_Desabilita(true, false, false);
        Obtener_Sede_Usuario('MostrarSede_Usuario');
        Obtener_Banio('MostrarProductoxCondicion', 2, IdSede);
        $("#CboEstadoBanio").attr('disabled', true);
        $('#Txt_Fecha').val(MostrarFechaActual());

        if ($_GET("IdMas") === undefined) {
            //SIN VALOR GET
        } else {
            // CON VALOR GET
            $("#RbDniM").attr('checked', true);
            $("#RbDniP").attr('disabled', true);
            $("#RbDniM").attr('disabled', true);
            //$("input[type=radio]").attr('disabled', true);  // desabilita todos los controles
            $("#Txt_Dni").attr('disabled', true);
            $("#btnBuscar").attr('disabled', true);
            Obtener_NombreCliente_NombreMascota('MostrarNombrecliNombreMas', $_GET("IdMas"));
            $("#CboMascota option[value=" + $('#Txt_CodigoMascota').val() + "]").attr("selected", true);
            if ($_GET("IdPro") === undefined) {
                //SIN VALOR GET
            } else {
                $("#CboEstadoBanio").attr('disabled', false);
                IdBanio = $_GET("IdPro");
                IdAgendado = 1; // 1 : siginifica si - no agendado (valor por defecto)                
                Obtener_Datos_Banio('ObtenerDatosBaniosxId', IdBanio);
                IdTipoProcesoGrabacion = 1;
                $("#btnAgendar").text('Reprogramar');
            }
        }
        //EVALUAR
        //Obtener_Precio('MostrarPrecio', 1);
    });