<?php
	session_start();
	include_once 'bdados.php';

	$n_processo = filter_input(INPUT_POST, 'n_processo', FILTER_SANITIZE_SPECIAL_CHARS);
	$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_SPECIAL_CHARS);
	$departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_SPECIAL_CHARS);
	$sala = filter_input(INPUT_POST, 'sala', FILTER_SANITIZE_NUMBER_INT);
	$material =  filter_input(INPUT_POST, 'material', FILTER_SANITIZE_SPECIAL_CHARS);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
	$marcacao = filter_input(INPUT_POST, 'marcacao', FILTER_SANITIZE_SPECIAL_CHARS);
	$info_adicional = filter_input(INPUT_POST, 'info_adicional', FILTER_SANITIZE_SPECIAL_CHARS);
	$estado = 'pendente';

	$queryInsert = $conexao->query("INSERT INTO compras VALUES(default,'$n_processo', '$servico', '$departamento', '$sala', '$material', '$quantidade', '$marcacao', '$info_adicional', '$estado')");
	$affected_rows = mysqli_affected_rows($conexao);

	if($affected_rows > 0){
		$_SESSION['msg'] = "<p>"."Registo efetuado com sucesso!"."<br>";
		header("Location:../index.php");
	}

?>

