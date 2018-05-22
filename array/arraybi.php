<?php
//Array bidimensional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Mercedez Bens";
$carros[1][1] = "Mercedez Bens";
$carros[1][2] = "Ferrari";
$carros[1][3] = "Ferrari";

echo "Carro: " . $carros[0][3];
 
echo "<br>O ultimo item do array 2 e: " . end($carros[1]); //traz o ultimo item do array

?>