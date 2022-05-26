<?php
	include('conexao.php');
    include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>1){
        header('Location: main.php');
    }
	
	$sql = "SELECT * FROM permissoes";
	$query = mysqli_query($conexao, $sql);
	
	$lista = [];
	while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$lista[] = $item;
	}
	
	echo json_encode($lista);
    echo('<br>');
    echo(' <a href="adm.php">Voltar</a>');
    echo(' <a href="add_permission.php">adicionar</a>');
	mysqli_close($conexao);
?>