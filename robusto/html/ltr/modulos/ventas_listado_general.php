<?php

require_once("../../config/Cado.php");

//$Condicion = $_GET["Cond"];
$Condicion = $_GET["Cond"];
$IdVenta = $_GET["Id"];

//$myArray = array();
$sql = "CALL SP_Obtener_TblVenta_All_x_Condicion('$Condicion','$IdVenta')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>