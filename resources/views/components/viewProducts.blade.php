@extends('layout')
@section('content')
<nav class="navbar">
<h1 class="nav text-center">Productos</h1>
<a class="nav-item btn btn-warning" id="shopping_cart"></a>
</nav>
<div class="container-fluid">
	<div class="row justify-content-center">
		@foreach ($products as $product)
			<div class="card" style="width: 18rem;">
  				<img class="card-img-top" src="#" alt="Product Image">
  				<div class="card-body">
    				<h5 class="card-title">{{ $product->product_name }}</h5>
    				<p class="card-subtitle">Price: {{ $product->price }}</p>
    				<p class="card-subtitle">Quantity Available: {{ $product->amount }}</p>
    				<span  class="btn btn-primary" onclick="suma({{ $product->id }})">Agrega al Carrito</span>
  				</div>
			</div>
	    @endforeach	
	</div>
</div>
<script type="text/javascript"  >
		
		{{-- Inicializacion de Shopping Cart --}}
		var shopping_cart=[0];
		// Eliminar Contenido de Array
		function arrayRemove(arr, value) {
   			return arr.filter(function(ele){
       		return ele != value;
   		});
		};
		var btnShop=document.getElementsByTagName('span');
		var cart = document.getElementById('shopping_cart');
			cart.addEventListener("click", function(){
			location.href="/billing";
			sessionStorage.shopping_cart=shopping_cart;
		});

		function Shoping() {
			cart.innerHTML='Carrito('+(shopping_cart.length-1)+')';
		}
		cart.innerHTML='Carrito('+(shopping_cart.length-1)+')';

	function suma(id) {
		if (btnShop[id-1].innerHTML=="Agrega al Carrito") {
			btnShop[id-1].innerHTML="Agregado";
			shopping_cart.push(id);
			Shoping();	

		}else if(btnShop[id-1].innerHTML=="Agregado") {
			btnShop[id-1].innerHTML="Agrega al Carrito";
			if(shopping_cart.length==1){
				alert("Stores esta"+shopping_cart[0])
			}else{
				shopping_cart=arrayRemove(shopping_cart,id);
				Shoping();
			}
		};
	}

	// function dataCount() {

	// }
		// var dataXHR={{ csrf_token()}};
	// var xhr= new XMLHttpRequest();
	// xhr.onreadystatechange=function (argument) {
	// 		if (this.status==200 && this.readyState==4) {
	// 			console.log(this.responseText);
	// 		}
	// 	}
	// 	xhr.open("POST", "/billing", true);
	// 	xhr.send(shopping_cart);

</script>
	
@endsection