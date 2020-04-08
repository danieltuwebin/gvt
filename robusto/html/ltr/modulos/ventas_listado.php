<?php

require_once("../../config/Cado.php");

//$Condicion = $_GET["Cond"];
$IdVenta = $_GET["Id"];
//$Precio = $_GET["Precio"];

//$myArray = array();
//$sql = "CALL SP_Obtener_TblVentaDetalle_tmp_x_Id('$IdVenta','$Precio')";
$sql = "CALL SP_Obtener_TblVentaDetalle_tmp_x_Id('$IdVenta')";
$oCado = new Cado();
$rst = $oCado->ejecute_sql($sql);
while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {

    //$myArray[] = $row;
    $arreglo["data"][] = $row;
}
echo json_encode($arreglo);

?>