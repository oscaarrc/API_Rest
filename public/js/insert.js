/**
 * Función para agregar una nueva categoría mediante AJAX.
 *
 * Esta función realiza una solicitud AJAX para agregar una nueva categoría utilizando el controlador de Categoría.
 *
 * @return void
 */
function agregarCategoria() {
    // Obtiene los valores de nombre y observación de la nueva categoría desde los campos de entrada en el formulario
    cat_nom = document.getElementById("cat_nom");
    cat_obs = document.getElementById("cat_obs");

    // Realiza una solicitud AJAX utilizando jQuery
    $.ajax({
        url: '../../controller/CategoriaController.php?op=Insert',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ cat_nom: cat_nom.value, cat_obs: cat_obs.value }),
        success: function (response) {
            // Limpia los campos de entrada después de agregar la categoría
            cat_nom.value = "";
            cat_obs.value = "";
            // Muestra un mensaje de éxito con la respuesta del servidor
            alert(response);
        },
        error: function (error) {
            // Maneja los errores de la solicitud AJAX
            alert('Error al agregar categoría:', error);
        }
    });
}