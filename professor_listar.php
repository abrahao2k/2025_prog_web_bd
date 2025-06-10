<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	
	<script>
		function excluir(cod){
			let resposta = confirm("Excluir o registro?");
	
			if(resposta){
				window.location.href="professor_excluir.php?cod=" + cod;
			}else{
				alert("Nada foi excluído.");
			}
		}
		
	</script>
	

	<body>

		<?php

		$conexao = mysqli_connect("localhost","root","","escola");

		if (!$conexao){
			die("Erro ao conectar.");

		}else{
			#echo("Conexao OK. <br/>");

			$sql = "SELECT * FROM professor ORDER BY nome;";
			$resposta = mysqli_query($conexao, $sql);

			echo "<h3> LISTA DE PROFESSORES </h3>";

			if(mysqli_num_rows($resposta) > 0){
				while($linha = mysqli_fetch_assoc($resposta)){
					echo "Código: " . $linha['codigo'] . "<br/>";
					echo "Nome: " . $linha['nome'] . "<br/>";
					echo "Formação: " . $linha['formacao'] . "<br/>";
					
					echo "<a href='#' onClick='excluir(" . $linha['codigo'] 
					. ")'>Excluir</a><br/>";
					
					echo "<a href='professor_alterar.php?cod=" . $linha['codigo'] .
					"'>Alterar</a><br/>";
					
					echo "<hr>";
				}#fim-while

			}else{
				echo "<br>Nenhum resultado encontrado.<br/>";
			
			}#else-num-rows

		}#else-conexao

		?>

	</body>
</html>