<?php
// start a session
session_start();
?>
<!DOCTYPE html>
<html lang="es" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Compras - Sistema Vet. TuWebIn</title>
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
        $CondicionSede =  $_SESSION['IdAlmacen'];

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
                        <a href="#"><i class="icon-list2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Compras</span>
                        </a>
                        <ul class="menu-content">
                            <li class="active">
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
                        <a href="#"><i class="icon-calendar3"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Agenda</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="agenda-nuevo.php" class="menu-item">Nueva cita</a>
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
                            <li>
                                <a href="historia-cliente.php" class="menu-item">Historia Clinica Cliente</a>
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
                            <li class="active">
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
                    <!--
                    <li class=" nav-item">
                        <a href="#"><i class="icon-list2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Compras</span>
                        </a>
                        <ul class="menu-content">
                            <li class="active">
                                <a href="compra-nuevo.php" class="menu-item">Nueva Compra</a>
                            </li>
                            <li>
                                <a href="listado-compra.php" class="menu-item">Listado Compras</a>
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
                        <a href="#"><i class="icon-calendar3"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Agenda</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="agenda-nuevo.php" class="menu-item">Nueva cita</a>
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
                            <li>
                                <a href="historia-cliente.php" class="menu-item">Historia Clinica Cliente</a>
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
                    <!--
                    <li class=" nav-item">
                        <a href="#"><i class="icon-list2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Compras</span>
                        </a>
                        <ul class="menu-content">
                            <li  class="active>
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
                        <a href="#"><i class="icon-plus2"></i>
                            <span data-i18n="nav.content.main" class="menu-title">Atenciones</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="listado-atencion.php" class="menu-item">Listado Atenciones</a>
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
                            <li>
                                <a href="historia-cliente.php" class="menu-item">Historia Clinica Cliente</a>
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
                    <h2 class="content-header-title">Compras</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Nueva Compra</h4>
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
                                        <form class="form" id="FormularioCompra">
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="input-group">
                                                            <label class="display-inline" for="TxtFecha">Seleccione Fecha :
                                                                <input id="TxtFecha" type="date" class="form-control">
                                                                </select>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="input-group">
                                                                    <label class="display-inline" for="CboSede">Seleccione Sede :
                                                                        <select id="CboSede" name="CboSede" class="form-control">
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <label class="display-inline" for="TxtDocumento">Documento :
                                                                        <input type="text" style="text-transform:uppercase;" id="TxtDocumento" class="form-control" placeholder="Ingrese documento" name="TxtDocumento">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="input-group">
                                                                    <label class="display-inline" for="TxtProveedor">Proveedor :
                                                                        <input type="text" style="text-transform:uppercase;" id="TxtProveedor" class="form-control" placeholder="Ingrese proveedor" name="TxtProveedor">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">Datos de Compra</h4>

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
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Precio">Precio</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Precio" class="form-control" placeholder="00.00" name="Txt_Precio">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="TxtCantidad">Cantidad</label>
                                                            <input type="text" style="text-transform:uppercase;" id="TxtCantidad" class="form-control" placeholder="0" name="TxtCantidad" onkeypress="return SoloNumeros(event);">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label for="Txt_Nombre" style="color:#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="button" id="BtnAgregar" class="btn btn-success"><i class="icon-check2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>

                                        <h6 class="form-section">Listado Productos</h6>

                                        <div class="table-responsive">
                                            <table id="TblCompra" class="table table-striped table-bordered nowrap" style="width:100%">
                                                <thead class="bg-info">
                                                    <tr>
                                                        <th>NRO.</th>
                                                        <th>ID</th>
                                                        <th>Producto</th>
                                                        <th>Precio</th>
                                                        <th>Cantidad</th>
                                                        <th>Total</th>
                                                        <th>Administrar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="5" style="text-align:right">Total Compra:</th>
                                                        <th></th>
                                                    </tr>
                                                    <!--                                                     <tr>
                                                        <th colspan="5" style="text-align:right">Cantidad de items:</th>
                                                        <th><label for="Txt_Cantidad">0</label></th>
                                                    </tr> -->
                                                </tfoot>
                                            </table>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group" style="text-align:center;">
                                                <div class="row">
                                                    <button id="BtnNuevaCompra" type="button" class="btn btn-warning mr-1"><i class="icon-rotate-right"></i> Nueva Compra</button>
                                                    <button id="BtnGrabarCompra" type="button" class="btn btn-success mr-1"><i class="icon-check-circle"></i> Grabar Compra</button>
                                                    <button id="BtnCancelarCompra" type="button" class="btn btn-danger mr-1"><i class="icon-times-circle"></i> Cancelar Compra</button>
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
    var table;
    var IdCompraTmp = 0;
    //var CantidadItem = 0;

    /* BEGIN FUNCIONES GENERALES */
    function limpiaForm(miForm) {
        // recorremos todos los campos que tiene el formulario
        $(':input', miForm).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            //limpiamos los valores de los campos…
            if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'hidden')
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
    /* END FUNCIONES GENERALES */

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
            beforeSend: function() {},
            success: function(data) {
                var url = "login.php";
                $(location).attr('href', url);
            },
            complete: function() {}
        });
    }


    function Obtener_Sede(act) {
        $.ajax({
            type: "POST",
            url: "modulos/compras.php",
            async: true,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {},
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $("#CboSede").empty();
                $.each(json, function(i, item) {
                    $("#CboSede").append('<option value="' + json[i].Sede_Id + '">' + json[i].Sede_Nombre + '</option>');
                });
            },
            complete: function() {
                $("#CboSede option[value=" + CondicionSede + "]").attr("selected", true);
            }
        });
    }


    $("#TxtProducto").keyup(function() {
        console.log('%' + $("#TxtProducto").val() + '%');
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
                console.log(data);
                var json = JSON.parse(data);
                $("#Txt_Precio").empty();
                $.each(json, function(i, item) {
                    $("#Txt_Precio").val(json[i].Producto_PrecioVenta);
                });
            },
            complete: function() {}
        });
    }

    $("#BtnAgregar").click(function() {
        var Id = ValidaCamposObligatorios($('#TxtFecha').val(),
            $("#CboSede").val(),
            $("#TxtDocumento").val().toUpperCase().trim(),
            $("#TxtProveedor").val().toUpperCase().trim(),
            $('#TxtProducto').val(),
            $("#Txt_Precio").val().trim(),
            $("#TxtCantidad").val().trim());
        if (Id == 1) {
            Grabar_Compra('GrabarCompraTmp',
                IdCompraTmp,
                $('#productos [value="' + $('#TxtProducto').val() + '"]').data('value'),
                $("#Txt_Precio").val().trim(),
                $("#TxtCantidad").val().trim(),
                '<?php echo $_SESSION['User']; ?>',
                $("#CboSede").val())
        }

    });

    function ValidaCamposObligatorios(Fecha, Sede, Documento, Proveedor, Producto, Precio, Cantidad) {
        if (Fecha.length == 0) {
            alert('El campo fecha es obligatorio');
            $("#TxtFecha").focus();
            return 0;
        } else {
            if (Sede.length == 0) {
                alert('El campo sede es obligatorio');
                $("#CboSede").focus();
                return 0;
            } else {
                if (Documento.length == 0) {
                    alert('El campo documento es obligatorio');
                    $("#TxtDocumento").focus();
                    return 0;
                } else {
                    if (Proveedor.length == 0) {
                        alert('El campo proveedor es obligatorio');
                        $("#TxtProveedor").focus();
                        return 0;
                    } else {
                        if (Producto.length == 0) {
                            alert('El campo producto es obligatorio');
                            $("#productos").focus();
                            return 0;
                        } else {
                            if (Precio.length == 0) {
                                alert('El campo precio es obligatorio');
                                $("#Txt_Precio").focus();
                                return 0;
                            } else {
                                if (Cantidad.length == 0) {
                                    alert('El campo cantidad es obligatorio');
                                    $("#TxtCantidad").focus();
                                    return 0;
                                } else {
                                    return 1;
                                }
                            }
                        }
                    }
                }

            }
        }
    }

    //function ValidarProducto(act, IdCompra,  )

    function Grabar_Compra(act, IdCompra, IdProducto, Precio, Cantidad, Usuario, Sede) {
        var Estado = 0;
        $.ajax({
            type: "POST",
            url: "modulos/compras.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdCompra: IdCompra,
                IdProducto: IdProducto,
                Precio: Precio,
                Cantidad: Cantidad,
                Usuario: Usuario,
                Sede: Sede
            }),
            beforeSend: function() {},
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $.each(json, function(i, item) {
                    IdCompraTmp = json[i].CODIGO;
                    Estado = json[i].ESTADO;
                    //console.log('estado : ' + json[i].ESTADO);
                });
            },
            complete: function() {
                if (Estado != 0) {
                    //alert('aqui');
                    listar();
                }else{
                    alert('El producto ' + $('#TxtProducto').val() + ' ya ha sido seleccionado, seleccione otro por favor')
                }
            }
        });
    }

    var listar = function() {
        console.log('var :' + IdCompraTmp);
        table = $('#TblCompra').DataTable({
            "destroy": true,
            "searching": false,
            "paging": false,
            "infoEmpty": false,
            "info": false,
            "ordering": false,
            "ajax": {
                "method": "POST",
                "url": "modulos/compras_listado.php?Id=" + IdCompraTmp,
            },
            "columnDefs": [{
                    "targets": [1],
                    "visible": false,
                },
                {
                    "targets": [3, 4, 5, 6],
                    "className": "dt-body-center"
                }
            ],
            "columns": [{
                    "data": "Orden"
                },
                {
                    "data": "CompraDetalle_tmp_Id"
                },
                {
                    "data": "Producto_Nombre"
                },
                {
                    "data": "CompraDetalle_tmp_Precio"
                },
                {
                    "data": "CompraDetalle_tmp_Cantidad"
                },
                {
                    "data": "PrecioTotal"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group center-block' ><div class='btn-group btn-group-sm' role='group'>" +
                            "<button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.CompraDetalle_tmp_Id + "'><i class='icon-trash-o'></i></button>" +
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
                    .column(5)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                /*
                pageTotal = api
                .column(4, {
                    page: 'current'
                })
                .data()
                .reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                }, 0); 
                */

                // Update footer
                $(api.column(5).footer()).html(
                    'S/. ' + total
                    //'$' + pageTotal + ' ( $' + total + ' total)'
                );
            },

            /* BOTONES DE DATATABLE */
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
    }

    $('#TblCompra').on('click', '.eliminar', function() {
        var id = $(this).val();
        var bool = confirm("Esta seguro de eliminar el registro ?");
        if (bool) {
            Eliminar_Compra('EliminarCompra', id)
        } else {
            //alert("cancelo la solicitud");
        }

    });

    function Eliminar_Compra(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/compras.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: codigo
            }),
            beforeSend: function() {},
            success: function(data) {
                if (data == 1) {
                    listar();
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de eliminación');
                }
            },
            complete: function() {}
        });
    }

    $('#BtnNuevaCompra').click(function() {
        var url = "compra-nuevo.php";
        $(location).attr('href', url);
    })

    $("#BtnGrabarCompra").click(function() {
        //console.log('1' + '-' + $('#TxtFecha').val() + '-' + $("#TxtDocumento").val().toUpperCase().trim() + '-' + $("#TxtProveedor").val().toUpperCase().trim() + '-' + 'SIN OBS' + '-' + '<?php echo $_SESSION['User']; ?>' + '-' + $("#CboSede").val() + '-' + IdCompraTmp)
        Grabar_Compra_Total('GrabarCompra',
            1,
            $('#TxtFecha').val(),
            $("#TxtDocumento").val().toUpperCase().trim(),
            $("#TxtProveedor").val().toUpperCase().trim(),
            'SIN OBS',
            '<?php echo $_SESSION['User']; ?>',
            $("#CboSede").val(),
            IdCompraTmp)
    });

    function Grabar_Compra_Total(act, Condicion, Fecha, Guia, Proveedor, Observacion, Usuario, Sede, Idcompra) {
        //console.log(act+'-'+Condicion+'-'+Fecha+'-'+Guia+'-'+Proveedor+'-'+Observacion+'-'+Usuario+'-'+Sede+'-'+Idcompra);
        $.ajax({
            type: "POST",
            url: "modulos/compras.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Condicion: Condicion,
                Fecha: Fecha,
                Guia: Guia,
                Proveedor: Proveedor,
                Observacion: Observacion,
                Usuario: Usuario,
                Sede: Sede,
                Idcompra: Idcompra
            }),
            beforeSend: function() {
                //console.log(act+'-'+Condicion+'-'+Fecha+'-'+Guia+'-'+Proveedor+'-'+Observacion+'-'+Usuario+'-'+Sede+'-'+Idcompra);
            },
            success: function(data) {
                //console.log("impresion - xx");
                console.log(data);
                $("#Resultado_Grabacion").show();
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Nueva compra registrada correctamente</strong>' +
                        '</div>')
                } else {
                    $("#Resultado_Grabacion").html('<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">' +
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
            complete: function() {}
        });
    }

    $("#BtnCancelarCompra").click(function() {
        Cancelar_Compra('CancelarCompra', 1, IdCompraTmp)
    });

    function Cancelar_Compra(act, Condicion, IdCompraTmp) {
        $.ajax({
            type: "POST",
            url: "modulos/compras.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Condicion: Condicion,
                IdCompraTmp: IdCompraTmp
            }),
            beforeSend: function() {},
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                if (data == 1) {
                    //alert('Compra anulada correctamente');
                    var url = "compra-nuevo.php";
                    $(location).attr('href', url);
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de eliminación');
                }
            },
            complete: function() {}
        });
    }


    function Actualizar_Nuevo() {
        limpiaForm($("#FormularioCompra"));
        ActivarBotones();
        $("#Resultado_Grabacion").hide();
        Obtener_Especie('MostrarEspecie');
    }


    $("#btnLimpiar").click(function() {
        limpiaForm($("#FormularioCompra"));
        $("#Resultado_Grabacion").hide();
    });






    $(function() {

        Obtener_Sede('MostrarSede');
        $('#TxtFecha').val(MostrarFechaActual());
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>