<?php
	include('../../conexao.php');
	$sql = "SELECT id, localidade FROM filial";
	$query = mysqli_query($conexao, $sql);
	
	$lista = [];
	while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$lista[] = $item;
	}
	echo json_encode($lista);
	
	mysqli_close($conexao)
?>