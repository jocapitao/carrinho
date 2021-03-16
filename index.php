<!DOCTYPE html>
<html>
<head>
	<title>Requisição de Material</title>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
		



/* The Modal (background) */

.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}


/* Modal Content */

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}


/* The Close Button */

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


/*----------*/

	</style>
</head>

<body>
	<header>
		<div class="wraper">
			<!-- Trigger/Open The Modal -->
			<button id="myBtn"><i class="fas fa-shopping-cart"></i></button>

			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content">
				<span class="close">&times;</span>
				<div class="card-deck mt-4 mb-4 text-center">
					<div class="card mb-4 shadow-sm">
						<div class="card-header">
							<h4 class="my-0 font-weight-normal"></h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">$100</h1>
							<button type="button" class="btn btn-block btn-outline-primary" onClick="addCartFunc()">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h2>Cart</h2>
			</div>
			<div class="card-body">
				<table class="table">
					<tbody class="cart">
					</tbody>
					<tfoot>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tfoot>
				</table>
			</div>
		</div>
			  </div>

			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div class="container">
		<div class="container-header">
			<div class="logo">
				<img src="imagens/logo.png">
			</div>
		</div>
		<div class="container-body">
			<div class="contato">
				<form action="base_de_dados/inserir.php" method="POST">
					<div class="input-wraper w100">
						<p>Nº processo</p>
						<input type="text" name="n_processo" id="n_processo" required />
					</div><!--input-wraper-->

					<div class="input-wraper w50">
						<p>Serviço</p>
						<select class="field-divided" name='servico' required>
						  <option data-country="" value='' ></option>
						  <option value='lar'>Lar</option>
						  <option value='infantario'>Infantário</option>
						</select>
					</div><!--input-wraper-->

					<div class="input-wraper w50">
						<p>Valência</p>
						<select onchange="showDiv('hidden_div', this)" class="field-divided" name='departamento' required>
						  <option data-country="" value=''></option>  
						  <option data-country="lar" value='centro de dia'>Centro de dia</option>
						  <option data-country="lar" value='sad'>SAD</option>
						  <option data-country="lar" value='lar'>Lar</option>
						  <option data-country="lar" value='cozinha'>Cozinha</option>
						  <option data-country="lar" value='lavandaria'>Lavandaria</option>
						  <option data-country="infantario" value='atl'>ATL</option>
						  <option data-country="infantario" value='servicos gerais'>Serviços Gerais</option>
						  <option data-country="infantario" value='Sala'>Sala</option>
						</select>
					</div><!--input-wraper-->
					
					<div id="hidden_div" class="input-wraper w100">
						<input type="number" name="sala" class="field-long" min="0" max="15"/>
					</div>

					<div class="input-wraper w100">
						<p>Material</p>
						<input type="text" name="material" id="material" placeholder="Caixa de arrumação" required/>
					</div><!--input-wraper-->

					<div class="input-wraper w100">
						<p>Quantidade</p>
						<input type="number" id="quantidade" name="quantidade" min="1" placeholder="2" required/>
					</div><!--input-wraper-->

					<div class="input-wraper w100">
						<p>Data Limite</p>
						<?php
							$data_atual = date("Y-m-d");
							echo "<input id='date' type='date' name='marcacao' min=$data_atual class='field-long'>";
						?>
					</div><!--input-wraper-->

					<div class="input-wraper w100">
						<input onclick="addCartFunc()" class="btn1" type="submit" value="Adicionar ao Carrinho" />
					</div><!--input-wraper-->

					<div class="clear"></div><!--clear-->

				</form>

			</div><!--contato-->
		</div>
	</div>
	<script type="text/javascript">
		"use strict";
 

		var countrySelect = document.querySelector('[name=servico]');
		var cityOptions = document.querySelectorAll('option[data-country]');

		countrySelect.addEventListener('change', function() {
		    for (var i = 0; i < cityOptions.length; i++) {
		        var opt = cityOptions[i];
		        opt.style.display = (opt.getAttribute('data-country') === this.value) ? '' : 'none';
		    }
		}, false);


		function showDiv(divId, element) {
		    document.getElementById(divId).style.display = element.value == "Sala" ? 'block' : 'none';
		}

		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}


		function renderCart(items) {
		    const $cart = document.querySelector(".cart");
		    const $total = document.querySelector(".total");

		    $cart.innerHTML = items.map((item) => `
					<tr>
						<td>#${item.id}</td>
						<td>${item.n_processo}</td>
						<td>${item.material}</td>
						<td style="width: 60px;">	
							<button type="button" class="btn btn-block btn-sm btn-outline-primary"
								onClick="cartLS.quantity(${item.id},1)">+</button>
						</td>
						<td style="width: 60px;">	
							<button type="button" class="btn btn-block btn-sm btn-outline-primary"
								onClick="cartLS.quantity(${item.id},-1)">-</button>
						</td>
						<td class="text-right">$${item.price}</td>
						<td class="text-right"><Button class="btn btn-primary" onClick="cartLS.remove(${item.id})">Delete</Button></td>
					</tr>`).join("");

		    $total.innerHTML = "$" + cartLS.total();
		}
		renderCart(cartLS.list());
		cartLS.onChange(renderCart);

		function addCartFunc() {
		     if (localStorage.getItem("listaCompras") === null)
		         var list = [];
		     else
		         var list = JSON.parse(localStorage.getItem("listaCompras"));
		     localStorage.setItem("listaCompras", JSON.stringify(list));
		     localStorage.getItem("listaCompras");

		    var quant = (cartLS.list().length)+1;
		    console.log(cartLS.list());

		    var n_processo = document.getElementById("n_processo").value;
		    var material = document.getElementById("material").value;
		    var quantidade = document.getElementById("quantidade").value;

		    console.log(n_processo + ' ' + material + ' ' + quantidade);

		    const myproduct = {
		        id: quant,
		        n_processo: n_processo,
		        material: material,
		        quantidade: quantidade,
		        price: 10
		    };

		    console.log('g' + myproduct);
		    cartLS.add(myproduct,1);
		}
	</script>
	<script src="https://kit.fontawesome.com/a076d05399.js" type="text/javascript"></script>
	<script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js" type="text/javascript"></script>

</body>
</html>