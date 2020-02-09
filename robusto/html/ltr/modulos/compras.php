<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "MostrarSede") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblSede_all()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "MostrarProductoxNombre") {

    $Nombre = $_POST['Nombre'];
    $Sede = $_POST['Sede'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblProducto_x_Nombre('$Nombre','$Sede')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarCompraTmp") {
   
    $IdCompra = $_POST['IdCompra'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $Cantidad = $_POST['Cantidad'];
    $Usuario = $_POST['Usuario'];
    $Sede = $_POST['Sede'];

    $myArray = array();
    $sql = "CALL SP_Registrar_TblCompraDetalletmp_tblCompratmp('$IdCompra','$IdProducto','$Precio','$Cantidad','$Usuario','$Sede')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "GrabarCompra") {
   
    $Condicion = $_POST['Condicion'];
    $Fecha = $_POST['Fecha'];
    $Guia = $_POST['Guia'];
    $Proveedor = $_POST['Proveedor'];
    $Observacion = $_POST['Observacion'];
    $Usuario = $_POST['Usuario'];
    $Sede = $_POST['Sede'];
    $Idcompra = $_POST['Idcompra'];

    $myArray = array();
    $sql = "CALL SP_Registrar_TblCompra_TblCompraDetalle('$Condicion','$Fecha','$Guia','$Proveedor','$Observacion','$Usuario','$Sede','$Idcompra')";
    $oCado = new Cado();
/*     $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray); */
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}


if ($_POST['action'] == "EliminarCompra") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblCompraDetalle_tmp('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


if ($_POST['action'] == "CancelarCompra") {

    $Condicion = $_POST['Condicion'];
    $IdCompraTmp = $_POST['IdCompraTmp'];

    $sql = "CALL SP_Eliminar_TblCompraDetalletmp_tblCompratmp('$Condicion','$IdCompraTmp')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}


if ($_POST['action'] == "MostrarCompraxId") {

    $Condicion = $_POST["Condicion"];
    $Id = $_POST["Id"];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblCompra_All_x_Condicion('$Condicion','$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarCompra") {

    $Codigo = $_POST['Codigo'];
    $Fecha = $_POST['Fecha'];
    $Guia = $_POST['Guia'];     
    $Proveedor = $_POST['Proveedor'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblCompra('$Codigo', '$Fecha', '$Guia', '$Proveedor', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


if ($_POST['action'] == "EliminarCompra_tblCompra") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblCompra('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


if ($_POST['action'] == "tablaResumenCompras") {
    $Id = $_POST['Id'];
    $myArray = array();
    $sql = "CALL SP_Obtener_TblCompraDetalle_x_IdCompra('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}






?>

