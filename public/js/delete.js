/**
 * Función para eliminar una categoría mediante AJAX.
 *
 * Esta función realiza una solicitud AJAX para eliminar una categoría utilizando el controlador de Categoría.
 *
 * @return void
 */
function eliminarCategoria() {
    // Obtiene el ID de la categoría desde el campo de entrada en el formulario
    var cat_id = document.getElementById("cat_id").value;

    // Verifica si se ha proporcionado un ID de categoría
    if (cat_id == "") {
        alert("Debe insertar un ID");
    } else {
        // Realiza una solicitud AJAX utilizando jQuery
        $.ajax({
            url: '../../controller/CategoriaController.php?op=Remove',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ cat_id: cat_id }),
            success: function (response) {
                // Muestra un mensaje de éxito y limpia el campo de entrada del ID de categoría
                alert(response);
                document.getElementById("cat_id").value = "";
            },
            error: function (error) {
                // Maneja los errores de la solicitud AJAX
                console.error('Error al eliminar categoría:', error);
            }
        });
    }
}
