<?php

require_once("../../config/Cado.php");

$fi = $_GET["fi"];
$ff = $_GET["ff"];
$sede = $_GET["s"];

//$myArray = array();
$sql = "CALL SP_Obtener_tblIngresosEgresos_All('$fi','$ff','$sede')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>