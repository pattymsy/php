<?php

$nome = "patricia Mesguvich";

echo "Nome como foi escrito: $nome<br>";

echo "Colocando todas em maiusculo usando funcao no echo: $nome";

echo strtoupper($nome); // converte todas as letras em maiusculo


echo "<br>";

$nome2 = strtoupper($nome);

echo "Nome todo maiusculo: $nome2 <br>";

$nome2 = strtolower($nome); //pode usar a mesma variavel usada antes ela simplesmente sera reescrita com o novo valor

echo "Nome todo minusculo: $nome2 <br>";

$nome2 = ucwords($nome);

echo "Nome com a primeira letra de cada palavra maiuscula: $nome2 <br>";

$nome2 = ucfirst($nome);

echo "Nome com a primeira letra da primeira palavra maiuscula: $nome2 <br>"; //so muda a da primeira nao altera as outras











?>