<?php
//Json permite que linguagem diferentes se comuniquem, como php e java, com o json e possivel que o java leia os dados do php e virse-versa
$pessoas = array();

array_push($pessoas, array ( //insere dados no array
	'nome'=>'Love',
	'idade' => '32'

));
array_push($pessoas, array ( //insere dados no array
	'nome'=>'Patricia',
	'idade' => '32'

));
echo "Mostrando os arrays: ";
echo json_encode($pessoas);//mostra como estao armazenados os arrays no json. Pode usar a extesao Json Viewer no chrome para ficar estruturado


?>