<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<script type="text/javascript" src="assests/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$.ajax({
					url: "Db/JQuery/recupera_filial.php",
					method: 'GET'
				}).done(function (data) {
					var obj = JSON.parse(data);
					$.each(obj, function(i, v) {
						$('#filial').append('<option value="' + v.id + '">' + v.localidade +'</option>');
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
		<form action="Db/cadastra_carro.php" method="POST">

			<label for="placa">Placa:</label><br>
			<input type="text" name="placa" id="placa" maxlength="70"><br><br>
			
			<label for="modelo">Modelo:</label><br>
			<input type="modelo" name="modelo" id="modelo" maxlength="70"><br><br>

            <label for="filial">Filial:</label><br>
			<select name="filial" id="filial">
            </select><br><br>



			
			<button type="submit">Cadastrar</button>
		</form>
        <br>
        <a href="main.php">voltar</a>
	</body>
</html>