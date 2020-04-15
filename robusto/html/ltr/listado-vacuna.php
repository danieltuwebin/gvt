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
    <title>Listado vacunas - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                            <li class="active">
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
                            <li class="active">
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
    <div class="modal fade text-xs-left" id="Modal_ListadoVacunas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdVacuna">Edición Vacuna</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioVacuna">
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
                                                    <input type="hidden" id="Txt_CodigoVacuna" name="Txt_CodigoVacuna">
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
                                                    <!-- <label class="display-inline-block" for="CboVacuna">S : -->
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
                                        <label for="CboVacuna">Seleccione Vacuna :</label>
                                        <select id="CboVacuna" name="CboVacuna" class="form-control">
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
                                        <label for="CboEstadoVacuna">Estado vacuna :</label>
                                        <select id="CboEstadoVacuna" name="CboEstadoVacuna" class="form-control">
                                            <option value="1" disabled="disabled">REALIZADO</option>'                                            
                                            <option value="2">AGENDADO</option>
                                            <option value="3">REPROGRAMADO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Txt_Fecha">Fecha Vacunación </label>
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
                        <button id="BtnActualizarVacuna" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Edición</button>
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
                    <h2 class="content-header-title">Listado de Vacunas</h2>
                </div>
                <?php

                if ($CondicionMnu == 1 || $CondicionMnu == 2) {
                ?>
                    <div class="content-header-left col-md-3 col-xs-12 mb-1">
                        <button id="BtnNuevo" type="button" class="btn btn-success"><i class="icon-android-add-circle"></i> Nueva Vacuna</button>
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
                                        <table id="TblVacunas" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>DNI mascota</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha_Vacuna</th>
                                                    <th>Vacuna</th>
                                                    <th>Estado</th>
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

    function Obtener_Codigo_Formateado(id) {
        if (id.length == 1) {
            var Cod = 'V000' + id;
        } else if (id.length == 2) {
            var Cod = 'V00' + id;
        } else if (id.length == 3) {
            var Cod = 'V0' + id;
        } else {
            var Cod = 'V' + id;
        }
        return Cod;
    }    

    $("#BtnNuevo").click(function() {
        var url = "vacuna-nuevo.php";
        $(location).attr('href', url);
    });

    function Actualizar() {
        listar();
    }

    var listar = function() {
        var url = ""
        if (IdMascotaExterno == 0) {
            url = "modulos/vacunas_listado.php?Cond=1&Id=0";
        } else {
            //url = "modulos/vacunas_listado.php?Cond=2&Id=" + IdMascotaExterno;
        }

        table = $('#TblVacunas').DataTable({
            "destroy": true,
            "ajax": {
                "method": "POST",
                "url": url,
            },
            "columns": [{
                    //"data": "Vacunas_Id"
                    "render": function(data, type, row) {
                        if (row.Vacunas_Id.length == 1) {
                            var Cod = 'V000' + row.Vacunas_Id;
                        } else if (row.Vacunas_Id.length == 2) {
                            var Cod = 'V00' + row.Vacunas_Id;
                        } else if (row.Vacunas_Id.length == 3) {
                            var Cod = 'V0' + row.Vacunas_Id;
                        } else {
                            var Cod = 'V' + row.Vacunas_Id;
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
                    "data": "Vacunas_Fecha"
                },
                {
                    "data": "Producto_Nombre"
                },
                {
                    "data": "Vacunas_Cita"
                },
                {
                    "data": "Vacunas_Observacion"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group'><div class='btn-group btn-group-sm' role='group'> <button type='button' id='editar' class='editar btn btn-warning' value='" + row.Vacunas_Id + "'><i class='icon-pencil3'></i></button>  <button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.Vacunas_Id + "'><i class='icon-trash-o'></i></button>  </div></div>";
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

    $('#TblVacunas').on('click', '.editar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            Obtener_Vacunas('MostrarProductoxCondicion', 1);
            Obtener_Datos_Vacuna('ObtenerDatosVacunasxId', id);
            $("#LblIdVacuna").text("Edición Vacuna : " + Obtener_Codigo_Formateado(id));  
            $("#Modal_ListadoVacunas").modal("show");
        } else {
            alert('El perfil de usuario no esta habilitado para opción');
        }
    });

    // Clase Proser
    function Obtener_Vacunas(act, id) {
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
                $("#CboVacuna").empty();
                $.each(json, function(i, item) {
                    $("#CboVacuna").append('<option value="' + json[i].Producto_Id + '">' + json[i].Producto_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Datos_Vacuna(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/vacunas.php",
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
                    $('#CboVacuna').val(json[i].Producto_Id);
                    $('#Txt_Precio').val(json[i].Producto_PrecioVenta);
                    $('#CboEstadoVacuna').val(json[i].Vacunas_Cita);   
                    //console.log('estado : ' + json[i].Vacunas_Cita);               
                    if (json[i].Vacunas_Cita == 1){
                        $("#CboEstadoVacuna").attr('disabled', true);
                    }else{
                        $("#CboEstadoVacuna").attr('disabled', false);
                    }
                    $('#Txt_Fecha').val(json[i].Vacunas_Fecha);
                    $('#Txt_Notas').val(json[i].Vacunas_Observacion);
                    $('#Txt_CodigoVacuna').val(json[i].Vacunas_Id);
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


    $('#FormularioVacuna input').on('change', function() {
        ValorRb = $('input[name=Dni]:checked', '#FormularioVacuna').val();
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
                //console.log(act + ':' + condicion + ':' + id);
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


    $("#CboVacuna").change(function() {
        Obtener_Precio('MostrarPrecio', $("#CboVacuna").val().trim());
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

    $('#BtnActualizarVacuna').click(function() {

        var nombredni = $('#Txt_Nombre_Dni').html();
        if (nombredni == 0) {
            alert('El DNI ingresado no existe, verificar el numero por favor o ingrese el DNI por defecto')
        } else {
            var Id = ValidaCamposObligatorios(
                $('#Txt_Dni').val().toUpperCase().trim(),
                $('#CboMascota').val().toUpperCase().trim(),
                $('#CboVacuna').val().toUpperCase().trim(),
                $('#Txt_Precio').val().toUpperCase().trim(),
                $('#Txt_Fecha').val());
            if (Id == 1) {
                Editar_Vacuna("EditarVacuna",
                    $("#Txt_CodigoVacuna").val(),
                    $('#Txt_Fecha').val(),
                    $("#CboVacuna").val().toUpperCase().trim(),
                    $("#Txt_Precio").val().toUpperCase().trim(),
                    $("#CboMascota").val().toUpperCase().trim(),
                    $("#Txt_Notas").val().toUpperCase().trim(),
                    $("#CboEstadoVacuna").val(),
                    '<?php echo $_SESSION['User']; ?>'
                );
            }
        }
    });

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
                    alert('El campo vacuna es obligatorio');
                    $("#CboVacuna").focus();
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

    function Editar_Vacuna(act, IdVacuna, Fecha, IdProducto, Precio, IdMascota, Observacion, Cita, Usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/vacunas.php",
            async: false,
            dataType: "html",
            data: ({
                action: act,
                IdVacuna: IdVacuna,
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
                    $("#Modal_ListadoVacunas").modal("hide");
                    listar();
                    alert('Vacuna Editado correctamente');
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }


    $('#TblVacunas').on('click', '.eliminar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            var bool = confirm("Esta seguro de eliminar el registro " + Obtener_Codigo_Formateado(id) + " ?");
            if (bool) {
                Eliminar_Vacuna('EliminarVacuna', id)
                alert('La vacuna seleccionado fue eliminada correctamente');
            } else {
                //alert("cancelo la solicitud");
            }
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Eliminar_Vacuna(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/vacunas.php",
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

    $(function() {

        Obtener_Nombre();
        Obtener_Condicion();

        if ($_GET("IdCli") === undefined) {
            //console.log('sin valor');
        } else {
            IdMascotaExterno = $_GET("IdCli");
        }
        listar();

    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>