<?php

$total = 100;
$desconto = 0.9;

do {//executa pelo menos uma vez antes de verificar a condicao
	$total *= $desconto; // e o mesmo que $total = $total * $desconto
	

}while ($total > 100);

echo $total;

?>