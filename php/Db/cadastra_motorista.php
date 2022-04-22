<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar Motorista</title>
	</head>
	<body>
		<?php
			$nome     = $_POST['nome'];
			$filial    = $_POST['filial'];
			$cpf    = $_POST['cpf'];
			
			$sql = "INSERT INTO motorista(nome, id_filial, cpf) VALUES ('{$nome}', '{$filial}', '{$cpf}')";
			$query = mysqli_query($conexao, $sql);
			
			if($query) {
				echo 'Motorista cadastrado com sucesso!';
			} else {
				echo 'Não foi possível cadastrar o Motorista! Erro: ' . mysqli_error($conexao);
			}
		?>
		<a href="../motoristas.php">Voltar</a>
	</body> 
</html>
<?php
	mysqli_close($conexao);
?>