<?php
	include('conexao.php');
?>
<!DOCTYPE html>

<html>
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
	<head>
		<title>Transportadora - Cadastrar Novo motorista</title>
		
		<link rel="stylesheet" href="assests/style.css">
	</head>
	<body>
		<form action="Db/cadastra_motorista.php" method="POST">

			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="70"><br><br>
			
			<label for="cpf">CPF:</label><br>
			<input type="cpf" name="cpf" id="cpf" maxlength="11"><br><br>

            
            <label for="carro">Carro:</label><br>
			<select name="carro" id="carro">
            </select><br><br>
			
            <label for="filial">Filial:</label><br>
			<select name="filial" id="filial">	
            </select><br><br>

			
			<button type="submit">Cadastrar</button>
		</form>
        <a href="main.php">voltar</a>
	</body>
</html>