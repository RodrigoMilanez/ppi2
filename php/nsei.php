<!DOCTYPE html>
<html>
	<head>
		<title>jQuery</title>
		<script type="text/javascript" src="assests/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#botao').on('click', function () {
					var comentario = $('#comentario').val();
					$('ul').append('<li>' + comentario + '</li>');
					$('#comentario2').append('<option value="' + comentario + '">' + comentario + '</option>');
					$('#comentario3').append('<p>' + comentario + '</p>');
				});
				$('#botao2').on('click',function () {
					$('#item').empty();
				});
				$('#excluir li').on('click', function () {
					$(this).remove();
				});
				$('#botao3').on('click', function () {
					$('#modificar li').each(function () {
						var texto = $(this).html();
						$(this).html('<strong>' + texto + '</strong>')
					});
				});
			});
		</script>
	</head>
	<body>
		<form>
			<textarea name="comentario" id="comentario"></textarea><br>
			<button type="button" id="botao">Comentar</button>
		</form>
		<ul>
		</ul>
		<select name="comentario2" id="comentario2">
		</select>
		<div id="comentario3">
		</div>
		
		<select name="item" id="item">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		<button type="button" id="botao2">Apagar</button>
		
		<ol id="excluir">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ol>
		
		<ul id="modificar">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
		<button type="button" id="botao3">Mudar</button>
	</body>
</html>