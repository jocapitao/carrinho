"use strict";


alert("TE");


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
    const $cart = document.querySelector(".cart")
    const $total = document.querySelector(".total")

    $cart.innerHTML = items.map((item) => `
					<tr>
						<td>#${item.id}</td>
						<td>${item.name}</td>
						<td>${item.quantity}</td>
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
					</tr>`).join("")

    $total.innerHTML = "$" + cartLS.total()
}
renderCart(cartLS.list())
cartLS.onChange(renderCart)


function myFunction() {

    if (localStorage.getItem("listaCompras") === null)
        var list = [];
    else
        var list = JSON.parse(localStorage.getItem("listaCompras"));

    var cont = list.length;

    var n_processo = document.getElementById("n_processo").value;
    var material = document.getElementById("material").value;
    var quantidade = document.getElementById("quantidade").value;
    // {id: 1, name: n_processo, price: 100}
    console.log(n_processo + ' ' + material + ' ' + quantidade);

    localStorage.setItem("listaCompras", JSON.stringify(list));

    localStorage.getItem("listaCompras");


}