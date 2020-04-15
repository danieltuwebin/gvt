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
    <title>Nuevo Producto-Servicio - Sistema Vet. TuWebIn</title>
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
                            <li class="active">
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
                            <li class="active">
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
    <div class="modal fade text-xs-left" id="Modal_Pregunta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Producto - Servicio Existente</h5>
                </div>
                <div class="modal-body">
                    <p id="PreguntaProducto"></p>
                </div>
                <div class="modal-footer">
                    <button id="BtnRestaurarProser" type="button" class="btn btn-success mr-1"><i class="icon-check-circle "></i> Si, Mostrar datos</button>
                    <button id="BtnActualizarProser" type="button" class="btn btn-primary mr-1"><i class="icon-minus-circle "></i> No, Actualizar</button>
                    <button id="BtnCerrarProser" type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i class="icon-times-circle "></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / Modal -->

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Nuevo Producto - Servicio</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Datos del Producto - Servicio</h4>
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
                                        <form class="form" id="FormularioProSer">
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_Nombre">Nombre</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Nombre" class="form-control" placeholder="Nombres" name="Txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_PrecioCompra">Precio Compra</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_PrecioCompra" class="form-control" placeholder="00.00" name="Txt_PrecioCompra">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-md-2">
                                                        <div class="form-group">
                                                            <label for="Txt_PrecioVenta">Precio Venta</label>
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_PrecioVenta" class="form-control" placeholder="00.00" name="Txt_PrecioVenta">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="CboTipoProducto">Tipo de Producto</label>
                                                            <select id="CboTipoProducto" name="CboTipoProducto" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="CboCategoria">Categoria</label>
                                                            <select id="CboCategoria" name="CboCategoria" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=" col-xs-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="CboUM">Unidad de Medida</label>
                                                            <select id="CboUM" name="CboUM" class="form-control">
                                                            </select>
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


                                            <div class="form-actions">
                                                <button id="btnLimpiar" type="button" class="btn btn-info mr-1">
                                                    <i class="icon-reload"></i> Nuevo
                                                </button>
                                                <button id="btnActivar" type="button" class="btn btn-warning mr-1">
                                                    <i class="icon-rotate-right"></i> Activar
                                                </button>
                                                <button id="btngrabar" type="button" class="btn btn-success mr-1">
                                                    <i class="icon-check2"></i> Guardar Producto - Servicio
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
    /* BEGIN FUNCIONES GENERALES */

    /* END FUNCIONES GENERALES */

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

    function Habilita_Desabilita(boolLimpiar,boolGrabar) {
        $("#btnLimpiar").attr('disabled', boolLimpiar);
        $("#btngrabar").attr('disabled', boolGrabar);
        //$("#btnAgendar").attr('disabled', boolAgendar);
    }     

    function ActivarBotones() {
        $("#btnLimpiar").show();
        $("#btnActivar").hide();
        $("#btngrabar").show();
    }

    function DesactivarBotones() {
        $("#btnLimpiar").hide();
        $("#btnActivar").show();
        $("#btngrabar").hide();
    }

    function Actualizar() {
        limpiaForm($("#FormularioProSer"));
        Obtener_TipoProducto('MostrarTipoProducto');
        Obtener_Categoria('MostrarCategoria', 1)
        $("#CboTipoProducto").change(function() {
            Obtener_Categoria('MostrarCategoria', $('#CboTipoProducto').val());
        });
        Obtener_UM('MostrarUM');

        ActivarBotones();
        $("#Resultado_Grabacion").hide();
    }

    $("#btnLimpiar").click(function() {
        Habilita_Desabilita(true,false);
        limpiaForm($("#FormularioProSer"));
        $("#Resultado_Grabacion").hide();
    });

    function Obtener_TipoProducto(act) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
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
                $("#CboTipoProducto").empty();
                $.each(json, function(i, item) {
                    $("#CboTipoProducto").append('<option value="' + json[i].TipoProducto_Id + '">' + json[i].TipoProducto_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Categoria(act, IdProducto) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdProducto: IdProducto
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $("#CboCategoria").empty();
                $.each(json, function(i, item) {
                    $("#CboCategoria").append('<option value="' + json[i].Categoria_Id + '">' + json[i].Categoria_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_UM(act) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
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
                $("#CboUM").empty();
                $.each(json, function(i, item) {
                    $("#CboUM").append('<option value="' + json[i].UM_Id + '">' + json[i].UM_NombreLargo + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_IdProducto(act, nombre, tipoproducto, categoria, um) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nombre: nombre,
                Tipoproducto: tipoproducto,
                Categoria: categoria,
                Um: um,
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                $("#Txt_Codigo").val(data);
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function ValidaCamposObligatorios(Nombre, PrecioCompra, PrecioVenta, TipoProducto, Categoria, Um) {
        if (Nombre.length == 0) {
            alert('El campo nombre es obligatorio');
            $("#Txt_Nombre").focus();
            return 0;
        } else {
            if (PrecioCompra.length == 0) {
                alert('El campo precio de compra de producto es obligatorio');
                $('#Txt_PrecioCompra').focus();
            } else {
                if (PrecioVenta.length == 0) {
                    alert('El campo precio de venta de producto es obligatorio');
                    $('#Txt_PrecioVenta').focus();
                } else {
                    if (TipoProducto.length == 0) {
                        alert('El campo tipo de producto es obligatorio');
                        $("#CboTipoProducto").focus();
                        return 0;
                    } else {
                        if (Categoria.length == 0) {
                            alert('El campo categoria es obligatorio');
                            $("#CboCategoria").focus();
                            return 0;
                        } else {
                            if (Um.length == 0) {
                                alert('El campo unidad de medida es obligatorio');
                                $("#CboUM").focus();
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

    $("#btngrabar").click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().trim(),
            $('#Txt_PrecioCompra').val(),
            $('#Txt_PrecioVenta').val(),
            $('#CboTipoProducto').val().trim(),
            $('#CboCategoria').val().trim(),
            $('#CboUM').val().trim());
        if (Id == 1) {
            Grabar_Producto("GrabarProducto",
                $("#Txt_Nombre").val().trim(),
                $("#CboTipoProducto").val().trim(),
                $("#CboCategoria").val().trim(),
                $("#CboUM").val().trim(),
                $("#Txt_PrecioCompra").val(),
                $("#Txt_PrecioVenta").val(),
                $("#Txt_Notas").val(),
                '1',
                '<?php echo $_SESSION['User']; ?>'
            )
        }
    });

    function Grabar_Producto(act, nombre, tipoproducto, categoria, um, preciocompra, precioventa, notas, estado, usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nombre: nombre,
                Tipoproducto: tipoproducto,
                Categoria: categoria,
                Um: um,
                Preciocompra: preciocompra,
                Precioventa: precioventa,
                Notas: notas,
                Estado: estado,
                Usuario: usuario
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                $("#Resultado_Grabacion").show();
                $("#PreguntaProducto").html('');
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Nuevo producto registrado correctamente</strong>' +
                        '</div>')
                } else if (data == 2) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>El producto ya fue registrado en el sistema</strong>' +
                        '</div>')
                } else if (data == 3) {
                    Obtener_IdProducto('ObtenerId',
                        $("#Txt_Nombre").val().trim(),
                        $("#CboTipoProducto").val().trim(),
                        $("#CboCategoria").val().trim(),
                        $("#CboUM").val().trim())
                    $("#PreguntaProducto").append('Exite un producto de nombre ' + $("#Txt_Nombre").val().trim() + ' en el historico de productos, actualmente se encuentra eliminado desea restaurarlo ?');
                    $("#Modal_Pregunta").modal("show");
                } else {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
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
                Habilita_Desabilita(false,true);
            }
        });
    }

    $("#BtnRestaurarProser").click(function() {
        Obtener_Datos_Producto('MostrarProductoxId', $("#Txt_Codigo").val().trim(), 1, );
        $("#Modal_Pregunta").modal("hide");
        $("#PreguntaProducto").html("");
        DesactivarBotones();
        $("#Resultado_Grabacion").hide();
    })

    function Obtener_Datos_Producto(act, id, condicion) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Id: id,
                Condicion: condicion
            }),

            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $("#PreguntaProducto").append('Exite un producto de nombre ' + json[i].Producto_Nombre + ' en el historico de productos, actualmente se encuentra eliminado desea restaurarlo ?');
                    $('#Txt_Codigo').val(json[i].Producto_Id);
                    $('#Txt_Nombre').val(json[i].Producto_Nombre);
                    $("#Txt_PrecioCompra").val(json[i].Producto_PrecioCompra),
                    $("#Txt_PrecioVenta").val(json[i].Producto_PrecioVenta),
                    $('#CboTipoProducto').val(json[i].Producto_IdTipoPro);
                    Obtener_Categoria('MostrarCategoria', $('#CboTipoProducto').val());
                    $("#CboCategoria option[value=" + json[i].Producto_IdTipoCat + "]").attr("selected", true);
                    $('#CboUM').val(json[i].Producto_IdTipoUM);
                    $('#Txt_Notas').val(json[i].Producto_Observacion);
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $('#BtnActualizarProser').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().trim(),
            $('#Txt_PrecioCompra').val(),
            $('#Txt_PrecioVenta').val(),
            $('#CboTipoProducto').val().trim(),
            $('#CboCategoria').val().trim(),
            $('#CboUM').val().trim());
        if (Id == 1) {
            Editar_Producto("EditarProducto",
                $("#Txt_Nombre").val().trim(),
                $("#CboTipoProducto").val().trim(),
                $("#CboCategoria").val().trim(),
                $("#CboUM").val().trim(),
                $("#Txt_PrecioCompra").val(),
                $("#Txt_PrecioVenta").val(),
                $("#Txt_Notas").val().trim(),
                '1',
                '<?php echo $_SESSION['User']; ?>',
                $("#Txt_Codigo").val().trim(),
                '2'
            )
            $("#PreguntaProducto").html("");
            $("#Modal_Pregunta").modal("hide");
        }
    });


    $('#btnActivar').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().trim(),
            $('#Txt_PrecioCompra').val(),
            $('#Txt_PrecioVenta').val(),
            $('#CboTipoProducto').val().trim(),
            $('#CboCategoria').val().trim(),
            $('#CboUM').val().trim());
        if (Id == 1) {

            Editar_Producto("EditarProducto",
                $("#Txt_Nombre").val().trim(),
                $("#CboTipoProducto").val().trim(),
                $("#CboCategoria").val().trim(),
                $("#CboUM").val().trim(),
                $("#Txt_PrecioCompra").val(),
                $("#Txt_PrecioVenta").val(),
                $("#Txt_Notas").val().trim(),
                '1',
                '<?php echo $_SESSION['User']; ?>',
                $("#Txt_Codigo").val().trim(),
                '2'
            )

            $("#Resultado_Grabacion").show();
            ActivarBotones();
        }
    });

    function Editar_Producto(act, nombre, tipoproducto, categoria, um, preciocompra, precioventa, notas, estado, usuario, codigoproducto, codigoact) {
        $.ajax({
            type: "POST",
            url: "modulos/proser.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nombre: nombre,
                Tipoproducto: tipoproducto,
                Categoria: categoria,
                Um: um,
                Preciocompra: preciocompra,
                Precioventa: precioventa,
                Notas: notas,
                Estado: estado,
                Usuario: usuario,
                Codigoproducto: codigoproducto,
                Codigoact: codigoact
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                if (data == 1) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Se activo el producto de la data historica</strong>' +
                        '</div>')
                } else {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Lo sentimos ocurrio un error en el proceso de grabación</strong>' +
                        '</div>')
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $("#BtnCerrarCliente").click(function() {
        $("#PreguntaProducto").html("");
    });


    $(function() {
        ActivarBotones();
        Obtener_Nombre();
        Habilita_Desabilita(true,false);
        Obtener_TipoProducto('MostrarTipoProducto');
        Obtener_Categoria('MostrarCategoria', 1)
        $("#CboTipoProducto").change(function() {
            Obtener_Categoria('MostrarCategoria', $('#CboTipoProducto').val());
        });
        Obtener_UM('MostrarUM');

    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>