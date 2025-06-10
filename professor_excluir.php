<html>
<head>
<?php

$cod = $_GET['cod'];

$conexao = mysqli_connect("localhost","root","","escola");
$sql = "DELETE FROM professor WHERE codigo = " . $cod;

mysqli_query($conexao,$sql);

echo "Excluído com sucesso.<br/>";
echo "<a href='professor_listar.php'>Voltar</a>";

?>


</head>
</html>