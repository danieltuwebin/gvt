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
    <title>Movimientos Productos/servicios - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                            <li class="active">
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
                            <li class="active">
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

    <!-- Modal -->
    <div class="modal fade text-xs-left" id="Modal_Movimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdProser">Cambiar Almacen</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioMovimiento">
                    <input type="hidden" id="CodigoAlmacen" name="CodigoAlmacen">
                    <input type="hidden" id="CodigoProducto" name="CodigoProducto">
                    <input type="hidden" id="IdAlmacenAnterior" name="IdAlmacenAnterior">                    
                        <div class="form-body">

                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-group">
                                        <b>SEDE ACTUAL : </b><label id="lblSede" name="lblSede"></label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-group">
                                        <b>CANTIDAD ACTUAL : </b><label id="lblCantidad" name="lblCantidad"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-xs-12 col-md-2">
                                    <div class="form-group">
                                        <label for="Txt_Cantidad">Cantidad</label>
                                        <input type="number" id="Txt_Cantidad" class="form-control" placeholder="0" value="0" name="Cantidad">
                                        <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Txt_Fecha">Fecha </label>
                                        <input id="Txt_Fecha" type="date" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="CboSede">Seleccione Sede</label>
                                        <select id="CboSede" name="CboSede" class="form-control"></select>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Txt_Notas">Notas</label>
                                        <textarea id="Txt_Notas" style="text-transform:uppercase;" rows="5" class="form-control" name="Txt_Notas" placeholder="Notas Adicionales" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                    <button id="BtnGrabar" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Cambio</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Mover Productos</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Productos / Servicios</h4>
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
                                        <form class="form" id="FormularioMovimientos">
                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                            <div class="form-body">

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
                                                            <br>
                                                            <label for=""></label>
                                                            <!-- <label class="display-inline-block" for="Botones">&nbsp; </label><br> -->
                                                            <button id="btnBuscar" class="btn btn-warning mr-1" type="button"> <i class="icon-search5"></i> Buscar</button>
                                                        </div>
                                                    </div>





                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <!--                                                         <div class="card-header">
                                                            <h4 class="card-title">Proximas Atenciones</h4>
                                                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                                            <div class="heading-elements">
                                                                <ul class="list-inline mb-0">
                                                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div> -->
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover mb-0">
                                                                        <!-- ENCABEZADO -->
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="width: 5%;">Nro.</th>
                                                                                <th style="width: 10%;">Sede</th>
                                                                                <th style="width: 10%;">Codigo</th>
                                                                                <th style="width: 40%;">Nombre</th>
                                                                                <th style="width: 10%;">Cantidad</th>
                                                                                <th style="width: 15%;">Cambiar Sede</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!-- DETALLE -->
                                                                        <tbody id="tablaResumenDetalleProducto">
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
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



                    </div>
                </section>
                <!-- // Basic form layout section end -->
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
    var IdProducto;


    /* BEGIN FUNCIONES GENERALES */

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

    $("#TxtProducto").keyup(function() {
        Obtener_Producto('MostrarProductoxNombre', '%' + $("#TxtProducto").val() + '%', 1);
    });
    $("#TxtProducto").change(function() {
        //var value = $('#TxtProducto').val();
        IdProducto = $('#productos [value="' + $('#TxtProducto').val() + '"]').data('value');
        console.log(IdProducto);
        //Obtener_Precio('MostrarPrecio', $('#productos [value="' + value + '"]').data('value'));
    });


    $('#btnBuscar').click(function() {
        Obtener_Tablas_Detalle_Producto('tablaResumenDetalleProducto', IdProducto);
    });




    function Obtener_Tablas_Detalle_Producto(act, Id) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: Id
            }),
            beforeSend: function() {
                $("#tablaResumenDetalleProducto").html('');
            },
            success: function(data) {
                var json = JSON.parse(data);
                var sede;
                $.each(json, function(i, item) {
                    sede = json[i].Producto_Id;
                    console.log('-- ' + sede);
                    $("#tablaResumenDetalleProducto").append('<tr>' +
                        '<td class="text-truncate">' + json[i].Orden + '</td>' +
                        '<td class="text-truncate">' + json[i].Sede_Nombre + '</td>' +
                        '<td class="text-truncate">' + json[i].IdProducto + '</td>' +
                        '<td class="text-truncate">' + json[i].Producto_Nombre + '</td>' +
                        '<td class="text-truncate">' + json[i].Almacen_Cantidad + '</td>' +
                        '<td class="text-truncate"> <button onclick="CambiarSede(' + json[i].Almacen_Id + ',' + json[i].Almacen_Cantidad + ',' + json[i].Sede_Id + ',' + json[i].Producto_Id + ');" id="btnMover" name="btnMover" class="btn btn-success mr-1" type="button"> MOVER</button> </td>' + '</tr>');
                    /*                         '<td class="text-truncate">'+
                                            '<button onclick="CambiarSede('" +  sede  +"');" id="btnMover" name="btnMover" class="btn btn-success mr-1" type="button">'+
                                            'MOVER' +
                                            '</button> </td>' + '</tr>'); */

                    //ts.Sede_Id

                    //'<td class="text-truncate"> <button onclick="CambiarSede('+json[i].Almacen_Id+','+json[i].Almacen_Cantidad+','+json[i].Sede_Nombre +');" id="btnMover" name="btnMover" class="btn btn-success mr-1" type="button"> MOVER</button> </td>' + '</tr>');
                    //'<td class="text-truncate"> <button onclick="editarFila(this);" id="btnMover" name="btnMover" class="btn btn-success mr-1" type="button" value="' + json[i].Almacen_Id + '"> MOVER</button> </td>' + '</tr>');
                    //'<td class="text-truncate"> <button type="button" class="btn btn-success btn-sm">' + 'Mover' + '</button> </td>' + '</tr>');
                    //'<td class="text-truncate"><a class="btn btn-success btn-sm" href="vacuna-nuevo.php?IdMas=' + json[i].Mascota_Id + '&IdPro=' + json[i].Vacunas_Id + '">' + 'Atender' + '</a> </td> </tr>');
                });
                /* <span onClick="dataUser(3,'admin');" style="cursor: pointer">Ver Usuario</span> */
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }


    $('#btnMover').click(function() {
        //Obtener_Tablas_Detalle_Producto('tablaResumenDetalleProducto',IdProducto);
        //alert($(this).val());
    });

    /*     function CambiarSede(sede, cantidad, nombre){
            console.log(sede);
            console.log(cantidad);
            console.log(nombre);
            //alert($(this).val());
            //alert(sede, + ' -- ' + cantidad);
            $('#lblSede').html(nombre);
            $('#lblCantidad').html(cantidad);
            $('#Modal_Movimiento').modal("show");
        }
     */

    function CambiarSede(almacen, cantidad, sede, producto) {
        console.log(sede);
        console.log(cantidad);
        $('#Txt_Fecha').val(MostrarFechaActual());
        $('#lblCantidad').html(cantidad);
        $('#CodigoAlmacen').val(almacen);
        $('#CodigoProducto').val(producto);
        $('#IdAlmacenAnterior').val(sede);
        
        Obtener_Sede_x_Id('MostrarSede_x_Id', sede)
        Obtener_Sede('MostrarSede');
        $('#Modal_Movimiento').modal("show");

    }



    /* INICIO FUNCIONES */
    function Obtener_Sede_x_Id(act, id) {
        console.log(id);
        $.ajax({
            type: "POST",
            url: "modulos/inicio.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                Id: id
            }),
            beforeSend: function() {},
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                //$("#CboSede").empty();
                $.each(json, function(i, item) {
                    console.log(json[i].Sede_Nombre)
                    $('#lblSede').html(json[i].Sede_Nombre);
                    //$("#CboSede").append('<option value="' + json[i].Sede_Id + '">' + json[i].Sede_Nombre + '</option>');
                });
            },
            complete: function() {
                // $("#CboSede option[value=" + CondicionSede + "]").attr("selected", true);
            }
        });
    }

    function Obtener_Sede(act) {
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











    $("#BtnGrabar").click(function() {
        console.log('btng');
        ProcesoGrabacion();
    });

    function ProcesoGrabacion() {

        if ($('#Txt_Cantidad').val() != 0) {
            alert('ingrese');

            if ($('#Txt_Cantidad').val() <= $('#lblCantidad').html()) {
                alert('ok');


           RegistrarMovimiento(
               "GrabarMovimiento",
               $("#Txt_Fecha").val(),
               $('#CodigoAlmacen').val(),
               $('#CboSede').val(),
               $('#Txt_Cantidad').val(),
               $('#Txt_Notas').val(),
               '<?php echo $_SESSION['User']; ?>',
               $('#CodigoProducto').val(),
               $('#IdAlmacenAnterior').val());                 



            } else {
                alert('error');
            }

        } else {
            alert('error');
        }

    }


    function RegistrarMovimiento(act, Fecha, Almacen, SedeNueva, Cantidad, Observacion, UserGrabacion, Producto, SedeAnterior) {
        console.log(act + '-' +  Fecha + '-' +  SedeAnterior + '-' +  SedeNueva + '-' +  Cantidad + '-' +  Observacion + '-' +  UserGrabacion +'-'+ Producto);
        //console.log(act + '-' + Fecha + '-' + Movimiento + '-' + Documento + '-' + Monto + '-' + Notas);
        $.ajax({
            type: "POST",
            url: "modulos/movimientos.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                Fecha: Fecha,
                Almacen: Almacen,
                SedeNueva: SedeNueva,
                Cantidad: Cantidad,
                Observacion: Observacion,
                UserGrabacion: UserGrabacion,
                Producto:Producto,
                SedeAnterior: SedeAnterior,                
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                console.log(data);
/*                 $('#Txt_Codigo').val(data);
                $("#Resultado_Grabacion").show();
                $("#Resultado_Grabacion").html(''); */
                if (data == 1) {
                    alert('Se realizó el cambio de almacen correctamente');
                    Obtener_Tablas_Detalle_Producto('tablaResumenDetalleProducto', IdProducto);
                    $('#Txt_Cantidad').val('')
                    $('#Txt_Notas').val('')
                    $('#Modal_Movimiento').modal("hide");
                } else {
                    alert('Ocurrio un error en el proceso de cambio de almacen');
                }

            },
            complete: function() {
                //Habilita_Desabilita(false,true,true);
            }
        });
    }

    var listar = function() {
        console.log($('#Txt_FechaInicial').val() + ',' + $('#Txt_FechaFinal').val() + ',' + $("#CboSede_Bus").val());

        var url = "modulos/cuadro-venta_listado.php?fi=" + $('#Txt_FechaInicial').val() + "&ff=" + $('#Txt_FechaFinal').val() + "&s=" + $("#CboSede_Bus").val();
        table = $('#TblMovimientos').DataTable({
            "destroy": true,
            "iDisplayLength": 100,
            "ajax": {
                "method": "POST",
                "url": url,
                //"dataSrc": ""
            },
            /* OCULTAR COLUMNAS */

            "columnDefs": [{
                "targets": [0],
                //"visible": false,
                "searchable": false,
                "orderable": false,
                //"pageLength": 50,
                "paging": false,

            }, ],
            "order": [
                [1, 'asc']
            ],

            /*  END OCULTAR COLUMNAS*/

            "columnDefs": [{
                    "targets": [0, 1, 2, 3, 4, 6, 8],
                    "className": "dt-body-left"
                },
                {
                    "targets": [5, 7],
                    "className": "dt-body-center"
                }
            ],

            "columns": [{
                    "data": "Orden"
                },
                {
                    "data": "FECHA"
                },
                {
                    "data": "Sede_Nombre"
                },
                {
                    "data": "TIPO"
                },
                {
                    "data": "CODIGO_VENTA"
                },
                {
                    "data": "PRECIO_VENTA"
                },
                {
                    "data": "CODIGO_COMPRA"
                },
                {
                    "data": "PRECIO_COMPRA"
                },
                {
                    "data": "OBSERVACION"
                }
                /*
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group center-block' ><div class='btn-group btn-group-sm' role='group'>" +
                            "<button type='button' id='editar' class='editar btn btn-warning' value='" + row.Categoria_Id + "'><i class='icon-pencil3'></i></button>" +
                            "<button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.Categoria_Id + "'><i class='icon-trash-o'></i></button>" +
                            "</div></div>";
                    }
                }*/
            ],
            /* BOTONES DE DATATABLE */
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="icon-file-excel-o"></i> ',
                    titleAttr: 'Exportar a Excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7]
                    },
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
                    className: 'btn btn-danger',
                    orientation: 'landscape',
                    //pageSize: 'TABLOID',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7]
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
                    className: 'btn btn-info',
                    //className: 'btn btn-success'
                    "oSelectorOpts": {
                        filter: 'applied',
                        order: 'current'
                    },
                },
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
                // Update footer
                $(api.column(5).footer()).html(
                    'S/. ' + total.toFixed(2)
                );

                // Total over all pages
                total_2 = api
                    .column(7)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                // Update footer
                $(api.column(7).footer()).html(
                    'S/. ' + total_2.toFixed(2)
                );

            },

            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
    }

    $("#btnLimpiar").click(function() {
        DespuesDeCancelar();
    });

    function DespuesDeCancelar() {
        limpiaForm($("#FormularioMovimientos"));
        DesactivarBotones(true, false, true);
        $("#CboTipoMovimiento option[value=1]").attr("selected", true);
        console.log(IdSede);
        console.log('sede : ' + $('#CboSede').val());
        //$("#CboSede option[value=" + IdSede + "]").attr("selected", true);
        $("#CboSede").val(IdSede)
        console.log('sede : ' + $('#CboSede').val());
        $("#Resultado_Grabacion").hide();
    }



    function Actualizar_Nuevo() {
        //limpiaForm($("#FormularioMovimientos"));
        DesactivarBotones(true, false, true);
        $("#Resultado_Grabacion").hide();
    }

    function Actualizar_Listado() {
        listar();
        MuestraAlert();
    }

    $("#btnCancelar").click(function() {
        Eliminar_CuadroVenta('EliminarCuadroVenta', $("#Txt_Codigo").val());
    });

    function Eliminar_CuadroVenta(act, codigo) {
        console.log(act + '-' + codigo);
        $.ajax({
            type: "POST",
            url: "modulos/cuadro-venta.php",
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
                    alert('Registro eliminado correctamente');
                    DesactivarBotones(true, false, true);
                    DespuesDeCancelar();
                    listar();
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function MuestraAlert() {
        console.log('soy alerta');
        setTimeout(function() {
            //alert("Hello");
            if (!table.data().count()) {
                $("#Resultado_Grabacion_2").html('<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<strong>El cliente seleccionado, no registra mascotas en el sistema.</strong>' +
                    '</div>')
            } else {
                $("#Resultado_Grabacion_2").html('')
            }
        }, 3000);
    }

    $(function() {

               //$('#Txt_Fecha').val(MostrarFechaActual());
          /*        $('#Txt_FechaInicial').val(MostrarFechaActual());
                $('#Txt_FechaFinal').val(MostrarFechaActual()); */
        /*         Obtener_Sede('MostrarSede');
                Obtener_Sede_2('MostrarSede'); */
        //Obtener_Sede_Usuario('MostrarSede_Usuario');
        //listar();
        //DesactivarBotones(true, false, true);

        Obtener_Condicion();
        Obtener_Nombre();

        //MuestraAlert();

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>