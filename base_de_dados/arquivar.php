<?php

session_start();
include_once 'bdados.php';

 $id=$_GET['id'];
  
 $queryatualizar = $conexao->query("UPDATE compras SET estado='Arquivado' WHERE id='$id'");

if(mysqli_affected_rows($conexao) > 0){
		header("Location: ../testes.php");
	}

?> 