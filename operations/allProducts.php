<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productos por Categoría</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../public/js/seeProduct.js"></script>
</head>
<body>

    <div id="eliminarForm">
        <h2>Mostrar productos por Categoría:</h2>
        <label for="cat_id">ID de la categoría:</label>
        <input type="text" id="cat_id">
        <button onclick="obtenerProductosPorCategoria()">Mostrar</button>
    </div>
    <div class="mostrarCat">
        <h3 id="mostrar"></h3>
    </div>
    
</body>
</html>
