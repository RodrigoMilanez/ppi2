<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alterar Motoristas - Transportadora</title>
	</head>
	<body>
		<?php
			
			$id = $_GET['id'];
			$sql = "UPDATE usuario SET permissao = '1' WHERE id = {$id}";
			$query = mysqli_query($conexao, $sql);
		
			if($query) {
				header('Location: ../adm.php?ok=1');
			} else {
				echo 'Não foi possível promover o usuario! Erro: ' . mysqli_error($conexao);
			}
            
		?>
	</body>
</html>

<?php
	mysqli_close($conexao);
?>