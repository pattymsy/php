<?php 

echo "<br>Criando opcoes com a tag < select >. Mostrando o ano atual e os ultimos 20 anos para escolha:<br>";
echo "<select>";

for($i = date("Y"); $i >= date("Y")-20 ;$i--){ 
		echo '<option value="'.$i.'">' . $i .'</option>';//melhor colocar aspas simples quando se usa aspas duplas, no select eu preciso passar a variavel tanto para alimentar como para exibir
}

echo "</select>";

?>