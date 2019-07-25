@extends('layout')
@section('content')
<h1 class="text-center">Facturacion</h1>
				
@if(false)
	<p>{{$products}}</p>
@endif
<div id="data"></div>
<div class="container justify-content-center">
	<ul class="list-group" id="cart" >
	</ul>
</div>

<div class="container"  >
	<div class="row justify-content-center">
	<table class="table table-hover table-dark table-responsive-md" >
	<thead >
		<tr >
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody id="table_content">
		{{-- Contenido Web --}}
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3">Total</td>
			<td id="totalCount" ></td>
		</tr>

	</tfoot>
	</table>
	</div>
	<div class="row justify-content-center">
	<button class="btn btn-warning" id="makeInvoice">Generar Factura</button>
	<button class="btn btn-danger offset-md-2" id="stopTransaction">Cancelar Transaccion</button>
	<button class="btn btn-success offset-md-3" id="Buy">Comprar</button>
	</div>
	

</div>




<script  type="text/javascript" >
	var jsonM;
	var ara;
	var makeInvoice=document.getElementById("makeInvoice");
	makeInvoice.addEventListener("click", function(){
			jsonM=JSON.stringify(resArray);
			var xhr= new  XMLHttpRequest();
			xhr.open('POST','/mkpdf', true);
			xhr.setRequestHeader('Content-Type', 'application/json');
			xhr.responseType='blob';
    		 xhr.onload = function(e) {
     				 if (this.status == 200) {
       				 var blob = new Blob([this.response], {type: 'application/pdf'});
       				 var link = document.createElement('a');
       				 link.href = window.URL.createObjectURL(blob);
      				 link.click();
      				 // console.log(this.response);
      				

      }
    };
    xhr.send(jsonM);

	});	

	var stopTransaction=document.getElementById("stopTransaction");
	stopTransaction.addEventListener("click", function(){
		alert("Trasaccion Cancelada");
		location.href="/products";
	})

	var Buy = document.getElementById("Buy");
	Buy.addEventListener("click", function () {
		alert("Continuando con proceso de Formulario");
		alert("Fin del Demo Eccomerce");
	})

	// var token=document.getElementsByTagName("input")[0];
	// var dataToken=token.value;
	// var responsePost;
	// var data=[sessionStorage.shopping_cart];
	var data=sessionStorage.shopping_cart.split(",");
	/*convierte el String en array con valores de string*/
	var jsonData = JSON.stringify(data);
	var jsonTraduc = JSON.parse(jsonData);
	console.log("Json: "+jsonData);
	var resArray;

	var meta = {name:"Jonatha",last_name:"Aguasaco"};
	var cart = document.getElementById("cart");

	var table =document.getElementById("table_content");

	var i = 0;
	var txt="";
	var total=0;

	var trows= document.getElementsByTagName("tbody")[0].rows;
	var PriceTotal=[];






	function totalRow(value,price,index){
		
			console.log(value*price);
			let priceRow = value*price;
			trows[index].cells[3].innerHTML=value*price;
			totalArray(priceRow,index);

	}

	function totalArray(price,index){
		PriceTotal[index]=price;
		let total = PriceTotal.reduce((a,b) => a + b,0);
		totalCount(total);
	}


	function totalCount(value){
			// total+=value;
			document.getElementById("totalCount").innerHTML=value;
	}




	function goToCart(value, index, array){
		var tr = document.createElement("tr");
		var Amount="<input type='number' onchange='totalRow(this.value,"+value.price+","+index+")' id="+value.id+" name='amount'  value='1'  min='0'  max="+value.amount+">";

		// var td = document.createElement("td");
		// li.setAttribute("class", "list-group-item list-group-item-action");
		tr.innerHTML="<td>"+value.product_name+"</td><td>"+Amount+"</td><td>"+value.price+"</td><td>"+value.price+"</td>";
		// total +=value.price;
		// totalCount(total);
		totalArray(value.price,index);
		table.appendChild(tr);
		i++;
		console.log("Valor de Index es :"+index);
		
	}

	function totalReturn(){
		this.innerHTML=total;
	}

	function AccountPay(){
		var xhr= new  XMLHttpRequest();
			xhr.onreadystatechange=function () {
				if (this.status==200&&this.readyState==4) {
					// responsePost=JSON.parse(this.responseText);
			 		resArray = JSON.parse(this.responseText);
			 		
			 		console.log(resArray);
					console.log(resArray.forEach(goToCart));
				}
			};
	// xhr.open("POST","/response",true);
			xhr.open("POST","/billing",true);
			xhr.setRequestHeader('Content-Type', 'application/json');
	// xhr.setRequestHeader('Content-Length', jsonData.length);
	// xhr.setRequestHeader('Access-Control-Allow-Origin', '*')
			xhr.send(jsonData);

	}

	AccountPay();
	
	
	
</script>
@endsection