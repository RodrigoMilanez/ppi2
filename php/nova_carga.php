<?php
	include('conexao.php');
?>
<!DOCTYPE html>
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
			$(document).ready(function () {
				$.ajax({
					url: "Db/JQuery/recupera_motorista.php",
					method: 'GET'
				}).done(function (data) {
					var obj = JSON.parse(data);
					$.each(obj, function(i, v) {
						$('#motorista').append('<option value="' + v.id + '">' + v.nome +'</option>');
					});
				});
			});
	</script>
<html>
	<head>
		<title>Transportadora - Cadastrar novo carro</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<form action="Db/cadastra_carga.php" method="POST">

			<label for="produto">Produto a ser transportado:</label><br>
			<input type="produto" name="produto" id="produto" maxlength="70"><br><br>
			
			<label for="destino">Destino (onde o produto deve ser entregue):</label><br>
			<input type="destino" name="destino" id="destino" maxlength="70"><br><br>

            <label for="motorista">Motorista responsável:</label><br>
			<select name="motorista" id="motorista">
            </select><br><br>



			
			<button type="submit">Cadastrar</button>
		</form>
        <br>
		<a href="main.php">voltar</a>
	</body>
</html>