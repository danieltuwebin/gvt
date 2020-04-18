<?php

require_once("../../config/Cado.php");

if ($_POST['action'] == "MostrarEspecie") {
    $myArray = array();
    $sql = "CALL SP_Obtener_TblEspecie_all()";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarRaza") {

    $IdEspecie = $_POST['IdEspecie'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblRaza_x_Especie('$IdEspecie')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);
    while ($row = $rst->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}


if ($_POST['action'] == "MostrarNombrexDni") {

    $Dni = $_POST['Dni'];
    $Condicion = $_POST['Condicion'];
    
    $myArray = array();
    $sql = "CALL SP_Obtener_TblClientes_SoloNombre_x_Dni('$Dni','$Condicion')";
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
    echo $rst;
}



if ($_POST['action'] == "EliminarMascota") {

    $Id = $_POST['Id'];
    $sql = "CALL SP_Eliminar_TblMascota('$Id')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    echo $rst;
}



/********************************************************/
/*********************OTROS MODULOS*********************/
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


/********************************************************/





?>