<?php
$condicao = true;

while ($condicao){//enquanto essa condicao for verdade ele vai executando, diferente do for que vai em sequencia com incremento.
	$numero = rand(1,10); // vai trazer numeros aleatorios de 1 a 10
	
	if($numero === 3){
	
	echo "Tres";//quando encontrar o 3 nos numeros aleatorios que aparecerem vai aparecer Tres
	$condicao = false;// Quando ele encontrar o numero Tres ele vai parar
	
	}
	echo $numero . " ";//" " mesma funcao do <br>, esse echo e um else, ou seja, se o if da condicao anterior nao for executado ele executa esse

}


?>