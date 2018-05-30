<?php
// constante como array funciona apenas no php

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'test'
], true);//nao pode usar espacos dentro das constantes, no segundo parametro usando colchetes para representar o array, esse true depois do array quer dizer que eu posso chamar a variavel tudo maiuscula como esta ou tudo minuscula, ou seja, deixar de ser case sensitive. Se tirar o true com a virgula nao fazx diferenca nenhuma apenas precisa chamar a constante exatamente como a definiu

echo "Mostrando o Array <br>";
print_r(BANCO_DE_DADOS);

?>