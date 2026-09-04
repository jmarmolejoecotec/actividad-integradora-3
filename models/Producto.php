<?php
require_once __DIR__ . '/../config/conexion.php';

class Producto {
    public $id;
    public $nombre;
    public $categoria;
    public $descripcion;
    public $precio;
    public $cantidad;

    public function __construct($id = null, $nombre = '', $categoria = '', $descripcion = '', $precio = 0, $cantidad = 0) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    public function guardar() {
        global $conexion;
        $sql = "INSERT INTO productos (nombre, categoria, descripcion, precio, cantidad) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssdi", $this->nombre, $this->categoria, $this->descripcion, $this->precio, $this->cantidad);
        return $stmt->execute();
    }

    public static function obtenerTodos() {
        global $conexion;
        $sql = "SELECT * FROM productos";
        $resultado = $conexion->query($sql);
        $productos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = new Producto(
                $fila['id'],
                $fila['nombre'],
                $fila['categoria'],
                $fila['descripcion'],
                $fila['precio'],
                $fila['cantidad']
            );
        }
        return $productos;
    }

    public static function obtenerPorId($id) {
        global $conexion;
        $sql = "SELECT * FROM productos WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_assoc();
        if ($fila) {
            return new Producto(
                $fila['id'],
                $fila['nombre'],
                $fila['categoria'],
                $fila['descripcion'],
                $fila['precio'],
                $fila['cantidad']
            );
        }
        return null;
    }
}
?>