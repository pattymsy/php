<?php
//diferenca entre if e switch case, o if voce pode fazer uma condicao maior ou igual no switch case a condicao tem que ser obrigatoriamente igual

$diaDaSemana = date("w");//date e uma funcao reservada para puxar o dia de hoje, e define a semana de domingo a sabado na ordem de 0 a 6

echo "Hoje e':";

switch ($diaDaSemana){

	case 0:
	echo "Domingo";
	break;
	
	
	case 1:
	echo "Segunda-feira";
	break;
	
	
	case 2:
	echo "Terca-feira";
	break;
	
	
	case 3:
	echo "Quarta-feira";
	break;
	
	
	case 4:
	echo "Quinta-feira";
	break;
	
	
	case 5:
	echo "Sexta-feira";
	break;
	
	
	case 6:
	echo "Sabado";
	break;


}
?>