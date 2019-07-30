<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="{{ mix('css/app.css')}}">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<a href="/" class="navbar-brand">
		<img src="{{ asset('favicon.ico') }}" width="30" height="30" class="d-inline-block align-top" alt="">
		BRM 
		</a>
	</nav>
	@yield('content')
</body>
</html>