<?php

require_once("../../config/Cado.php");

if ($_POST['action'] == "ObtenerDatosBaniosxId") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblBanio_All_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarBanio") {
   
    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $Idbanio = $_POST['Idbanio'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];
    $VentaTipo = $_POST['VentaTipo'];
    $Cantidad = $_POST['Cantidad'];
    $IdAlmacen = $_POST['IdAlmacen'];

    $myArray = array();
    $sql = "CALL SP_Registrar_TblBanio('$IdTipoRegistro','$Idbanio','$Fecha','$IdProducto','$Precio','$IdMascota','$Observacion','$Cita','$Usuario','$VentaTipo','$Cantidad','$IdAlmacen')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarBanio") {

    $IdBanio = $_POST['IdBanio'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblBanio('$IdBanio', '$Fecha', '$IdProducto', '$Precio', '$IdMascota','$Observacion','$Cita','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}


if ($_POST['action'] == "EliminarBanio") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblBanio('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


?>