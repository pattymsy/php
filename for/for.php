<?php

echo "Incremento 1: comecando do 0 ate 9 <br>";
for($i = 0; $i < 10; $i++){
		echo $i . "<br>";

}
echo "<br>Mostrando de 0 ate 99 com incrementos de 5, pulando de 5 em 5<br>";

for($i = 0; $i < 100; $i+=5){
		echo $i . ", ";

}

echo "<br><br>Mostrando de 0 ate 99 com incrementos de 5, pulando de 5 em 5<br>, excluindo os numeros maiores do que 20 e menores de 80<br>";

for($i = 0; $i < 100; $i+=5){
        if($i > 20 && $i <80) continue; //continue e uma palavra reservada que diz para continuar desse ponto, se o if tiver so um argumento voce pode colocar o argumento sem chaves.
		echo ", " . $i ;

}

echo "<br><br>Mostrando de 0 ate 99 com incrementos de 5, pulando de 5 em 5<br>, excluindo os numeros do 20 ao 80<br>";

for($i = 0; $i < 100; $i+=5){
        if($i >= 20 && $i <=80) continue; //continue e uma palavra reservada que diz para continuar desse ponto, se o if tiver so um argumento voce pode colocar o argumento sem chaves.
		echo ", " . $i ;

}

echo "<br><br>Mostrando de 0 ate 99 com incrementos de 5, pulando de 5 em 5<br>, excluindo os numeros do 20 ao 80<br>, e excluindo com o break acima do 90<br>";

for($i = 0; $i < 100; $i+=5){
        if($i >= 20 && $i <=80) continue; //continue e uma palavra reservada que diz para continuar desse ponto, se o if tiver so um argumento voce pode colocar o argumento sem chaves.
		if($i === 90) break;//3 iguais === significa que tem que ser igual no tipo de variavel e no valor
		echo ", " . $i ;

}
?>