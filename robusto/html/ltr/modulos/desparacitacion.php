<?php

require_once("../../config/Cado.php");

if ($_POST['action'] == "ObtenerDatosDesparacitacionxId") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblDesparacitacion_All_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarDesparacitacion") {
   
    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $Iddesparacitacion = $_POST['Iddesparacitacion'];
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
    $sql = "CALL SP_Registrar_TblDesparacitacion('$IdTipoRegistro','$Iddesparacitacion','$Fecha','$IdProducto','$Precio','$IdMascota','$Observacion','$Cita','$Usuario','$VentaTipo','$Cantidad','$IdAlmacen')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarDesparacitacion") {

    $IdDesparacitacion = $_POST['IdDesparacitacion'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblDesparacitacion('$IdDesparacitacion', '$Fecha', '$IdProducto', '$Precio', '$IdMascota','$Observacion','$Cita','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
    //echo $sql;
}


if ($_POST['action'] == "EliminarDesparacitacion") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblDesparacitacion('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


?>