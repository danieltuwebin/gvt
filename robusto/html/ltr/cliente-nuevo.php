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
    <meta name="author" content="DCCAHUAY">
    <title>Nuevo Cliente - Sistema Vet. TuWebIn</title>
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
                    <h5 class="modal-title" id="exampleModalLabel">Cliente Existente</h5>
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

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                    <h2 class="content-header-title">Nuevo Cliente</h2>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Datos del Cliente</h4>
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
                                        <form class="form" id="FormularioCliente">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_Nombre">Nombres</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Nombre" class="form-control" placeholder="Nombres" name="Txt_Nombre" onkeypress="return soloLetras(event)">
                                                            <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_Apellido">Apellidos</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Apellido" class="form-control" placeholder="Apellidos" name="Txt_Apellido" onkeypress="return soloLetras(event)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_Dni">DNI</label>
                                                            <input type="text" id="Txt_Dni" class="form-control" placeholder="D.N.I" name="Txt_Dni" onkeypress="return SoloNumeros(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_Email">E-mail</label>
                                                            <input type="text" style="text-transform:uppercase;" id="Txt_Email" class="form-control" placeholder="E-mail" name="Txt_Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_TelFijo">Telefono Fijo</label>
                                                            <input type="text" id="Txt_TelFijo" class="form-control" placeholder="Telefono fijo" name="Txt_TelFijo" onkeypress="return SoloNumeros(event);">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Txt_TelCelular">Nro. Celular</label>
                                                            <input type="text" id="Txt_TelCelular" class="form-control" placeholder="Telefono Celular" name="Txt_TelCelular" onkeypress="return SoloNumeros(event);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="form-section">Dirección</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Provincia</label>
                                                            <select id="CboProvincia" name="CboProvincia" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="CboDistrito">Distrito</label>
                                                            <select id="CboDistrito" name="CboDistrito" class="form-control">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Txt_Direccion">Direccion</label>
                                                    <input type="text" style="text-transform:uppercase;" id="Txt_Direccion" class="form-control" placeholder="Dirección" name="Txt_Direccion">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Txt_Notas">Notas</label>
                                                    <textarea id="Txt_Notas" style="text-transform:uppercase;" rows="5" class="form-control" name="Txt_Notas" placeholder="Notas Adicionales"></textarea>
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
                                                    <i class="icon-check2"></i> Guardar Cliente
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
    $('#Salir').click(function() {
        Cerrar_Sesion("salir");
    });
    /* END FUNCIONES GENERALES */

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
        limpiaForm($("#FormularioCliente"));
        Obtener_Provincia('MostrarProvincia');
        Obtener_Distrito('MostrarDistrito', 1)
        $("#CboProvincia").change(function() {
            Obtener_Distrito('MostrarDistrito', $('#CboProvincia').val());
        });
        ActivarBotones();
    }

    function Obtener_Provincia(act) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $("#CboProvincia").empty();
                $.each(json, function(i, item) {
                    $("#CboProvincia").append('<option value="' + json[i].Provincia_Id + '">' + json[i].Provincia_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function Obtener_Distrito(act, IdProvincia) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                IdProvincia: IdProvincia
            }),
            beforeSend: function() {
                //alert('ok');
            },
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $("#CboDistrito").empty();
                $.each(json, function(i, item) {
                    $("#CboDistrito").append('<option value="' + json[i].Distrito_Id + '">' + json[i].Distrito_Nombre + '</option>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    function ValidaCamposObligatorios(Nombre, Apellido, Celular, Direccion) {
        if (Nombre.length == 0) {
            alert('El campo nombre es obligatorio');
            $("#Txt_Nombre").focus();
            return 0;
        } else {
            if (Apellido.length == 0) {
                alert('El campo apellido es obligatorio');
                $("#Txt_Apellido").focus();
                return 0;
            } else {
                if (Celular.length == 0) {
                    alert('El campo celular es obligatorio');
                    $("#Txt_TelCelular").focus();
                    return 0;
                } else {
                    if (Direccion.length == 0) {
                        alert('El campo celular es obligatorio');
                        $("#Txt_Direccion").focus();
                        return 0;
                    } else {
                        return 1;
                    }
                }
            }
        }
    }

    $("#btnLimpiar").click(function() {
        limpiaForm($("#FormularioCliente"));
    });
    $("#btngrabar").click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().toUpperCase().trim(),
            $('#Txt_Apellido').val().toUpperCase().trim(),
            $('#Txt_TelCelular').val().toUpperCase().trim(),
            $('#Txt_Direccion').val().toUpperCase().trim());
        if (Id == 1) {
            Grabar_Cliente("GrabarCliente",
                $("#Txt_Nombre").val().toUpperCase().trim(),
                $("#Txt_Apellido").val().toUpperCase().trim(),
                $("#Txt_Dni").val().toUpperCase().trim(),
                $("#Txt_Email").val().toUpperCase().trim(),
                $("#Txt_TelFijo").val().toUpperCase().trim(),
                $("#Txt_TelCelular").val().toUpperCase().trim(),
                $("#CboProvincia").val().toUpperCase().trim(),
                $("#CboDistrito").val().toUpperCase().trim(),
                $("#Txt_Direccion").val().toUpperCase().trim(),
                $("#Txt_Notas").val().toUpperCase().trim(),
                '<?php echo $_SESSION['User']; ?>'
            )
        }
    });

    function Grabar_Cliente(act, nombre, apellido, dni, email, telfijo, telcelular, provincia, distrito, direccion, notas, usuario) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nomb: nombre,
                Ape: apellido,
                Dni: dni,
                Email: email,
                TelFijo: telfijo,
                TelCelu: telcelular,
                Provincia: provincia,
                Distrito: distrito,
                Direccion: direccion,
                Notas: notas,
                Usuario: usuario,
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
                        '<strong>Nuevo cliente registrado correctamente</strong>' +
                        '</div>')
                } else if (data == 2) {
                    console.log($("#Txt_Dni").val());
                    Obtener_Datos_cliente('MostrarClientexDni', $("#Txt_Dni").val(), 1);
                    $("#Modal_Pregunta").modal("show");
                } else if (data == 3) {
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>El numero de DNI registrado ya fue registrado en el sistema</strong>' +
                        '</div>')
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
                //alert('ok2');
            }
        });
    }

    $('#btnActivar').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().toUpperCase().trim(),
            $('#Txt_Apellido').val().toUpperCase().trim(),
            $('#Txt_TelCelular').val().toUpperCase().trim(),
            $('#Txt_Direccion').val().toUpperCase().trim());
        if (Id == 1) {
            Editar_Cliente("EditarCliente",
                $("#Txt_Nombre").val().toUpperCase().trim(),
                $("#Txt_Apellido").val().toUpperCase().trim(),
                $("#Txt_Email").val().toUpperCase().trim(),
                $("#Txt_TelFijo").val().toUpperCase().trim(),
                $("#Txt_TelCelular").val().toUpperCase().trim(),
                $("#CboProvincia").val().toUpperCase().trim(),
                $("#CboDistrito").val().toUpperCase().trim(),
                $("#Txt_Direccion").val().toUpperCase().trim(),
                $("#Txt_Notas").val().toUpperCase().trim(),
                '1',
                '<?php echo $_SESSION['User']; ?>',
                $('#Txt_Codigo').val()
            )
            $("#Resultado_Grabacion").show();
            ActivarBotones();
        }
    });

    function Editar_Cliente(act, nombre, apellido, email, telfijo, telcelular, provincia, distrito, direccion, notas, estado, usuario, codigo) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
            async: true,
            dataType: "html",
            data: ({
                action: act,
                Nomb: nombre,
                Ape: apellido,
                Email: email,
                TelFijo: telfijo,
                TelCelu: telcelular,
                Provincia: provincia,
                Distrito: distrito,
                Direccion: direccion,
                Notas: notas,
                Estado: estado,
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
                        '<strong>Se activo al cliente de la data historica</strong>' +
                        '</div>')
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
                //alert('ok2');
            }
        });
    }

    $("#BtnCerrarCliente").click(function() {
        $("#PreguntaCliente").html("");
    });

    $("#BtnRestaurarCliente").click(function() {
        console.log('click en boton restaurar');
        Obtener_Datos_cliente('MostrarClientexDni', $("#Txt_Dni").val(), 2);
        $("#Modal_Pregunta").modal("hide");
        $("#PreguntaCliente").html("");
        DesactivarBotones();
        $("#Resultado_Grabacion").hide();
    })

    $('#BtnActualizarCliente').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().toUpperCase().trim(),
            $('#Txt_Apellido').val().toUpperCase().trim(),
            $('#Txt_TelCelular').val().toUpperCase().trim(),
            $('#Txt_Direccion').val().toUpperCase().trim());
        if (Id == 1) {
            Editar_Cliente("EditarCliente",
                $("#Txt_Nombre").val().toUpperCase().trim(),
                $("#Txt_Apellido").val().toUpperCase().trim(),
                $("#Txt_Email").val().toUpperCase().trim(),
                $("#Txt_TelFijo").val().toUpperCase().trim(),
                $("#Txt_TelCelular").val().toUpperCase().trim(),
                $("#CboProvincia").val().toUpperCase().trim(),
                $("#CboDistrito").val().toUpperCase().trim(),
                $("#Txt_Direccion").val().toUpperCase().trim(),
                $("#Txt_Notas").val().toUpperCase().trim(),
                '1',
                '<?php echo $_SESSION['User']; ?>',
                $('#Txt_Codigo').val()
            )
            $("#PreguntaCliente").html("");
            $("#Modal_Pregunta").modal("hide");
        }
    });

    function Obtener_Datos_cliente(act, dni, condicion) {
        console.log(act);
        console.log(dni);
        console.log(condicion);
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
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
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $.each(json, function(i, item) {
                    if (condicion == 1) {
                        $("#PreguntaCliente").append('Exite un cliente de nombre ' + json[i].Cliente_Nombre + ' ' + json[i].Cliente_Apellido + ' y numero de DNI : ' + json[i].Cliente_Dni + ' en el historico de clientes, actualmente se encuentra eliminado desea restaurarlo ?');
                        console.log(json[i].Cliente_Id);
                        $('#Txt_Codigo').val(json[i].Cliente_Id);
                    } else if (condicion == 2) {
                        console.log(json[i].Cliente_Nombre);
                        $('#Txt_Codigo').val(json[i].Cliente_Id);
                        console.log(json[i].Cliente_Id);
                        console.log($('#Txt_Codigo').val());
                        $('#Txt_Nombre').val(json[i].Cliente_Nombre);
                        $('#Txt_Apellido').val(json[i].Cliente_Apellido);
                        $('#Txt_Dni').val(json[i].Cliente_Dni);
                        $('#Txt_Email').val(json[i].Cliente_Email);
                        $('#Txt_TelFijo').val(json[i].Cliente_TelefonoFijo);
                        $('#Txt_TelCelular').val(json[i].Cliente_TelefonoCel);
                        $('#CboProvincia').val(json[i].Cliente_Provincia)
                        Obtener_Distrito('MostrarDistrito', $('#CboProvincia').val());
                        $("#CboDistrito option[value=" + json[i].Cliente_Distrito + "]").attr("selected", true);
                        $('#Txt_Direccion').val(json[i].Cliente_Direccion);
                        $('#Txt_Notas').val(json[i].Cliente_Observacion);
                    }
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

    $(function() {
        ActivarBotones();
        Obtener_Nombre();
        Obtener_Provincia('MostrarProvincia');
        Obtener_Distrito('MostrarDistrito', 1)
        $("#CboProvincia").change(function() {
            Obtener_Distrito('MostrarDistrito', $('#CboProvincia').val());
        });
    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>