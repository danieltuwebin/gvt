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
                                        <form class="form" id="FormularioRaza">
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
                                                                        <!-- <label class="display-inline-block" for="CboVacuna">S : -->
                                                                        <select id="CboMascota" name="CboMascota" class="form-control">
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!--                                                             <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <label class="display-inline" for="Txt_Fecha">Fecha de Nacimiento :
                                                                        <input id="Txt_Fecha" type="date" class="form-control">
                                                                    </label>
                                                                </div>
                                                            </div> -->
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
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Precio" class="form-control" placeholder="Ingrese nombre" name="Txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                            <input type="hidden" id="Txt_Precio" name="Txt_Precio">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Descuento">Descuento</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Descuento" class="form-control" placeholder="Ingrese nombre" name="Txt_Descuento" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_Cantidad">Cantidad</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Cantidad" class="form-control" placeholder="Ingrese nombre" name="Txt_Cantidad" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button id="btnLimpiar" type="button" class="btn btn-info mr-1">
                                                                <i class="icon-reload"></i> Nuevo
                                                            </button>
                                                            <button id="btnActivar" type="button" class="btn btn-warning mr-1" style="display: none;">
                                                                <i class="icon-check2"></i> Agregar
                                                            </button>
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
                                        <h4 class="card-title" id="basic-layout-form">Listado de Razas</h4>
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
                                                            <th>Nro.</th>
                                                            <th>Id</th>
                                                            <th>Producto</th>
                                                            <th>Precio</th>
                                                            <th>Descuento</th>
                                                            <th>Cantidad</th>
                                                            <th>Total</th>
                                                            <th>Administrar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tablaDetalleVenta">
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="7" style="text-align:right">Total Venta:</th>
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
    var table;
    var Id_TipoVenta;

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



    /* INICIO */
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
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
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
                console.log(data);
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $('#Txt_Dni').val(json[i].Cliente_Dni);
                    $('#Txt_Nombre_Dni').html(json[i].Mascota_Cliente);
                    $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                    $('#Txt_CodigoMascota').val(json[i].Mascota_Id);
                    Obtener_Mascotas_x_IdCliente('ObtenerMascotasxIdCliente', 2, $('#Txt_CodigoCliente').val());
                    console.log('impr ' + $('#Txt_CodigoCliente').val().trim());
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
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
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

    $('#btnAgregar').click(function() {


        $("#tablaDetalleVenta").append('<tr>' +
            '<td class="text-truncate">' + '1' + '</td>' +
            '<td class="text-truncate">' + $('#CodigoProducto').val() + '</td>' +
            '<td class="text-truncate">' + $('#TxtProducto').val() + '</td>' +
            '<td class="text-truncate">' + $('#Txt_Precio').val() + '</td>' +
            '<td class="text-truncate">' + $('#Txt_Descuento').val() + '</td>' +
            '<td class="text-truncate">' + $('#Txt_Cantidad').val() + '</td>' +
            '<td class="text-truncate">' + (($('#Txt_Cantidad').val() * $('#Txt_Precio').val()) - $('#Txt_Descuento').val()) + '</td>' +
            /* '<td class="text-truncate"> <button type="button" class="btn btn-success btn-sm">' + 'Ver Detalle' + '</button> </td>' + '</tr>'); */
            '<td class="text-truncate"><button id="eliminar" type="button" class="btn btn-danger" value=""><i class="icon-trash-o"></i></button></td> </tr>');


        console.log('click en agregar')
    });


    $('#BtnGrabarVenta').click(function() {    
        console.log('click en agregar...')
        /*
        console.log('ProcesoVenta'+ '-' + 
            $("#CboSede").val() + '-' + 
            $('#CodigoProducto').val()+ ',' + 
            $('#Txt_Cantidad').val()+ ',' + 
            '1'+ ',' + 
            $('#TxtFecha').val()+ ',' + 
            Id_TipoVenta+ ',' + 
            $('#CboTipoPago').val()+ ',' + 
            $('#CboMascota').val()+ ',' + 
            $('#Txt_Precio').val()+ ',' + 
            $('#Txt_Descuento').val()+ ',' + 
            ($('#Txt_Precio').val() * $('#Txt_Cantidad').val()) - $('#Txt_Descuento').val()+ ',' + 
            ''+ ',' + 
            '1'+ ',' + 
            '<?php echo $_SESSION['User']; ?>'+ ',' + 
            '1'+ ',' + 
            'C');
        */
            
            Grabar_Venta_Total_x_Condiciones(
            'ProcesoVenta',
            $("#CboSede").val(),
            $('#CodigoProducto').val(),
            $('#Txt_Cantidad').val(),
            '1',
            $('#TxtFecha').val(),
            Id_TipoVenta,
            $('#CboTipoPago').val(),
            $('#CboMascota').val(),
            $('#Txt_Precio').val(),
            $('#Txt_Descuento').val(),
            ($('#Txt_Precio').val() * $('#Txt_Cantidad').val()) - $('#Txt_Descuento').val(),
            '',
            '1',
            '<?php echo $_SESSION['User']; ?>',
            '1',
            'C'
        )
    });


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
                console.log('obtener_venta_temp');
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $("#CboEspecie").empty();
                $.each(json, function(i, item) {

                    $('#TxtFecha').val(json[i].VentaTemporal_Fecha);
                    $('#CodigoProducto').val(json[i].VentaTemporal_IdProducto);
                    $('#TxtProducto').val(json[i].Producto_Nombre);
                    $('#Txt_Precio').val(json[i].VentaTemporal_Precio);
                    $('#Txt_Descuento').val('0.00');
                    $('#Txt_Cantidad').val('1.00');




                    //$("#CboEspecie").append('<option value="' + json[i].Especie_Id + '">' + json[i].Especie_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }


    function Grabar_Venta_Total_x_Condiciones(act, IdSede, IdProducto, Cantidad, Kardex, Fecha, TipoVenta,
    TipoPago, IdMascota, Precio, Descuento, PrecioTotal, Observacion, Estado, Usuario, Cita, CitaEstado) {

        console.log(act+'-'+ IdSede+'-'+ IdProducto+'-'+ Cantidad+'-'+ Kardex+'-'+ Fecha+'-'+ TipoVenta+'-'+
    TipoPago+'-'+ IdMascota+'-'+ Precio+'-'+ Descuento+'-'+ PrecioTotal+'-'+ Observacion+'-'+ Estado+'-'+ Usuario+'-'+ Cita+'-'+ CitaEstado);

        $.ajax({
            type: "POST",
            url: "modulos/ventas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdSede: IdSede,
                IdProducto: IdProducto,
                Cantidad: Cantidad,
                Kardex: Kardex,
                Fecha: Fecha,
                TipoVenta: TipoVenta,
                TipoPago: TipoPago,
                IdMascota: IdMascota,
                Precio: Precio,
                Descuento: Descuento,
                PrecioTotal: PrecioTotal,
                Observacion: Observacion,
                Estado: Estado,
                Usuario: Usuario,
                Cita: Cita,
                CitaEstado: CitaEstado
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


    var listar = function() {
        table = $('#TblVenta').DataTable({
            "destroy": true,
            "ajax": {
                "method": "POST",
                "url": "modulos/raza_listado.php"
                //"dataSrc": ""
            },
            /* OCULTAR COLUMNAS */
            /*
                            "columnDefs": [{
                                    "targets": [2],
                                    "visible": false,
                                    "searchable": false
                                },
                                {
                                    "targets": [3],
                                    "visible": false
                                }
                            ],
            */
            /*  END OCULTAR COLUMNAS*/
            "columnDefs": [{
                    "targets": [0, 1, 2, 3, 4, 5],
                    "className": "dt-body-left"
                },
                {
                    "targets": [6],
                    "className": "dt-body-center"
                }
            ],
            "columns": [{
                    "render": function(data, type, row) {
                        if (row.Raza_Id.length == 1) {
                            var Cod = 'R00' + row.Raza_Id;
                        } else if (row.Raza_Id.length == 2) {
                            var Cod = 'R0' + row.Raza_Id;
                        } else {
                            var Cod = 'R' + row.Raza_Id;
                        }
                        return Cod;
                    }
                },
                {
                    "data": "Especie_Nombre"
                },
                {
                    "data": "Raza_Nombre"
                },
                {
                    "data": "Raza_Estado"
                },
                {
                    "data": "Raza_Fecha"
                },
                {
                    "data": "Raza_User"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group center-block' ><div class='btn-group btn-group-sm' role='group'>" +
                            "<button type='button' id='editar' class='editar btn btn-warning' value='" + row.Raza_Id + "'><i class='icon-pencil3'></i></button>" +
                            "<button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.Raza_Id + "'><i class='icon-trash-o'></i></button>" +
                            "</div></div>";
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
                    className: 'btn btn-danger',
                    orientation: 'landscape',
                    //pageSize: 'TABLOID',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
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
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
    }

    function Actualizar_Nuevo() {
        limpiaForm($("#FormularioRaza"));
        ActivarBotones();
        $("#Resultado_Grabacion").hide();
        Obtener_Especie('MostrarEspecie');
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
        limpiaForm($("#FormularioRaza"));
        $("#Resultado_Grabacion").hide();
    });

    $("#btngrabar").click(function() {
        console.log('btng');
        var Id = ValidaCamposObligatorios($('#Txt_Nombre').val().trim(), $("#CboEspecie").val().trim());
        if (Id == 1) {
            Grabar_Raza("GrabarRaza",
                $("#CboEspecie").val().trim(),
                $("#Txt_Nombre").val().trim(),
                '<?php echo $_SESSION['User']; ?>'
            );
            listar();
        }
    });

    function Grabar_Raza(act, especie, nombre, usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/conf_raza.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Especie: especie,
                Nombre: nombre,
                Usuario: usuario
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                console.log(data);
                $("#Resultado_Grabacion").show();
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Nueva raza registrada correctamente</strong>' +
                        '</div>')
                } else if (data == 2) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>No se grabo el registro, la raza ya existe en el sistema</strong>' +
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
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#TblVenta').on('click', '.editar', function() {
        var id = $(this).val();
        console.log($(this).val());
        if (Condicion == 1) {
            Obtener_Datos_Raza('MostrarRazaxId', id);
            DesactivarBotones();
            $("#VistaDetalle").hide();
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Obtener_Datos_Raza(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/conf_raza.php",
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
                $.each(json, function(i, item) {
                    $('#Txt_Codigo').val(json[i].Raza_Id);
                    $('#Txt_Nombre').val(json[i].Raza_Nombre);
                    $("#CboEspecie option[value=" + json[i].Raza_IdEspecie + "]").attr("selected", true);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#btnActivar').click(function() {
        var Id = ValidaCamposObligatorios($('#Txt_Nombre').val().trim(), $("#CboEspecie").val().trim());
        if (Id == 1) {
            Editar_Raza("EditarRaza",
                $("#Txt_Nombre").val().trim(),
                $("#CboEspecie").val().trim(),
                '<?php echo $_SESSION['User']; ?>',
                $('#Txt_Codigo').val().trim()
            )
            $("#Resultado_Grabacion").show();
            ActivarBotones();
            $("#VistaDetalle").show();
        }
    });

    function Editar_Raza(act, nombre, especie, usuario, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/conf_raza.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nombre: nombre,
                Especie: especie,
                Usuario: usuario,
                Codigo: codigo
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                console.log(data);
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Se actualizo la raza correctamente</strong>' +
                        '</div>')
                    listar();
                    $("#Txt_Nombre").val('');
                    //$("#Txt_Notas").val('');

                } else if (data == 2) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-warning alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>No se actualizo, la raza ya existe en el sistema</strong>' +
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
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#TblVenta').on('click', '.eliminar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            var bool = confirm("Esta seguro de eliminar el registro ?");
            if (bool) {
                //console.log('respuesta positiva ' + id);
                Eliminar_Raza('EliminarRaza', id)
                //alert('El cliente seleccionado fue eliminado correctamente');
            } else {
                //alert("cancelo la solicitud");
            }
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Eliminar_Raza(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/conf_raza.php",
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
                    alert('Raza eliminada correctamente');
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

        console.log($_GET("IdVen"));
        console.log($_GET("IdMas"));
        console.log($_GET("Tipo"));

        Obtener_Sede('MostrarSede');
        $('#TxtFecha').val(MostrarFechaActual());

        if ($_GET("IdVen") === undefined) {
            //SIN VALOR GET
        } else {
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
            console.log('final' + $('#Txt_CodigoCliente').val().trim());
            $("#CboMascota option[value=" + $('#Txt_CodigoMascota').val() + "]").attr("selected", true);

            Obtener_Registros_Tblventatemporal('ObtenerRegistrosTblventatemporal', $_GET("IdVen"));

            //----------------Obtener_NombreCliente_NombreMascota('MostrarNombrecliNombreMas', $_GET("IdMas"));
            //----------------console.log('final' + $('#Txt_CodigoCliente').val().trim());
            //----------------$("#CboMascota option[value=" + $('#Txt_CodigoMascota').val() + "]").attr("selected", true);
        }



        /*         ActivarBotones();
                Obtener_Condicion();
                Obtener_Nombre();
                Obtener_Especie('MostrarEspecie');
                listar(); */



        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>