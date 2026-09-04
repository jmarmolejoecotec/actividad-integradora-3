<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de Productos</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Catalogo de Productos</h1>

        <div class="formulario">
            <h2>Nuevo Producto</h2>
            <form method="POST" action="" onsubmit="return validarFormulario()">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>

                <div class="campo">
                    <label for="descripcion">Descripcion:</label>
                    <textarea id="descripcion" name="descripcion"></textarea>
                </div>

                <div class="campo">
                    <label for="precio">Precio:</label>
                    <input type="number" id="precio" name="precio" step="0.01" min="0">
                </div>

                <div class="campo">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" min="0">
                </div>

                <button type="submit" class="boton">Guardar</button>
            </form>
        </div>
    </div>

    <script src="../../js/script.js"></script>
</body>
</html>