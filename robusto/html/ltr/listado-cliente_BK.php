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
    <title>Listado Cliente - Sistema Vet. Tuewebin</title>
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
                            <li class="active">
                                <a href="listado-cliente.php" class="menu-item">Listado Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-reddit"></i>
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
                            <li>
                                <a href="cliente-nuevo.php" class="menu-item">Nuevo Cliente</a>
                            </li>
                            <li class="active">
                                <a href="listado-cliente.php" class="menu-item">Listado Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-reddit"></i>
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
                            <li class="active">
                                <a href="listado-cliente.php" class="menu-item">Listado Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#"><i class="icon-reddit"></i>
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
    <div class="modal fade text-xs-left" id="Modal_ListadoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel17">Edición de Cliente</h4>
                </div>
                <div class="modal-body">
                    <form class="form" id="FormularioCliente">
                        <div class="form-body">
                            <h5>Datos de Cliente</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Txt_Nombre">Nombres</label>
                                        <input type="text" style="text-transform:uppercase;" id="Txt_Nombre" class="form-control" placeholder="Nombres" name="Txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)">
                                        <input type="hidden" id="Txt_Codigo" name="Txt_Codigo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Txt_Apellido">Apellidos</label>
                                        <input type="text" style="text-transform:uppercase;" id="Txt_Apellido" class="form-control" placeholder="Apellidos" name="Txt_Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)">
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
                                        <input type="text" style="text-transform:uppercase;" id="Txt_Email" class="form-control" placeholder="E-mail" name="Txt_Email" onkeyup="javascript:this.value=this.value.toUpperCase();">
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
                            <hr>
                            <h5>Dirección</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput5">CboProvincia</label>
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
                                <input type="text" style="text-transform:uppercase;" id="Txt_Direccion" class="form-control" placeholder="Dirección" name="Txt_Direccion" onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                            <div class="form-group">
                                <label for="Txt_Notas">Notas</label>
                                <textarea id="Txt_Notas" style="text-transform:uppercase;" rows="5" class="form-control" name="Txt_Notas" placeholder="Notas Adicionales" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">Cerrar</button>
                    <button id="BtnActualizarCliente" type="button" class="btn btn-success mr-1"><i class="icon-edit2"></i>Grabar Edición</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-3 col-xs-12 mb-1">
                    <h2 class="content-header-title">Listado de Clientes</h2>
                </div>
                <?php

                if ($CondicionMnu == 1 || $CondicionMnu == 2) {
                    ?>
                    <div class="content-header-left col-md-3 col-xs-12 mb-1">
                        <button id="BtnNuevo" type="button" class="btn btn-success" data-toggle="tooltip" data-original-title="Hover Triggered"><i class="icon-user2"></i> Nuevo cliente</button>
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
                                <h4 class="card-title">Clientes</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <!-- <li><a data-action="close"><i class="icon-cross2"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <br>


                            <div class="card-block">

                                <div class="card-body collapse in">

                                    <div class="table-responsive">
                                        <!-- <table id="TblClientes" class="table table-bordered table-striped"> -->
                                        <table id="TblClientes" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>DNI</th>
                                                    <th>Celular</th>
                                                    <th>Email</th>
                                                    <th>Provincia</th>
                                                    <th>Distrito</th>
                                                    <th>Dirección</th>
                                                    <th>Administrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>

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


    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

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

</body>


<!-- css del ejemplo -->
<style type="text/css">
    .linea_buttons {
        display: inline-block;
    }
</style>

<!-- BEGIN. EVENTOS SCRIPT-->
<script type="text/javascript">
    var Condicion;
    /* $('#TblClientes tbody').on('click', 'button.form', function () //Al hacer click sobre el boton button.form de la linea de arriba
        {
            console.log('FUNCION');
           var data_form = TblClientes.row($(this).parents("tr")).data();
             prueba="2"; //Pongo la variable a dos para saber que he pasado por aqui
            //Oculto las dos tablas, cargo y muestro el div
            $('#tbl_Historias').hide(400);//Oculto las dos tablas
            $('#tbl_Tareas').hide(400);
             
                $('#formulario').load('formulario.html'); //Cargo la web en el div
                $('#formulario').show(100);//Muesto el div formulario

                //console.log('')
                alert('dt');
 
    } );
 */

    /* $('td').click(function(){
        var colIndex = $(this).parent().children().index($(this));
        var rowIndex = $(this).parent().parent().children().index($(this).parent());
        alert('Row: ' + rowIndex + ', Column: ' + colIndex);
    }); */



    /*     $('#menu li a').on('click', function(){
        $('li.active').removeClass('active');
        $(this).addClass('active');
        //alert('hola2');
    }); */


    function Obtener_Tablas_Clientes(act) {
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
                //$('#txt_ven_numcor').val('Cargando...');
            },
            success: function(data) {
                console.log(data);
                var json = JSON.parse(data);
                $.each(json, function(i, item) {
                    $("#TablaClientes").append('<tr>' +
                        '<td class="text-truncate">' + json[i].Cliente_Id + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_NombreCompleto + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Dni + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_TelefonoCel + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Email + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Provincia + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Distrito + '</td>' +
                        '<td class="text-truncate">' + json[i].Cliente_Direccion + '</td>' +
                        '<td class="text-truncate"> <button type="button" class="btn btn-success btn-sm">' + 'Ver Detalle' + '</button> </td>' + '</tr>');
                });
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }

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



    $("#btnLimpiar").click(function() {
        limpiaForm($("#FormularioCliente"));
    });

    $("#test").click(function() {
        alert('test');
    });

    $("#BtnNuevo").click(function() {
        var url = "cliente-nuevo.php";
        $(location).attr('href', url);
    });

    $('#Salir').click(function() {
        //alert('Sign new href executed.');
        Cerrar_Sesion("salir");
    });


    $("#btngrabar").click(function() {

        Grabar_Cliente("GrabarCliente",
            $("#Txt_Nombre").val(),
            $("#Txt_Apellido").val(),
            $("#Txt_Email").val(),
            $("#Txt_Dni").val(),
            $("#Txt_TelFijo").val(),
            $("#Txt_TelCelular").val(),
            $("#CboProvincia").val(),
            $("#CboDistrito").val(),
            $("#Txt_Direccion").val(),
            $("#Txt_Notas").val(),
            "ADMIN SISTEMA"
        )


    });




    function Obtener_Nombre() {
        $("#NombreUsuario").append('<?php echo $_SESSION['User']; ?>');
    }


    //var table = $('#TblClientes').DataTable();


    var obtener_data_editar = function(tbody, table) {
        console.log('estoy listo');
        $(tbody).on("click", "button.editar", function() {
            var data = table.row($(this).parents("tr")).data();
            console.log(data);

            if (Condicion == 1) {
                console.log(data.Cliente_Id);
                Obtener_Provincia('MostrarProvincia');
                Obtener_Datos_cliente('MostrarClientexId',data.Cliente_Id)
                $("#Modal_ListadoCliente").modal("show");
                

            } else {

                alert('El perfil de usurio no esta habilitado para opción');

            }

        })
    }

    /*     var obtener_data_editar = function(tbody, table) {
            console.log('estoy listo');
            $(tbody).on("click", "button.editar", function() {
                var data = table.row($(this).parents("tr")).data();
                console.log(data);
                <?php
                if ($CondicionMnu == 1 || $CondicionMnu == 2) {
                    ?>
                    $("#Modal_ListadoCliente").modal("show");
                <?php
                } else {
                    ?>
                    alert('El perfil de usurio no esta habilitado para opción');
                <?php
                }
                ?>
            })
        }  */

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

    function Obtener_Datos_cliente(act, id) {
        $.ajax({
            type: "POST",
            url: "modulos/clientes.php",
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
                console.log(data);
                var json = JSON.parse(data);
                console.log(json);
                $.each(json, function(i, item) {
                    
                        $('#Txt_Codigo').val(json[i].Cliente_Id);
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


    $('#BtnActualizarCliente').click(function() {
        var Id = ValidaCamposObligatorios(
            $('#Txt_Nombre').val().trim(),
            $('#Txt_Apellido').val().trim(),
            $('#Txt_TelCelular').val().trim(),
            $('#Txt_Direccion').val().trim());
        if (Id == 1) {
            Editar_Cliente("EditarCliente",
                $("#Txt_Nombre").val(),
                $("#Txt_Apellido").val(),
                $("#Txt_Email").val(),
                $("#Txt_TelFijo").val(),
                $("#Txt_TelCelular").val(),
                $("#CboProvincia").val(),
                $("#CboDistrito").val(),
                $("#Txt_Direccion").val(),
                $("#Txt_Notas").val(),
                '1',
                '<?php echo $_SESSION['User']; ?>',
                $('#Txt_Codigo').val()
            )
            $("#PreguntaCliente").html("");
            
        }
    });


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
                    /*
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Se activo al cliente de la data historica</strong>' +
                        '</div>')
                    */
                    $("#Modal_ListadoCliente").modal("hide");
                    alert('Cliente Editado correctamente');
                    
                } else {
                    /*
                    $("#Resultado_Grabacion").html('<div class="alert alert-info alert-dismissible fade in mb-2" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '<strong>Lo sentimos ocurrio un error en el proceso de grabación</strong>' +
                        '</div>')
                    */
                    alert('Lo sentimos ocurrio un error en el proceso de edición');
                }
            },
            complete: function() {
                //alert('ok2');
            }
        });
    }    


    llenar_tabla(){}
    

    $(function() {

        //alert('hola');
        Obtener_Nombre();
        //Obtener_Tablas_Clientes('tablaClientes');

        Obtener_Condicion();

        var table = $('#TblClientes').DataTable({
            "ajax": {
                "method": "POST",
                "url": "modulos/clientes_listado.php"
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

            "columns": [{
                    "data": "Cliente_Id"
                    //"width": "80%"
                },
                {
                    "data": "Cliente_NombreCompleto"
                },
                {
                    "data": "Cliente_Dni"
                },
                {
                    "data": "Cliente_TelefonoCel"
                },
                {
                    "data": "Cliente_Email"
                },
                {
                    "data": "Cliente_Provincia"
                },
                {
                    "data": "Cliente_Distrito"
                },
                {
                    "data": "Cliente_Direccion"
                },
                {
                    "defaultContent":
                        //"<div class='btn-group'><button id='editar' type='button' class='editar btn btn-warning btn-xs'><i class='icon-pencil3'></i></button> <button id='BtnNuevo' type='button' class='btn btn-danger btn-xs'><i class='icon-trash-o'></i></button> <button id='BtnNuevo' type='button' class='btn btn-danger btn-xs'><i class='icon-trash-o'></i></button></div>"
                        "<div class='form-group'><div class='btn-group btn-group-sm' role='group'>  <button id='editar' type='button' class='editar btn btn-warning'><i class='icon-pencil3'></i></button>  <button id='eliminar' type='button' class='eliminar btn btn-danger'><i class='icon-trash-o'></i></button>    <button id='mascota' type='button' class='nueva_mascota btn btn-success'><i class='icon-reddit'></i></button></div></div>"
                    //"<button type='button' class='editar btn btn-warning'><i class='icon-pencil3'></i></button>  <button id='eliminar' type='button' class='eliminar btn btn-danger'><i class='icon-trash-o'></i></button>    <button id='mascota' type='button' class='nueva_mascota btn btn-success'><i class='icon-reddit'></i></button>"
                    //"<div class='form-group'><div class='btn-group btn-group-sm' role='group'><button id='editar' type='button' class='editar btn btn-warning'><i class='icon-pencil3'></i></button> <button id='BtnNuevo' type='button' class='btn btn-danger'><i class='icon-trash-o'></i></button> <button id='BtnNuevo' type='button' class='btn btn-danger'><i class='icon-trash-o'></i></button></div></div>"
                }
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });




        obtener_data_editar("#TblClientes tbody", table);



        $('#TblClientes tbody').on('click', 'tr', function() {
            //var data = table.row(this).data();
            //alert( 'You clicked on '+data[0]+'\'s row' );
            //--console.log(data);
            //console.log(data.Cliente_Id);

            //alert(data.Cliente_Id);
            //--console.log(table.row(this).data());

            //var rows = table.rows( 0 ).data();

            //alert( 'Pupil name in the first row is: '+ rows[0].Cliente_Id() );


            //var data = table.row( $(this).parents('tr') ).data();
            //alert( data[0] +"'s salary is: "+ data[ 5 ] );
            //alert(data);



        });

    });
</script>
<!-- END. EVENTOS SCRIPT-->

</html>