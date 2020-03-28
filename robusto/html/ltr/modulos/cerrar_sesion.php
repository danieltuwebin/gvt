<?php
	session_start();
	if(!isset($_SESSION['UserPerfil'])){
		header("Location: login.php");
	}	
?>