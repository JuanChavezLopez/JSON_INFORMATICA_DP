<?php  

header('Content-type:application/json; charset=utf-8');

include_once 'conexion.php';

$objeto = new Conexion();
$conexion = $objeto->conectar();


$consulta = "SELECT id, nombre,apellido,edad FROM personas";
$resultado = $conexion ->prepare($consulta);
$resultado->execute();

$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

// TODO:  en la variable $data le pasamos la funcion json_encode.

// print json_encode($data, JSON_UNESCAPED_UNICODE);
// var_dump($data);

// print $data;

// CASO 1:
// print json_encode($data);

// CASO: 2
// print $data;

// todo: SI NO PONEMOS EL JSON_NUMERIC_CHECK.......no vamos a poder sumar..pero concatena los valores
// CASO: 3
// print json_encode($data, JSON_NUMERIC_CHECK);
// print json_encode($data);


// CASO 4
print json_encode($data);



$conexion = null;
?>