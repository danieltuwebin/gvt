<?php

require_once("../../config/Cado.php");

/*
if ($_POST['action'] == "ObtenerDatosVacunasxId") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblVacunas_All_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}
*/

if ($_POST['action'] == "GrabarAtencion") {
   
    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $IdAtencion = $_POST['IdAtencion'];
    $Fecha = $_POST['Fecha'];
    $IdMascota = $_POST['IdMascota'];
    $Sintomas = $_POST['Sintomas'];
    $Atencion_T = $_POST['Atencion_T'];
    $Atencion_FC = $_POST['Atencion_FC'];
    $Atencion_FR = $_POST['Atencion_FR'];
    $Atencion_sc_Des = $_POST['Atencion_sc_Des'];
    $Atencion_sc_Muc = $_POST['Atencion_sc_Muc'];
    $Atencion_sc_TLLC = $_POST['Atencion_sc_TLLC'];
    $Atencion_sc_Vom = $_POST['Atencion_sc_Vom'];
    $Atencion_sc_Dia = $_POST['Atencion_sc_Dia'];
    $Atencion_sc_Gan = $_POST['Atencion_sc_Gan'];
    $Atencion_sc_Pes = $_POST['Atencion_sc_Pes'];
    $Atencion_dx_Pre = $_POST['Atencion_dx_Pre'];
    $Atencion_dx_Def = $_POST['Atencion_dx_Def'];
    $Atencion_dx_Sol = $_POST['Atencion_dx_Sol'];
    $Atencion_tr_Des = $_POST['Atencion_tr_Des'];
    $Atencion_tr_Obs = $_POST['Atencion_tr_Obs'];
    $Atencion_tr_Pre = $_POST['Atencion_tr_Pre'];
    $Pint_Documento = $_POST['Pint_Documento'];
    $Pint_Cita = $_POST['Pint_Cita'];
    $Pint_CitaEstado = $_POST['Pint_CitaEstado'];
    $Pint_Estado = $_POST['Pint_Estado'];
    $Pvchr_Usuario = $_POST['Pvchr_Usuario'];
    $Pint_VentaTipo = $_POST['Pint_VentaTipo'];
    $Pint_IdAlmacen = $_POST['Pint_IdAlmacen'];    

    $myArray = array();
    $sql = "CALL SP_Registrar_TblAtencion('$IdTipoRegistro','$IdAtencion','$Fecha','$IdMascota','$Sintomas','$Atencion_T','$Atencion_FC','$Atencion_FR',
    '$Atencion_sc_Des','$Atencion_sc_Muc','$Atencion_sc_TLLC','$Atencion_sc_Vom','$Atencion_sc_Dia','$Atencion_sc_Gan','$Atencion_sc_Pes','$Atencion_dx_Pre',
    '$Atencion_dx_Def','$Atencion_dx_Sol','$Atencion_tr_Des','$Atencion_tr_Obs','$Atencion_tr_Pre','$Pint_Documento','$Pint_Cita','$Pint_CitaEstado',
    '$Pint_Estado','$Pvchr_Usuario','$Pint_VentaTipo','$Pint_IdAlmacen')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarVacuna") {

    $IdVacuna = $_POST['IdVacuna'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblVacunas('$IdVacuna', '$Fecha', '$IdProducto', '$Precio', '$IdMascota','$Observacion','$Cita','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}


if ($_POST['action'] == "EliminarVacuna") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblVacunas('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


?>