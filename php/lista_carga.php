<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - ordens de carga</title>
		<script type="text/javascript" src="assests/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready( function(){
				$('button').on('click', function (){
					var id = $(this).closest('td').attr('id');
					var ele = $(this).closest('tr');
					if(confirm('Tem certeza que você quer excluir a carga?')){
						$.ajax({
							url:'Db/excluir_carga.php?id='+ id,
							type:'GET',
					}).done(function(retorno){
						if(retorno){
							ele.remove();
						}

					})
				}
				});

			});
		</script>
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM carga";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
		<a href="main.php">< Página principal</a>
       <h1>Painel de atividades:</h1>
		<table>
			<thead>
				<tr>
					<th>Id</th>
                    <th>Produto</th>
                    <th>Destino</th>
					<th>Status <br>C-concluído,<br> A-Ativo</th>
				</tr>
			</thead>
				
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['produto']; ?></td>
                    <td><?php echo $item['destino']; ?></td>
					<td><?php echo $item['status_']; ?></td>
                    <td id="<?php echo $item['id']; ?>"><button type="button" id="excluir" class="<?php echo $item['id']?>">Excluir carga</button>
					<td><a href="alterar_carga.php?id=<?php echo $item['id']?>">Alterar Ordem</a></td>
				</tr>
				<?php
					}
				?>
				<tr>
					<th><a href="nova_carga.php">Criar nova ordem de carga</a></th>
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