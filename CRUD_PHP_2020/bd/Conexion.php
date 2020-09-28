<?php  

class Conexion{
    public static function conectar(){
        define('servidor','localhost');
        define('nombre_db', 'crud_php_2020');
        define('usuario','root');
        define('password','');

        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_db, usuario, password, $opciones);
            return $conexion;
        }catch(Exception $e){
            die ("El error de la conexion es:". $e->getMessage());

        }
    }

}


?>