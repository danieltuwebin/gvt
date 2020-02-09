<?php

require_once("../../config/Cado.php");

//$myArray = array();
$sql = "CALL SP_Obtener_TblRaza_VariosCmps_all()";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>