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

        <?php if ($mensaje): ?>
            <div class="mensaje exito"><?php echo $mensaje; ?></div>
        <?php endif; ?>
        
        <?php if ($error): ?>
            <div class="mensaje error"><?php echo $error; ?></div>
        <?php endif; ?>

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

        <div class="tabla">
            <h2>Productos Registrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($productos)): ?>
                        <tr>
                            <td colspan="5">No hay productos registrados</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($productos as $prod): ?>
                            <tr>
                                <td><?php echo $prod->id; ?></td>
                                <td><?php echo $prod->nombre; ?></td>
                                <td><?php echo $prod->descripcion; ?></td>
                                <td>$<?php echo number_format($prod->precio, 2); ?></td>
                                <td><?php echo $prod->cantidad; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../../js/script.js"></script>
</body>
</html>