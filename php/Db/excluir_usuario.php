<?php
	include('../conexao.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM usuario WHERE id = {$id}";
	$query = mysqli_query($conexao, $sql);
	if($query) {
		header('Location: ../adm.php?ok=1');
	} else {
		echo('não foi possivel remover o usuário');
	}
	mysqli_close($conexao);
?>