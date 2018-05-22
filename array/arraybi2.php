<?php
//Array bidimensional
$pessoas = array();

array_push($pessoas, array ( //insere dados no array
	'nome'=>'Jerry',
	'idade' => '37'

));
array_push($pessoas, array ( //insere dados no array
	'nome'=>'Patricia',
	'idade' => '32'

));
echo "Mostrando os arrays: ";
print_r($pessoas);

echo "<br> Mostrando array com index 0: ";
print_r($pessoas[0]);

echo "<br> Mostrando o nome do array 1: ";
print_r($pessoas[1]['nome']);//pode colocar o nome da chave no lugar do numero do array


?>