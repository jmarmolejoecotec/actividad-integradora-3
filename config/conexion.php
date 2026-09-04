<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "integradora";

$conexion = new mysqli($servidor, $usuario, $clave, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}
?>