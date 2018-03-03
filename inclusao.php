<?php
//dados que serão incluidos

include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contato(nome, sobrenome, rua, bairro, cidade, celular, telefone) VALUES ('$nome','$sobrenome', '$rua', '$bairro', '$cidade', '$celular' ,'$telefone')";

if ($mysqli->query($sql) === TRUE) {
	echo "Usuário incluido com sucesso!";
} else {
	echo "erro: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

//conexao com o banco de dados
//$con=mysql_connect("localhost", "root") or die ("Configuração de Banco de dados errada!!!");

//selecionando banco de dados

//mysql_select_db("agenda") or die("Banco de Datos Inexistente!");

//inserindo dados

//mysql_query($sql, $con) or die ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>");
//echo"<font style=Arial color=green><h1>Cadastro efetuado com sucesso</h1></font>";

?>