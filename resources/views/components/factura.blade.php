<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Factura Pdf</title>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<style>
	.header{
		height:20%;
		margin-top: 0px;
		margin-bottom: 10px;
	}
	hr{
		margin-top: 20px;
	}

	.table{
		border: 1px solid #ED1313;
		margin-top: 20px;
		margin-left: auto;
    	margin-right: auto;
    	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
    	height: 40%;


	}

	th,td{
		text-align: center;
	}
	.header>.h1,.h2,.h3{
		font-family:Arial, Helvetica, sans-serif;
		text-align: center;
		/* margin-bottom: 30px; */
	}
	footer{
		height: 20%;
		margin-top: 50px;
		margin-bottom: 0px;
	}


</style>
<body >

	<div class="header">
			<h1 class="h1">BRM S.A</h1>
			<h2 class="h2">NIT 830.511.773 - 9</h2>
			<h3 class="h3">DIRECCIÓN Carrera 58 B # 130A - 13,Bogotá</h3>
			<h3 class="h3">TELÉFONO: (571) 742 – 2600</h3>
			<h3 class="h3">www.brm.com.co</h3>		
	</div>
<hr />	
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

<footer>
	<hr />
	<h3 class="h3" >Carrera 58 B # 130A - 13,Bogotá</h3>	 
	<h3 class="h3" >Bogota S.A</h3>
	<h3 class="h3" >Gracias por su Pago</h3>
</footer>	
	
</body>
</html>
