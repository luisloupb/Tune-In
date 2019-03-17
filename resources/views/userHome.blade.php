<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/userRegister" >
		{{csrf_field()}}

		<input type="text" name="name" placeholder="nombre">

		<input type="text" name="last_name" placeholder="apellido">
		<input type="email" name="email" placeholder="mail">
		{!! $errors->first('email','<span>:message</span>')!!}
		<input type="password" name="password" placeholder="contraseña">
		<input type="password" name="password_confirmation" placeholder="contraseña confirmar">
		<button type="submit">agrgar</button>

	</form>

	<form action="{{route('login')}}" method="POST">
		{{csrf_field()}}
		<input type="email" name="email" placeholder="email">
		<input type="password" name="password" placeholder="contraseña">
		{!! $errors->first('email','<span>error</span>')!!}
		{!! $errors->first('password','<span>error</span>')!!}
		<button type="submit">enviar</button>

	</form>

</body>
</html>