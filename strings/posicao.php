<?php

$frase = "Deus e tudo";

echo "Minha frase e: $frase. E quero encontrar tudo.";

$q = strpos($frase, "tudo"); //encontrar a posicao de um valor dado dentro da variavel ("variavel que eu vou procurar","valor ou dado que eu quero encontrar")

echo "<br>Palavra que eu procuro esta depois do caracter: ";
var_dump($q);//vai trazer em quantas casas voce vai achar a palavra procurada

echo "<br>O texto antes da palavra que eu procuro e: ";

$texto = substr($frase,0,$q); //Mostrar de um ponto escolhido ate outro("A variavel que eu quero","quero que comece do 0","onde eu quero que termine")

var_dump($texto);

$palavra = "e";

$texto2 = substr($frase,$q + strlen($palavra), strlen($frase)); //mostrar valores de um ponto ate outro(texto, "palavra escolhida" + (quantidade de caracteres dessa palavra, seu comprimento legth), comprimento total)
echo "<br>Mostra dados de um ponto ao outro escolhidos: ";
var_dump($texto2);

?>