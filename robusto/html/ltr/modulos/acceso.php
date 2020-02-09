<?php
// start a session
session_start();

require_once("../../config/Cado.php");


if ($_POST['action'] == "acceso") {

    $Usuario = $_POST['user'];
    $Clave = $_POST['pass'];

    $sql = "CALL SP_Login_Sistema('$Usuario','$Clave')";
    $oCado = new Cado();
    $rst = $oCado->ejecute_sql($sql);

    $dt = mysqli_fetch_array($rst);
    $respuesta = $dt['Codigo'];
    $Perfil = $dt['Usuario_IdPerfilUsuario'];
    $Almacen = $dt['Usuario_IdAlmacen'];
    /*
    $Totales = array();
    $Totales[] = array('tclientes' => $v1,'tmascotas' => $v2,'tatencion' => $v3)
    $json_string = json_encode($Totales);
    echo $json_string;
    */

    //echo "<script>alert('DENTRO DE F1 SES.usuariogrupo_id : ".$Usuario."');</script>"; # NO SE MUESTRA ALERT

    if ($respuesta==1){

        $_SESSION['User'] = $Usuario;
        $_SESSION['UserPerfil'] = $Perfil;
        $_SESSION['IdAlmacen'] = $Almacen;
    }

    echo $respuesta;

}



if ($_POST['action'] == "salir") {
   
    // Destruir todas las variables de sesión.
    $_SESSION = array();
    
    // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
    // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Finalmente, destruir la sesión.
    session_destroy();
  
}





