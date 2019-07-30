@extends('layout')
@section('content')
<div class="container align-content-center mb-5">
	<div class="row">
		<div class="col">
			<h1 class="text-center">Home</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6  ">
			<div class="list-group text-center">
				<a href="/add" class="list-group-item list-group-item-action  badge-primary">Agregar Producto</a>
				<a href="/products" class="list-group-item list-group-item-action  badge-success">Tienda</a>
				<a href="/billing" class="list-group-item list-group-item-action  badge-warning">Carrito</a>
			</div>
		</div>
	</div>
</div>
@endsection