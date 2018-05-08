<?php

$a = NULL;

$b = NULL;

$c = 10;

echo "Valores: a = $a, b = $b, e c = $c <br>";

echo"Mostre quem nao for nulo na ordem a,b,c: ";

echo $a ?? $b ?? $c; //Mostra o valor de a, se a for nulo(nao existir) mostra o b, se o b for nulo mostra o c

echo"<br>";

$a = NULL;

$b = 20;

$c = 10;

echo "Valores: a = $a, b = $b, e c = $c <br>";

echo"Mostre quem nao for nulo na ordem a,b,c: ";

echo $a ?? $b ?? $c; //Mostra o valor de a, se a for nulo(nao existir) mostra o b, se o b for nulo mostra o c

$a = 30;

$b = 20;

$c = NULL;

echo "<br> Valores: a = $a, b = $b, e c = $c <br>";

echo"Mostre quem nao for nulo na ordem a,b,c: ";

echo $a ?? $b ?? $c; //Mostra o valor de a, se a for nulo(nao existir) mostra o b, se o b for nulo mostra o c


?>