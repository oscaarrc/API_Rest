/**
 * Función para obtener productos por categoría mediante AJAX.
 *
 * Esta función realiza una solicitud AJAX para obtener los productos de una categoría utilizando el controlador de Categoría.
 *
 * @return void
 */
function obtenerProductosPorCategoria() {
    // Obtiene el ID de la categoría desde el campo de entrada en el formulario
    cat_id = document.getElementById("cat_id");
    // Obtiene el elemento donde se mostrarán los productos
    mostrar = document.getElementById("mostrar");
    // Limpia el contenido de la sección de visualización de productos
    mostrar.innerHTML = "";

    // Realiza una solicitud AJAX utilizando jQuery
    $.ajax({
        url: '../../controller/CategoriaController.php?op=GetProductosPorCategoria',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_id: cat_id.value }),
        success: function (data) {
            // Muestra los productos obtenidos del servidor
            mostrar.innerHTML += "PRODUCTOS DE LA CATEGORÍA:<br>";
            mostrar.innerHTML += JSON.stringify(data);
        },
        error: function (error) {
            // Maneja los errores de la solicitud AJAX
            console.error('Error al obtener productos por categoría:', error);
        }
    });
}
