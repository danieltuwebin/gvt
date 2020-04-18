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
    <title>Nueva Atención - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                            <li>
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
                            <li class="active">
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
                            <li>
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
                            <li>
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
                            <li>
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

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Nueva Atención</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Datos de atención</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                            <li onclick="Actualizar()"><a data-action="reload"><i class="icon-reload"></i></a></li>
                                            <!--<li><a id="Actualizar" data-action="reload"><i class="icon-reload"></i></a></li>-->
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            <!--<li><a data-action="close"><i class="icon-cross2"></i></a></li>-->
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form class="form" id="FormularioAtencion">
                                            <input type="hidden" id="Txt_CodigoCliente" name="Txt_CodigoCliente">
                                            <input type="hidden" id="Txt_CodigoMascota" name="Txt_CodigoMascota">
                                            <input type="hidden" id="Txt_CodigoProducto" name="Txt_CodigoProducto">
                                            <input type="hidden" id="Txt_CodigoAtencion" name="Txt_CodigoAtencion">
                                            <div class="form-body">
                                                <h4 class="form-section">Propietario</h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group">
                                                                    <label for="Txt_Buscar_Dni"><strong>Buscar Por :</strong></label>
                                                                    <label class="display-inline-block custom-control custom-radio ml-1">
                                                                        <input type="radio" id="RbDniP" name="Dni" class="custom-control-input" value="1" checked>
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">DNI Propietario</span>
                                                                    </label>
                                                                    <label class="display-inline-block custom-control custom-radio">
                                                                        <input type="radio" id="RbDniM" name="Dni" class="custom-control-input" value="2">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">DNI Mascota</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" id="Txt_Dni" class="form-control" placeholder="Ingrese DNI" name="Txt_Dni">
                                                                        <span class="input-group-btn">
                                                                            <button id="btnBuscar" class="btn btn-warning mr-1" type="button"> <i class="icon-search5"></i> Buscar</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <h5>
                                                                        <label for="Txt_Nombre_Dni">Nombre propietario :&nbsp;&nbsp; </label><label id="Txt_Nombre_Dni" class="primary"></label>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <label class="display-inline" for="CboMascota">Seleccione nombre mascota :
                                                                        <!-- <label class="display-inline-block" for="CboVacuna">S : -->
                                                                        <select id="CboMascota" name="CboMascota" class="form-control">
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <label for="CboEstadoAtencion">Estado
                                                                        <select id="CboEstadoAtencion" name="CboEstadoAtencion" class="form-control">
                                                                            <option value="1" selected="selected">REALIZADO</option>
                                                                            <option value="3">REPROGRAMADO</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <h4 class="form-section">Tipo de Atención</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="CboAtencion">Seleccione Atención :</label>
                                                            <select id="CboAtencion" name="CboAtencion" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="Txt_Precio">Costo de Atención.</label>
                                                            <input type="number" id="Txt_Precio" style="text-transform:uppercase;" class="form-control" name="Txt_Precio" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">signos Clinicos</h4>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group form-inline">
                                                            <label for="Txt_Fecha">Fecha : &nbsp;&nbsp;</label>
                                                            <input type="date" style="text-transform:uppercase;" id="Txt_Fecha" class="form-control" placeholder="" name="Txt_Fecha">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group form-inline">
                                                            <label for="Txt_T">T. : &nbsp;&nbsp;</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_T" class="form-control" placeholder="" name="Txt_T" maxlength="3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group form-inline">
                                                            <label for="Txt_C">F.C. : &nbsp;&nbsp;</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_C" class="form-control" placeholder="" name="Txt_C" maxlength="3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="form-group form-inline">
                                                            <label for="Txt_FR">F.R. : &nbsp;&nbsp;</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_FR" class="form-control" placeholder="" name="Txt_FR" maxlength="3">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="Txt_Sintomas">Sintomas</label>
                                                            <textarea id="Txt_Sintomas" style="text-transform:uppercase;" rows="5" class="form-control" name="Txt_Sintomas" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group ">
                                                            Deshidrat : <input type="text" style="text-transform:uppercase;" id="Txt_Deshidrat" class="form-control" placeholder="" name="Txt_Deshidrat" maxlength="4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            Mucosa : <input type="text" style="text-transform:uppercase;" id="Txt_Mucosa" class="form-control" placeholder="" name="Txt_Mucosa" maxlength="10">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            Tllc : <input type="text" style="text-transform:uppercase;" id="Txt_Tllc" class="form-control" placeholder="" name="Txt_Tllc" maxlength="5">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            Vomitos : <input type="text" style="text-transform:uppercase;" id="Txt_Vomitos" class="form-control" placeholder="" name="Txt_Vomitos" maxlength="2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            Diarrea : <input type="text" style="text-transform:uppercase;" id="Txt_Diarrea" class="form-control" placeholder="" name="Txt_Diarrea" maxlength="2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            Ganglio : <input type="text" style="text-transform:uppercase;" id="Txt_Ganglio" class="form-control" placeholder="" name="Txt_Ganglio" maxlength="15">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            Peso : <input type="number" style="text-transform:uppercase;" id="Txt_Peso" class="form-control" placeholder="" name="Txt_Peso" maxlength="2">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">Diagnostico</h4>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Txt_Dx_Presuntivo">Dx Presuntivo.&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Dx_Presuntivo" class="form-control" placeholder="" name="Txt_Dx_Presuntivo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Txt_Dx_Definitivo">Dx Definitivo.&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Dx_Definitivo" class="form-control" placeholder="" name="Txt_Dx_Definitivo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label for="Txt_Dx_Solicitado">Dx Solicitado.&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Dx_Solicitado" class="form-control" placeholder="" name="Txt_Dx_Solicitado">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">Tratamiento</h4>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Descripcion">Descipción.&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <textarea id="Txt_Descripcion" style="text-transform:uppercase;" rows="3" class="form-control" name="Txt_Descripcion" placeholder=""></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_NotasAdicionales">Notas Adicionales.&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <textarea id="Txt_NotasAdicionales" style="text-transform:uppercase;" rows="3" class="form-control" name="Txt_NotasAdicionales" placeholder=""></textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button id="btnLimpiar" type="button" class="btn btn-info mr-1">
                                                    <i class="icon-reload"></i> Nuevo
                                                </button>
                                                <button id="btnGrabar" type="button" class="btn btn-success mr-1">
                                                    <i class="icon-check2"></i> Registrar Atención
                                                </button>
                                                <button id="btnAgendar" type="button" class="btn btn-warning mr-1">
                                                    <i class="icon-check2"></i> Agendar Atención
                                                </button>
                                            </div>

                                            <div id="Resultado_Grabacion"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
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
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PROPIOS JS-->
    <script src="lib_propio/propio.js" type="text/javascript"></script>
    <!-- END PROPIOS JS-->
