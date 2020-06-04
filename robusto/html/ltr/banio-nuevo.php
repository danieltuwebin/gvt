<?php
session_start();
include('modulos/cerrar_sesion.php');
$user = $_SESSION['User'];
$IdAlmacen = $_SESSION['IdAlmacen'];
echo '<script type="text/javascript">localStorage.setItem("Usuario","' . $user . '");</script>';
echo '<script type="text/javascript">localStorage.setItem("IdAlmacen","' . $IdAlmacen . '");</script>';
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
    <title>Nuevo Baño - Sistema Vet. TuWebIn</title>
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

<STYLE type="text/css">
    input[type=checkbox] {
        transform: scale(1.2) !important;
    }
</STYLE>

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
                            <li class="active">
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
                    <h5 class="modal-title" id="exampleModalLabel">Baño Existente</h5>
                </div>
                <div class="modal-body">
                    <p id="PreguntaCliente"></p>
                </div>
                <div class="modal-footer">
                    <button id="BtnRestaurarCliente" type="button" class="btn btn-success mr-1"><i class="icon-check-circle "></i> Si, Mostrar datos</button>
                    <button id="BtnActualizarCliente" type="button" class="btn btn-primary mr-1"><i class="icon-minus-circle "></i> No, Actualizar</button>
                    <button id="BtnCerrarCliente" type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i class="icon-times-circle "></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / Modal -->


    <!-- Modal -->
    <div class="modal fade text-xs-left" id="Modal_EvaluacionMedica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17"><label id="LblIdCliente">Evaluación Integral</label></h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioEvaluacionMedica">
                        <div class="form-body">
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
                                            <input class="chkectoparasitos" type="checkbox" id="ChkPulgas" value="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkPiojos">
                                            Piojos&nbsp;&nbsp;
                                            <input class="chkectoparasitos" type="checkbox" id="ChkPiojos" value="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkGarrapatas">
                                            Garrapatas&nbsp;&nbsp;
                                            <input class="chkectoparasitos" type="checkbox" id="ChkGarrapatas" value="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="" for="ChkGusanos">
                                            Gusanos&nbsp;&nbsp;
                                            <input class="chkectoparasitos" type="checkbox" id="ChkGusanos" value="1">
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
                                        <i class="icon-arrow-right-b"></i><label for="">Arias Genitales : </label><br>
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
                    <button id="btnLimpiarEm" type="button" class="btn btn-info mr-1"><i class="icon-reload"></i>Limpiar</button>
                    <button id="BtnGrabarEm" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Evaluación Integral</button>
                </div>
            </div>
        </div>
    </div>
    <!-- / Modal -->

    <!-- ////////////////////////////////////////////////////////////////////////////-->




    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Nuevo Baño</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Datos de Baño</h4>
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
                                        <form class="form" id="FormularioBanio">
                                            <input type="hidden" id="Txt_CodigoCliente" name="Txt_CodigoCliente">
                                            <input type="hidden" id="Txt_CodigoMascota" name="Txt_CodigoMascota">
                                            <input type="hidden" id="Txt_CodigoProducto" name="Txt_CodigoProducto">
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
                                                            <input type="number" style="text-transform:uppercase;" id="Txt_Precio" class="form-control" placeholder="00.00" name="Txt_Precio">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="CboEstadoBanio">Estado </label>
                                                            <select id="CboEstadoBanio" name="CboEstadoBanio" class="form-control">
                                                                <option value="1" selected="selected">REALIZADO</option>
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
                                                    <textarea id="Txt_Notas" style="text-transform:uppercase;" rows="3" class="form-control" name="Txt_Notas" placeholder="Notas Adicionales"></textarea>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button id="btnLimpiar" type="button" class="btn btn-info mr-1">
                                                    <i class="icon-reload"></i> Nuevo
                                                </button>
                                                <button id="btnGrabar" type="button" class="btn btn-success mr-1">
                                                    <i class="icon-check2"></i> Registrar Baño
                                                </button>
                                                <button id="btnAgendar" type="button" class="btn btn-warning mr-1">
                                                    <i class="icon-check2"></i> Agendar Baño
                                                </button>
                                                <button id="btnEvaluacion" type="button" class="btn btn-primary mr-1">
                                                    <i class="icon-paper-clip"></i> Agregar Evaluación
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
    <script src="lib_propio/Banio.js" type="text/javascript"></script>
    <!-- END PROPIOS JS-->
</body>

<!-- BEGIN. EVENTOS SCRIPT-->
<script type="text/javascript">


</script>
<!-- END. EVENTOS SCRIPT-->

</html>