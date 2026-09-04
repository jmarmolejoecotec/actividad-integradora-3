<?php
require_once __DIR__ . '/../models/Producto.php';

$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = new Producto();
    $producto->nombre = $_POST['nombre'];
    $producto->categoria = $_POST['categoria'];
    $producto->descripcion = $_POST['descripcion'];
    $producto->precio = $_POST['precio'];
    $producto->cantidad = $_POST['cantidad'];
    
    if ($producto->guardar()) {
        header("Location: index.php?mensaje=exito");
        exit();
    } else {
        $error = "Error al registrar el producto";
    }
}

if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'exito') {
    $mensaje = "Producto registrado exitosamente";
}

$productos = Producto::obtenerTodos();

require_once __DIR__ . '/../views/productos/listar.php';
?>