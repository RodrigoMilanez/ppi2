<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Atividades</title>
		<style type="text/css">
			table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM motorista AS m 
            JOIN carro AS c ON m.id_carro = c.id 
            JOIN carga AS t ON m.id = t.id_motorista WHERE t.status_ = 'A' ";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
       <h1>Painel de atividades:</h1>
		<table>
			<thead>
				<tr>
					<th>Nome</th>
                    <th>Carro</th>
                    <th>Entrega atual</th>
                    <th>Com destino a</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['placa']; ?></td>
                    <td><?php echo $item['produto']; ?></td>
                    <td><?php echo $item['destino']; ?></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<th><a href="cadastrar_motorista.php">Cadastrar novo motorista</a></th>
					<th><a href="novo_carro.php">Cadastrar novo carro</a></th>
					<th><a href="nova_carga.php" span="2">Criar nova ordem de carga</a> </th>
				</tr>
			</tbody>
            
		</table>
        <a href="index.php">voltar</a>
		<?php
			}
		?>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>