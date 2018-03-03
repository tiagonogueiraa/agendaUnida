<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "agenda";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
	echo "falha na conexão; (".$mysqli->connect_errno.")".$mysqli->connect_error;

/*function conectar() {
	$servidor = "localhost";
	$usuario = "root";
	$senha= "";
	$bd = "agenda";

	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
}


	$conexao = conectar();
*/
?>