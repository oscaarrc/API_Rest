<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Categoría</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../public/js/insert.js"></script>
</head>
<body>

    <div id="categoriaForm">
        <h2>Añadir Nueva Categoría</h2>
        <label for="cat_nom">Nombre de la Categoría:</label>
        <input type="text" id="cat_nom">
        <label for="cat_obs">Observaciones:</label>
        <input type="text" id="cat_obs">
        <button onclick="agregarCategoria()">Agregar Categoría</button>
    </div>

    
</body>
</html>
