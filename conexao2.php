<?php 

//nome do banco de dados
$nome_banco = "agenda";

//Abre sessões

//$_SESSION['login'] = $login;   
//$_SESSION['senha'] = $senha;
//$_SESSION['nivel'] = $nivel;

$db = mysql_connect("localhost","root","");
$dado = mysql_select_db("agenda",$db);

?>