<?php

/**
 * Este archivo contiene un controlador para manejar las operaciones relacionadas con las categorías en formato JSON.
 *
 * @package Controladores
 */

// Establece el tipo de contenido como JSON
header('Content-Type: application/json');

// Requiere el archivo de configuración de la base de datos y el modelo de Categoría
require_once('../config/conexion.php');
require_once('../models/Categoria.php');

// Instancia un objeto de la clase Categoria
$categoria = new Categoria();

// Decodifica el cuerpo de la solicitud JSON
$body = json_decode(file_get_contents("php://input"), true);

// Manejo de las diferentes operaciones según el parámetro "op" proporcionado en la URL
switch ($_GET["op"]) {
    case "GetAll":
        // Obtiene todas las categorías
        $datos = $categoria->get_categoria();
        echo json_encode($datos);
        break;
    case "Insert":
        // Inserta una nueva categoría
        $datos = $categoria->insert_categoria($body['cat_nom'], $body['cat_obs']);
        echo json_encode('Categoría insertada');
        break;
    case "Remove":
        // Elimina una categoría
        $datos = $categoria->remove_categoria($body['cat_id']);
        echo json_encode('Categoría eliminada');
        break;
    case "AddProducto":
        // Agrega un producto a una categoría específica
        $datos = $categoria->agregar_producto_a_categoria($body['cat_id'], $body['product_name'], $body['product_price']);
        echo json_encode('Producto agregado a la categoría');
        break;
    case "RemoveProducto":
        // Elimina un producto de una categoría
        $datos = $categoria->remove_product($body['product_id']);
        echo json_encode('Producto eliminado');
        break;
    case "GetProductosPorCategoria":
        // Obtiene todos los productos de una categoría específica
        $datos = $categoria->obtener_productos_por_categoria($body['cat_id']);
        echo json_encode($datos);
        break;
}
