<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa</title>
</head>
<body>

	<div class="container">

		<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">

			<input type="text" name="palavra">
			<input type="submit" value="Buscar" name="">

		</form>


		<?php 
		include("conexao.php");

	#$consulta = "SELECT * FROM contato";
	#$con = $mysqli->query($consulta) or die($mysqli->error);

	//recupera informacao do formulario
		$a = $_GET['a'];


	//verificamos se a ação é de busca
		if ($a == "buscar") {

		//Pegamos a palavra
			$palavra = trim($_POST['palavra']);


		//verifica no banco a palavra digitada
			$palavra = mysql_query("SELECT * FROM contato WHERE nome LIKE '%".$palavra."%' ORDER BY nome");


		//descobrimos o total de registros encontrados 
			$numRegistros = mysql_num_rows($sql);

		//se houver pelo menos um registro, exibe-o 
			if ($numRegistros != 0 ) {
			//exibe os nomes 

				while ($contato = mysql_fetch_object($sql)) {

					echo $contato->nome." ".$contato->sobrenome." <br>";
				}
			}
			//se nao houver registro 
				else
				{

					echo "nenhum nome encontrado com ".$palavra."";
				}

			}




			?>



			#http://rafaelcouto.com.br/sistema-de-busca-interna-com-php-mysql/
		</div>
	</body>
	</html>
