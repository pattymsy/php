<?php

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeIdoso = 65;

 if ($qualASuaIdade < $idadeCrianca){
    
	echo "Voce e um(a) Crianca";
  
 }
 elseif ($qualASuaIdade < $idadeIdoso){
    
	echo "Voce e um(a) Adulto";
  
 }
 else{
    
	echo "Voce e um(a) Idoso";
  
 }
 
 echo "</br>";
 
 
 echo($qualASuaIdade < $idadeAdulto)?"Menor de Idade":"Maior de Idade";//Funciona como if pode ser usado em condicoes simples, desde que nao chame uma funcao

?>