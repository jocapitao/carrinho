<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php
  session_start();
		include_once 'bdados.php';

		$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
		
		$_SESSION['id']=$id;
		 
		$querySelect = $conexao->query("SELECT * FROM compras WHERE id='$id'");

		while($registos=$querySelect->fetch_assoc()){

		$id          = $registos['id'];
		$servico        = $registos['servico'];
		$departamento     = $registos['departamento'];
		$sala         = $registos['sala'];
		$material    = $registos['material'];
		$quantidade  = $registos['quantidade'];
		$marcacao    = $registos['marcacao'];
		$estado     = $registos['estado'];
		$info_adicional = $registos['info_adicional'];
		 }
	?>
	<section>
		<div class="form-wraper">
			<form action="atualizar.php" method="POST">
				<ul class="form-style-1">
					<li>
						<label>Serviço</label>
						<select class="field-divided" name='servico' required>
							<?php
				              if($servico == 'lar'){
				              	echo "<option value=''></option>";
				                echo "<option value='lar' selected>Lar</option>";
				                echo "<option value='infantario'>Infantário</option>";
				              } elseif ($servico == 'infantario') {
				              	echo "<option value=''></option>";
				              	echo "<option value='lar'>Lar</option>";
				                echo "<option value='infantario' selected>Infantário</option>";
				              }?>
						</select>
						<select onchange="showDiv('hidden_div', this)" class="field-divided" value="<?php echo $departamento; ?>" name='departamento' required>
						  <option value=''></option>
						  <?php
						  if ($departamento == 'centro de dia') {
						  	echo "<option data-country='lar' value='centro de dia' selected>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  } elseif ($departamento == 'sad') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad' selected>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  } elseif ($departamento == 'lar') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar' selected>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  } elseif ($departamento == 'cozinha') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha' selected>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  } elseif ($departamento == 'lavandaria') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria' selected>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  }elseif ($departamento == 'atl') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl' selected>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  } elseif ($departamento == 'servicos gerais') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais' selected>Serviços Gerais</option>
						  <option data-country='infantario' value='salas'>Sala</option>";
						  } elseif ($departamento == 'sala') {
						  	echo "<option data-country='lar' value='centro de dia'>Centro de dia</option>
						  	<option data-country='lar' value='sad'>SAD</option>
						  <option data-country='lar' value='lar'>Lar</option>
						  <option data-country='lar' value='cozinha'>Cozinha</option>
						  <option data-country='lar' value='lavandaria'>Lavandaria</option>
						  <option data-country='infantario' value='atl'>ATL</option>
						  <option data-country='infantario' value='servicos gerais'>Serviços Gerais</option>
						  <option data-country='infantario' value='sala' selected>Sala</option>";
						  }
						  ?>  
						</select>
						<li>
							<div id="hidden_div">
								<input type="number" name="sala" value="<?php echo $sala; ?>" class="field-long" min="0" max="15"/>
							</div>
						</li>
					</li>
				    <li>
				        <label>Material<span class="required">*</span></label>
				        <input type="text" name="material" class="field-long" placeholder="Caixa de arrumação" value="<?php echo $material; ?>" required/>
				    </li>
				    <li>
				        <label>Quantidade<span class="required">*</span></label>
				        <input type="number" name="quantidade" value="<?php echo $quantidade; ?>" class="field-long" min="1" required/>
				    </li>
				    <li>
				        <label>Data Limite<span class="required">*</span></label>
				        <?php
							$data_atual = date("Y-m-d");
							echo "<input id='date' type='date' value=$marcacao name='marcacao' min=$data_atual class='field-long'>";
						?>
				    </li>
				    <li>
				    	<label>Observação</label>
				    	<textarea class="field-long" name="info_adicional"></textarea>
				    </li>
				    <li>
				        <input type="submit" value="Enviar" />
				    </li>
				</ul>
			</form>
		</div>
	</section>
	<script type="text/javascript">
			var countrySelect = document.querySelector('[name=servico]');
			var cityOptions = document.querySelectorAll('option[data-country]');

			countrySelect.addEventListener('change', function(){
			    for (var i = 0; i < cityOptions.length; i++){
			      var opt = cityOptions[i];
			      opt.style.display = (opt.getAttribute('data-country') === this.value) ? '' : 'none';           
			    }
			}, false);


			function showDiv(divId, element)
			{
			    document.getElementById(divId).style.display = element.value == "salas" ? 'block' : 'none';
			}
		</script>

</body>
</html>