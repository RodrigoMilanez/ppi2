/*DANDO ERRO*/
<?php
	include('../conexao.php');
	$json = $_POST['json'];
	$array = json_decode($json, true);
	
	foreach($array as $valor) {
		$sql = "INSERT INTO permissoes(descricao) VALUES ('{$array['descricao']}')";
		mysqli_query($conexao, $sql);
	}
	header('Location: ../permissoes.php');
	mysqli_close($conexao);
?>