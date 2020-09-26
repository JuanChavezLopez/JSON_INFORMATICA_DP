<?php  

// // json_encode() .... CONVERT objeto php to JSON
// $objeto -> nombre = "Juan";
// $objeto -> edad = 23;
// $objeto -> pais = "Peru";

// $miJSON = json_encode($objeto); // mostramos el objeto completo

// // $miJSON = json_encode($objeto->pais. " -" .$objeto->nombre);  //mostramos las propiedades de los objetos...g
// echo $miJSON;


// *TODO: ------------------------------------------------------

// // ARARY SIMPLE PHP a JSON

// $colores = array("verde", "rojo", "blanco", "azul");

// // print_r($colores[3]);
// // var_dump($colores);
// $miJSON = json_encode($colores);
// print_r($miJSON);


// ARRAY ASOCIATIVO PHP TO JSON

// $arregloAsoc = array('marca' => 'samsung', 'modelo' => 's10', 'precio'=>'900');

// $miJSON = json_encode($arregloAsoc);
// echo $miJSON;
// // var_dump($arregloAsoc);

// // echo $arregloAsoc[marca];

// ARRAY ASOCIATIVO CON CARACTERES ESPECIALES

$arregloAsoc = array('nombre' => 'jazmín', 'apellido' => 'Chávez ', 'edad'=>34);

$miJSON = json_encode($arregloAsoc, JSON_UNESCAPED_UNICODE);
echo $miJSON;




?>