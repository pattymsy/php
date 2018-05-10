<?php
include "include1.php";// vai invocar a funcao somar que esta no arquivo include1.php // o include tenta funcionar mesmo se o arquivo nao exista ou esteja com erros, se o include nao achar nessa pasta ele pode procurar em outras

//se chamar o requiro ou o include duas vezes ele da erro, mas para evitar isso e so colocar include_once ou require_once

require_once "include1.php"; // como eu coloquei once ele vai ignorar porque eu ja chamei a funcao anteriormente se nao tivesse _once e apenas require daria erro

//require "include1.php"; //Mesma funcao do include de trazer a funcao do outro arquivo, mas obriga que o arquivo exista e esteja correto, senao da um erro fatal

$resultado = soma(10,20); 

echo "A soma de a + b e= $resultado";

?>