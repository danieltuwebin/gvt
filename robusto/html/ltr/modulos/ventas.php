<?php

require_once("../../config/Cado.php");

if ($_POST['action'] == "MostrarProductoxCondicion") {

    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblProducto_Inpendendientes('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarPrecio") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblProducto_Precio_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarNombrecliNombreMas") {
   
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_NombreCli_NombreMas_x_IdMascota('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "ObtenerMascotasxIdCliente") {
   
    $Cond = $_POST['Cond'];
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblMascota_All_x_Condicion('$Cond','$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "ObtenerNombrexIdClienteMascota") {
   
    $Condicion = $_POST['Condicion'];
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_Nombre_x_Id_ClienteMascota('$Id','$Condicion')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "GrabarVacuna") {
   
    $IdTipoRegistro = $_POST['IdTipoRegistro'];
    $Idvacuna = $_POST['Idvacuna'];
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
    $sql = "CALL SP_Registrar_TblVacunas('$IdTipoRegistro','$Idvacuna','$Fecha','$IdProducto','$Precio','$IdMascota','$Observacion','$Cita','$Usuario','$VentaTipo','$Cantidad','$IdAlmacen')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}




if ($_POST['action'] == "ObtenerRegistrosTblventatemporal") {
   
    
    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblVentaTemporal_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}



if ($_POST['action'] == "GrabarVentaTmp") {
   
    $IdVenta = $_POST['IdVenta'];
    $IdSede = $_POST['IdSede'];
    $IdProducto = $_POST['IdProducto'];
    $Cantidad = $_POST['Cantidad'];
    $Precio = $_POST['Precio'];
    $Descuento = $_POST['Descuento'];
    $PrecioTotal = $_POST['PrecioTotal'];
    $Usuario = $_POST['Usuario'];
                                        
    $myArray = array();
    $sql = "CALL SP_ProcesoVenta_Tmp('$IdVenta','$IdSede','$IdProducto','$Cantidad','$Precio',
    '$Descuento','$PrecioTotal' ,'$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EliminarVenta") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblVentaDetalle_tmp('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


if ($_POST['action'] == "GrabarVenta") {
   
    $idVentatmp = $_POST['idVentatmp'];
    $idVBDA = $_POST['idVBDA'];
    $idAgendado = $_POST['idAgendado'];
    $idProducto = $_POST['idProducto'];
    $idKardex = $_POST['idKardex'];
    $fecha = $_POST['fecha'];
    $idTipoVenta = $_POST['idTipoVenta'];
    $idTipoPago = $_POST['idTipoPago'];
    $idMascota = $_POST['idMascota'];
    $idAlmacen = $_POST['idAlmacen'];
    $observacion = $_POST['observacion'];
    $estado = $_POST['estado'];
    $usuario = $_POST['usuario'];          

    $myArray = array();
    $sql = "CALL SP_Registrar_TblVenta_TblVentaDetalle('$idVentatmp','$idVBDA','$idAgendado','$idProducto','$idKardex','$fecha','$idTipoVenta',
    '$idTipoPago','$idMascota','$idAlmacen','$observacion','$estado','$usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "CancelarVenta") {

    $IdVenta = $_POST['IdVenta'];
    $IdVentatmp = $_POST['IdVentatmp'];
    $Usuario = $_POST['Usuario'];
    $IdVBDA = $_POST['IdVBDA'];   
    $ProcesoVBDA = $_POST['ProcesoVBDA'];   
    $Atencion_Agen = $_POST['Atencion_Agen'];
    $IdTipoVenta = $_POST['IdTipoVenta'];       

    $sql = "CALL SP_Eliminar_TblVenta_Total('$IdVenta','$IdVentatmp','$Usuario','$IdVBDA','$ProcesoVBDA','$Atencion_Agen','$IdTipoVenta')";
    $oCado = new Cado();

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}


if ($_POST['action'] == "MostrarVentasxId") {

    $Condicion = $_POST["Condicion"];
    $Id = $_POST["Id"];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblVenta_All_x_Condicion('$Condicion','$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "EditarVenta") {

    $Codigo = $_POST['Codigo'];
    $Fecha = $_POST['Fecha'];
    $Sede = $_POST['Sede'];     
    $Tipo_Pago = $_POST['Tipo_Pago'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Actualizar_TblVenta_Validando_Stock('$Codigo', '$Fecha', '$Sede', '$Tipo_Pago', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}



if ($_POST['action'] == "EliminarVenta_tblVenta") {

    $Id = $_POST['Id'];
    $usuario = $_POST['usuario'];
    $sql = "CALL SP_Actualizar_TblAlmacen_Por_EliminacionVenta('$Id','$usuario')";
    //$sql = "CALL SP_Eliminar_TblCompra('$usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}


if ($_POST['action'] == "tablaResumenVentas") {
    $Id = $_POST['Id'];
    $myArray = array();
    $sql = "CALL SP_Obtener_TblVentaDetalle_x_IdVenta('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}











if ($_POST['action'] == "MostrarNombrexDni") {

    $Dni = $_POST['Dni'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblClientes_SoloNombre_x_Dni('$Dni')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $id = $dt['Cliente_Id'];
    $nom = $dt['Cliente_Nombre'];

    $data['Cliente_Id'] = $id;
    $data['Cliente_Nombre'] = $nom;

    echo json_encode($data);
}


if ($_POST['action'] == "GrabarMascota") {

    $Codigo = $_POST['Codigo'];    
    $Nombre = $_POST['Nombre'];
    $Especie = $_POST['Especie'];
    $Raza = $_POST['Raza'];  
    $Sexo = $_POST['Sexo'];     
    $Color = $_POST['Color'];
    $Fecha = $_POST['Fecha'];
    $Notas = $_POST['Notas'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];


     $sql = "CALL SP_Registrar_TblMascota_NuevoMascota('$Codigo', '$Nombre', '$Especie', '$Raza', '$Sexo', '$Color',
                                                      '$Fecha', '$Notas', '$Estado', '$Usuario')"; 

    //$sql = "CALL SP_Registrar_TblMascota_NuevoMascota(1, 'NEGRO', 1, 1, 1, 'ROJO', '2011-01-17', 'TEST01', 1, 'ADMIN')";                                                      

    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    echo $rst;


    //echo $Codigo.'-'.$Nombre.'-'.$Especie.'-'.$Raza.'-'.$Sexo.'-'.$Color.'-'.$Fecha.'-'.$Notas.'-'. $Estado.'-'.$Usuario;




}



if ($_POST['action'] == "MostrarMascotaxId") {

    $Id = $_POST['Id'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblMascota_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}



if ($_POST['action'] == "EditarMascota") {

    $CodigoCli = $_POST['CodigoCli'];
    $Nombre = $_POST['Nombre'];
    $Especie = $_POST['Especie'];     
    $Raza = $_POST['Raza'];
    $Sexo = $_POST['Sexo'];
    $Color = $_POST['Color'];
    $Fecha = $_POST['Fecha'];
    $Notas = $_POST['Notas'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];
    $CodigoMas = $_POST['CodigoMas'];    

    $sql = "CALL SP_Actualizar_TblMascota('$CodigoCli', '$Nombre', '$Especie', '$Raza', '$Sexo',
                                                      '$Color', '$Fecha', '$Notas', '$Estado', '$Usuario', '$CodigoMas')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}



if ($_POST['action'] == "EliminarMascota") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblMascota('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}



?>