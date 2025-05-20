<?php

# CONEXÃO - servidor, usuario, senha, banco
$conexao = mysqli_connect("localhost","root","","escola");

if (!$conexao){
	die("Erro ao conectar.");

}else{
	echo("Conexao OK.");
	
	$nome =  $_POST["nome"];  # CAPTURAR OS DADOS DO FORM
	$curso = $_POST["curso"];
	$turno = $_POST["turno"];
	
	# TESTAR SE O CHECKBOX FOI MARCADO NO FORM
	$bolsista = "não";
	if (isset($_POST["bolsista"])){
		$bolsista = "sim";
	}
	
	$atleta = "não";
	if(isset($_POST["atleta"])){
		$atleta = "sim";
	}
	
	$observacao = $_POST["observacao"];
	
	# MONTAR O COMANDO SQL
	$sql = " INSERT INTO ALUNO VALUES (NULL, '$nome',
	'$curso', '$turno', '$bolsista', '$atleta', 
	'$observacao') " ;
	
	#EXECUTAR O COMANDO SQL
	
	if( mysqli_query($conexao, $sql) ){
		echo "Inserido com sucesso.";
	}else{
		echo "Erro inserindo dados.";
	}
	
	mysqli_close($conexao); # ENCERRAR A CONEXÃO
	
}#conexao-ok


?>