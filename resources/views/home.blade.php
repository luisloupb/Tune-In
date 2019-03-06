<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>bienvenido {{ auth()->user()->name}}</h1>

	<form action="{{route('logout')}}" method="POST">
		{{csrf_field()}}
		<button type="submit">cerrar</button>

	</form>
</body>
</html>