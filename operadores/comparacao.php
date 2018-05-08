<?php

$a = 30;

$b = 55;

echo "Valor de a = $a <br>" ;

echo "Valor de b = $b <br>";

echo "A e' maior que b? ";

var_dump($a > $b); //retorna se e verdadeira ou falsa essa expressao, a e' maior que b

echo "</br> A e' menor que b? ";

var_dump($a < $b); //retorna se e' verdadeiro ou falso se a e' menor que b

echo "</br> A recebe o valor de b ";

var_dump($a = $b); //esta' atribuindo o valor de b a a, ou seja, agora o a vale 55

echo "</br> A e' igual a b? ";

var_dump($a == $b); //como o a mudou para o valor de b, entao a resposta sera verdadeira, a = b, voce esta perguntando com o var_dump se a = b

echo "</br> Mudando o valor de a para 5";

$a=5;

echo "</br> A e' igual a b? ";

var_dump($a == $b);

echo "</br> Novo valor de a: ";

var_dump($a);

echo "</br> Mudando o valor de b para 5.0";

$b=5.0; //Agora b e' do tipo float e vale 5

echo "</br> Novo valor de b: ";

var_dump($b);

echo "</br> A e' b sao iguais no tipo de variavel e valores? ";

var_dump($a === $b); //Saber se essas duas variaveis sao iguais no tipo no valor

echo "<br> Ou seja, a e' um 5 inteiro e b e' um 5 float";

echo "</br> A e' diferente de b? ";

var_dump($a != $b); //apenas verifica se os valores sao iguais

echo "</br> A e' diferente de b em valor e tipo de variavel? ";

var_dump($a !== $b); //perguntando se eles sao identicos, ou seja, valores e tipos das variaveis

echo "</br> A e' e maior ou igual a b? ";

var_dump($a >= $b); //perguntando se a e' maior ou igual a b

echo "</br> A e' e menor ou igual a b? ";

var_dump($a <= $b); //perguntando se a e' menor ou igual a b





?>