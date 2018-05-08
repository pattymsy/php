<?php

$resultado = 10 + 3 / 2;

echo "Resultado de 10 + 3 /2= $resultado;<br>";

$resultado2 = (10 + 3) / 2;

echo "Resultado de (10 + 3)/2 = $resultado2";

$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

echo "<br> Essa expressao (10 + 3) / 2 > 5 && 10 + 5 < 3) e' falsa ou verdadeira?";

var_dump($resultado3); // as duas condicoes precisao ser verdadeiras com o &&, 6.5>5 (verdadeiro), 15<3 (falso), V&F vai dar falso

$resultado4 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

echo "<br> Essa expressao (10 + 3) / 2 > 5 && 10 + 5 < 20) e' falsa ou verdadeira?";

var_dump($resultado4);

$resultado5 = (10 + 3) / 2 > 5 || 10 + 5 < 3; // || = OR condicao

echo "<br> Essa expressao (10 + 3) / 2 > 5 || 10 + 5 < 3) e' falsa ou verdadeira?";

var_dump($resultado5); // uma das duas precisam ser verdadeira com o ||, 6.5>5 (verdadeiro), 15<3 (falso), V||F vai dar verdadeiro


?>