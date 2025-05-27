<html>
	<head>
		<meta charset="UTF-8">
	</head>

	<body>

		<?php

		$conexao = mysqli_connect("localhost","root","","escola");

		if (!$conexao){
			die("Erro ao conectar.");

		}else{
			#echo("Conexao OK. <br/>");

			$nome = $_POST['nome'];
			$formacao = $_POST['formacao'];

			$sql = "SELECT * FROM professor WHERE nome LIKE '%" .
				$nome . "%' and formacao LIKE '%" . 
				$formacao . "%'; " ;


			$resposta = mysqli_query($conexao, $sql);

			echo "<h3> LISTA DE PROFESSORES </h3>";

			if(mysqli_num_rows($resposta) > 0){
				while($linha = mysqli_fetch_assoc($resposta)){
					echo "Código: " . $linha['codigo'] . "<br/>";
					echo "Nome: " . $linha['nome'] . "<br/>";
					echo "Formação: " . $linha['formacao'] . "<br/>";
					echo "<hr>";
				}#fim-while

			}else{
				echo "<br>Nenhum resultado encontrado.<br/>";
			
			}#else-num-rows

		}#else-conexao

		?>

	</body>
</html>