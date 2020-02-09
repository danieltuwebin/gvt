<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "GrabarUm") {

    $Nombrecorto = $_POST['Nombrecorto'];
    $Nombrelargo = $_POST['Nombrelargo'];    
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblUM_NuevoUM('$Nombrecorto', '$Nombrelargo', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "MostrarUmxId") {

    $Id = $_POST['Id'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblUM_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarUm") {

    $Nombrecorto = $_POST['Nombrecorto'];
    $Nombrelargo = $_POST['Nombrelargo'];    
    $Usuario = $_POST['Usuario'];
    $Codigo = $_POST['Codigo'];

    $sql = "CALL SP_Actualizar_TblUM('$Codigo','$Nombrecorto','$Nombrelargo', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "EliminarUm") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblUM('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}

?>

