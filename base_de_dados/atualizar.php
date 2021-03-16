<?php
 session_start();
 include_once 'bdados.php';

 	$id = $_SESSION['id'];

 	$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_SPECIAL_CHARS);
	$departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_SPECIAL_CHARS);
	$sala = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_NUMBER_INT);
	$material =  filter_input(INPUT_POST, 'material', FILTER_SANITIZE_SPECIAL_CHARS);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
	$marcacao = filter_input(INPUT_POST, 'marcacao', FILTER_SANITIZE_SPECIAL_CHARS);
	$info_adicional = filter_input(INPUT_POST, 'info_adicional', FILTER_SANITIZE_SPECIAL_CHARS);

	$queryAtualizar = $conexao->query("UPDATE compras SET servico='$servico', departamento='$departamento', sala='$sala', material='$material', quantidade='$quantidade', marcacao='$marcacao', info_adicional='$info_adicional' WHERE id='$id'");
	$affected_rows = mysqli_affected_rows($conexao);

	if ($affected_rows > 0) {
		header("Location: ../testes.php");
	}		

?>