<?php

/**
 * Clase Conectar: Maneja la conexión a la base de datos utilizando PDO.
 */
class Conectar {
    
    /**
     * @var PDO $dbh La instancia de PDO que se utiliza para la conexión a la base de datos.
     */
    protected $dbh;
    
    /**
     * Establece la conexión a la base de datos.
     *
     * @return PDO La instancia de PDO para la conexión a la base de datos.
     * @throws Exception Para posibles errores durante la conexión.
     */
    protected function conexion() {
        try {
            $conectar = $this->dbh = new PDO('mysql:host=localhost;dbname=rest_oscar', 'root', '');
            return $conectar;
        } catch (Exception $e) {
            /**
             * En caso de error durante la conexión, muestra un mensaje de error y termina la ejecución.
             * @throws Exception Mensaje de error.
             */
            print 'Error:' . $e->getMessage() . '</br>';
            die();
        }
    }

    /**
     * Establece el tipo de caracteres de la conexión a utf8.
     *
     * @return PDOStatement|false Retorna el resultado de la consulta "SET NAMES 'utf8'" o false en caso de error.
     */
    public function set_name() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}