<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Factura Pdf</title>
	
</head>
<style>
	.table{
		border: 1px solid #ED1313;
		margin-left: auto;
    	margin-right: auto;
    	font-family:Arial, Helvetica, sans-serif;
	}
	.h1{
		font-family:Arial, Helvetica, sans-serif;
		text-align: center;
	}


</style>
<body >
	<h1 class="h1">Factura Pdf</h1>
<table class="table">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>

		@foreach($data as $value)
		<tr>
			<td>{{$value['product_name']}}</td>
			<td>{{$value['amount']}}</td>
			<td>{{$value['price']}}</td>
		</tr>
		@endforeach
	</tbody>

</table>
	
</body>
</html>
