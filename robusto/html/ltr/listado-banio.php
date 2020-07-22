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
    <title>Listado baños - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                            <li class="active">
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
                            <li class="active">
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
    <div class="modal fade text-xs-left" id="Modal_ListadoBanios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdBanio">Edición Baño</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioBanio">
                        <div class="form-body">
                            <h4 class="form-section">Propietario</h4>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <label for="Txt_Buscar_Dni"><strong>Buscar Por :</strong></label>
                                                <label class="display-inline-block custom-control custom-radio ml-1">
                                                    <input type="radio" id="RbDniP" name="Dni" class="custom-control-input" value="1">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">DNI Propietario</span>
                                                </label>
                                                <!-- <label class="display-inline-block custom-control custom-radio">
                                                    <input type="radio" id="RbDniC" name="Dni" class="custom-control-input" value="3">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">NRO. Celular</span>
                                                </label> -->
                                                <label class="display-inline-block custom-control custom-radio">
                                                    <input type="radio" id="RbDniM" name="Dni" class="custom-control-input" value="2" checked>
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
                                                    <input type="hidden" id="Txt_CodigoCliente" name="Txt_CodigoCliente">
                                                    <input type="hidden" id="Txt_CodigoMascota" name="Txt_CodigoMascota">
                                                    <input type="hidden" id="Txt_CodigoBanio" name="Txt_CodigoBanio">
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <label for="CboMascota">Seleccione nombre mascota :
                                                    <!-- <label class="display-inline" for="CboMascota">Seleccione nombre mascota : -->
                                                    <!-- <label class="display-inline-block" for="CboProducto">S : -->
                                                    <select id="CboMascota" name="CboMascota" class="form-control">
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <br>
                            <h4 class="form-section">Datos de Mascota</h4>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="CboProducto">Seleccione Baño :</label>
                                        <select id="CboProducto" name="CboProducto" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="Txt_Precio">Precio</label>
                                        <input type="text" style="text-transform:uppercase;" id="Txt_Precio" class="form-control" placeholder="00.00" name="Txt_Precio">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="CboEstado">Estado baño :</label>
                                        <select id="CboEstado" name="CboEstado" class="form-control">
                                            <option value="1" disabled="disabled">REALIZADO</option>
                                            <option value="2">AGENDADO</option>
                                            <option value="3">REPROGRAMADO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Txt_Fecha">Fecha Baño </label>
                                        <input id="Txt_Fecha" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Txt_Notas">Notas</label>
                                <textarea id="Txt_Notas" style="text-transform:uppercase;" rows="5" class="form-control" name="Txt_Notas" placeholder="Notas Adicionales"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                        <button id="BtnActualizarBanio" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Edición</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Evaluacion Medica -->
    <div class="modal fade text-xs-left" id="Modal_EvaluacionMedica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblEvaluacionMedica">Evaluación Integral</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioEvaluacionMedica">
                        <div id="contenido" class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="em" class="input-group">
                                        <label for="Evaluacion_Medica"><strong>Necesita Evaluación Medica :</strong></label>&nbsp;&nbsp;&nbsp;
                                        <label class="display-inline-block custom-control custom-radio ml-1">
                                            <input type="radio" id="RbSi" name="Respuesta" class="custom-control-input" value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">SI</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbNo" name="Respuesta" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">NO</span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <h6 class="form-section"><i class="icon-arrow-right-b"></i>ECTOPARASITOS</h6>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <div class="card-block"> -->
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkPulgas">
                                            Pulgas&nbsp;&nbsp;
                                            <input class="" type="checkbox" id="ChkPulgas" value="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkPiojos">
                                            Piojos&nbsp;&nbsp;
                                            <input class="" type="checkbox" id="ChkPiojos" value="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkGarrapatas">
                                            Garrapatas&nbsp;&nbsp;
                                            <input class="" type="checkbox" id="ChkGarrapatas" value="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkGusanos">
                                            Gusanos&nbsp;&nbsp;
                                            <input class="" type="checkbox" id="ChkGusanos" value="1">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="Txt_Ectoparasitos" name="Txt_Ectoparasitos" style="text-transform:uppercase;" rows="2" class="form-control" placeholder="Ingrese observación adicional"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- </div>
                                </div>
                            </div> -->

                            <h6 class="form-section"><i class="icon-arrow-right-b"></i>VALORACIÓN FISICA</h6>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <i class="icon-arrow-right-b"></i><label for="">Ojos : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Nariz : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Cavidad Bucal : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Dientes : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Piel y pelaje : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Cojinetes (Almohadillas) : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Uñas : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Oidos : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Areas Genitales : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Glandulas Mamarias : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Extremidades : </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div id="vfojos">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaOjos" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaOjos" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfnariz">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaNariz" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaNariz" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfcavidad">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaCavidad" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaCavidad" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfdientes">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaDientes" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaDientes" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfpiel">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaPiel" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaPiel" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfcojinentes">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaCojinetes" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaCojinetes" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfunas">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaUnas" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaUnas" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfoidos">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaOidos" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaOidos" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfgenitales">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaGenitales" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaGenitales" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfglandulas">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaGlandulas" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaGlandulas" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                        <div id="vfextremidades">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" id="RbNormal" name="RespuestaExtremidades" class="custom-control-input" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Normal</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" id="RbAnormal" name="RespuestaExtremidades" class="custom-control-input" value="2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Anormal</span>
                                            </label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="form-section"><i class="icon-arrow-right-b"></i>NUTRICIÓN E HIGIENE</h6>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <i class="icon-arrow-right-b"></i><label for="">Estado Nutricional : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Pelaje : </label><br>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbDelgado" name="Estado" class="custom-control-input" value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Delgado</span>
                                        </label><br>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbAdecuado" name="Pelaje" class="custom-control-input" value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Adecuado</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbIdeal" name="Estado" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Ideal</span>
                                        </label><br>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbAceptable" name="Pelaje" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Aceptable</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbGordo" name="Estado" class="custom-control-input" value="3">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Gordo</span>
                                        </label><br>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbDeteriorado" name="Pelaje" class="custom-control-input" value="3">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Deteriorado</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbObeso" name="Estado" class="custom-control-input" value="4">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Obeso</span>
                                        </label><br>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbTerrible" name="Pelaje" class="custom-control-input" value="4">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">Terrible</span>
                                        </label>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <i class="icon-arrow-right-b"></i><label for="">Sedante : </label><br>
                                        <i class="icon-arrow-right-b"></i><label for="">Puntaje de Salud: </label><br>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbSedanteSi" name="Sedante" class="custom-control-input" value="1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">SI</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="RbSedanteNo" name="Sedante" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">NO</span>
                                        </label><br>

                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="Rb0" name="Puntaje" class="custom-control-input" value="0">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">0&nbsp;&nbsp;&nbsp;</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="Rb2" name="Puntaje" class="custom-control-input" value="2">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">2&nbsp;&nbsp;&nbsp;</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="Rb4" name="Puntaje" class="custom-control-input" value="4">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">4&nbsp;&nbsp;&nbsp;</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="Rb6" name="Puntaje" class="custom-control-input" value="6">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">6&nbsp;&nbsp;&nbsp;</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="Rb8" name="Puntaje" class="custom-control-input" value="8">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">8&nbsp;&nbsp;&nbsp;</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="Rb10" name="Puntaje" class="custom-control-input" value="10">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">10&nbsp;&nbsp;&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h6 class="form-section"><i class="icon-arrow-right-b"></i>RECOMENDACIÓN</h6>
                            <div class=" row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="Txt_Recomendacion" style="text-transform:uppercase;" rows="2" class="form-control" name="Txt_Notas" placeholder="Notas Adicionales"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                    <button id="btnEvEditar" type="button" class="btn btn-info mr-1"><i class="icon-edit2"></i>Editar</button>
                    <button id="BtnEvGrabar" type="button" class="btn btn-success mr-1"><i class=""></i>Grabar</button>
                    <button id="BtnEvVer" type="button" class="btn btn-primary mr-1"><i class=""></i>Ver informe</button>
                    <button id="BtnEvEliminar" type="button" class="btn btn-danger mr-1" style="display:none"><i class=""></i>Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / Modal -->

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-3 col-xs-12 mb-1">
                    <h2 class="content-header-title">Listado de Baños</h2>
                </div>
                <?php

                if ($CondicionMnu == 1 || $CondicionMnu == 2) {
                ?>
                    <div class="content-header-left col-md-3 col-xs-12 mb-1">
                        <button id="BtnNuevo" type="button" class="btn btn-success"><i class="icon-android-add-circle"></i> Nueva Baño</button>
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
                                <h4 class="card-title">Vacunas</h4>
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
                            <div class="card-body collapse in">
                                <div class="card-block">

                                    <div class="table-responsive">
                                        <!-- <table id="TblBanios" class="table table-bordered table-striped"> -->
                                        <table id="TblBanios" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>DNI mascota</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha_Baño</th>
                                                    <th>Baño</th>
                                                    <th>Estado Baño</th>
                                                    <th>Observación</th>
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
    var IdMascotaExterno = 0;
    var ValorRb = 2;
    var IdSede = 0;
    var IdEvaluacionMedica = 0;

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
            var Cod = 'B000' + id;
        } else if (id.length == 2) {
            var Cod = 'B00' + id;
        } else if (id.length == 3) {
            var Cod = 'B0' + id;
        } else {
            var Cod = 'B' + id;
        }
        return Cod;
    }

    function Obtener_Codigo_Formateado_Ev(id) {
        if (id.length == 1) {
            var Cod = 'EI000' + id;
        } else if (id.length == 2) {
            var Cod = 'EI00' + id;
        } else if (id.length == 3) {
            var Cod = 'EI0' + id;
        } else {
            var Cod = 'EI' + id;
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
                //listar();
            }
        });
    }

    $("#BtnNuevo").click(function() {
        var url = "banio-nuevo.php";
        $(location).attr('href', url);
    });

    function Actualizar() {
        listar();
    }

    var listar = function() {
        var url = ""
        if (IdMascotaExterno == 0) {
            url = "modulos/banios_listado.php?Cond=1&Id=0";
        } else {
            //url = "modulos/vacunas_listado.php?Cond=2&Id=" + IdMascotaExterno;
        }

        table = $('#TblBanios').DataTable({
            "destroy": true,
            "ajax": {
                "method": "POST",
                "url": url,
            },
            "columns": [{
                    //"data": "Banio_Id"
                    "render": function(data, type, row) {
                        if (row.Banio_Id.length == 1) {
                            var Cod = 'B000' + row.Banio_Id;
                        } else if (row.Banio_Id.length == 2) {
                            var Cod = 'B00' + row.Banio_Id;
                        } else if (row.Banio_Id.length == 3) {
                            var Cod = 'B0' + row.Banio_Id;
                        } else {
                            var Cod = 'B' + row.Banio_Id;
                        }
                        return Cod;
                    }
                },
                {
                    //"data": "Mascota_Id"
                    "render": function(data, type, row) {
                        if (row.Mascota_Id.length == 1) {
                            var Cod = 'M000' + row.Mascota_Id;
                        } else if (row.Mascota_Id.length == 2) {
                            var Cod = 'M00' + row.Mascota_Id;
                        } else if (row.Mascota_Id.length == 3) {
                            var Cod = 'M0' + row.Mascota_Id;
                        } else {
                            var Cod = 'M' + row.Mascota_Id;
                        }
                        return Cod;
                    }
                },
                {
                    "data": "Mascota_Nombre"
                },
                {
                    "data": "Banio_Fecha"
                },
                {
                    "data": "Producto_Nombre"
                },
                {
                    "data": "Banio_Cita"
                },
                {
                    "data": "Banio_Observacion"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group'><div class='btn-group btn-group-sm' role='group'> <button type='button' id='editar' class='editar btn btn-warning' value='" + row.Banio_Id + "'><i class='icon-pencil3'></i></button>  <button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.Banio_Id + "'><i class='icon-trash-o'></i></button> <button id='evaluacionmedica' type='button' class='evaluacionmedica btn btn-success' value='" + row.Banio_Id + "'><i class='icon-android-list'></i></button>  </div></div>";
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
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    },
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
                        columns: [0, 1, 2, 3, 4, 5, 6]
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

    $('#TblBanios').on('click', '.editar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            //Obtener_Banio('MostrarProductoxCondicion', 2);
            Obtener_Banio('MostrarProductoxCondicion', 2, IdSede);
            Obtener_Datos_Banio('ObtenerDatosBaniosxId', id);
            $("#LblIdBanio").text("Edición Baño : " + Obtener_Codigo_Formateado(id));
            $("#CboProducto").attr('disabled', true);
            $("#Modal_ListadoBanios").modal("show");
        } else {
            alert('El perfil de usuario no esta habilitado para opción');
        }
    });

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
                $.each(json, function(i, item) {
                    $("#CboProducto").append('<option value="' + json[i].Producto_Id + '">' + json[i].Producto_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
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

                    var DniMascota = json[i].Mascota_Id;
                    var CodigoDniMascota = '';
                    if (DniMascota.length == 1) {
                        CodigoDniMascota = 'M000' + DniMascota;
                    } else if (DniMascota.length == 2) {
                        CodigoDniMascota = 'M00' + DniMascota;
                    } else if (DniMascota.length == 3) {
                        CodigoDniMascota = 'M0' + DniMascota;
                    } else {
                        CodigoDniMascota = 'M' + DniMascota;
                    }
                    $('#Txt_Dni').val(CodigoDniMascota);
                    $('#Txt_Nombre_Dni').html(json[i].Cliente_NombreCompleto);
                    $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                    $('#Txt_CodigoMascota').val(json[i].Mascota_Id); // Mascota_Id (oculto)
                    Obtener_Mascotas_x_IdCliente('ObtenerMascotasxIdCliente', 2, $('#Txt_CodigoCliente').val());
                    $('#CboMascota').val(json[i].Mascota_Id);
                    $('#CboProducto').val(json[i].Producto_Id);
                    $('#Txt_Precio').val(json[i].Banio_Precio);
                    $('#CboEstado').val(json[i].Banio_Cita);
                    if (json[i].Banio_Cita == 1) {
                        $("#CboEstado").attr('disabled', true);
                    } else {
                        $("#CboEstado").attr('disabled', false);
                    }
                    $('#Txt_Fecha').val(json[i].Banio_Fecha);
                    $('#Txt_Notas').val(json[i].Banio_Observacion);
                    $('#Txt_CodigoBanio').val(json[i].Banio_Id);
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

    $('#BtnActualizarBanio').click(function() {

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
                Editar_Banio("EditarBanio",
                    $("#Txt_CodigoBanio").val(),
                    $('#Txt_Fecha').val(),
                    $("#CboProducto").val().toUpperCase().trim(),
                    $("#Txt_Precio").val().toUpperCase().trim(),
                    $("#CboMascota").val().toUpperCase().trim(),
                    $("#Txt_Notas").val().toUpperCase().trim(),
                    //$("#CboEstado").val(),
                    '1',
                    '<?php echo $_SESSION['User']; ?>'
                );
            }
        }
    });

    function ValidaCamposObligatorios(dni, mascota, banio, precio, fecha) {
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
                if (banio.length == 0) {
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

    function Editar_Banio(act, IdBanio, Fecha, IdProducto, Precio, IdMascota, Observacion, Cita, Usuario) {
        //console.log(act +'-'+IdBanio+'-'+ Fecha+'-'+IdProducto+'-'+ Precio+'-'+ IdMascota+'-'+ Observacion+'-'+ Cita+'-'+ Usuario);
        
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                IdBanio: IdBanio,
                Fecha: Fecha,
                IdProducto: IdProducto,
                Precio: Precio,
                IdMascota: IdMascota,
                Observacion: Observacion,
                Cita: Cita,
                Usuario: Usuario
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                if (data == 1) {
                    $("#Modal_ListadoBanios").modal("hide");
                    listar();
                    alert('Baño Editado correctamente');
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
        
    }


    $('#TblBanios').on('click', '.eliminar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            var bool = confirm("Esta seguro de eliminar el registro " + Obtener_Codigo_Formateado(id) + " ?");
            if (bool) {
                Eliminar_Banio('EliminarBanio', id)
                alert('El baño seleccionado fue eliminada correctamente');
            } else {
                //alert("cancelo la solicitud");
            }
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Eliminar_Banio(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
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

    //******************* EVALUACION MEDIDA *************************************************/

    $('#TblBanios').on('click', '.evaluacionmedica', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            IdEvaluacionMedica = id;

            $("#LblEvaluacionMedica").text("Evaluación Integral : " + Obtener_Codigo_Formateado_Ev(id));
            $('#contenido').find('input, textarea, button, select').attr('disabled', 'disabled');
            if (Obtener_Existencia_EvaluacionMedicaxId() == 1) {
                Obtener_Datos_EvaluacionMedica('ObtenerDatosEvaluacionMedicaxId', id);                                                   
            } else {
                //alert('El baño seleccionado, no contiene una Evaluación Integral registrada');
            }
            Habilita_Botones(false, true, false, false);
            $("#Modal_EvaluacionMedica").modal("show");     

            /*if (Obtener_Existencia_EvaluacionMedicaxId() == 1) {
                Obtener_Datos_EvaluacionMedica('ObtenerDatosEvaluacionMedicaxId', id);
                $("#LblEvaluacionMedica").text("Evaluación Integral : " + Obtener_Codigo_Formateado_Ev(id));
                $('#contenido').find('input, textarea, button, select').attr('disabled', 'disabled');
                Habilita_Botones(false, true, false, false);
                $("#Modal_EvaluacionMedica").modal("show");            
            } else {
                alert('El baño seleccionado, no contiene una Evaluación Integral registrada');
            }
            */

        } else {
            alert('El perfil de usuario no esta habilitado para opción');
        }
    });

    function Habilita_Botones(boolEdi, boolGra, boolVer, boolEli) {
        $("#btnEvEditar").attr('disabled', boolEdi);
        $("#BtnEvGrabar").attr('disabled', boolGra);
        $("#BtnEvVer").attr('disabled', boolVer);
        $("#BtnEvEliminar").attr('disabled', boolEli);
    }

    function Obtener_Datos_EvaluacionMedica(act, id) {
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

                    if (json[i].EvaluacionMedica_Ev == 1) {
                        $("#RbSi").attr('checked', true);
                    } else if (json[i].EvaluacionMedica_Ev == 2) {
                        $("#RbNo").attr('checked', true);
                    }

                    if (json[i].EvaluacionMedica_Ecto_Pulgas == 1) {
                        $("#ChkPulgas").attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Ecto_Piojos == 1) {
                        $("#ChkPiojos").attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Ecto_garrapatas == 1) {
                        $("#ChkGarrapatas").attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Ecto_gusanos == 1) {
                        $("#ChkGusanos").attr('checked', true);
                    }

                    $("#Txt_Ectoparasitos").val(json[i].EvaluacionMedica_Ecto_observacion);

                    // normal 1 - anormal 2
                    if (json[i].EvaluacionMedica_Vf_ojos == 1) {
                        $('input[name=RespuestaOjos][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaOjos][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_nariz == 1) {
                        $('input[name=RespuestaNariz][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaNariz][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_cavidad == 1) {
                        $('input[name=RespuestaCavidad][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaCavidad][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_dientes == 1) {
                        $('input[name=RespuestaDientes][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaDientes][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_piel == 1) {
                        $('input[name=RespuestaPiel][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaPiel][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_cojinetes == 1) {
                        $('input[name=RespuestaCojinetes][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaCojinetes][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_unias == 1) {
                        $('input[name=RespuestaUnas][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaUnas][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_oidos == 1) {
                        $('input[name=RespuestaOidos][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaOidos][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_arias == 1) {
                        $('input[name=RespuestaGenitales][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaGenitales][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_glandulas == 1) {
                        $('input[name=RespuestaGlandulas][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaGlandulas][value=2]').attr('checked', true);
                    }
                    if (json[i].EvaluacionMedica_Vf_extremidades == 1) {
                        $('input[name=RespuestaExtremidades][value=1]').attr('checked', true);
                    } else {
                        $('input[name=RespuestaExtremidades][value=2]').attr('checked', true);
                    }

                    $("input[name=Estado][value='" + json[i].EvaluacionMedica_nh_estado + "']").attr("checked", true);
                    $("input[name=Pelaje][value='" + json[i].EvaluacionMedica_nh_pelaje + "']").attr("checked", true);
                    $("input[name=Sedante][value='" + json[i].EvaluacionMedica_nh_sedante + "']").attr("checked", true);
                    $("input[name=Puntaje][value='" + json[i].EvaluacionMedica_nh_puntaje + "']").attr("checked", true);

                    $("#Txt_Recomendacion").val(json[i].EvaluacionMedica_nh_recomendacion);
                  
                });
            },
            complete: function() {
            }
        });
    }


    $('#btnEvEditar').click(function() {
        $('#contenido').find('input, textarea, button, select').attr('disabled', false);
        Habilita_Botones(true, false, true, true);
    });

    $('#BtnEvGrabar').click(function() {

        if (Validar_registro_evaluacio_medica() == true) {
            Actualizar_Evaluacion_Medica();
            $('#contenido').find('input, textarea, button, select').attr('disabled', true);
        }

        /* Actualizar_Evaluacion_Medica();
        $('#contenido').find('input, textarea, button, select').attr('disabled', true); */
    });

    function Validar_registro_evaluacio_medica() {
        if (!$('#em input[name="Respuesta"]').is(':checked')) {
            alert('Seleccione una opción de la evaluación medica');
            return false;
        }

        /*
        if ($('input[type=checkbox]:checked').length === 0) {
            alert('Seleccione al menos un Ectoparasito presentado por la mascota');
            return false;
        }
        if ($('input[type=checkbox]:checked').length === 0) {
            alert('Seleccione al menos un Ectoparasito presentado por la mascota');
            return false;
        }
        */
       
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


    function Actualizar_Evaluacion_Medica() {
        var act = 'EditarEvaluacionMedica_All';
        var BanioId = IdEvaluacionMedica;
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
        var Usuario = '<?php echo $_SESSION['User']; ?>';
        //console.log(act + ' : ' + Respuesta_em + ' : ' + ChkPulgas + ' : ' + ChkPiojos + ' : ' + ChkGarrapatas + ' : ' + ChkGusanos);
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                BanioId: BanioId,
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
                //console.log(act + '-' + IdTipoRegistro + '-' + Idbanio + '-' + Fecha + '-' + IdProducto + '-' + Precio + '-' + IdMascota + '-' + Observacion + '-' + Cita + '-' + Usuario + '-' + VentaTipo + '-' + Cantidad + '-' + IdAlmacen);
            },
            success: function(data) {
                if (data == 1) {
                    alert('Evaluación Integral editada correctamente');
                    Habilita_Botones(false, true, false, false);
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {

            }
        });
    }


    function Obtener_Existencia_EvaluacionMedicaxId() {
        var act = 'ObtenerExistenciaEvaluacionMedicaxId';
        var BanioId = IdEvaluacionMedica;
        var codigo = 0;
        //console.log(act + ' : ' + Respuesta_em + ' : ' + ChkPulgas + ' : ' + ChkPiojos + ' : ' + ChkGarrapatas + ' : ' + ChkGusanos);
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                BanioId: BanioId,
            }),
            beforeSend: function() {
                //console.log(act + '-' + IdTipoRegistro + '-' + Idbanio + '-' + Fecha + '-' + IdProducto + '-' + Precio + '-' + IdMascota + '-' + Observacion + '-' + Cita + '-' + Usuario + '-' + VentaTipo + '-' + Cantidad + '-' + IdAlmacen);
            },
            success: function(data) {
                if (data == 1) {
                    codigo = 1;
                } else {
                    codigo = 2;
                }
            },
            complete: function() {

            }
        });
        return codigo;
    }

    $('#BtnEvEliminar').click(function() {
        var bool = confirm("Esta seguro de eliminar el registro " + Obtener_Codigo_Formateado_Ev(IdEvaluacionMedica) + " ?");
        if (bool) {
            Eliminar_Evaluacion_Medica('EliminarEvaluacionMedica', IdEvaluacionMedica);
        } else {
            //alert("cancelo la solicitud");
        }
    });

    function Eliminar_Evaluacion_Medica(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/banios.php",
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
                if (data == 1) {
                    alert('Se elimino el registro correctamente');
                    Habilita_Botones(true, true, true, true);
                    $("#Modal_EvaluacionMedica").modal("hide");
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de eliminación');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }


    $('#BtnEvVer').click(function() {
        window.open('banio_visor.php?Cond=' + IdEvaluacionMedica, '_blank');
    });    

    //******************* FIN EVALUACION MEDIDA *********************************************/


    $(function() {
        Obtener_Nombre();
        Obtener_Condicion();
        Obtener_Sede_Usuario('MostrarSede_Usuario');
        if ($_GET("IdCli") === undefined) {} else {
            IdMascotaExterno = $_GET("IdCli");
        }
        listar();
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>