<?php

	/*
	session_start();
	if(!isset($_SESSION['UserPerfil'])){
		header("Location: login.php");
	}
	*/

	session_start();
    // Establecer tiempo de vida de la sesión en segundos
    $inactividad = 1;
    // Comprobar si $_SESSION["timeout"] está establecida
    if(!isset($_SESSION['UserPerfil'])){
        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
        $sessionTTL = time() - $_SESSION['UserPerfil'];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: login.php");
        }
    }
    // El siguiente key se crea cuando se inicia sesión
    $_SESSION["timeout"] = time();


?>