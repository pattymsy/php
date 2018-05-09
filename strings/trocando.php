<?php

$empresa = "PMSites";

$empresa = str_replace("PMSites","Dia de Patty",$empresa); //str_replace troca valores, str_replace("O que quer trocar?", "Trocando pelo que?", "em qual variavel?"

echo "Trocando uma informacao por outra: $empresa";

$empresa = str_replace("ia","ay",$empresa);

echo "<br> Trocando partes da palavra: $empresa";

?>