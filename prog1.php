<?php

echo "Meu texto.<br>";

$nome = "Abrahão";  # variável

echo "Seja bem vindo, $nome!<br>"; # texto + variável

$quantidade = 12;
$valor = 7.49;

$total = $quantidade * $valor;

echo "Total = " . $total;

if ($total > 100){
	echo "<br>Tá caro!";
}else{
	echo "<br>Preço bom!";
}

?>