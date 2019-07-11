@extends('layout')
@section('content')
<div class="container align-content-center">
	<div class="row">
		<div class="col">
			<h1 class="text-center">Agregar Productos</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<form method="post" action="/products">
      @csrf
      <fieldset class="form-group">
        <label for="product_name">Nombre de Producto</label>
        <input type="text" class="form-control" id="product_name" placeholder="e.g: Manzana,Peras,Naranjas.." name="product_name" required>
        {{-- <small class="text-muted">We'll never share your email with anyone else.</small>
 --}}     
        <label for="amount">Cantidad</label>
        <input type="number" class="form-control" min="0" id="amount" required name="amount">
     
   
       
        <label for="lote">Lote</label>
        <input type="text" class="form-control" id="lote" required name="lote">
     
          <label for="price">Precio</label>
          <input type="number"  min="0" size="2" class="form-control" id="price" required name="price">
        
          <label for="best_before">Fecha de Vencimiento</label>
          <input type="date" min="2019-01-01" class="form-control" id="best_before" required name="best_before">
      </fieldset>  
      
      
    
    {{--   <fieldset class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" class="form-control-file" id="exampleInputFile">
        <small class="text-muted">This is some placeholder bEnter emaill>
      </fieldset> --}}
     
     
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
	</div>
</div>
@endsection