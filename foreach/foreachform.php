

<form><!-- Se nao colocar nada e' Get a funcao, nos usamos post para enviar uma mensagem enviada pelo site. Para identar e' so' selecionar e apertar um tab -->
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="Enviar">
</form>
<?php
foreach ($_GET as $key => $value){//key = name e value vai ser o valor que colocar<br>

		echo "Nome do campo: " . $key;
		echo " Valor do campo: ". $value;
		echo "<hr>"; //cria uma linha abaixo
        

}
echo "<br><br>";
if (isset($_GET)){ // para nao dar erro de variavel nao definida colocar um isset, o que nao precisou no primeiro caso, so para criterio de informacao
	foreach ($_GET as $key => $value){//key = name e value vai ser o valor que colocar<br>
	
			echo "Nome do campo: " . $key;
			echo " Valor do campo: ". $value;
			echo "<hr>";
			
	
	}
}
?>