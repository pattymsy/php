<?php
// As variveis tem escopo local por padrao, elas sao validas e visiveis dentro apenas do seu escopo
$nome = "Patricia";// para usar essa variavel dentro do escopo da funcao teste eu preciso chamar essa variavel dentro da funcao com $global $nome

function teste(){//comeco de um escopo local teste

   global $nome;
   echo "Nome: $nome";
   
}//fim de um escopo local teste

function teste2(){//comeco de um escopo local teste2

   echo "</br>";
   $nome = "Jerry"; // Essa variavel so vale nesse escopo e nao interfere com a variavel da funcao teste
   echo "Nome: $nome";
   
}//fim de um escopo local teste2

teste(); //voce esta chamando a funcao

teste2();


?>