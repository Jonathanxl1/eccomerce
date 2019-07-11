@extends('layout')
@section('content')
<h1>Soy Facturacion en twig</h1>
				
@if(false)
	<p>{{$products}}</p>
@endif
<div id="data"></div>
<button class="btn btn-primary" onclick="AccountPay()">Data</button>
{{-- <form action="/response" method="post">
  <div>
    <label for="say">What greeting do you want to say?</label>
    <input name="say" id="say" value="Hi">
  </div>
  <div>
    <label for="to">Who do you want to say it to?</label>
    <input name="to" id="to" value="Mom">
  </div>
  <div>
    <button>Send my greetings</button>
  </div>
</form> --}}




<script  type="text/javascript" >
		
	
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
	
	function AccountPay(){
		var xhr= new  XMLHttpRequest();
			xhr.onreadystatechange=function () {
				if (this.status==200&&this.readyState==4) {
					// responsePost=JSON.parse(this.responseText);
			 		resArray = JSON.parse(this.responseText);
					console.log(this.responseText);
				}
			};
	// xhr.open("POST","/response",true);
			xhr.open("POST","/billing",true);
			xhr.setRequestHeader('Content-Type', 'application/json');
	// xhr.setRequestHeader('Content-Length', jsonData.length);
	// xhr.setRequestHeader('Access-Control-Allow-Origin', '*')
			xhr.send(jsonData);
	}
	
	
	
</script>
@endsection