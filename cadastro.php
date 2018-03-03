<!DOCTYPE html>
<html>
<head>
	<title>Cadastro contato</title>
</head>
<body>

	<form action="inclusao.php" method="POST">
		
		<div>
			<label>Nome:</label>
			<input type="text" name="nome">
		</div>
		<div>
			<label>Sobrenome:</label>
			<input type="text" name="sobrenome">
		</div>
		<div>
			<label>Rua:</label>
			<input type="text" name="rua">
		</div>
		<div>
			<label>Bairro:</label>
			<input type="text" name="bairro">
		</div>
		<div>
			<label>Cidade:</label>
			<input type="text" name="cidade">
		</div>
		<div>
			<label>CEP:</label>
			<input type="text" name="cep">
		</div>
		<div>
			<label>Celular:</label>
			<input type="text" name="celular">
		</div>
		<div>
			<label>Telefone:</label>
			<input type="text" name="telefone">
		</div>

		<div>
			<input type="submit" name="">
		</div>

			<?php include("php/mensagem.php"); ?>

	</form>

</body>
</html>