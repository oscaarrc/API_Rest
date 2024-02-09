<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../public/js/insertProduct.js"></script>
</head>
<body>

    <div id="productoForm">
        <h2>Añadir Nuevo Producto</h2>
        <label for="product_name">Nombre del Producto:</label>
        <input type="text" id="product_name">
        <label for="cat_id">ID de la Categoría:</label>
        <input type="text" id="cat_id">
        <label for="price_id">Precio del Producto:</label>
        <input type="text" id="product_price">
        <button onclick="agregarProductoACategoria()">Agregar Producto</button>
    </div>

</body>
</html>
