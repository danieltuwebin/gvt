<?php

require_once("../../config/Cado.php");

if ($_POST['action'] == "ObtenerDatosBaniosxId") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblBanio_All_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarBanio") {
   
    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $Idbanio = $_POST['Idbanio'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];
    $VentaTipo = $_POST['VentaTipo'];
    $Cantidad = $_POST['Cantidad'];
    $IdAlmacen = $_POST['IdAlmacen'];

    $myArray = array();
    $sql = "CALL SP_Registrar_TblBanio('$IdTipoRegistro','$Idbanio','$Fecha','$IdProducto','$Precio','$IdMascota','$Observacion','$Cita','$Usuario','$VentaTipo','$Cantidad','$IdAlmacen')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarBanio") {

    $IdBanio = $_POST['IdBanio'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    $Precio = $_POST['Precio'];
    $IdMascota = $_POST['IdMascota'];
    $Observacion = $_POST['Observacion'];
    $Cita = $_POST['Cita'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblBanio('$IdBanio', '$Fecha', '$IdProducto', '$Precio', '$IdMascota','$Observacion','$Cita','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}


if ($_POST['action'] == "EliminarBanio") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblBanio('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


if ($_POST['action'] == "GrabarEvaluacionMedica") {
   
    $BanioId = $_POST['BanioId'];
    $BanioIdtmp = $_POST['BanioIdtmp'];
    $Respuesta_em = $_POST['Respuesta_em'];
    $ChkPulgas = $_POST['ChkPulgas'];
    $ChkPiojos = $_POST['ChkPiojos'];
    $ChkGarrapatas = $_POST['ChkGarrapatas'];
    $ChkGusanos = $_POST['ChkGusanos'];
    $Txtectoparasitos = strtoupper ($_POST['Txtectoparasitos']);
    $Respuesta_ojos = $_POST['Respuesta_ojos'];
    $Respuesta_nariz = $_POST['Respuesta_nariz'];
    $Respuesta_cavidad = $_POST['Respuesta_cavidad'];
    $Respuesta_dientes = $_POST['Respuesta_dientes'];
    $Respuesta_piel = $_POST['Respuesta_piel'];
    $Respuesta_cojinetes = $_POST['Respuesta_cojinetes'];
    $Respuesta_unias = $_POST['Respuesta_unias'];
    $Respuesta_oidos = $_POST['Respuesta_oidos'];
    $Respuesta_genitales = $_POST['Respuesta_genitales'];
    $Respuesta_glandulas = $_POST['Respuesta_glandulas'];
    $Respuesta_extremidades = $_POST['Respuesta_extremidades'];
    $Respuesta_nh_estado = $_POST['Respuesta_nh_estado'];
    $Respuesta_nh_pelaje = $_POST['Respuesta_nh_pelaje'];
    $Respuesta_nh_sedante = $_POST['Respuesta_nh_sedante'];
    $Respuesta_nh_puntaje = $_POST['Respuesta_nh_puntaje'];
    $Txt_Recomendacion = strtoupper ($_POST['Txt_Recomendacion']);
    $Usuario = $_POST['Usuario'];

    $myArray = array();
    $sql = "CALL SP_Registrar_TblEvaluacionMedica('$BanioId','$BanioIdtmp','$Respuesta_em','$ChkPulgas','$ChkPiojos','$ChkGarrapatas',
                                       '$ChkGusanos','$Txtectoparasitos','$Respuesta_ojos','$Respuesta_nariz','$Respuesta_cavidad',
                                       '$Respuesta_dientes','$Respuesta_piel','$Respuesta_cojinetes','$Respuesta_unias','$Respuesta_oidos',
                                       '$Respuesta_genitales','$Respuesta_glandulas','$Respuesta_extremidades','$Respuesta_nh_estado',
                                       '$Respuesta_nh_pelaje','$Respuesta_nh_sedante','$Respuesta_nh_puntaje','$Txt_Recomendacion','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    echo $rst;
}


if ($_POST['action'] == "EditarEvaluacionMedica") {

    $IdBanio = $_POST['IdBanio'];
    $IdBanioTmp = $_POST['IdBanioTmp'];
    $sql = "CALL SP_Actualizar_IdBanio_TblEvaluacionMedica('$IdBanio', '$IdBanioTmp')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}



if ($_POST['action'] == "ObtenerDatosEvaluacionMedicaxId") {
   
    $Id = $_POST['Id'];
    $myArray = array();
    $sql = "CALL SP_Obtener_TblEvaluacionMedica_All_x_idBanio('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarEvaluacionMedica_All") {
   
    $BanioId = $_POST['BanioId'];
    $Respuesta_em = $_POST['Respuesta_em'];
    $ChkPulgas = $_POST['ChkPulgas'];
    $ChkPiojos = $_POST['ChkPiojos'];
    $ChkGarrapatas = $_POST['ChkGarrapatas'];
    $ChkGusanos = $_POST['ChkGusanos'];
    $Txtectoparasitos = strtoupper ($_POST['Txtectoparasitos']);
    $Respuesta_ojos = $_POST['Respuesta_ojos'];
    $Respuesta_nariz = $_POST['Respuesta_nariz'];
    $Respuesta_cavidad = $_POST['Respuesta_cavidad'];
    $Respuesta_dientes = $_POST['Respuesta_dientes'];
    $Respuesta_piel = $_POST['Respuesta_piel'];
    $Respuesta_cojinetes = $_POST['Respuesta_cojinetes'];
    $Respuesta_unias = $_POST['Respuesta_unias'];
    $Respuesta_oidos = $_POST['Respuesta_oidos'];
    $Respuesta_genitales = $_POST['Respuesta_genitales'];
    $Respuesta_glandulas = $_POST['Respuesta_glandulas'];
    $Respuesta_extremidades = $_POST['Respuesta_extremidades'];
    $Respuesta_nh_estado = $_POST['Respuesta_nh_estado'];
    $Respuesta_nh_pelaje = $_POST['Respuesta_nh_pelaje'];
    $Respuesta_nh_sedante = $_POST['Respuesta_nh_sedante'];
    $Respuesta_nh_puntaje = $_POST['Respuesta_nh_puntaje'];
    $Txt_Recomendacion = strtoupper ($_POST['Txt_Recomendacion']);
    $Usuario = $_POST['Usuario'];

    $myArray = array();
    $sql = "CALL SP_Actualizar_TblEvaluacionMedica('$BanioId','$Respuesta_em','$ChkPulgas','$ChkPiojos','$ChkGarrapatas',
                                       '$ChkGusanos','$Txtectoparasitos','$Respuesta_ojos','$Respuesta_nariz','$Respuesta_cavidad',
                                       '$Respuesta_dientes','$Respuesta_piel','$Respuesta_cojinetes','$Respuesta_unias','$Respuesta_oidos',
                                       '$Respuesta_genitales','$Respuesta_glandulas','$Respuesta_extremidades','$Respuesta_nh_estado',
                                       '$Respuesta_nh_pelaje','$Respuesta_nh_sedante','$Respuesta_nh_puntaje','$Txt_Recomendacion','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql); 
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];          
    echo $Codigo;
}




if ($_POST['action'] == "ObtenerExistenciaEvaluacionMedicaxId") {
   
    $BanioId = $_POST['BanioId'];
    $myArray = array();
    $sql = "CALL SP_Obtener_Existencia_TblEvaluacionMedica_x_idBanio('$BanioId')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);                                   
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];    
    echo $Codigo;
}


if ($_POST['action'] == "EliminarEvaluacionMedica") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblEvaluacionMedica('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];               
    echo $Codigo;
}