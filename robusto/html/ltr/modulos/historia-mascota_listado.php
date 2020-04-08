<?php

require_once("../../config/Cado.php");

//$Condicion = $_GET["Cond"];
$IdMascota = $_GET["Id"];

//$myArray = array();
$sql = "CALL SP_Obtener_Servicios_Realizados_x_Mascota('$IdMascota')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>