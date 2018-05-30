<?php
// constante se usa quando nao se vai mudar o seu valor, ou muito raramente

define("SERVIDOR", "127.0.0.1");//essa funcao tem dois parametros: nome da constante, valor da constante. Nesse caso o servidor e o ip do servidor.

echo SERVIDOR; // Diferentemente da variavel nao precisa colacar o $ antes. Sempre e bom usar constantes com letras maiusculas para boas praticas

echo "<br> Valor da constante ip: " . SERVIDOR;

?>