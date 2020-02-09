<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "GrabarTipoProducto") {

    $Nombre = $_POST['Nombre'];
    $Notas = $_POST['Notas'];    
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblTipoProducto_NuevoTipoProducto('$Nombre', '$Notas', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "MostrarTipoProductoxId") {

    $Id = $_POST['Id'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_tblTipoProducto_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarTipoProducto") {

    $Nombre = $_POST['Nombre'];
    $Notas = $_POST['Notas'];    
    $Usuario = $_POST['Usuario'];
    $Codigo = $_POST['Codigo'];

    $sql = "CALL SP_Actualizar_tblTipoProducto('$Codigo','$Nombre','$Notas', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "EliminarTipoProducto") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_tblTipoProducto('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}

?>

