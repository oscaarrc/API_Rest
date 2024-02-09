<?php
/**
 * Clase para manejar operaciones relacionadas con categorías en la base de datos.
 */
class Categoria extends Conectar {
    /**
     * Obtiene todas las categorías con estado activo.
     *
     * @return array Un array asociativo con las categorías.
     */
    public function get_categoria() {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_categoria WHERE estado=1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * Inserta una nueva categoría con estado activo.
     *
     * @param string $cat_nom Nombre de la nueva categoría.
     * @param string $cat_obs Observaciones de la nueva categoría.
     * @return int El número de filas afectadas por la inserción.
     */
    public function insert_categoria($cat_nom, $cat_obs) {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "INSERT INTO tm_categoria (cat_nom, cat_obs, estado) VALUES (?, ?, '1')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * Elimina una categoría de la base de datos.
     *
     * @param int $cat_id El ID de la categoría a eliminar.
     * @return array Un array asociativo con los resultados de la eliminación.
     */
    public function remove_categoria($cat_id){
        $conectar = parent::conexion();
        parent::set_name();
        $sql_1="DELETE FROM tm_products WHERE cat_id = $cat_id";
        $sql = "DELETE FROM tm_categoria WHERE cat_id = $cat_id";
        $sql = $conectar->prepare($sql);
        $sql_1 = $conectar->prepare($sql_1);
        $sql_1->execute();
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

     /**
     * Añade un nuevo producto a una categoría específica.
     *
     * @param int $cat_id El ID de la categoría a la que se agregará el producto.
     * @param string $product_name Nombre del nuevo producto.
     * @param string $product_price Precio del nuevo producto.
     * @return int El número de filas afectadas por la inserción.
     */
    public function agregar_producto_a_categoria($cat_id, $product_name, $product_price) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "INSERT INTO tm_products (cat_id, product_name, product_price) VALUES (?, ?, ?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->bindValue(2, $product_name);
        $sql->bindValue(3, $product_price);
        $sql->execute();
        return $sql->rowCount(); // Devuelve el número de filas afectadas
    }

    /**
     * Obtiene todos los productos de una categoría específica.
     *
     * @param int $cat_id El ID de la categoría.
     * @return array Un array asociativo con los productos de la categoría.
     */
    public function obtener_productos_por_categoria($cat_id) {
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT * FROM tm_products WHERE cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

        /**
     * Elimina un producto de una categoría de la base de datos.
     * @param int $product_id El ID del producto a eliminar.
     * @return array Un array asociativo con los resultados de la eliminación.
     */
    public function remove_product($product_id){
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "DELETE FROM tm_products WHERE product_id = $product_id";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
