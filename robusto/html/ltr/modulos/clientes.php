<?php
// start a session
session_start();
require_once("../../config/Cado.php");

if ($_POST['action'] == "MostrarProvincia") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblProvincia_all()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarDistrito") {

    $IdProvincia = $_POST['IdProvincia'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblDistrito_x_Provincia('$IdProvincia')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "GrabarCliente") {

    $Nombre = $_POST['Nomb'];
    $Apellido = $_POST['Ape'];
    $Dni = $_POST['Dni'];  
    $Email = $_POST['Email'];     
    $TelefonoFij = $_POST['TelFijo'];
    $TelefonoCelu = $_POST['TelCelu'];
    $Foto = 'SN';
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $Direccion = $_POST['Direccion'];
    $Obervacion = $_POST['Notas'];
    $Estado = '1';
    $Usuario = $_POST['Usuario'];

    $sql = "CALL SP_Registrar_TblCliente_NuevoCliente('$Nombre', '$Apellido', '$Dni', '$Email', '$TelefonoFij', '$TelefonoCelu',
                                                      '$Foto', '$Provincia', '$Distrito', '$Direccion', '$Obervacion', '$Estado', '$Usuario')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $Codigo = $dt['Codigo'];

    echo $Codigo;
}

if ($_POST['action'] == "tablaClientes") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblClientes_All()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarClientexDni") {

    $Dni = $_POST['Dni'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblClientes_Eliminados_x_Dni('$Dni')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarClientexId") {

    $Id = $_POST['Id'];
    //$Id = 47;
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblClientes_x_Id('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $_SESSION['Dni'] = $row["Cliente_Dni"];
        //echo 'dni: '.$row["Cliente_Dni"];
        //echo("<script>console.log('PHP: " . $_SESSION['Dni'] . "')</script>");
        //echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}



if ($_POST['action'] == "EditarCliente") {

    $Nombre = $_POST['Nomb'];
    $Apellido = $_POST['Ape'];
    $Dni = $_POST['Dni'];
    $Email = $_POST['Email'];     
    $TelefonoFij = $_POST['TelFijo'];
    $TelefonoCelu = $_POST['TelCelu'];
    $Foto = 'SN';
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $Direccion = $_POST['Direccion'];
    $Obervacion = $_POST['Notas'];
    $Estado = $_POST['Estado'];
    $Usuario = $_POST['Usuario'];
    $Codigo = $_POST['Codigo'];

    $sql = "CALL SP_Actualizar_TblCliente('$Nombre', '$Apellido', '$Dni', '$Email', '$TelefonoFij', '$TelefonoCelu',
                                                      '$Foto', '$Provincia', '$Distrito', '$Direccion', '$Obervacion', '$Estado', '$Usuario','$Codigo')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


if ($_POST['action'] == "EliminarCliente") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblCliente('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    //$dt = mysqli_fetch_array($rst);
    //$Codigo = $dt['Codigo'];

    echo $rst;
}


/*
 if ($_POST['action'] == "GuardarIdClienteEnSesion") {
    $Id = $_POST['Id'];
    $_SESSION['IdCliente_Mascota'] = $Id;
    echo $_SESSION['IdCliente_Mascota'];
} 
*/




?>

