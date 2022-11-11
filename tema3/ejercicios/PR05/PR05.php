<?php

//1
echo "Ejercicio 1 <br>";
$datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
$resul = array_unique($datos);
asort($resul);
print_r($resul);
echo "<br>";
//2
echo "Ejercicio 2 <br>";
$datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
$key = array_search(3, $datos) ;
print_r($key);
echo "<br>";
//3
echo "Ejercicio 3 <br>";

echo "<br>";
?>