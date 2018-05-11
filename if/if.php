<?php

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeIdoso = 65;

 if ($qualASuaIdade < $idadeCrianca){
    
	echo "Voce e um(a) Crianca";
  
 }
 if (($qualASuaIdade > $idadeCrianca) && ($qualASuaIdade > $idadeAdulto)){
    
	echo "Voce e um(a) Adulto";
  
 }
 else{
    
	echo "Voce e um(a) Idoso";
  
 }

?>