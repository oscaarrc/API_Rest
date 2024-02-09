<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="public/js/index.js"></script>
  <link rel="stylesheet" href="menu.css">
  <title>Panel de Control</title>
</head>
<body>
  <h1>Selecciona una <code>OPERACIÓN</code></h1>
  <div class="algn">
    <button class="pulse" onclick="mostrarCategorias()">Ver todas las categorías</button>
    <a href="operations/addCategory.php"><button class="pulse">Agregar Categoría</button></a>
    <a href="operations/removeCategory.php"><button class="pulse">Eliminar Categoría</button></a>
    <a href="operations/allProducts.php"><button class="pulse">Ver productos por categoría</button></a>
    <a href="operations/addProduct.php"><button class="pulse">Agregar Producto</button></a>
    <a href="operations/removeProd.php"><button class="pulse">Eliminar Producto</button></a>
  </div>
  <div class="mostrar">
    <h3 id="verCat"></h3>
  </div>
  


</div>
</body>
</html>
<div class="buttons">
