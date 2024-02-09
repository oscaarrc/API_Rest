<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../public/js/deleteProduct.js"></script>
</head>
<body>

    <div id="eliminarForm">
        <h2>Eliminar Producto</h2>
        <label for="product_id">ID del Producto:</label>
        <input type="text" id="product_id">
        <button onclick="eliminarProducto()">Eliminar Producto</button>
    </div>
    
</body>
</html>