</body>

<!-- BEGIN. EVENTOS SCRIPT-->
<script type="text/javascript">
    var IdMascota = '';
    var ValorRb = 1;
    var IdTipoProcesoGrabacion = 0;
    var IdAtencion;
    var IdAgendado = 0;
    var IdSede = 0;
    /* BEGIN FUNCIONES GENERALES */

    /* END FUNCIONES GENERALES */

    function Obtener_Nombre() {
        $("#NombreUsuario").append('<?php echo $_SESSION['User']; ?>');
    }

    $('#Salir').click(function() {
        Cerrar_Sesion("salir");
    });

    function Actualizar() {
        limpiaForm($("#FormularioAtencion"));
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
            },
            complete: function() {
            }
        });
    }

    function Obtener_Atencion(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
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
                $("#CboAtencion").empty();
                $("#CboAtencion").append('<option selected="true" disabled="disabled">SELECCIONE ATENCIÓN</option>');
                $.each(json, function(i, item) {
                    $("#CboAtencion").append('<option value="' + json[i].Producto_Id + '">' + json[i].Producto_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

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
                    $('#Txt_Dni').val(json[i].Cliente_Dni);
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

    $('#FormularioAtencion input').on('change', function() {
        ValorRb = $('input[name=Dni]:checked', '#FormularioAtencion').val();
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

    $("#CboAtencion").change(function() {
        Obtener_Precio('MostrarPrecio', $("#CboAtencion").val().trim());
        $("#Txt_CodigoProducto").val($("#CboAtencion").val().trim());

    });

    // Clase proser
    function Obtener_Precio(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
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
            ProcesoGrabacion(1, 4000000, 2);
        } else {
            if ($("#CboEstadoAtencion").val() == 3) {
                ProcesoGrabacion(2, IdAtencion, 3);
            } else {
                alert('Debe cambiar el estado de la Atención a Reprogramado');
                $("#CboEstadoAtencion").focus();
                $("#CboEstadoAtencion").select();
            }
        }
    });

    $("#btnGrabar").click(function() {
        if (IdTipoProcesoGrabacion == 0) {
            ProcesoGrabacion(1, 4000000, 1)
        } else {
            if ($("#CboEstadoAtencion").val() == 1) {
                ProcesoGrabacion(2, IdAtencion, 1);
            } else {
                alert('Debe cambiar el estado de la Atención a Realizado');
                $("#CboEstadoAtencion").focus();
                $("#CboEstadoAtencion").select();
            }
        }
    });

    function ProcesoGrabacion(tiporegistro, idatencion, idcita) {
        var nombredni = $('#Txt_Nombre_Dni').html();
        if (nombredni == 0) {
            alert('El DNI ingresado no existe, verificar el numero por favor o ingrese el DNI por defecto')
        } else {
            var Id = ValidaCamposObligatorios(
                $('#Txt_Sintomas').val().toUpperCase().trim(),
                $('#Txt_T').val().toUpperCase().trim(),
                //$('#Txt_C').val().toUpperCase().trim(),
                //$('#Txt_FR').val().toUpperCase().trim(),
                //$('#Txt_Deshidrat').val().toUpperCase().trim(),
                //$('#Txt_Mucosa').val().toUpperCase().trim(),
                //$('#Txt_Diarrea').val().toUpperCase().trim(),
                //$('#Txt_Ganglio').val().toUpperCase().trim(),
                $('#Txt_Peso').val().toUpperCase().trim(),
                $('#Txt_Dx_Presuntivo').val().toUpperCase().trim(),
                //$('#Txt_Dx_Definitivo').val().toUpperCase().trim(),
                //$('#Txt_Dx_Solicitado').val().toUpperCase().trim(),
                $('#Txt_Descripcion').val().toUpperCase().trim(),
                $('#Txt_NotasAdicionales').val().toUpperCase().trim())
            if (Id == 1) {
                localStorage.setItem('Observacion', $("#Txt_NotasAdicionales").val());
                RegistrarAtencion("GrabarAtencion",
                    tiporegistro,
                    idatencion,
                    $("#Txt_Fecha").val(),
                    $('#Txt_CodigoProducto').val(),
                    $("#CboMascota").val(),
                    $('#Txt_Sintomas').val().toUpperCase().trim(),
                    $('#Txt_T').val().toUpperCase().trim(),
                    $('#Txt_C').val().toUpperCase().trim(),
                    $('#Txt_FR').val().toUpperCase().trim(),

                    $('#Txt_Deshidrat').val().toUpperCase().trim(),
                    $('#Txt_Mucosa').val().toUpperCase().trim(),
                    $('#Txt_Tllc').val().toUpperCase().trim(),
                    $('#Txt_Vomitos').val().toUpperCase().trim(),
                    $('#Txt_Diarrea').val().toUpperCase().trim(),
                    $('#Txt_Ganglio').val().toUpperCase().trim(),
                    $('#Txt_Peso').val(),

                    $('#Txt_Dx_Presuntivo').val().toUpperCase().trim(),
                    $('#Txt_Dx_Definitivo').val().toUpperCase().trim(),
                    $('#Txt_Dx_Solicitado').val().toUpperCase().trim(),
                    $('#Txt_Descripcion').val().toUpperCase().trim(),
                    $('#Txt_NotasAdicionales').val().toUpperCase().trim(),
                    $('#Txt_Precio').val(),
                    1, /* Documento */
                    idcita,
                    'A',
                    '1',
                    '<?php echo $_SESSION['User']; ?>',
                    '1',
                    '<?php echo $_SESSION['IdAlmacen']; ?>',
                    $('#Txt_CodigoAtencion').val()
                );
            }
        }
    }

    function ValidaCamposObligatorios(sintomas, temp, peso, dxpresuntivo, descripcion, notasadicionales) {
        return 1;
        /*         if (sintomas.length == 0) {
                    alert('El campo sintomas es obligatorio');
                    $("#Txt_Sintomas").focus();
                    return 0;
                } else {
                    if (temp.length == 0) {
                        alert('El campo temperatura es obligatorio');
                        $("#Txt_T").focus();
                        return 0;
                    } else {
                        if (peso.length == 0) {
                            alert('El campo peso es obligatorio');
                            $("#Txt_Peso").focus();
                            return 0;
                        } else {
                            if (dxpresuntivo.length == 0) {
                                alert('El campo Dx. presuntivo es obligatorio');
                                $("#Txt_Dx_Presuntivo").focus();
                                return 0;
                            } else {
                                if (descripcion.length == 0) {
                                    alert('El campo descripción es obligatorio')
                                    $('#Txt_Descripcion').focus();
                                    return 0;
                                } else {
                                    if (notasadicionales.length == 0) {
                                        alert('El campo notas adicionales es obligatorio');
                                        $('#Txt_NotasAdicionales').focus();
                                        return 0;
                                    } else {
                                        return 1;
                                    }

                                }
                            }
                        }
                    }
                } */
    }

    function RegistrarAtencion(act, IdTipoRegistro, IdAtencion, Fecha, IdProducto, IdMascota, Sintomas, Atencion_T, Atencion_FC, Atencion_FR, Atencion_sc_Des, Atencion_sc_Muc,
        Atencion_sc_TLLC, Atencion_sc_Vom, Atencion_sc_Dia, Atencion_sc_Gan, Atencion_sc_Pes, Atencion_dx_Pre, Atencion_dx_Def, Atencion_dx_Sol, Atencion_tr_Des,
        Atencion_tr_Obs, Atencion_tr_Pre, Pint_Documento, Pint_Cita, Pint_CitaEstado, Pint_Estado, Pvchr_Usuario, Pint_VentaTipo, Pint_IdAlmacen, Pint_IdVBDA) {

        $.ajax({
            type: "POST",
            url: "modulos/atencion.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                IdTipoRegistro: IdTipoRegistro,
                IdAtencion: IdAtencion,
                Fecha: Fecha,
                IdProducto: IdProducto,
                IdMascota: IdMascota,
                Sintomas: Sintomas,
                Atencion_T: Atencion_T,
                Atencion_FC: Atencion_FC,
                Atencion_FR: Atencion_FR,
                Atencion_sc_Des: Atencion_sc_Des,
                Atencion_sc_Muc: Atencion_sc_Muc,
                Atencion_sc_TLLC: Atencion_sc_TLLC,
                Atencion_sc_Vom: Atencion_sc_Vom,
                Atencion_sc_Dia: Atencion_sc_Dia,
                Atencion_sc_Gan: Atencion_sc_Gan,
                Atencion_sc_Pes: Atencion_sc_Pes,
                Atencion_dx_Pre: Atencion_dx_Pre,
                Atencion_dx_Def: Atencion_dx_Def,
                Atencion_dx_Sol: Atencion_dx_Sol,
                Atencion_tr_Des: Atencion_tr_Des,
                Atencion_tr_Obs: Atencion_tr_Obs,
                Atencion_tr_Pre: Atencion_tr_Pre,
                Pint_Documento: Pint_Documento,
                Pint_Cita: Pint_Cita,
                Pint_CitaEstado: Pint_CitaEstado,
                Pint_Estado: Pint_Estado,
                Pvchr_Usuario: Pvchr_Usuario,
                Pint_VentaTipo: Pint_VentaTipo,
                Pint_IdAlmacen: Pint_IdAlmacen,
                Pint_IdVBDA: Pint_IdVBDA
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var idtmp;
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    idtmp = json[i].CodigoVentaTmp;
                });
                // Redireccionar
                if (Pint_Cita == 1) {
                    $("#Resultado_Grabacion").html('');
                    //var url = "venta-nuevo.php?IdVen=" + idtmp +"&IdMas=" + $("#CboMascota").val() + "&Tipo=4";
                    var url = "venta-nuevo.php?IdVen=" + idtmp + "&IdMas=" + $("#CboMascota").val() + "&Tipo=4" + "&Pro=" + IdAtencion + "&A=" + IdAgendado;
                    $(location).attr('href', url);
                } else {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Nuevo Atencion agendada correctamente</strong>' +
                        '</div>')
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

    // Clase Proser
    /* function Obtener_Atencion(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
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
                $("#Txt_CodigoProducto").val();
                $.each(json, function(i, item) {
                    $("#Txt_CodigoProducto").val(json[i].Producto_Id);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    } */


    function Obtener_Datos_Atencion(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/atencion.php",
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
                    //$('#Txt_CodigoProducto').val(json[i].Atencion_IdProducto);

                    $('#Txt_CodigoProducto').val(json[i].Atencion_IdProducto);
                    $("#CboAtencion option[value=" + $('#Txt_CodigoProducto').val() + "]").attr("selected", true);
                    $("#CboAtencion").attr('disabled', true);

                    $('#Txt_Fecha').val(json[i].Atencion_Fecha);
                    $('#Txt_T').val(json[i].Atencion_T);
                    $('#Txt_C').val(json[i].Atencion_FC);
                    $('#Txt_FR').val(json[i].Atencion_FR);
                    $('#Txt_Sintomas').val(json[i].Atencion_Sintomas);
                    $('#Txt_Deshidrat').val(json[i].Atencion_sc_Deshidratacion);
                    $('#Txt_Mucosa').val(json[i].Atencion_sc_Mucosas);
                    $('#Txt_Tllc').val(json[i].Atencion_sc_TLLC);
                    $('#Txt_Vomitos').val(json[i].Atencion_sc_Vomitos);
                    $('#Txt_Diarrea').val(json[i].Atencion_sc_Diarreas);
                    $('#Txt_Ganglio').val(json[i].Atencion_sc_Ganglios);
                    $('#Txt_Peso').val(json[i].Atencion_sc_Peso);
                    $('#Txt_Dx_Presuntivo').val(json[i].Atencion_dx_Presuntivo);
                    $('#Txt_Dx_Definitivo').val(json[i].Atencion_dx_Definitivo);
                    $('#Txt_Dx_Solicitado').val(json[i].Atencion_dx_Solicitado);
                    $('#Txt_Descripcion').val(json[i].Atencion_tr_Descripcion);
                    $('#Txt_NotasAdicionales').val(json[i].Atencion_tr_Observacion);
                    $('#Txt_Precio').val(json[i].Atencion_tr_Precio);
                    localStorage.setItem('Txt_NotasAdicionales', json[i].Atencion_tr_Observacion);
                    // nuevo
                    $('#Txt_CodigoAtencion').val(json[i].Atencion_IdVenta);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $("#btnLimpiar").click(function() {
        limpiaForm($("#FormularioAtencion"));
    });

    $(function() {
        Habilita_Desabilita(true, false, false);
        Obtener_Sede_Usuario('MostrarSede_Usuario');
        Obtener_Atencion('MostrarProductoxCondicion_Atencion', IdSede);
        $("#CboEstadoAtencion").attr('disabled', true);
        //----Obtener_Precio('MostrarPrecio', $("#Txt_CodigoProducto").val().trim());
        $('#Txt_Fecha').val(MostrarFechaActual());

        if ($_GET("IdMas") === undefined) {
            //SIN VALOR GET
        } else {
            // CON VALOR GET
            $("#RbDniM").attr('checked', true);
            $("input[type=radio]").attr('disabled', true);
            $("#Txt_Dni").attr('disabled', true);
            $("#btnBuscar").attr('disabled', true);
            Obtener_NombreCliente_NombreMascota('MostrarNombrecliNombreMas', $_GET("IdMas"));
            $("#CboMascota option[value=" + $('#Txt_CodigoMascota').val() + "]").attr("selected", true);
            if ($_GET("IdPro") === undefined) {
                //SIN VALOR GET
            } else {
                $("#CboEstadoAtencion").attr('disabled', false);
                IdAtencion = $_GET("IdPro");
                IdAgendado = 1; // 1 : siginifica si - no agendado (valor por defecto)                
                Obtener_Datos_Atencion('ObtenerDatosAtencionxId', IdAtencion);
                IdTipoProcesoGrabacion = 1;
                $("#btnAgendar").text('Reprogramar');
            }
        }
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>