<?php include("conexao.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista Contatos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>


	<h1> Lista de Telefone</h1>
	<table width="100%" border="1" cellspacing="0" cellpadding="10">
		<tr>
			<td>Nome</td>
			<td>Sobrenome</td>
			<td>Celular</td>
			<td>Telefone</td>
			<td>Rua</td>
			<td>Bairro</td>
			<td>Cidade</td>
		</tr>

		<?php 
			$sql = "select * from contato";

				//if ($conexao->query($sql) === TRUE) {
					
					while($campo = mysql_fetch_array($sql)){ 
						$nome = $campo['nome'];
						$sobrenome = $campo['sobrenome'];
						$celular = $campo['celular'];
						$telefone = $campo['telefone'];
						$rua = $campo['rua'];
						$bairro = $campo['bairro'];
						$cidade = $campo['cidade'];
						
						?>

				<tr>
					<td><?php echo $nome; ?></td>
					<td><?php echo $sobrenome; ?></td>
					<td><?php echo $celular; ?></td>
					<td><?php echo $telfone; ?></td>
					<td><?php echo $rua; ?> </td>
					<td><?php echo $bairro; ?></td>
					<td><?php echo $cidade; ?></td>
				</tr>

				<?php 
				//} else {


				//	echo "erro: " . $sql . "<br>" . $conexao->error;
				//}
			}
			//$conexao->close();
		echo $campo['nome'];
			?>
		



	</table>

</body>
</html>