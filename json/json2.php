<?php
//Agora passando os dados do json para o pho
$json = ' [{"nome":"Love","idade":"32"},{"nome":"Patricia","idade":"32"}]';// tirei o json pronto do exemplo anterior

$data = json_decode($json, true);// se nao colocar true ele transforma o array em objeto segundo professores, nao vi diferenca nenhuma

echo "recuperando dados com json: ";
var_dump($data);


$data2 = json_decode($json);
echo "<br>recuperando dados com json: ";
var_dump($data);


?>