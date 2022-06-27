<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<script type="text/javascript" src="assests/jquery.js"></script>
<link rel="stylesheet" href="assests/style.css">
<html>
	<head>
		<title>Transportadora - Motoristas</title>
		<script type="text/javascript" src="assests/jquery.js"></script>
		<script type="text/javascript">
			
			$(document).ready(function () {
				$.ajax({
					url: "Db/JQuery/recupera_carro.php",
					method: 'GET'
				}).done(function (data) {
					var obj = JSON.parse(data);
					$.each(obj, function(i, v) {
						$('#carro').append('<option value="' + v.id + '">' + v.placa +'</option>');
					});
				});
			});
			$(document).ready( function(){
				$('button').on('click', function (){
					var id = $(this).closest('td').attr('id');
					var ele = $(this).closest('tr');
					if(confirm('Tem certeza que você quer excluir o motorista?')){
						$.ajax({
							url:'Db/excluir_motorista.php?id='+ id,
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
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM motorista AS m";
			$query = mysqli_query($conexao, $sql);
			if(!$query) {
				echo mysqli_error($conexao);
			} else {
		?>
		
		
	<a href="main.php"><- Página principal</a>
       <h1>Painel de Motoristas:</h1>
		<table>
			
			<tbody>
				<?php
					while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><img src="img/<?php echo $item['foto']; ?>" alt="pfp" title="pfp"></td>
					<td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['cpf']; ?></td>
					<td id="<?php echo $item['id']; ?>"><button type="button" id="excluir" class="<?php echo $item['id']?>">Excluir motorista</button>
					<td><a href="alterar_motorista.php?id=<?php echo $item['id']?>">Alterar motorista</a></td>
					<td><a href="add_pfp.php?id=<?php echo $item['id']?>">inserir foto de perfil</a></td>
					
				</tr>
				<?php
					}
				?>
				<tr>
					<th></th>
					<th><a href="cadastrar_motorista.php">Cadastrar novo motorista</a></th>
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