<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Inicio - Sistema Vet. Tuewebin</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
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
    <?php 
    require_once("includes_html/main-menu.php"); 
    ?>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-3 col-xs-12 mb-1">
            <h2 class="content-header-title">Nuevo Pago</h2>
          </div>

          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a>
                </li>
                <li class="breadcrumb-item active">Basic Tables
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">


<div class="row">



    <div class="col-xs-12">

        <div class="card">
            <div class="card-header">
                <ul class="list-inline mb-0">
                    <li><h4 class="card-title">Atenciones Realizados &nbsp;&nbsp;&nbsp;&nbsp;</h4></li>
                </ul>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="card-body collapse in">
                
                <div class="col-md-12">
                    <br>
                    <form class="form-inline">
                        <div class="form-group col-md-4">
                            <div class="form-group">
                                <label for="projectinput6">Atención :</label>
                            </div>
                            <div class="form-group">         
                                <select id="projectinput6" name="budget" class="form-control">
                                    <option value="0" selected="" disabled="">Budget</option>
                                    <option value="less than 5000$">less than 5000$</option>
                                    <option value="5000$ - 10000$">5000$ - 10000efeffgegegg$</option>
                                    <option value="10000$ - 20000$">10000$ - 20000$</option>
                                    <option value="more than 20000$">more than 20000$</option>
                                </select>
                            </div>
                        </div>          
                        <div class="form-group col-md-2">
                            <label for="projectinput6">Monto</label>
                            <input type="text" id="projectinput1" class="form-control " placeholder="First Name" name="fname" size="7">
                        </div>
                        <div class="form-group col-md-6">
                            <button type="button" class="btn btn-info"><i class="icon-plus-circle"></i>&nbsp;&nbsp;Registrar Atención</button>
                        </div>

                        <div class="form-group col-md-12">
                           <br>
                        </div>

                    </form>
                </div>                  


                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@TwBootstrap</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="card">
            <div class="card-header">

                <ul class="list-inline mb-0">
                    <li><h4 class="card-title">Productos e insumos comprados &nbsp;&nbsp;&nbsp;&nbsp;</h4></li>
                </ul>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="card-body collapse in">

                <div class="col-md-12">
                    <br>
                    <form class="form-inline">
                        <div class="form-group col-md-4">
                            <div class="form-group">
                                <label for="projectinput6">Atención :</label>
                            </div>
                            <div class="form-group">         
                                <select id="projectinput6" name="budget" class="form-control">
                                    <option value="0" selected="" disabled="">Budget</option>
                                    <option value="less than 5000$">less than 5000$</option>
                                    <option value="5000$ - 10000$">5000$ - 10000efeffgegegg$</option>
                                    <option value="10000$ - 20000$">10000$ - 20000$</option>
                                    <option value="more than 20000$">more than 20000$</option>
                                </select>
                            </div>
                        </div>          
                        <div class="form-group col-md-2">
                            <label for="projectinput6">Monto</label>
                            <input type="text" id="projectinput1" class="form-control " placeholder="First Name" name="fname" size="7">
                        </div>
                        <div class="form-group col-md-6">
                            <button type="button" class="btn btn-success"><i class="icon-plus-circle"></i>&nbsp;&nbsp;Nuevo pago</button>
                        </div>

                        <div class="form-group col-md-12">
                           <br>
                        </div>

                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@TwBootstrap</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
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
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
