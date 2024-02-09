/**
 * Función para cargar todas las categorías mediante AJAX.
 *
 * Esta función realiza una solicitud AJAX para obtener todas las categorías utilizando el controlador de Categoría.
 * Luego, muestra las categorías en la página web.
 *
 * @return void
 */
let mostrarD = false;
function mostrarCategorias() {
    // Obtiene el elemento donde se mostrarán las categorías
    mostrar = document.getElementById("verCat");

    // Realiza una solicitud AJAX utilizando jQuery
    $.ajax({
        url: '../../controller/CategoriaController.php?op=GetAll',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            // Muestra las categorías obtenidas del servidor si el botón de visualización está activado,
            // de lo contrario, limpia el contenido de la sección de visualización
            if (!mostrarD) {
                mostrar.innerHTML += "CATEGORÍAS:<br>";
                mostrar.innerHTML += JSON.stringify(data);
                mostrarD = true;
            } else {
                mostrar.innerHTML = "";
                mostrarD = false;
            }
        },
        error: function (error) {
            // Maneja los errores de la solicitud AJAX
            alert('Error al cargar categorías:', error);
        }
    });
}