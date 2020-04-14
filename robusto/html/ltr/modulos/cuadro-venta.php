<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "GrabarCuadroVenta") {

    $Fecha = $_POST['Fecha'];
    $Movimiento = $_POST['Movimiento'];
    $Monto = $_POST['Monto'];    
    $Documento = $_POST['Documento'];    
    $Notas = $_POST['Notas'];
    $Sede = $_POST['Sede'];    
    $Usuario = $_POST['Usuario'];       

    $sql = "CALL SP_Registrar_TblIngresosEgresos('$Fecha', '$Movimiento', '$Monto', '$Documento', '$Notas','$Sede','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

if ($_POST['action'] == "EliminarCuadroVenta") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblIngresosEgresos('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}

?>

