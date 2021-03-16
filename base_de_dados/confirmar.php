<?php

session_start();
include_once 'bdados.php';

  $id=$_GET['id'];

  $data_atualizada=date("Y-m-d");
  
$queryatualizar2 = $conexao->query("UPDATE requisicao SET data_atualizada='$data_atualizada' WHERE id='$id'");
  
 $queryatualizar = $conexao->query("UPDATE compras SET estado='confirmado' WHERE id='$id'");

if(mysqli_affected_rows($conexao) > 0){
		header("Location: ../carrinho_compras.php");
	}

?> 