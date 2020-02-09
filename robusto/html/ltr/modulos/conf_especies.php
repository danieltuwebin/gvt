<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "GrabarEspecie") {

    $Nombre = $_POST['Nombre'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblEspecie_NuevoEspecie('$Nombre', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "MostrarEspeciexId") {

    $Id = $_POST['Id'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblEspecie_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarEspecie") {

    $Nombre = $_POST['Nombre'];
    $Usuario = $_POST['Usuario'];
    $Codigo = $_POST['Codigo'];

    $sql = "CALL SP_Actualizar_TblEspecie('$Codigo','$Nombre', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "EliminarEspecie") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblEspecie('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}

?>

