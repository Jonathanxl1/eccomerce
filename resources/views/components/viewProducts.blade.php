@extends('layout')
@section('content')
<nav class="navbar">
<a class="nav-item btn btn-warning offset-11" id="shopping_cart"></a>
</nav>
<h1 class="h1 text-center mt-1 mb-1">Tienda</h1>
<div class="container-fluid mt-3">
	<div class="row justify-content-center">
		@foreach ($products as $product)
			<div class="card" style="width: 18rem;">
  				{{-- <img class="card-img-top" src="#" alt="Product Image"> --}}
  				<div class="card-body text-center">
    				<h5 class="card-title ">{{ $product->product_name }}</h5>
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
			btnShop[id-1].setAttribute("class", "btn btn-warning");
			shopping_cart.push(id);
			Shoping();	

		}else if(btnShop[id-1].innerHTML=="Agregado") {
			btnShop[id-1].innerHTML="Agrega al Carrito";
			btnShop[id-1].setAttribute("class", "btn btn-primary");
			if(shopping_cart.length==1){
				alert("Stores esta"+shopping_cart[0])
			}else{
				shopping_cart=arrayRemove(shopping_cart,id);
				Shoping();
			}
		};
	}

	
</script>

	
@endsection