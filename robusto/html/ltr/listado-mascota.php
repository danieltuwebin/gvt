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
    <title>Listado Mascota - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                                <a href="listado-movimientos.php" class="menu-item">Kardex Producto-Serv.</a>
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
                            <li class="active">
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
                                <a href="listado-movimientos.php" class="menu-item">Kardex Producto-Serv.</a>
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
                            <li class="active">
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
                                <a href="listado-movimientos.php" class="menu-item">Kardex Producto-Serv.</a>
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
    <div class="modal fade text-xs-left" id="Modal_ListadoMascota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdMascota">Edición de Mascota</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioMascota">
                        <div class="form-body">

                            <h4 class="form-section">Propietario</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="Txt_Dni" class="form-control" placeholder="Ingrese Nro. DNI" name="Txt_Dni" onkeypress="return SoloNumeros(event);">
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
                            <br>

                            <hr>
                            <h5>Mascota</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Txt_Nombre">Nombre</label>
                                        <input type="text" style="text-transform:uppercase;" id="Txt_Nombre" class="form-control" placeholder="Nombres" name="Txt_Nombre" onkeypress="return soloLetras(event)">
                                        <input type="hidden" id="Txt_CodigoCliente" name="Txt_CodigoCliente">
                                        <input type="hidden" id="Txt_CodigoMascota" name="Txt_CodigoMascota">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CboEspecie">Especie</label>
                                        <select id="CboEspecie" name="CboEspecie" class="form-control">
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CboRaza">Raza</label>
                                        <select id="CboRaza" name="CboRaza" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CboSexo">Sexo</label>
                                        <select id="CboSexo" name="CboSexo" class="form-control">
                                            <option value="1">MACHO</option>
                                            <option value="2">HEMBRA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Txt_Color">Color</label>
                                        <input type="text" style="text-transform:uppercase;" id="Txt_Color" class="form-control" placeholder="Nombres" name="Txt_Color" onkeypress="return soloLetras(event)">
                                        <!--  <input type="hidden" id="Txt_Color" name="Txt_Color"> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput5">Fecha de Nacimiento</label>
                                        <input id="Txt_Fecha" type="date" class="form-control">
                                        </select>
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
                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                    <button id="BtnActualizarMascota" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Edición</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-xs-left" id="Modal_Opciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17">Seleccione un opción para la mascota seleccionada</h4>
                </div>
                <!--<div class="modal-body">
                    <form class="form" id="FormularioMascota">
                        <div class="form-body">

                        </div>
                    </form>
                </div> -->
                <div class="modal-footer" style="text-align:center;">
                    <div class="row">
                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                        <button id="BtnVerVacunas" type="button" class="btn btn-success mr-1" onclick="LinkVacunas(IdMascota)"><i class="icon-eyedropper"></i> Nueva Vacuna</button>
                        <button id="BtnVerBanios" type="button" class="btn btn-success mr-1" onclick="LinkBanios(IdMascota)"><i class="icon-droplet"></i> Nuevo Baño</button>
                        <button id="BtnVerDesparacittacion" type="button" class="btn btn-success mr-1" onclick="LinkDesparacitacion(IdMascota)"><i class="icon-folder-plus"></i> Nueva Desparacitación</button>
                        <button id="BtnVerAtencion" type="button" class="btn btn-success mr-1" onclick="LinkAtencion(IdMascota)"><i class="icon-plus2"></i> Nueva Atención</button>
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
                    <h2 class="content-header-title">Listado de Mascotas</h2>
                </div>
                <?php

                if ($CondicionMnu == 1 || $CondicionMnu == 2) {
                    ?>
                    <div class="content-header-left col-md-3 col-xs-12 mb-1">
                        <button id="BtnNuevo" type="button" class="btn btn-success"><i class="icon-android-add-circle"></i> Nueva Mascota</button>
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
                                <h4 class="card-title">Mascotas</h4>
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
                                        <!-- <table id="TblClientes" class="table table-bordered table-striped"> -->
                                        <table id="TblMascotas" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Propietario</th>
                                                    <th>Nombre</th>
                                                    <th>Especie</th>
                                                    <th>Raza</th>
                                                    <th>Sexo</th>
                                                    <th>Edad</th>
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
            var Cod = 'M000' + id;
        } else if (id.length == 2) {
            var Cod = 'M00' + id;
        } else if (id.length == 3) {
            var Cod = 'M0' + id;
        } else {
            var Cod = 'M' + id;
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


    $("#BtnNuevo").click(function() {
        var url = "mascota-nuevo.php";
        $(location).attr('href', url);
    });

    function Actualizar() {
        listar();
        MuestraAlert();
    }

    var listar = function() {
        var url = ""
        if (IdClienteExterno == 0) {
            url = "modulos/mascotas_listado.php?Cond=1&Id=0";
        } else {
            url = "modulos/mascotas_listado.php?Cond=2&Id=" + IdClienteExterno;
        }

        table = $('#TblMascotas').DataTable({
            "destroy": true,
            "ajax": {
                "method": "POST",
                //"url": "modulos/mascotas_listado.php?Cond=" + GetCondicion +"&Id=" + GetId,
                //"url": "modulos/mascotas_listado.php?Cond=1&Id=0",
                "url": url,
            },
            "columns": [{
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
                    "data": "Mascota_Cliente"
                },
                {
                    "data": "Mascota_Nombre"
                },
                {
                    "data": "Mascota_Especie"
                },
                {
                    "data": "Mascota_Raza"
                },
                {
                    "data": "Mascota_Sexo"
                },
                {
                    "data": "Mascota_Edad"
                },
                {
                    "render": function(data, type, row) {
                        return "<div class='form-group'><div class='btn-group btn-group-sm' role='group'> <button type='button' id='editar' class='editar btn btn-warning' value='" + row.Mascota_Id + "'><i class='icon-pencil3'></i></button>  <button id='eliminar' type='button' class='eliminar btn btn-danger' value='" + row.Mascota_Id + "'><i class='icon-trash-o'></i></button>    <button id='ver' type='button' class='ver btn btn-success' value='" + row.Mascota_Id + "'><i class='icon-eye-plus'></i></button>   </div></div>";
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


    $('#TblMascotas').on('click', '.editar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            Obtener_Especie('MostrarEspecie');
            Obtener_Raza('MostrarRaza', 1)
            $("#CboEspecie").change(function() {
                Obtener_Raza('MostrarRaza', $('#CboEspecie').val());
            });
            Obtener_Datos_Mascota('MostrarMascotaxId', id, 1)
            $("#LblIdMascota").text("Edición de Mascota : " + Obtener_Codigo_Formateado(id));  
            $("#Modal_ListadoMascota").modal("show");
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Obtener_Especie(act) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
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
                $("#CboEspecie").empty();
                $.each(json, function(i, item) {
                    $("#CboEspecie").append('<option value="' + json[i].Especie_Id + '">' + json[i].Especie_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Raza(act, IdEspecie) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdEspecie: IdEspecie
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboRaza").empty();
                $.each(json, function(i, item) {
                    $("#CboRaza").append('<option value="' + json[i].Raza_Id + '">' + json[i].Raza_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Datos_Mascota(act, id, condicion) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
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
                    if (condicion == 1) {
                        $('#Txt_Dni').val(json[i].Cliente_Dni);
                        $('#Txt_Nombre_Dni').html(json[i].Cliente_NombreCompleto);
                        $('#Txt_Nombre').val(json[i].Mascota_Nombre);
                        $('#CboEspecie').val(json[i].Mascota_IdEspecie);
                        Obtener_Raza('MostrarRaza', $('#CboEspecie').val());
                        $("#CboRaza option[value=" + json[i].Mascota_IdRaza + "]").attr("selected", true);
                        $("#CboSexo option[value=" + json[i].Mascota_IdSexo + "]").attr("selected", true);
                        $('#Txt_Color').val(json[i].Mascota_Color);
                        $('#Txt_Fecha').val(json[i].Mascota_FechaNac);
                        $('#Txt_Notas').val(json[i].Mascota_Observacion);
                        $('#Txt_CodigoCliente').val(json[i].Cliente_Id);
                        $('#Txt_CodigoMascota').val(json[i].Mascota_Id);
                    } else if (condicion == 2) {

                        var dni = json[i].Cliente_Dni;
                        var act = 'dani';



                    }
                });


            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#btnBuscar').click(function() {
        Obtener_Nombre_x_Dni('MostrarNombrexDni', $('#Txt_Dni').val().trim())
    });

    $("#Txt_Dni").keypress(function(e) {
        if (e.which == 13) {
            Obtener_Nombre_x_Dni('MostrarNombrexDni', $('#Txt_Dni').val().trim())
        }
    });

    function Obtener_Nombre_x_Dni(act, dni) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
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
                $('#Txt_Nombre_Dni').html(json.Cliente_Nombre);
                $('#Txt_CodigoCliente').val(json.Cliente_Id)
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#BtnActualizarMascota').click(function() {
        var codigo = $('#Txt_CodigoCliente').val();
        if (codigo == 0) {
            alert('El DNI ingresado no existe, verificar el numero por favor o ingrese el DNI por defecto')
        } else {
            var Id = ValidaCamposObligatorios(
                $('#Txt_Nombre').val().toUpperCase().trim(),
                $('#Txt_Color').val().toUpperCase().trim(),
                $('#Txt_Fecha').val().toUpperCase().trim(),
                $('#Txt_Dni').val().toUpperCase().trim());
            if (Id == 1) {
                Editar_Mascota("EditarMascota",
                    $("#Txt_CodigoCliente").val().toUpperCase().trim(),
                    $("#Txt_Nombre").val().toUpperCase().trim(),
                    $("#CboEspecie").val().toUpperCase().trim(),
                    $("#CboRaza").val().toUpperCase().trim(),
                    $("#CboSexo").val().toUpperCase().trim(),
                    $("#Txt_Color").val().toUpperCase().trim(),
                    $("#Txt_Fecha").val().toUpperCase().trim(),
                    $("#Txt_Notas").val().toUpperCase().trim(),
                    '1',
                    '<?php echo $_SESSION['User']; ?>',
                    $('#Txt_CodigoMascota').val()
                )
            }
        }
    });

    function ValidaCamposObligatorios(Nombre, Color, FechaNac, Dni) {
        if (Nombre.length == 0) {
            alert('El campo nombre es obligatorio');
            $("#Txt_Nombre").focus();
            return 0;
        } else {
            if (Color.length == 0) {
                alert('El campo color es obligatorio');
                $("#Txt_Color").focus();
                return 0;
            } else {
                if (FechaNac.length == 0) {
                    alert('El campo fecha es obligatorio');
                    $("#Txt_Fecha").focus();
                    return 0;
                } else {
                    if (Dni.length == 0) {
                        alert('El campo DNI es obligatorio');
                        $("#Txt_Dni").focus();
                        return 0;
                    } else {
                        return 1;
                    }
                }
            }
        }
    }

    function Editar_Mascota(act, codigo_cliente, nombre, especie, raza, sexo, color, fecha, notas, estado, usuario, codigo_mascota) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                CodigoCli: codigo_cliente,
                Nombre: nombre,
                Especie: especie,
                Raza: raza,
                Sexo: sexo,
                Color: color,
                Fecha: fecha,
                Notas: notas,
                Estado: estado,
                Usuario: usuario,
                CodigoMas: codigo_mascota
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                if (data == 1) {
                    $("#Modal_ListadoMascota").modal("hide");
                    listar();
                    alert('Mascota Editada correctamente');
                } else {
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }


    $('#TblMascotas').on('click', '.eliminar', function() {
        var id = $(this).val();
        if (Condicion == 1) {
            var bool = confirm("Esta seguro de eliminar el registro " + Obtener_Codigo_Formateado(id) + " ?");
            if (bool) {
                Eliminar_Mascota('EliminarMascota', id)
                alert('La mascota seleccionado fue eliminado correctamente');
            } else {
                //alert("cancelo la solicitud");
            }
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });

    function Eliminar_Mascota(act, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/mascotas.php",
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
                    //alert('Cliente Eliminado correctamente');
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


    $('#TblMascotas').on('click', '.ver', function() {
        IdMascota = $(this).val();
        if (Condicion == 1) {
            $("#Modal_Opciones").modal("show");
        } else {
            alert('El perfil de usurio no esta habilitado para opción');
        }
    });


    function LinkVacunas(IdMascota) {
        var url = "vacuna-nuevo.php?IdMas=" + IdMascota;
        $(location).attr('href', url);
    }

    function LinkBanios(IdMascota) {
        var url = "banio-nuevo.php?IdMas=" + IdMascota;
        $(location).attr('href', url);
    }

    function LinkDesparacitacion(IdMascota) {
        var url = "desparacitacion-nuevo.php?IdMas=" + IdMascota;
        $(location).attr('href', url);
    }
    

    function LinkAtencion(IdMascota) {
        var url = "atencion-nuevo.php?IdMas=" + IdMascota;
        $(location).attr('href', url);
    }     



    function MuestraAlert() {
        setTimeout(function() {
            //alert("Hello");
            if (!table.data().count()) {
                $("#Resultado_Grabacion").html('<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '<strong>El cliente seleccionado, no registra mascotas en el sistema.</strong>' +
                    '</div>')
            } else {
                $("#Resultado_Grabacion").html('')
            }
        }, 3000);
    }

    $(function() {

        Obtener_Nombre();
        Obtener_Condicion();

        if ($_GET("IdCli") === undefined) {
            //console.log('sin valor');
        } else {
            IdClienteExterno = $_GET("IdCli");
            //console.log(IdClienteExterno);
        }
        listar();
        MuestraAlert();
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>