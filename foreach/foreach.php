<?php
$meses = array(
 		"Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes){//traz cada item do array
	echo "O mes e: ".$mes."<br>";
	
}


foreach ($meses as $index => $mes){//traz cada item(mes) do array em sua posicao(index)
	echo "Indice: " .$index."<br>";// array sempre comeca em 0
	echo "O mes e: ".$mes."<br><br>";
	
}

?>