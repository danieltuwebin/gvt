<?php
class Cado{
    var $Servidor;
    var $Usuario;
    var $Clave;
    var $BaseDatos;

    

    function conectar() {

        $mysqli = new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
        if($mysqli->connect_errno){
            echo"Error al Conectar a la Base de Datos.<br>";
            echo "MySQL Error: ".$mysqli->connect_error;
            exit;
        }
        $mysqli->query("SET NAMES 'utf8'");
        $mysqli->query("SET time_zone = '-5:00'");

        return $mysqli;
    }

    function ejecute_sql($sql) {
        $mysqli = $this->conectar();
        $rsql = $mysqli->query($sql);

        if($mysqli->errno){
            echo 'MySQL Error: ' . $mysqli->error;
            exit;
        }

        $rsql = $this->returns($mysqli, $rsql, $sql);
        $mysqli->close();
        return $rsql;
    }

    private function returns($mysqli, $rsql, $sql){
        switch (strtoupper(explode(" ", $sql)[0])){
            case 'INSERT':
                return $mysqli->insert_id;
            case 'UPDATE':
            case 'DELETE':
                //return $mysqli->affected_rows;
        }
        return $rsql;
    }

}
?>