<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Cadastrar Carro</title>
	</head>
	<body>
		<?php
			$produto    = $_POST['produto'];
			$destino    = $_POST['destino'];
			$partida    = $_POST['partida'];
            $motorista = $_POST['motorista'];

			
			$sql = "INSERT INTO  carga(produto, id_motorista, destino, saida, status_) 
            VALUES ('{$produto}','{$motorista}', '{$destino}', '{$partida}', 'A')";
			
            
            
            $query = mysqli_query($conexao, $sql);
			
			if($query) {
				echo 'Carro cadastrado com sucesso!';
			} else {
				echo 'Não foi possível cadastrar o Carro! Erro: ' . mysqli_error($conexao);
			}
		?>
        <a href="../motoristas.php">Voltar</a>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>