/**
 * Función para eliminar un producto mediante AJAX.
 *
 * Esta función realiza una solicitud AJAX para eliminar un producto utilizando el controlador de Categoría.
 *
 * @return void
 */
function eliminarProducto() {
    // Obtiene el ID del producto desde el campo de entrada en el formulario
    var product_id = document.getElementById("product_id").value;

    // Verifica si se ha proporcionado un ID de producto
    if (product_id == "") {
        alert("Debe insertar un ID");
    } else {
        // Realiza una solicitud AJAX utilizando jQuery
        $.ajax({
            url: '../../controller/CategoriaController.php?op=RemoveProducto',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ product_id: product_id }),
            success: function (response) {
                // Muestra un mensaje de éxito y limpia el campo de entrada del ID de producto
                alert(response);
                document.getElementById("product_id").value = "";
            },
            error: function (error) {
                // Maneja los errores de la solicitud AJAX
                console.error('Error al eliminar producto:', error);
            }
        });
    }
}