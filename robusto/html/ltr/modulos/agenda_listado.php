<?php

require_once("../../config/Cado.php");

$Condicion = $_GET["Cond"];
//$IdMascota = $_GET["Id"];

//$myArray = array();
$sql = "CALL SP_Obtener_Datos_Agenda_All('$Condicion')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>