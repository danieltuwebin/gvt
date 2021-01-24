<?php
session_start();
require_once("../../config/Cado.php");
$CarpetaTemporal = $_SESSION['User'] . "_tmp";

if ($_POST['action'] == "ObtenerDatosAtencionxId") {

    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblAtencion_All_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarAtencion") {

    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $IdAtencion = $_POST['IdAtencion'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
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
    $Pint_IdVBDA = $_POST['Pint_IdVBDA'];

    $myArray = array();
    $sql = "CALL SP_Registrar_TblAtencion('$IdTipoRegistro','$IdAtencion','$Fecha','$IdProducto','$IdMascota','$Sintomas',
    '$Atencion_T','$Atencion_FC','$Atencion_FR','$Atencion_sc_Des','$Atencion_sc_Muc','$Atencion_sc_TLLC',
    '$Atencion_sc_Vom','$Atencion_sc_Dia','$Atencion_sc_Gan','$Atencion_sc_Pes','$Atencion_dx_Pre', '$Atencion_dx_Def',
    '$Atencion_dx_Sol','$Atencion_tr_Des','$Atencion_tr_Obs','$Atencion_tr_Pre','$Pint_Documento','$Pint_Cita',
    '$Pint_CitaEstado', '$Pint_Estado','$Pvchr_Usuario','$Pint_VentaTipo','$Pint_IdAlmacen','$Pint_IdVBDA')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarAtencion") {

    $IdAtencion = $_POST['IdAtencion'];
    $Fecha = $_POST['Fecha'];
    $IdProducto = $_POST['IdProducto'];
    //$IdProducto = 15;
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
    $Documento = $_POST['Documento'];
    $Cita = $_POST['Cita'];
    $CitaEstado = $_POST['CitaEstado'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblAtencion('$IdAtencion', '$Fecha', '$IdProducto', '$IdMascota', '$Sintomas', '$Atencion_T', '$Atencion_FC',
    '$Atencion_FR', '$Atencion_sc_Des', '$Atencion_sc_Muc', '$Atencion_sc_TLLC', '$Atencion_sc_Vom', '$Atencion_sc_Dia', '$Atencion_sc_Gan', '$Atencion_sc_Pes',
    '$Atencion_dx_Pre', '$Atencion_dx_Def', '$Atencion_dx_Sol', '$Atencion_tr_Des', '$Atencion_tr_Obs', '$Atencion_tr_Pre', '$Documento',
    '$Cita', '$CitaEstado', '$Estado', '$Usuario')";
    $oCado = new Cado();


    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;


    //echo $sql;
}

if ($_POST['action'] == "EliminarAtencion") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblAtencion('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}

//========================== DOCUMENTOS ==========================

if ($_POST['action'] == "EliminarDocumento") {
    eliminar_directorio($CarpetaTemporal);
}

if ($_POST['action'] == "LeeArchivos") {
    //$CarpetaTemporal = $_SESSION['User'] . "_tmp";
    $target_dir = '../../../files/' . $CarpetaTemporal;
    //$target_dir = '../../../../files/' . $CarpetaTemporal;
    echo showFiles($target_dir);
}

if ($_POST['action'] == "RenombrarArchivos") {
    $data = json_decode($_POST['ArrayDocumento']);
    $codigo = $_POST['codigo'];
    $carpeta = '../../../files/' . $codigo;
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    $longitud = count($data);
    for ($i = 0; $i < $longitud; $i++) {
        rename("../../../files/" . $CarpetaTemporal . "/" . $data[$i], "../../../files/" . $codigo . "/" . $codigo . "_" . ($i + 1) . ".pdf");
        //rename("../../../../files/".$CarpetaTemporal."/" . $data[$i], "../../../../files/".$codigo."/".$codigo."_".($i + 1) . ".pdf");
    }
    eliminar_directorio($CarpetaTemporal);
}

if ($_POST['action'] == "ValidarDocumento") {
    $codigo = $_POST['codigo'];
    $directorio = '../../../files/' . $codigo;
    //$directorio = '../../../../files/' . $codigo;
    if (count(scandir($directorio)) == 2) {
        rmdir($directorio);
        echo "true";
    } else {
        echo "false";
    }
}

if ($_POST['action'] == "MoverArchivoIndividual") {
    $Carpeta = $_POST['Carpeta'];
    $NombreAnterior = $_POST['NombreAnterior'];    
    $NombreActual = $_POST['NombreActual'];
    rename("../../../files/" . $Carpeta . "/" . $NombreAnterior, "../../../files/" . $Carpeta . "/" . $NombreActual);
}

// DocumentoAdjunto

if ($_POST['action'] == "GrabarDocumento") {
    $NombreActual = $_POST['NombreActual'];
    $NombreAnterior = $_POST['NombreAnterior'];
    $Carpeta = $_POST['Carpeta'];
    $Codigo = $_POST['Codigo'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblDocumentoAdjunto('$NombreActual','$NombreAnterior','$Carpeta','$Codigo','$Estado','$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    echo '1';
}

if ($_POST['action'] == "tablaResumenDocumentos") {
    $Id = $_POST['Id'];
    $myArray = array();
    $sql = "CALL SP_Obtener_TblDocumentoAdjunto_x_Carpeta('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "ObtenerDocumentoxId") {
    $Id = $_POST['Id'];
    $sql = "CALL SP_Obtener_TblDocumentoAdjunto_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EliminarDocumentoxId") {
    $Id = $_POST['Id'];
    $Carpeta = $_POST['Carpeta'];
    $Archivo = $_POST['Archivo'];
    eliminararchivo($Carpeta,$Archivo);
    $sql = "CALL SP_Eliminar_TblDocumentoAdjunto('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    echo '1';
}

if ($_POST['action'] == "ObtenerDocumentoCantidadCarpeta") {
    $Id = $_POST['Id'];
    $sql = "CALL SP_Obtener_TblDocumentoAdjunto_Cantidad_x_Carpeta('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $cantidad = $dt['cantidad'];
    echo $cantidad;
}


//========================== FUNCIONES ==========================
function eliminar_directorio($CarpetaTemporal)
{
    $mis_archivos = "../../../files/" . $CarpetaTemporal;    // Carpeta que contine archivos y queremos eliminar 
    //$mis_archivos = "../../../../files/".$CarpetaTemporal;    // Carpeta que contine archivos y queremos eliminar 
    foreach (glob($mis_archivos . "/*.*") as $archivos_carpeta) {
        unlink($archivos_carpeta);     // Eliminamos todos los archivos de la carpeta hasta dejarla vacia 
    }
    rmdir($mis_archivos);         // Eliminamos la carpeta vacia 
}

function showFiles($path)
{
    $dir = opendir($path);
    $files = array();
    while ($current = readdir($dir)) {
        if ($current != "." && $current != "..") {
            if (is_dir($path . $current)) {
                showFiles($path . $current . '/');
            } else {
                $files[] = $current;
            }
        }
    }
    //echo '<h2>'.$path.'</h2>';
    //echo '<ul>';
    /*for($i=0; $i<count( $files ); $i++){
        echo '<li>'.$files[$i]."</li>";
    }*/
    //echo '</ul>';
    echo json_encode($files);
}

function eliminararchivo($carpeta,$archivo)
{
    $nombre_fichero = '../../../files/'.$carpeta.'/'.$archivo;
    if (file_exists($nombre_fichero)) {
        unlink($nombre_fichero);
    } else {

    }
}
