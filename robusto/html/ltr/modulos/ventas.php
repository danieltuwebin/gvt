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



if ($_POST['action'] == "ProcesoVenta") {
   
    $IdSede = $_POST['IdSede'];
    $IdProducto = $_POST['IdProducto'];
    $Cantidad = $_POST['Cantidad'];
    $Kardex = $_POST['Kardex'];
    $Fecha = $_POST['Fecha'];
    $TipoVenta = $_POST['TipoVenta'];
    $TipoPago = $_POST['TipoPago'];
    $IdMascota = $_POST['IdMascota'];
    $Precio = $_POST['Precio'];
    $Descuento = $_POST['Descuento'];
    $PrecioTotal = $_POST['PrecioTotal'];
    $Observacion = $_POST['Observacion'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];
    $Cita = $_POST['Cita'];
    $CitaEstado = $_POST['CitaEstado'];
                                        
    $myArray = array();
    $sql = "CALL SP_ProcesoVenta('$IdSede','$IdProducto','$Cantidad','$Kardex','$Fecha',
    '$TipoVenta','$TipoPago'  ,'$IdMascota','$Precio','$Descuento','$PrecioTotal','$Observacion','$Estado','$Usuario','$Cita','$CitaEstado')";
    $oCado = new Cado();
/*     $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray); */
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
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