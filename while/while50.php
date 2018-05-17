<?php
$condicao = true;

while ($condicao){//enquanto essa condicao for verdade ele vai executando, diferente do for que vai em sequencia com incremento.
	$numero = rand(1,50); // vai trazer numeros aleatorios de 1 a 10
	
	if($numero === 6){
	
	$condicao = false;// Quando ele encontrar o numero Seis ele vai parar de executar
	
	}
	echo $numero . " ";//" " mesma funcao do <br>, esse echo e um else, ou seja, se o if da condicao anterior nao for executado ele executa esse

}


?>