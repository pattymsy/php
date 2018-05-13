<?php

echo "Mostrando o ano atual e os ultimos 20 anos:<br>";

for($i = date("Y"); $i >= date("Y")-20 ;$i--){ //date vai retornar a data atual, Y maiusculo vai retornar o ano em quatro digitos. date("Y")-20 vai retornar a data atual com o date menos 20 anos atras, se preocupar em incrementar corretamente se voce colocar i++, o for nunca vai atingir a condicao dois fazendo um loop infinito e podendo fazer o seu servidor cair consumindo toda a memoria
		echo ", " . $i;
}

echo "<br>Criando opcoes com a tag < select >. Mostrando o ano atual e os ultimos 20 anos para escolha:<br>";
echo "<select>";

for($i = date("Y"); $i >= date("Y")-20 ;$i--){ 
		echo '<option value="'.$i.'">' . $i .'</option>';//melhor colocar aspas simples quando se usa aspas duplas, no select eu preciso passar a variavel tanto para alimentar como para exibir
}

echo "</select>";
?>