<?php
$cod = $_GET['cod'];

$conexao = mysqli_connect("localhost","root","","escola");
if (!$conexao){
	die("Erro ao conectar.");

}else{
	$sql = "SELECT * FROM professor WHERE codigo = " . $cod;
	$resposta = mysqli_query($conexao, $sql);
	$linha = mysqli_fetch_assoc($resposta);

?>

<html>
<head>
	<meta charset="UTF-8">
</head>
<body>

<h3>Alteração do Professor</h3>
<form method="POST" action="alterar.php">

Codigo: <input type="text" name="codigo" readonly value="<?php echo $linha['codigo']; ?>" > <br/>
Nome: <input type="text" name="nome" value="<?php echo $linha['nome']; ?>"> <br/>
Formação: <input type="text" name="formacao" value="<?php echo $linha['formacao']; ?>"> <br/>
<input type="submit" value="Salvar"> <br/>

</form>

</body>
</html>

<?php }#fim-else ?>
