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
    <title>Nueva Venta - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                            <li class="active">
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
                            <li class="active">
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

    <!-- / Modal -->

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Ventas</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Nueva Venta</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                            <li onclick="Actualizar_Nuevo()"><a data-action="reload"><i class="icon-reload"></i></a></li>
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form class="form" id="FormularioVenta">
                                            <div class="form-body">
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
                                                                    <!--<label class="display-inline-block custom-control custom-radio">
                                                                        <input type="radio" id="RbDniC" name="Dni" class="custom-control-input" value="3">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">NRO. Celular</span>
                                                                    </label>-->
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
                                                                        <input type="text" id="Txt_Dni" class="form-control" placeholder="Ingrese DNI" name="Txt_Dni" onkeyup="javascript:this.value=this.value.toUpperCase();">
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
                                                                        <input type="hidden" id="Txt_CodigoCliente" name="Txt_CodigoCliente">
                                                                        <input type="hidden" id="Txt_CodigoMascota" name="Txt_CodigoMascota">
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <label class="display-inline" for="CboMascota">Seleccione nombre mascota :
                                                                        <select id="CboMascota" name="CboMascota" class="form-control">
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">Datos de Producto</h4>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="CboSede">Seleccione Sede</label>
                                                            <select id="CboSede" name="CboSede" class="form-control"></select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="CboTipoPago">Tipo de Pago</label>
                                                            <select id="CboTipoPago" name="CboTipoPago" class="form-control">
                                                                <option value="1" selected>EFECTIVO</option>
                                                                <option value="2">TARJETA DE CREDITO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="TxtFecha">Fecha Venta </label>
                                                            <input id="TxtFecha" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="TxtProducto">Seleccione Producto :</label>
                                                            <input list="productos" style="text-transform:uppercase;" id="TxtProducto" class="form-control" placeholder="Ingrese producto" name="TxtProducto">
                                                            <datalist id="productos" size="400">
                                                                <!--
                                                                <option>PNG</option>
                                                                <option>JPEG</option>
                                                                <option>GIF</option>
                                                                <option>TGA</option> 
                                                                -->
                                                            </datalist>
                                                            <input type="hidden" id="CodigoProducto" name="CodigoProducto">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Nombre">Precio</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_Precio" class="form-control" placeholder="0" name="Txt_Nombre">
                                                            <input type="hidden" id="Txt_Precio" name="Txt_Precio">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Descuento">Descuento</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_Descuento" class="form-control" placeholder="0" name="Txt_Descuento">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Cantidad">Cantidad</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_Cantidad" class="form-control" placeholder="0" name="Txt_Cantidad">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button id="btnAgregar" type="button" class="btn btn-success mr-1">
                                                                <i class="icon-check2"></i> Agregar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div id="Resultado_Grabacion"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="VistaDetalle">
                            <!-- Div para ocultar -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-form">Listado de Productos</h4>
                                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                                <li onclick="Actualizar_Listado()"><a data-action="reload"><i class="icon-reload"></i></a></li>
                                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body collapse in">
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table id="TblVenta" class="table table-striped table-bordered nowrap" style="width:100%">
                                                    <thead class="bg-info">
                                                        <tr>
                                                            <th style="width: 5%;">Nro</th>
                                                            <th style="width: 5%;">Id</th>
                                                            <th style="width: 50%;">Producto</th>
                                                            <th style="width: 7%;">P.uni.</th>
                                                            <th style="width: 7%;">Cantidad</th>
                                                            <th style="width: 7%;">P.tot.</th>
                                                            <th style="width: 7%;">Desc.</th>
                                                            <th style="width: 7%;">Total</th>
                                                            <th style="width: 5%;">&nbsp;&nbsp;X</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="7" style="text-align:right">Total Venta:</th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group" style="text-align:center;">
                                                    <div class="row">
                                                        <button id="BtnNuevaVenta" type="button" class="btn btn-warning mr-1"><i class="icon-rotate-right"></i> Nueva Venta</button>
                                                        <button id="BtnGrabarVenta" type="button" class="btn btn-success mr-1"><i class="icon-check-circle"></i> Grabar Venta</button>
                                                        <button id="BtnCancelarVenta" type="button" class="btn btn-danger mr-1"><i class="icon-times-circle"></i> Cancelar Venta</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

