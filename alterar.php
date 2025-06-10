<?php

$codigo   = $_POST['codigo'];
$nome     = $_POST['nome'];
$formacao = $_POST['formacao'];

$conexao = mysqli_connect("localhost","root","","escola");
if (!$conexao){
	die("Erro ao conectar.");

}else{
	$sql = "UPDATE professor SET nome = '$nome', formacao = '$formacao' 
	WHERE codigo = $codigo;";
	
	$resposta = mysqli_query($conexao,$sql);
	
	if($resposta){
		echo "ATUALIZADO COM SUCESSO.<br/>";
	}else{
		echo "ERRO AO ATUALIZAR.<br/>";
	}
	
	echo "<a href='professor_listar.php'>Voltar</a>";

}#fim-else

?>