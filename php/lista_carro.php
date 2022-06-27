<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transportadora - Frota</title>
		<script type="text/javascript" src="assests/jquery.js"></script>
		<script type="text/javascript">
			
			$(document).ready( function(){
				$('button').on('click', function (){
					var id = $(this).closest('td').attr('id');
					var ele = $(this).parent().parent();
					if(confirm('Tem certeza que você quer excluir o carro?')){
						$.ajax({
							url:'Db/excluir_carro.php?id='+ id,
							type:'GET',
							cache: false,
					}).done(function(retorno){
						if(retorno){
							ele.remove();
						}else{
						
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
			$sql = "SELECT * FROM carro";
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
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['modelo']; ?></td>
                    <td><?php echo $item['placa']; ?></td>
                    <td id="<?php echo $item['id']; ?>"><button type="button" id="excluir" class="<?php echo $item['id']?>">Excluir carro</button>
					</td>
					<td><a href="alterar_carro.php?id=<?php echo $item['id']?>">Alterar carro da frota</a></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<th><a href="novo_carro.php">Cadastrar novo carro</a></th>
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