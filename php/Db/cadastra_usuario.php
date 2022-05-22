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
			$usuario     = $_POST['usuario'];
			$senha    = $_POST['senha'];
			$adm    = $_POST['adm'];
            $array = array('usuario' => $usuario, 'senha' => $senha, 'adm' => $adm,);
            echo  json_encode($array);
            
			/*$sql = "INSERT INTO motorista(nome, id_filial, cpf, foto) VALUES ('{$nome}', '{$filial}', '{$cpf}', 'default.jpg')";
			$query = mysqli_query($conexao, $sql);
			
			if($query) {
				echo 'Motorista cadastrado com sucesso!';
			} else {
				echo 'Não foi possível cadastrar o Motorista! Erro: ' . mysqli_error($conexao);
			}*/
		?>
		<a href="../main.php">Voltar</a>
	</body> 
</html>
<?php
	mysqli_close($conexao);
?>