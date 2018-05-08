<?php
//atribuir um valor a variavel

$nome = "Patricia";

echo $nome . " Silva <br>"; // "." operador de concatenacao, que junta a variavel $nome com a string "mais alguma coisa"

echo "</br>";

$nome .= " Mesguvich <br>"; // pega o valor da variavel nome e adiciona a string entre aspas

echo $nome;

$valortotal = 0;

$valortotal += 100; // soma o valor da variavel com mais 100

$valortotal -=25; // subtrai

$valortotal *= 10; //multiplica

$valortotal /= 5; //divide

$valortotal -= 0.1*$valortotal; // variavel menos 10%

echo $valortotal;



?>