<!-- BEGIN. EVENTOS SCRIPT-->
<script type="text/javascript">
    var IdMascota = '';
    var ValorRb = 1;
    var table;
    var IdVentaTmp = 0;
    var Id_TipoVenta = 0;
    var IdProducto_VBDA = 0;
    var IdAgendado = 0;
    var Observacion_Final;
    var CodigoVenta_Elminacion;
    var CodigoVenta_Servicio;
    var IdentifProcesoCancelacVenta = 0;
    var ProcesoVBDA_CancelarCompra = 0;
    var IdVenta_temporal = 0;
    var Carpeta;

    function Obtener_Nombre() {
        $("#NombreUsuario").append('<?php echo $_SESSION['User']; ?>');
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
            beforeSend: function() {

            },
            success: function(data) {
                var url = "login.php";
                $(location).attr('href', url);
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Habilita_Desabilita(boolLimpiar, boolGrabar, boolCancelar) {
        $("#BtnNuevaVenta").attr('disabled', boolLimpiar);
        $("#BtnGrabarVenta").attr('disabled', boolGrabar);
        $("#BtnCancelarVenta").attr('disabled', boolCancelar);
    }

    function Habilita_Desabilita_Controles_TipoVenta(bool) {
        $("#CboMascota").attr('disabled', bool);
        $("#TxtProducto").attr('disabled', bool);
        $("#Txt_Cantidad").attr('disabled', bool);
    }

    function Habilita_Desabilita_Controles(boolSede, boolTipPago, boolFec, boolPro, boolPre, boolDes, boolCan, boolTabla) {
        $("#CboSede").attr('disabled', boolSede);
        $("#CboTipoPago").attr('disabled', boolTipPago);
        $("#TxtFecha").attr('disabled', boolFec);
        $("#TxtProducto").attr('disabled', boolPro);
        $("#Txt_Precio").attr('disabled', boolPre);
        $("#Txt_Descuento").attr('disabled', boolDes);
        $("#Txt_Cantidad").attr('disabled', boolCan);
        //$("#TxtCantidad").attr('disabled', bool);
        //$("#BtnAgregar").attr('disabled', bool);
        //$("#TblCompra").attr('disabled', bool);  
        $("#TblVenta").find("*").attr("disabled", boolTabla);
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


    $("#TxtProducto").keyup(function() {
        Obtener_Producto('MostrarProductoxNombre', '%' + $("#TxtProducto").val() + '%', 1);
    });
    $("#TxtProducto").change(function() {
        var value = $('#TxtProducto').val();
        Obtener_Precio('MostrarPrecio', $('#productos [value="' + value + '"]').data('value'));
    });

    function Obtener_Producto(act, nombre, sede) {
        var lista = '';
        $.ajax({
            type: "POST",
            url: "modulos/compras.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nombre: nombre,
                Sede: sede
            }),
            beforeSend: function() {},
            success: function(data) {
                var json = JSON.parse(data);
                $("#productos").empty();
                $.each(json, function(i, item) {
                    lista = lista + '<option data-value="' + json[i].Producto_Id + '" value="' + json[i].Producto_Nombre + '" style="display:inline-block; width:400px;"> <span> ' + '' + '</span> </option>';
                    //lista = lista + '<option data-value="' + json[i].Producto_Id + '" value="' + json[i].Producto_Nombre + '" style="display:inline-block; width:400px;"> <span> S/. ' + json[i].Producto_PrecioVenta + '</span> <span>&nbsp;&nbsp;&nbsp;&nbsp; Stock : ' + json[i].Almacen_Cantidad + '</span> </option>';
                });
            },
            complete: function() {
                $("#productos").html(lista);
            }
        });
    }
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
            beforeSend: function() {},
            success: function(data) {
                var json = JSON.parse(data);
                $("#Txt_Precio").empty();
                $.each(json, function(i, item) {
                    $("#Txt_Precio").val(json[i].Producto_PrecioVenta);
                });
            },
            complete: function() {}
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

    function Obtener_Registros_Tblventatemporal(act, Id) {
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
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboEspecie").empty();
                $.each(json, function(i, item) {
                    $('#TxtFecha').val(json[i].VentaTemporal_Fecha);
                    $('#CodigoProducto').val(json[i].VentaTemporal_IdProducto);
                    $('#TxtProducto').val(json[i].Producto_Nombre);
                    $('#Txt_Precio').val(json[i].VentaTemporal_Precio);
                    $('#Txt_Descuento').val('0.00');
                    $('#Txt_Cantidad').val('1.00');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    //Controles independientes
    $('#FormularioVenta input').on('change', function() {
        ValorRb = $('input[name=Dni]:checked', '#FormularioVenta').val();
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

    $('#btnAgregar').click(function() {
        var Descuento = 0;
        var Codigo = 0;
        if ($('#Txt_Descuento').val() !== 0) {
            Descuento = $('#Txt_Descuento').val();
        }
        if (Id_TipoVenta == 1 || Id_TipoVenta == 2 || Id_TipoVenta == 3 || Id_TipoVenta == 4) {
            Codigo = $('#CodigoProducto').val();
            $("#btnAgregar").hide();
            // establecer el proceso ** Pint_ProcesoVBDA **
            ProcesoVBDA_CancelarCompra = 1;
            // establecer el proceso ** Pint_ProcesoVBDA **
        } else {
            Codigo = $('#productos [value="' + $('#TxtProducto').val() + '"]').data('value');
        }

        if ($("#Txt_Cantidad").val() > 0) {
            if ($("#TxtProducto").val() !== '') {
                Grabar_Venta_Tmp('GrabarVentaTmp', IdVentaTmp, $("#CboSede").val(), Codigo, $('#Txt_Cantidad').val(),
                    ($('#Txt_Precio').val() * $('#Txt_Cantidad').val()).toFixed(2),
                    ($('#Txt_Descuento').val() * $('#Txt_Cantidad').val()).toFixed(2),
                    (($('#Txt_Precio').val() - Descuento) * $('#Txt_Cantidad').val()).toFixed(2),
                    '<?php echo $_SESSION['User']; ?>');
            } else {
                alert('Debe seleccionar un producto');
            }
        } else {
            alert('La cantidad de productos tiene que se mayor a 1');
        }
    });


    function Grabar_Venta_Tmp(act, IdVenta, IdSede, IdProducto, Cantidad, Precio, Descuento, PrecioTotal, Usuario) {
        //console.log(act+','+ IdVenta+','+ IdSede+','+ IdProducto+','+  Cantidad+','+ Precio+','+ Descuento+','+ PrecioTotal+','+ Usuario);
        var Estado = 0;
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                IdVenta: IdVenta,
                IdSede: IdSede,
                IdProducto: IdProducto,
                Cantidad: Cantidad,
                Precio: Precio,
                Descuento: Descuento,
                PrecioTotal: PrecioTotal,
                Usuario: Usuario
            }),
            beforeSend: function() {},
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    IdVentaTmp = json[i].CODIGO;
                    Estado = json[i].ESTADO;
                });
            },
            complete: function() {
                if (Estado == 1 || Estado == 2) {
                    listar();
                    if (Id_TipoVenta == 1 || Id_TipoVenta == 2 || Id_TipoVenta == 3 || Id_TipoVenta == 4) {
                        Habilita_Desabilita_Controles(false, false, false, true, true, true, true, false);
                        Habilita_Desabilita(true, false, true);
                    } else {
                        $("#TxtProducto").val('');
                        $("#Txt_Precio").val('');
                        $("#Txt_Descuento").val('');
                        $("#Txt_Cantidad").val('');
                        Habilita_Desabilita(false, false, true);
                    }
                    //Habilita_Desabilita(false, false, true);
                } else if (Estado == 0) {
                    alert('El producto ' + $('#TxtProducto').val() + ' ya ha sido seleccionado, seleccione otro por favor')
                } else if (Estado == 3) {
                    alert('El producto ' + $('#TxtProducto').val() + ' seleccionado, no cuenta con stock disponible')
                } else if (Estado == 4) {
                    alert('El producto ' + $('#TxtProducto').val() + ' seleccionado, no se encuentra en el almacen')
                }
            }
        });
    }

    var listar = function() {
        table = $('#TblVenta').DataTable({
            "destroy": true,
            "searching": false,
            "paging": false,
            "infoEmpty": false,
            "info": false,
            "ordering": false,
            "ajax": {
                "method": "POST",
                //"url": "modulos/ventas_listado.php?Id=" + IdVentaTmp+"&Precio=" + PrecioUnitTemporal,
                "url": "modulos/ventas_listado.php?Id=" + IdVentaTmp,
            },
            "columns": [{
                    "data": "Orden"
                },
                {
                    "data": "VentaDetalle_tmp_Id"
                },
                {
                    "data": "Producto_Nombre"
                },
                {
                    "data": "VentaDetalle_tmp_PrecioUnit"
                },
                {
                    "data": "VentaDetalle_tmp_Cantidad"
                },
                {
                    "data": "VentaDetalle_tmp_Precio"
                },
                {
                    "data": "VentaDetalle_tmp_Descuento"
                },
                {
                    "data": "PrecioTotal"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group center-block' ><div class='btn-group btn-group-sm' role='group'>" +
                            "<button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.VentaDetalle_tmp_Id + "'><i class='icon-trash-o'></i></button>" +
                            "</div></div>";
                    }
                }

            ],
            "footerCallback": function(row, data, start, end, display) {
                var api = this.api(),
                    data;
                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '') * 1 :
                        typeof i === 'number' ?
                        i : 0;
                };
                // Total over all pages
                total = api
                    .column(7)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                // Update footer
                $(api.column(7).footer()).html(
                    'S/. ' + total.toFixed(2)
                );
            },
            /* BOTONES DE DATATABLE */
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
    }

    $('#TblVenta').on('click', '.eliminar', function() {
        var id = $(this).val();
        var bool = confirm("Esta seguro de eliminar el registro ?");
        if (bool) {
            Eliminar_Venta('EliminarVenta', id)
            if (Id_TipoVenta == 1 || Id_TipoVenta == 2 || Id_TipoVenta == 3 || Id_TipoVenta == 4) {
                Habilita_Desabilita(true, true, true);
                Habilita_Desabilita_Controles(false, false, false, true, false, false, true, false);
                // establecer el proceso ** Pint_ProcesoVBDA **
                ProcesoVBDA_CancelarCompra = 0;
                // establecer el proceso ** Pint_ProcesoVBDA **
            }
            //alert('El cliente seleccionado fue eliminado correctamente');
        } else {
            //alert("cancelo la solicitud");
        }
    });

    function Eliminar_Venta(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: codigo
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                if (data == 1) {
                    //listar();
                    //----alert('Venta eliminada correctamente');
                    listar();
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de eliminación');
                }
            },
            complete: function() {
                //alert('ok2');
                if (Id_TipoVenta == 1 || Id_TipoVenta == 2 || Id_TipoVenta == 3 || Id_TipoVenta == 4) {
                    $("#btnAgregar").show();
                }
            }
        });
    }


    $('#BtnNuevaVenta').click(function() {
        if (Id_TipoVenta == 1 || Id_TipoVenta == 2 || Id_TipoVenta == 3 || Id_TipoVenta == 4) {
            if (IdentifProcesoCancelacVenta == 0) {
                var URLactual = jQuery(location).attr('href');
                $(location).attr('href', URLactual);
            } else {
                var url = "venta-nuevo.php";
                $(location).attr('href', url);
            }
        } else {
            var url = "venta-nuevo.php";
            $(location).attr('href', url);
        }
    })


    $('#BtnGrabarVenta').click(function() {
        if (Id_TipoVenta == 4 && IdAgendado == 0) {
            IdProducto_VBDA = IdVenta_temporal;
        }

        Grabar_Venta(
            'GrabarVenta',
            IdVentaTmp,
            IdProducto_VBDA,
            IdAgendado,
            $('#CodigoProducto').val(),
            1,
            $('#TxtFecha').val(),
            Id_TipoVenta,
            $('#CboTipoPago').val(),
            $('#CboMascota').val(),
            $("#CboSede").val(),
            Observacion_Final,
            1,
            '<?php echo $_SESSION['User']; ?>'
        )
    });

    function Grabar_Venta(act, idVentatmp, idVBDA, idAgendado, idProducto, idKardex, fecha, idTipoVenta,
        idTipoPago, idMascota, idAlmacen, observacion, estado, usuario) {
        console.log(act + ',' + idVentatmp + ',' + idVBDA + ',' + idAgendado + ',' + idProducto + ',' + idKardex + ',' + fecha + ',' + idTipoVenta + ',' +
            idTipoPago + ',' + idMascota + ',' + idAlmacen + ',' + observacion + ',' + estado + ',' + usuario);
           
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                idVentatmp: idVentatmp,
                idVBDA: idVBDA,
                idAgendado: idAgendado,
                idProducto: idProducto,
                idKardex: idKardex,
                fecha: fecha,
                idTipoVenta: idTipoVenta,
                idTipoPago: idTipoPago,
                idMascota: idMascota,
                idAlmacen: idAlmacen,
                observacion: observacion,
                estado: estado,
                usuario: usuario
            }),
            beforeSend: function() {
                //console.log(act+'-'+Condicion+'-'+Fecha+'-'+Guia+'-'+Proveedor+'-'+Observacion+'-'+Usuario+'-'+Sede+'-'+Idcompra);
            },
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    CodigoVenta_Elminacion = json[i].CODIGO;
                    CodigoVenta_Servicio = json[i].CODIGO_SERVICIO;
                    console.log(CodigoVenta_Elminacion,'-',CodigoVenta_Servicio)
                });
                //.---------------------------------------------------------------------------------------------------
                IdentifProcesoCancelacVenta = 1;

                if (Id_TipoVenta == 4) {
                    LeeArchivos("LeeArchivos", CodigoVenta_Servicio);
                }

                if (Id_TipoVenta == 2) {
                    Actualizar_Registro_Evaluacion_Medica("EditarEvaluacionMedica", CodigoVenta_Servicio, IdVenta_temporal);
                }                

                Habilita_Desabilita(false, true, false);
                Habilita_Desabilita_Controles(true, true, true, true, true, true, true, true);
                $("#Resultado_Grabacion").show();
                $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<strong>Venta registrada correctamente</strong>' +
                    '</div>')
                $("#Resultado_Grabacion").fadeTo(2000, 500).slideUp(500, function() {
                    $("#Resultado_Grabacion").slideUp(500);
                });
            },
            error: function(xhr, status) {
                alert('Error al procesar los datos contacte al administrador de sistemas');
            },
            complete: function() {}
        });
    }

    $("#BtnCancelarVenta").click(function() {
        console.log(CodigoVenta_Elminacion, IdVentaTmp, CodigoVenta_Servicio, ProcesoVBDA_CancelarCompra, IdAgendado,Id_TipoVenta);
        var bool = confirm("Esta seguro de cancelar la venta ?");
        if (bool) {
            Cancelar_Venta('CancelarVenta',
                CodigoVenta_Elminacion,
                IdVentaTmp,
                '<?php echo $_SESSION['User']; ?>',
                CodigoVenta_Servicio,
                ProcesoVBDA_CancelarCompra,
                IdAgendado,
                Id_TipoVenta
            )
        } else {
            //alert("cancelo la solicitud");
        }
    });

    function Cancelar_Venta(act, IdVenta, IdVentatmp, Usuario, IdVBDA, ProcesoVBDA, Atencion_Agen, IdTipoVenta) {
        //console.log(act+','+IdVenta+','+IdVentatmp+','+Usuario+','+IdVBDA+','+ProcesoVBDA+','+Atencion_Agen+','+IdTipoVenta);
        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdVenta: IdVenta,
                IdVentatmp: IdVentatmp,
                Usuario: Usuario,
                IdVBDA: IdVBDA,
                ProcesoVBDA: ProcesoVBDA,
                Atencion_Agen: Atencion_Agen,
                IdTipoVenta: IdTipoVenta
            }),
            beforeSend: function() {},
            success: function(data) {
                var json = JSON.parse(data);
                if (data == 1) {
                    alert('Venta cancelada Correctamente');
                    var url = "venta-nuevo.php";
                    $(location).attr('href', url);
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de eliminación');
                }
            },
            complete: function() {}
        });
    }

    /*****************************
     *****************************/


    function Actualizar_Nuevo() {
        limpiaForm($("#FormularioVenta"));
        ActivarBotones();
        $("#Resultado_Grabacion").hide();
    }

    function Actualizar_Listado() {
        listar();
    }

    function ValidaCamposObligatorios(Nombre, Especie) {
        if (Nombre.length == 0) {
            alert('El campo nombre es obligatorio');
            $("#Txt_Nombre").focus();
            return 0;
        } else {
            if (Especie.length == 0) {
                alert('El campo especie es obligatorio');
                $("#CboEspecie").focus();
                return 0;
            } else {
                return 1;
            }
        }
    }

    $("#btnLimpiar").click(function() {
        limpiaForm($("#FormularioVenta"));
        $("#Resultado_Grabacion").hide();
    });


    /*=========================================== DOCUMENTO ===============================================*/
    function LeeArchivos(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/atencion.php",
            async: false,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                var ind = 1;
                RenombrarArchivos("RenombrarArchivos", json, codigo);
                ValidarDocumento("ValidarDocumento", codigo);
                if (Carpeta == "false") {
                    $.each(json, function(i, item) {
                        GrabarDocumento('GrabarDocumento', (codigo +"_"+ ind + ".pdf"), json[i], codigo, 1, 1, '<?php echo $_SESSION['User']; ?>');
                        ind = ind + 1;
                    });
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function RenombrarArchivos(act, array, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/atencion.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                ArrayDocumento: JSON.stringify(array),
                codigo: codigo
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function ValidarDocumento(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/atencion.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                codigo: codigo
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                Carpeta = data;
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function GrabarDocumento(act, NombreActual, NombreAnterior, Carpeta, Codigo, Estado, Usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/atencion.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                NombreActual: NombreActual,
                NombreAnterior: NombreAnterior,
                Carpeta: Carpeta,
                Codigo: Codigo,
                Estado: Estado,
                Usuario: Usuario
            }),
            beforeSend: function() {},
            success: function(data) {
                //var json = JSON.parse(data);
                if (data == 1) {
                    /* alert('Venta cancelada Correctamente');
                    var url = "venta-nuevo.php";
                    $(location).attr('href', url); */
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de eliminación');
                }
            },
            complete: function() {}
        });
    }

    /*===========================================FIN DOCUMENTO ===============================================*/


    /*=========================================== EVALUACION MEDICA ===========================================*/

    function Actualizar_Registro_Evaluacion_Medica (act, IdBanio, IdBanioTmp){
        //console.log(act,' - ', IdBanio,' - ', IdBanioTmp);
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdBanio: IdBanio,
                IdBanioTmp: IdBanioTmp
            }),
            beforeSend: function() {},
            success: function(data) {
                //console.log(data);
            },
            complete: function() {}
        });
    }

    /*=========================================== FIN EVALUACION MEDICA =======================================*/    

    $(function() {
        Obtener_Nombre();
        Observacion_Final = "";
        Obtener_Sede('MostrarSede');
        $('#TxtFecha').val(MostrarFechaActual());
        Habilita_Desabilita(true, true, true);

        if ($_GET("IdVen") === undefined) {
            //SIN VALOR GET
            if ($_GET("IdMas") === undefined) {
                //SIN VALOR GET
            } else {
                Obtener_NombreCliente_NombreMascota('MostrarNombrecliNombreMas', $_GET("IdMas"));
            }

        } else {
            Observacion_Final = localStorage.getItem('Observacion');
            // CON VALOR GET
            Id_TipoVenta = $_GET("Tipo");
            $("#RbDniM").attr('checked', true);
            $("input[type=radio]").attr('disabled', true);
            $("#Txt_Dni").attr('disabled', true);
            $("#btnBuscar").attr('disabled', true);

            $("#RbDniM").attr('checked', true);
            $("input[type=radio]").attr('disabled', true);
            $("#Txt_Dni").attr('disabled', true);
            $("#btnBuscar").attr('disabled', true);
            Obtener_NombreCliente_NombreMascota('MostrarNombrecliNombreMas', $_GET("IdMas"));
            $("#CboMascota option[value=" + $('#Txt_CodigoMascota').val() + "]").attr("selected", true);
            IdVenta_temporal = $_GET("IdVen");
            Obtener_Registros_Tblventatemporal('ObtenerRegistrosTblventatemporal', $_GET("IdVen"));
            Habilita_Desabilita_Controles_TipoVenta(true);

            if ($_GET("Pro") === undefined) {
                //SIN VALOR GET
            } else {
                //ALMACENA ID DE LA TABLA A LA QUE SE QUIERE TRABAJAR VIENE DEL MODULO INDEX
                IdProducto_VBDA = $_GET("Pro");
                IdAgendado = $_GET("A");
            }
        }

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>