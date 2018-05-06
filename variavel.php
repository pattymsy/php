<?php
$nome = "Patricia";
$sobrenome = "Mesguvich";

echo "nome: $nome </br>" ;

var_dump($nome); //mostra o tipo da variavel na tela e a quantidade de caracteres

$nomeCompleto = $nome . $sobrenome;//concatenacao de variaveis = juntar variaveis
echo "</br>";
echo "$nomeCompleto";

echo "</br>";
$nomeCompleto2 = $nome . " " . $sobrenome; // coloca o espaco no meio para dar espaco entre o nome e o sobrenome

echo "$nomeCompleto2"; //pode tirar as aspas tambem funciona, aspas simples ou duplas nao faz diferenca, mas se comecar com simples termina com simples

$ano = 1986; //se colocar aspas vira texto (string)
echo "</br>";
/*exit = se colocar exit o php vai para de ler nesse ponto e todo o resto sera ignorado*/

/////////////////////////////////////////////////////
// Arrays ////
/////////////////////////////////////////////////////

$frutas = array("abacaxi","laranja","manga"); // abacaxi representa o 0, laranja o 1, manga o 2

echo $frutas[2];

/////////////////////////////////////////////////////
// Funcao DateTime
/////////////////////////////////////////////////////

$agora = new DateTime();

// echo $agora; // deu erro, parece que eu nao posso usar echo com DateTime Recoverable fatal error: Object of class DateTime could not be converted to string in C:\xampp\htdocs\phpclass\variavel.php on line 36

echo "</br>";

var_dump($agora); // para saber que tipo de variavel e DateTime

/////////////////////////////////////////////////////
// Funcao fopen
/////////////////////////////////////////////////////

$arquivo = fopen("index.php","r");
echo "</br>";
var_dump($arquivo);

//git
?>