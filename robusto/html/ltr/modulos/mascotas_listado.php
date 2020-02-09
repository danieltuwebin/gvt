<?php

require_once("../../config/Cado.php");

$Condicion = $_GET["Cond"];
$IdCliente = $_GET["Id"];

//$myArray = array();
$sql = "CALL SP_Obtener_TblMascota_All_x_Condicion('$Condicion','$IdCliente')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>