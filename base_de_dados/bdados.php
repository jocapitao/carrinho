<?php
	$conexao = mysqli_connect("localhost", "root", "", "registo");

	mysqli_set_charset($conexao, 'utf-8');

	if ($conexao->connect_error){

		die ("Falha ao efetuar a ligação:".$conexao->connect_error);
	}
?>