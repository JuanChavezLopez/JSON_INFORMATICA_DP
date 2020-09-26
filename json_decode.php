<?php  

// STRING => OBJECT PHP

// $json ='{"a":1, "b": 2, "c":3}';
// // var_dump($json);

// $miJSON = json_decode($json);
// var_dump($miJSON);

$lista ='{
    "nombre":"Pedro",
    "edad":34,
    "boolean":true,
    "educacion":{
        "primaria": "Escuela particular",
        "secundaria": "Escuela estatal"
    }
}';

// var_dump($lista);
$var = json_decode($lista, true);
print_r($var['educacion']);



?>