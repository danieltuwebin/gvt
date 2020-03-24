<?php

require_once("../../config/Cado.php");

$sql = "CALL SP_Obtener_Datos_Agenda_Not_All()";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    $myArray[] = $row;
    //$arreglo["data"][] = $row;
}
echo json_encode($myArray);

?>