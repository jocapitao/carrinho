<!DOCTYPE html>
<html>
<head>
	<?php
	 session_start();
	?>
	<title>campo detestes</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style type="text/css">
		header{
	width: 100%;
	background: yellow;
	
}

.wraper{
	max-width: 700px;
	margin: 0 auto;
}

header img{
	padding: 20px;
	max-width: 100px;
	float: left;
}

header ul{
	float: right;
}

header ul li{
	margin-top: 15px;
	display: inline-block;
	list-style: none;
}

header a{

	color: black;
	text-decoration: none;
}

.clear{
	clear: both;
}
		section{
			margin: 10vh auto;
			max-width: 900px;
		}

		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th{
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		a, i{
			color: black;
			text-decoration: none;
			padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}


	</style>

</head>
<body>
	<header>
		<a style="margin-top: 30px; margin-left: 30px; float: left;" href="http://localhost/compras/index.php"><i class="fas fa-chevron-left"></i></a>
		<div class="wraper">
			<img src="imagens/logo.png">

			<div class="clear"></div>
		</div>
	</header>
	<section>
		<table>
			<tr>
			    <th colspan="3">Serviço/Sala</th>
			    <th>Material</th>
			    <th>Quantidade</th>
			    <th>Marcação</th>
			    <th colspan="3"></th>
			 </tr>

	<?php
	
	include_once 'base_de_dados/bdados.php';

	$n_processo = filter_input(INPUT_GET, 'n_processo', FILTER_SANITIZE_SPECIAL_CHARS);

	$_SESSION['n_processo'] = $n_processo;

	$querySelect = $conexao->query("SELECT * FROM compras");

	while ($registos = $querySelect->fetch_assoc()) {
		$id          = $registos['id'];
		$servico        = $registos['servico'];
		$departamento     = $registos['departamento'];
		$sala         = $registos['sala'];
		$material    = $registos['material'];
		$quantidade  = $registos['quantidade'];
		$marcacao    = $registos['marcacao'];

		if ($departamento != 'Sala') {
		$sala = "";
	}

		echo "<tr>
    <td>$servico</td>
    <td>$departamento</td>
    <td>$sala</td>
    <td>$material</td>
    <td>$quantidade</td>
    <td>$marcacao</td>
    <td><center><a href='base_de_dados/apagar_carrinho.php?id=$id' onclick='return confirmationEliminar()'><i class='fas fa-trash'></i></a></td>
    <td><center><a href='base_de_dados/editar_carrinho.php?id=$id'><i class='fas fa-edit'></i></a></td>
    <td><center><a href='base_de_dados/confirmar.php?id=$id'><i class='fas fa-check-circle'></i></a></td>
  </tr>";
	}
?>
</table></section>
<script type="text/javascript">
    function confirmationEliminar() {
      return confirm('Tem a certeza que pertende eliminar este registo?');
    }
</script>
</body>
</html>