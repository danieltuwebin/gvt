<?php

require_once("../../config/Cado.php");


if ($_POST['action'] == "MostrarTotales") {
    $sql = "CALL SP_Obtener_Totales_Dashboard()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $tcli = $dt['TotalClientes'];
    $tmas = $dt['TotalMascotas'];
    $tate = $dt['TotalAtenciones'];
    $tdia = $dt['VentasDia'];
    $tsem = $dt['VentasSem'];
    $tmes = $dt['VentasMes'];

    $data['tclientes'] = $tcli;
    $data['tmascotas'] = $tmas;
    $data['tatenciones'] = $tate;
    $data['tdia'] = $tdia;
    $data['tsemana'] = $tsem;
    $data['tmes'] = $tmes;

    echo json_encode($data);
    /*
    $Totales = array();
    $Totales[] = array('tclientes' => $v1,'tmascotas' => $v2,'tatencion' => $v3)
    $json_string = json_encode($Totales);
    echo $json_string;
    */


    //echo $v1;
}


if ($_POST['action'] == "tablaResumenAtenciones") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblAtencion_Agendados()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}



if ($_POST['action'] == "tablaResumenBanios") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblBanios_Agendados()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "tablaResumenVacunas") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblVacunas_Agendados()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "tablaResumenDesparacitacion") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblDesparacitacion_Agendados()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarSede") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblSede_all()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

