<?php

require_once("../../config/Cado.php");

if ($_POST['action'] == "ObtenerDatosVacunasxId") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblVacunas_All_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarVacuna") {
   
    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $Idvacuna = $_POST['Idvacuna'];
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
    $sql = "CALL SP_Registrar_TblVacunas('$IdTipoRegistro','$Idvacuna','$Fecha','$IdProducto','$Precio','$IdMascota','$Observacion','$Cita','$Usuario','$VentaTipo','$Cantidad','$IdAlmacen')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarVacuna") {

    $IdVacuna = $_POST['IdVacuna'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblVacunas('$IdVacuna', '$Fecha', '$IdProducto', '$Precio', '$IdMascota','$Observacion','$Cita','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}


if ($_POST['action'] == "EliminarVacuna") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblVacunas('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


?>