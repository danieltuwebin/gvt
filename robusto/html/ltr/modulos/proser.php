<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "MostrarTipoProducto") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblTipoProducto_all()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "MostrarCategoria") {

    $IdProducto = $_POST['IdProducto'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblCategoria_x_TipoProducto('$IdProducto')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarUM") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblUM_all()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}

if ($_POST['action'] == "GrabarProducto") {

    $Nombre = $_POST['Nombre'];
    $Tipoproducto = $_POST['Tipoproducto'];
    $Categoria = $_POST['Categoria'];  
    $Um = $_POST['Um'];     
    $Preciocompra = $_POST['Preciocompra'];
    $Precioventa = $_POST['Precioventa'];
    $Notas = $_POST['Notas'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblProducto_NuevoProducto('$Nombre', '$Tipoproducto', '$Categoria', '$Um', '$Preciocompra', '$Precioventa',
                                                      '$Notas', '$Estado', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}



if ($_POST['action'] == "ObtenerId") {

    $Nombre = $_POST['Nombre'];
    $Tipoproducto = $_POST['Tipoproducto'];
    $Categoria = $_POST['Categoria'];  
    $Um = $_POST['Um'];     

    $sql = "CALL SP_Obtener_TblProducto_Solo_Id('$Nombre', '$Tipoproducto', '$Categoria', '$Um')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['Producto_Id'];
    echo $Codigo;
}


if ($_POST['action'] == "MostrarProductoxId") {

    $Id = $_POST['Id'];
    $Condicion = $_POST['Condicion'];    
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblProducto_x_Id('$Id','$Condicion')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "EditarProducto") {

    $Nombre = $_POST['Nombre'];
    $Tipoproducto = $_POST['Tipoproducto'];
    $Categoria = $_POST['Categoria'];     
    $Um = $_POST['Um'];
    $Preciocompra = $_POST['Preciocompra'];
    $Precioventa = $_POST['Precioventa'];
    $Notas = $_POST['Notas'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];
    $Codigoproducto = $_POST['Codigoproducto'];
    $Codigoact = $_POST['Codigoact'];

    $sql = "CALL SP_Actualizar_TblProducto('$Nombre', '$Tipoproducto', '$Categoria', '$Um', '$Preciocompra',
                                                      '$Precioventa', '$Notas', '$Estado', '$Usuario', '$Codigoproducto', '$Codigoact')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];

    echo $Codigo;
}


if ($_POST['action'] == "EliminarProducto") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblProducto('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['CODIGO'];
    echo $Codigo;
}


if ($_POST['action'] == "tablaResumenDetalleProducto") {
    $Id = $_POST['Id'];
    $myArray = array();
    $sql = "CALL SP_Obtener_TblAlmacen_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}



/********************************************************/
/*********************OTROS MODULOS*********************/
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




if ($_POST['action'] == "MostrarProductoxCondicion_Vacunas") {

    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblProducto_Solo_Vacunas_ConStock('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarProductoxCondicion_Atencion") {

    $Id = $_POST['Id'];

    $myArray = array();
    $sql = "CALL SP_Obtener_TblProducto_Solo_Atencion_ConStock('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}



/********************************************************/


?>