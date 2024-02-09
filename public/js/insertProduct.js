/**
 * Función para agregar un producto a una categoría mediante AJAX.
 *
 * Esta función realiza una solicitud AJAX para agregar un producto a una categoría utilizando el controlador de Categoría.
 *
 * @return void
 */
function agregarProductoACategoria() {
    // Obtiene los valores del ID de categoría, nombre y precio del producto desde los campos de entrada en el formulario
    cat_id = document.getElementById("cat_id");
    product_name = document.getElementById("product_name");
    product_price = document.getElementById("product_price");

    // Realiza una solicitud AJAX utilizando jQuery
    $.ajax({
        url: '../../controller/CategoriaController.php?op=AddProducto',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            cat_id: Number(cat_id.value),
            product_name: product_name.value,
            product_price: Number(product_price.value)
        }),
        success: function (response) {
            // Limpia los campos de entrada después de agregar el producto a la categoría
            cat_id.value = "";
            product_name.value = "";
            product_price.value = "";
            // Muestra un mensaje de éxito con la respuesta del servidor
            alert(response);
        },
        error: function (error) {
            // Maneja los errores de la solicitud AJAX
            alert('Error al agregar producto a la categoría:', error);
        }
    });
}