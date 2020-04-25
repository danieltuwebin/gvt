<?php
// start a session
session_start();
include('modulos/cerrar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="DCCAHUAY">
    <title>Listado Ventas - Sistema Vet. TuWebIn</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/gavet-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/gavet-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/gavet-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/gavet-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/ico.ico">
    <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-tooltip.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <?php
    require_once("includes_html/navbar-fixed-top.php");
    ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
        <!-- main menu header-->
        <div class="main-menu-header"></div>
        <!-- / main menu header-->
        <?php

        $CondicionMnu = $_SESSION['UserPerfil'];

        if ($CondicionMnu == 1) { /* PERFIL ADMIN (1) */
        ?>
            <!-- main menu content-->
            <div class="main-menu-content">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class=" nav-item">
                        <a href="index.html">
                            <i class="icon-home3"></i>
                            <span data-i18n="nav.dash.main" class="menu-title">Inicio</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="index.php" class="menu-item">Reporte General</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-address-book"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Clientes</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="cliente-nuevo.php" class="menu-item">Nuevo Cliente</a>
                            </li>
                            <li>
                                <a href="listado-cliente.php" class="menu-item">Listado Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-ios-paw"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Mascotas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="mascota-nuevo.php" class="menu-item">Nueva Mascota</a>
                            </li>
                            <li>
                                <a href="listado-mascota.php" class="menu-item">Listado Mascotas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-briefcase2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Productos / Servicios</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="proser-nuevo.php" class="menu-item">Nuevo Producto-Serv.</a>
                            </li>
                            <li>
                                <a href="listado-proser.php" class="menu-item">Listado Producto-Serv.</a>
                            </li>
                            <li>
                                <a href="listado-movimientos.php" class="menu-item">Mover Producto-Serv.</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-eyedropper"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Vacunas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="vacuna-nuevo.php" class="menu-item">Nueva Vacuna</a>
                            </li>
                            <li>
                                <a href="listado-vacuna.php" class="menu-item">Listado Vacunas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-droplet"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Baños</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="banio-nuevo.php" class="menu-item">Nuevo Baño</a>
                            </li>
                            <li>
                                <a href="listado-banio.php" class="menu-item">Listado Baños</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-folder-plus"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Desparacitación</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="desparacitacion-nuevo.php" class="menu-item">Nueva Desparacitación</a>
                            </li>
                            <li>
                                <a href="listado-desparacitacion.php" class="menu-item">Listado Desparacitaciones</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-plus2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Atenciones</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="atencion-nuevo.php" class="menu-item">Nueva Atención</a>
                            </li>
                            <li>
                                <a href="listado-atencion.php" class="menu-item">Listado Atenciones</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-list2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Compras</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="compra-nuevo.php" class="menu-item">Nueva Compra</a>
                            </li>
                            <li>
                                <a href="listado-compra.php" class="menu-item">Listado Compras</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-cart4"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Ventas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="venta-nuevo.php" class="menu-item">Nueva Venta</a>
                            </li>
                            <li>
                                <a href="cuadro-venta.php" class="menu-item">Cuadro de Cajas</a>
                            </li>
                            <li class="active">
                                <a href="listado-venta.php" class="menu-item">Listado Ventas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-calendar3"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Agenda</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="calendario.php" class="menu-item">Calendario</a>
                            </li>
                            <li>
                                <a href="listado-agenda.php" class="menu-item">Listado Citas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-paragraph-left"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Historia Clinica</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="historia-mascota.php" class="menu-item">Historia Clinica Mascota</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-cog"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Configuración</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="configuracion-especie.php" class="menu-item">Especies</a>
                            </li>
                            <li>
                                <a href="configuracion-razas.php" class="menu-item">Razas</a>
                            </li>
                            <li>
                                <a href="configuracion-tipoproducto.php" class="menu-item">Tipo de Producto</a>
                            </li>
                            <li>
                                <a href="configuracion-categoria.php" class="menu-item">Categoria</a>
                            </li>
                            <li>
                                <a href="configuracion-unidadmedida.php" class="menu-item">Unidad de Medida</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- / main menu-->
        <?php
        } elseif ($CondicionMnu == 2) { /* PERFIL JEFE (2) */
        ?>
            <!-- main menu content-->
            <div class="main-menu-content">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class=" nav-item">
                        <a href="index.html">
                            <i class="icon-home3"></i>
                            <span data-i18n="nav.dash.main" class="menu-title">Inicio</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="index.php" class="menu-item">Reporte General</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-address-book"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Clientes</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="cliente-nuevo.php" class="menu-item">Nuevo Cliente</a>
                            </li>
                            <li>
                                <a href="listado-cliente.php" class="menu-item">Listado Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-ios-paw"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Mascotas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="mascota-nuevo.php" class="menu-item">Nueva Mascota</a>
                            </li>
                            <li>
                                <a href="listado-mascota.php" class="menu-item">Listado Mascotas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-briefcase2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Productos / Servicios</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="proser-nuevo.php" class="menu-item">Nuevo Producto-Serv.</a>
                            </li>
                            <li>
                                <a href="listado-proser.php" class="menu-item">Listado Producto-Serv.</a>
                            </li>
                            <li>
                                <a href="listado-movimientos.php" class="menu-item">Mover Producto-Serv.</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-eyedropper"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Vacunas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="vacuna-nuevo.php" class="menu-item">Nueva Vacuna</a>
                            </li>
                            <li>
                                <a href="listado-vacuna.php" class="menu-item">Listado Vacunas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-droplet"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Baños</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="banio-nuevo.php" class="menu-item">Nuevo Baño</a>
                            </li>
                            <li>
                                <a href="listado-banio.php" class="menu-item">Listado Baños</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-folder-plus"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Desparacitación</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="desparacitacion-nuevo.php" class="menu-item">Nueva Desparacitación</a>
                            </li>
                            <li>
                                <a href="listado-desparacitacion.php" class="menu-item">Listado Desparacitaciones</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-plus2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Atenciones</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="atencion-nuevo.php" class="menu-item">Nueva Atención</a>
                            </li>
                            <li>
                                <a href="listado-atencion.php" class="menu-item">Listado Atenciones</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class=" nav-item">
                        <a href="#"><i class="icon-list2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Compras</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="compra-nuevo.php" class="menu-item">Nueva Compra</a>
                            </li>
                            <li>
                                <a href="listado-compra.php" class="menu-item">Listado Compras</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class=" nav-item">
                        <a href="#"><i class="icon-cart4"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Ventas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="venta-nuevo.php" class="menu-item">Nueva Venta</a>
                            </li>
                            <li>
                                <a href="cuadro-venta.php" class="menu-item">Cuadro de Cajas</a>
                            </li>
                            <li class="active">
                                <a href="listado-venta.php" class="menu-item">Listado Ventas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-calendar3"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Agenda</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="calendario.php" class="menu-item">Calendario</a>
                            </li>
                            <li>
                                <a href="listado-agenda.php" class="menu-item">Listado Citas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-paragraph-left"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Historia Clinica</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="historia-mascota.php" class="menu-item">Historia Clinica Mascota</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-cog"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Configuración</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="configuracion-especie.php" class="menu-item">Especies</a>
                            </li>
                            <li>
                                <a href="configuracion-razas.php" class="menu-item">Razas</a>
                            </li>
                            <li>
                                <a href="configuracion-tipoproducto.php" class="menu-item">Tipo de Producto</a>
                            </li>
                            <li>
                                <a href="configuracion-categoria.php" class="menu-item">Categoria</a>
                            </li>
                            <li>
                                <a href="configuracion-unidadmedida.php" class="menu-item">Unidad de Medida</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- / main menu-->
        <?php
        } elseif ($CondicionMnu == 3) { /* PERFIL SOLO LECTURA (3) */
        ?>
            <!-- main menu content-->
            <div class="main-menu-content">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class=" nav-item">
                        <a href="index.html">
                            <i class="icon-home3"></i>
                            <span data-i18n="nav.dash.main" class="menu-title">Inicio</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="index.php" class="menu-item">Listado General</a>
                            </li>
                        </ul>
                    </li>

                    <li class=" nav-item">
                        <a href="#"><i class="icon-address-book"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Clientes</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-cliente.php" class="menu-item">Listado Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-ios-paw"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Mascotas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-mascota.php" class="menu-item">Listado Mascotas</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li class=" nav-item">
                        <a href="#"><i class="icon-briefcase2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Productos / Servicios</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="proser-nuevo.php" class="menu-item">Nuevo Producto-Serv.</a>
                            </li>
                            <li>
                                <a href="listado-proser.php" class="menu-item">Listado Producto-Serv.</a>
                            </li>
                            <li>
                                <a href="listado-movimientos.php" class="menu-item">Mover Producto-Serv.</a>
                            </li>                             
                        </ul>
                    </li>
                    -->
                    <li class=" nav-item">
                        <a href="#"><i class="icon-eyedropper"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Vacunas</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-vacuna.php" class="menu-item">Listado Vacunas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-droplet"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Baños</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-banio.php" class="menu-item">Listado Baños</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-folder-plus"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Desparacitación</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-desparacitacion.php" class="menu-item">Listado Desparacitaciones</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-plus2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Atenciones</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-atencion.php" class="menu-item">Listado Atenciones</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li class=" nav-item">
                        <a href="#"><i class="icon-list2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Compras</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="compra-nuevo.php" class="menu-item">Nueva Compra</a>
                            </li>
                            <li  class="active">
                                <a href="listado-compra.php" class="menu-item">Reporte Compras</a>
                            </li>
                        </ul>
                    </li>
                    -->
                    <li class=" nav-item">
                        <a href="#"><i class="icon-cart4"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Ventas</span>
                        </a>
                        <ul class="menu-content">
                            <li class="active">
                                <a href="listado-venta.php" class="menu-item">Listado Ventas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-calendar3"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Agenda</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-agenda.php" class="menu-item">Listado Citas</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-paragraph-left"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Historia Clinica</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="historia-mascota.php" class="menu-item">Historia Clinica Mascota</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li class=" nav-item">
                        <a href="#"><i class="icon-cog"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Configuración</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="configuracion-especie.php" class="menu-item">Especies</a>
                            </li>
                            <li>
                                <a href="configuracion-razas.php" class="menu-item">Razas</a>
                            </li>
                            <li>
                                <a href="configuracion-tipoproducto.php" class="menu-item">Tipo de Producto</a>
                            </li>
                            <li>
                                <a href="configuracion-categoria.php" class="menu-item">Categoria</a>
                            </li>
                            <li>
                                <a href="configuracion-unidadmedida.php" class="menu-item">Unidad de Medida</a>
                            </li>
                        </ul>
                    </li>
                    -->
                </ul>
            </div>
            <!-- / main menu-->
        <?php
        }
        ?>
    </div>
    <!--/ main menu-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- Modal -->
    <div class="modal fade text-xs-left" id="Modal_EditarVenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdVenta">Edición de venta</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioVenta">
                        <div class="form-body">

                            <!--  <h4 class="form-section">Propietario</h4> -->
                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <label for="TxtFecha">Seleccione Fecha :
                                            <input id="TxtFecha" type="date" class="form-control">
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <label for="CboSede">Sede :
                                            <select id="CboSede" name="CboSede" class="form-control">
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <label for="CboTipoPago">Tipo de Pago :
                                            <!-- <input type="text" style="text-transform:uppercase;" id="TxtTipoPago" name="TxtTipoPago" class="form-control" placeholder="Seleccione Pago" > -->
                                            <select id="CboTipoPago" name="CboTipoPago" class="form-control">
                                                <option value="1" selected>EFECTIVO</option>
                                                <option value="2">TARJETA DE CREDITO</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                    <button id="BtnActualizarVenta" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Venta</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-xs-left" id="Modal_VerVentas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdResumenVenta">Resumen de Venta</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioVenta">
                        <div class="form-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <!-- ENCABEZADO -->
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Producto</th>
                                                <th>P.uni</th>
                                                <th>Cantidad</th>
                                                <th>P.tot</th>
                                                <th>Desc</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <!-- DETALLE -->
                                        <tbody id="tablaResumenVentas">
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="text-align:center;">
                    <div class="row">
                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-3 col-xs-12 mb-1">
                    <h2 class="content-header-title">Listado de Ventas</h2>
                </div>
                <?php

                if ($CondicionMnu == 1 || $CondicionMnu == 2) {
                ?>
                    <div class="content-header-left col-md-3 col-xs-12 mb-1">
                        <button id="BtnNuevo" type="button" class="btn btn-success"><i class="icon-android-add-circle"></i> Nueva Venta</button>
                    </div>
                <?php
                }
                ?>

            </div>
            <div class="content-body">
                <!-- Bordered striped start -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ventas</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li onclick="Actualizar()"><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <!-- <li><a data-action="close"><i class="icon-cross2"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <br>

                            <div class="card-block">
                                <div class="card-body collapse in">
                                    <div class="table-responsive">
                                        <!-- <table id="TblClientes" class="table table-bordered table-striped"> -->
                                        <table id="TblVentas" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Fecha</th>
                                                    <th>DNI Propiet.</th>
                                                    <th>DNI</th>
                                                    <th>Mascota</th>
                                                    <th>Sede</th>
                                                    <th>Tipo</th>
                                                    <th>P.total</th>
                                                    <th>Usuario</th>
                                                    <th>Administrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="Resultado_Grabacion"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php
    require_once("includes_html/footer.php");
    ?>

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../app-assets/js/scripts/tooltip/tooltip.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PROPIOS JS-->
    <script src="lib_propio/propio.js" type="text/javascript"></script>
    <!-- END PROPIOS JS-->

    <!-- BEGIN DATATABLE JS-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/b-html5-1.5.6/datatables.min.js"></script>
    <!-- END DATATABLE JS-->

</body>


<!-- css de ejemplo clases -->
<style type="text/css">
    .linea_buttons {
        display: inline-block;
    }
</style>
<!-- / css de ejemplo clases -->

<!-- BEGIN. EVENTOS SCRIPT-->
<script type="text/javascript">
    var Condicion;
    var table;
    var IdMascota = '';
    var IdClienteExterno = 0;

    function Obtener_Nombre() {
        $("#NombreUsuario").append('<?php echo $_SESSION['User']; ?>');
    }

    $('#Salir').click(function() {
        Cerrar_Sesion("salir");
    });

    function Cerrar_Sesion(act) {
        $.ajax({
            type: "POST",
            url: "modulos/acceso.php",
            async: true,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {},
            success: function(data) {
                var url = "login.php";
                $(location).attr('href', url);
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Condicion() {
        <?php
        if ($CondicionMnu == 1 || $CondicionMnu == 2) {
        ?>
            Condicion = 1;
        <?php
        } else {
        ?>
            Condicion = 0;
        <?php
        }
        ?>
    }

    function Obtener_Codigo_Formateado(id) {
        if (id.length == 1) {
            var Cod = 'VT000' + id;
        } else if (id.length == 2) {
            var Cod = 'VT00' + id;
        } else if (id.length == 3) {
            var Cod = 'VT0' + id;
        } else {
            var Cod = 'VT' + id;
        }
        return Cod;
    }

    //http://jquery-manual.blogspot.com/2013/12/como-obtener-parametros-get-con.html?mensaje=ok
    function $_GET(param) {
        /* Obtener la url completa */
        url = document.URL;
        /* Buscar a partir del signo de interrogación ? */
        url = String(url.match(/\?+.+/));
        /* limpiar la cadena quitándole el signo ? */
        url = url.replace("?", "");
        /* Crear un array con parametro=valor */
        url = url.split("&");
        /* 
        Recorrer el array url --> obtener el valor y dividirlo en dos partes a través del signo = 
        0 = parametro
        1 = valor
        Si el parámetro existe devolver su valor
        */
        x = 0;
        while (x < url.length) {
            p = url[x].split("=");
            if (p[0] == param) {
                return decodeURIComponent(p[1]);
            }
            x++;
        }
    }

    /* INICIO FUNCIONES */
    function Obtener_Sede(act) {
        $.ajax({
            type: "POST",
            url: "modulos/inicio.php",
            async: true,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {},
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboSede").empty();
                $.each(json, function(i, item) {
                    $("#CboSede").append('<option value="' + json[i].Sede_Id + '">' + json[i].Sede_Nombre + '</option>');
                });
            },
            complete: function() {
                // $("#CboSede option[value=" + CondicionSede + "]").attr("selected", true);
            }
        });
    }

    $("#BtnNuevo").click(function() {
        var url = "venta-nuevo.php";
        $(location).attr('href', url);
    });

    function Actualizar() {
        listar();
    }

    var listar = function() {
        var url = "modulos/ventas_listado_general.php?Cond=1&Id=0";
        table = $('#TblVentas').DataTable({
            "destroy": true,
            "ajax": {
                "method": "POST",
                "url": url,
            },
            "columns": [{
                    //"data": "Venta_Id"
                    "render": function(data, type, row) {
                        if (row.Venta_Id.length == 1) {
                            var Cod = 'VT000' + row.Venta_Id;
                        } else if (row.Venta_Id.length == 2) {
                            var Cod = 'VT00' + row.Venta_Id;
                        } else if (row.Venta_Id.length == 3) {
                            var Cod = 'VT0' + row.Venta_Id;
                        } else {
                            var Cod = 'VT0' + row.Venta_Id;
                        }
                        return Cod;
                    }
                },
                {
                    "data": "Venta_Fecha"
                },
                {
                    "data": "Cliente_Dni" /* Nuevo */
                },                
                {
                    "data": "Mascota_DNI"
                },
                {
                    "data": "Mascota_Nombre"
                },
                {
                    "data": "Sede_Nombre"
                },
                {
                    "data": "Venta_TipoPago"
                },
                {
                    "data": "Venta_PrecioTotal"
                },
                {
                    "data": "Venta_UserGrab"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group'><div class='btn-group btn-group-sm' role='group'> <button type='button' id='editar' class='editar btn btn-warning' value='" + row.Venta_Id + "'><i class='icon-pencil3'></i></button>  <button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.Venta_Id + "'><i class='icon-trash-o'></i></button>    <button id='ver' type='button' class='ver btn btn-success' value='" + row.Venta_Id + "'><i class='icon-eye-plus'></i></button>   </div></div>";
                    }
                }
            ],
            /* BOTONES DE DATATABLE */
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="icon-file-excel-o"></i> ',
                    titleAttr: 'Exportar a Excel',
                    //className: 'btn btn-success'
                    "oSelectorOpts": {
                        filter: 'applied',
                        order: 'current'
                    },
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="icon-file-pdf-o"></i> ',
                    titleAttr: 'Exportar a PDF',
                    //className: 'btn btn-danger',
                    orientation: 'landscape',
                    //pageSize: 'TABLOID',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6,7]
                    },

                    //className: 'btn btn-success'
                    "oSelectorOpts": {
                        filter: 'applied',
                        order: 'current'
                    },
                },
                {
                    extend: 'copyHtml5',
                    text: '<i class="icon-copy2"></i> ',
                    titleAttr: 'Copiar',
                    //className: 'btn btn-info',
                    //className: 'btn btn-success'
                    "oSelectorOpts": {
                        filter: 'applied',
                        order: 'current'
                    },
                },
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });

    }

    $('#TblVentas').on('click', '.editar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            $("#LblIdVenta").text("Edición de Venta : " + Obtener_Codigo_Formateado(id));
            Obtener_Datos_Venta('MostrarVentasxId', 2, id)
            $("#Modal_EditarVenta").modal("show");
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Obtener_Datos_Venta(act, Condicion, Id) {
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Condicion: Condicion,
                Id: Id
            }),
            beforeSend: function() {},
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $('#Txt_Codigo').val(json[i].Venta_Id)
                    $('#TxtFecha').val(json[i].Venta_Fecha);
                    $('#CboSede').val(json[i].Venta_IdAlmacen);
                    $('#CboTipoPago').val(json[i].TipoPago);
                });
            },
            complete: function() {}
        });
    }

    $('#BtnActualizarVenta').click(function() {
        var codigo = $('#Txt_Codigo').val();
        var Id = ValidaCamposObligatorios(
            $('#TxtFecha').val(),
            $('#CboSede').val(),
            $('#CboTipoPago').val())
        if (Id == 1) {
            Editar_Venta("EditarVenta",
                $("#Txt_Codigo").val(),
                $('#TxtFecha').val(),
                $('#CboSede').val(),
                $('#CboTipoPago').val(),
                '<?php echo $_SESSION['User']; ?>'
            )
        }
    });

    function ValidaCamposObligatorios(Fecha, Sede, Tipo_Pago) {
        if (Fecha.length == 0) {
            alert('El campo fecha es obligatorio');
            $("#TxtFecha").focus();
            return 0;
        } else {
            if (Sede.length == 0) {
                alert('El campo Sede es obligatorio');
                $("#CboSede").focus();
                return 0;
            } else {
                if (Tipo_Pago.length == 0) {
                    alert('El campo tipo de pago es obligatorio');
                    $("#CboTipoPago").focus();
                    return 0;
                } else {
                    return 1;
                }
            }
        }
    }

    function Editar_Venta(act, Codigo, Fecha, Sede, Tipo_Pago, Usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Codigo: Codigo,
                Fecha: Fecha,
                Sede: Sede,
                Tipo_Pago: Tipo_Pago,
                Usuario: Usuario
            }),
            beforeSend: function() {},
            success: function(data) {
                if (data == 1) {
                    $("#Modal_EditarVenta").modal("hide");
                    listar();
                    alert('Venta Editada correctamente');
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {}
        });
    }

    $('#TblVentas').on('click', '.eliminar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            var bool = confirm("Esta seguro de eliminar el registro " + Obtener_Codigo_Formateado(id) + " ?");
            //var bool = confirm("Esta seguro de eliminar el registro ?");
            if (bool) {
                Eliminar_Venta('EliminarVenta_tblVenta', id)
                alert('La Venta seleccionado fue eliminada correctamente');
            } else {
                //alert("cancelo la solicitud");
            }
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Eliminar_Venta(act, codigo, usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: codigo,
                usuario: usuario
            }),
            beforeSend: function() {},
            success: function(data) {
                if (data <= 1) {
                    listar();
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {}
        });
    }

    $('#TblVentas').on('click', '.ver', function() {
        Id = $(this).val();
        if (Condicion == 1) {
            $("#LblIdResumenVenta").text("Resumen de Compra : " + Obtener_Codigo_Formateado(Id));
            Obtener_Tablas_Resumenes_Ventas('tablaResumenVentas', Id);
            $("#Modal_VerVentas").modal("show");
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Obtener_Tablas_Resumenes_Ventas(act, Id) {
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: Id
            }),
            beforeSend: function() {
                $("#tablaResumenVentas").html('');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $("#tablaResumenVentas").append('<tr>' +
                        '<td class="text-truncate">' + json[i].Orden + '</td>' +
                        '<td class="text-truncate">' + json[i].Producto_Nombre + '</td>' +
                        '<td class="text-truncate">' + json[i].VentaDetalle_PrecioUni + '</td>' +
                        '<td class="text-truncate">' + json[i].VentaDetalle_Cantidad + '</td>' +
                        '<td class="text-truncate">' + json[i].VentaDetalle_Precio + '</td>' +
                        '<td class="text-truncate">' + json[i].VentaDetalle_Descuento + '</td>' +
                        '<td class="text-truncate">' + json[i].VentaDetalle_PrecioTotal + '</td>');
                    //'<td class="text-truncate"> <button type="button" class="btn btn-success btn-sm">' + 'Ver Detalle' + '</button> </td>' + '</tr>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $(function() {

        Obtener_Nombre();
        Obtener_Condicion();
        Obtener_Sede('MostrarSede');

        listar();
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>