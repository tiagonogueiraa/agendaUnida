<?php 
	include("conexao.php");

	$consulta = "SELECT * FROM contato";
	$con = $mysqli->query($consulta) or die($mysqli->error);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Lista Contatos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


	<h1>Lista de Telefone</h1>

	<div class="container">
	<table width="75%" border="1" cellspacing="0" cellpadding="10">
		<tr>
			<td>Nome</td>
			<td>Sobrenome</td>
			<td>Celular</td>
			<td>Telefone</td>
			<td>Rua</td>
			<td>Bairro</td>
			<td>Cidade</td>
		</tr>

		<?php while($dado = $con->fetch_array()){ ?>

		<tr>
			<td> <?php echo $dado["nome"]; ?></td>
			<td> <?php echo $dado["sobrenome"]; ?></td>
			<td> <?php echo $dado["celular"]; ?></td>
			<td> <?php echo $dado["telefone"]; ?></td>
			<td> <?php echo $dado["rua"]; ?></td>
			<td> <?php echo $dado["bairro"]; ?></td>
			<td> <?php echo $dado["cidade"]; ?></td>
			
		</tr>

		<?php } ?>
	</table>

</div>
</body>
</html>