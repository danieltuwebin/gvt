<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "GrabarMovimiento") {

    $Fecha = $_POST['Fecha'];
    $Almacen = $_POST['Almacen'];
    $SedeNueva = $_POST['SedeNueva'];    
    $Cantidad = $_POST['Cantidad'];    
    $Observacion = $_POST['Observacion'];
    $UserGrabacion = $_POST['UserGrabacion']; 
    $Producto = $_POST['Producto']; 
    $SedeAnterior = $_POST['SedeAnterior'];    
    
    

    $sql = "CALL SP_Registrar_TblMovimiento('$Fecha','$Almacen','$SedeNueva', '$Cantidad', '$Observacion','$UserGrabacion','$Producto','$SedeAnterior')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}


?>

