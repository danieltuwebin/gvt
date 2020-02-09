<?php
// start a session
session_start();
require_once("../../config/Cado.php");


if ($_POST['action'] == "GrabarRaza") {

    $Especie = $_POST['Especie'];
    $Nombre = $_POST['Nombre'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblRaza_NuevoRaza('$Especie', '$Nombre', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "MostrarRazaxId") {

    $Id = $_POST['Id'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblRaza_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarRaza") {

    $Nombre = $_POST['Nombre'];
    $Especie = $_POST['Especie'];
    $Usuario = $_POST['Usuario']; 
    $Codigo = $_POST['Codigo'];

    $sql = "CALL SP_Actualizar_TblRaza('$Codigo', '$Especie', '$Nombre', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "EliminarRaza") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblRaza('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}

?>

