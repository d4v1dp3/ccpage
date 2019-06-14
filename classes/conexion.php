<?php

class Conexion {

    public $usuario = "root";
    public $password = "";
    public $servidor = "localhost";
    public $basededatos = "core2019";
    public $conexion;

    public function __construct() {
        $this->conexion = mysqli_connect(
                $this->servidor, $this->usuario, $this->password, $this->basededatos
                ) or die("No se ha podido conectar al servidor de Base de datos");
    }

    public function getConnection() {
        return $this->conexion;
    }

}

?>
