<?php
	include('conexao.php');
	include('ler_session.php');
    if ($_SESSION['usuario']['permissao']>1){
        header('Location: main.php');
    }
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Motoristas</title>
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM usuario AS u";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
		<a href="main.php">< Página principal</a>
       <h1>Painel de Administrador:</h1>
		<table>
			
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['apelido']; ?></td>
                    <td><?php echo $item['permissao']; ?></td>
                    <td><a href="Db/excluir_usuario.php?id=<?php echo $item['id']?>">Excluir usuario</a></td>
					<td><a href="alterar_usuario.php?id=<?php echo $item['id']?>">Alterar usuario</a></td>
					<td><a href="Db/promove_usuario.php?id=<?php echo $item['id']?>">Promover para administrador</a></td>
					
				</tr>
				<?php
					}
				?>
				<tr>
					<th></th>
					<th><a href="novo_usuario.php">Cadastrar novo usuario</a></th>
					<td><a href="permissoes.php">Permissoes</a></td>
				</tr>
			</tbody>
            
		</table>
        
		<?php
			}
		?>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>