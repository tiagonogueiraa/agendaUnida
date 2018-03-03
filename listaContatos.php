<?php

// conexao ao banco

include("conexao.php");

$sql = "SELECT * FROM contato";

$consulta = mysql_query($sql);




echo '<table>';

echo '<tr>';

echo '<td>Nome</td>';

echo '<td>Sobrenome</td>';

echo '<td>Celular</td>';

echo '<td>Telefone</td>';

echo '<td>Rua</td>';

echo '<td>Bairro</td>';

echo '<td>cidade</td>';


echo '</tr>';

// Armazena os dados da consulta em um array associativo

while ($registro = mysql_fetch_assoc($consulta)) {

	echo '<tr>';

	echo '<td>'.$registro["nome"].'</td>';

	echo '<td>'.$registro["sobrenome"].'</td>';

	echo '<td>'.$registro["celular"].'</td>';

	echo '<td>'.$registro["telefone"].'</td>';

	echo '<td>'.$registro["rua"].'</td>';

	echo '<td>'.$registro["bairro"].'</td>';

	echo '<td>'.$registro["cidade"].'</td>';

	echo '</tr>';
}


echo '</table>';



?>
