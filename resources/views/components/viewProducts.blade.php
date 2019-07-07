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




    	{{-- <p>This is product_name {{ $product->product_name }}</p>
    	<p>This is price {{ $product->price }}</p>
    	<p>This is amount {{ $product->amount }}</p> --}}
	    @endforeach	
	</div>
</div>
<script type="text/javascript" >
		var shopping_cart=[];
		var cart = document.getElementById('shopping_cart');
		cart.innerHTML='Carrito('+shopping_cart.length+')';
	function suma(id) {
		shopping_cart.push(id);
		cart.innerHTML='Carrito('+shopping_cart.length+')';
		this.classList.toggle('btn-secondary');
	}
</script>
	
@endsection