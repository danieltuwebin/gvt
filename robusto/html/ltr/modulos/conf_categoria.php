<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "GrabarCategoria") {

    $Tipoproducto = $_POST['Tipoproducto'];
    $Nombre = $_POST['Nombre'];
    $Notas = $_POST['Notas'];    
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblCategoria_NuevoCategoria('$Tipoproducto', '$Nombre', '$Notas', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "MostrarCategoriaxId") {

    $Id = $_POST['Id'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblCategoria_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarCategoria") {

    $Tipoproducto = $_POST['Tipoproducto'];
    $Nombre = $_POST['Nombre'];
    $Notas = $_POST['Notas'];    
    $Usuario = $_POST['Usuario'];
    $Codigo = $_POST['Codigo'];

    $sql = "CALL SP_Actualizar_TblCategoria('$Codigo', '$Tipoproducto', '$Nombre', '$Notas', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "EliminarCategoria") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblCategoria('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}

?>

