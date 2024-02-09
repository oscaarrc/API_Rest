<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Categoría</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../public/js/delete.js"></script>
</head>
<body>

    <div id="eliminarForm">
        <h2>Eliminar Categoría</h2>
        <label for="cat_id">ID de la Categoría:</label>
        <input type="text" id="cat_id">
        <button onclick="eliminarCategoria()">Eliminar Categoría</button>
    </div>
    
</body>
</html>
