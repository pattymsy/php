<?php

/////////////////////////////////////////////////////
// Variaveis pre-definidas and $_GET pega valores 
// inseridos na url ou em um formulario
/////////////////////////////////////////////////////

$nome = $_GET["a"];

var_dump($nome);

echo"</br>";

echo "Nome: $nome";

//localhost/php/varpre.php?a=123  (a partir do ? representa a variavel)

$numero = (int)$_GET["b"]; //definindo o tipo da variavel, nesse caso inteiro (int)

echo"</br>";

var_dump($numero);

echo"</br>";

echo "Nome: $numero";

//http://localhost/php/varpre.php?a=125&b=25 (vai mostrar os valores da variavel a e da variavel b, & = e, ou seja, a e b )

/////////////////////////////////////////////////////
// Puxar o ip do navegador REMOTE_ADDR
/////////////////////////////////////////////////////
echo"</br>";

$ip = $_SERVER["REMOTE_ADDR"];

echo "Ip = $ip";

/////////////////////////////////////////////////////
// Puxar o diretorio do arquivo acessado SCRIPT_NAME
/////////////////////////////////////////////////////
echo"</br>";

$name = $_SERVER["SCRIPT_NAME"];

echo "Name = $name";

?>