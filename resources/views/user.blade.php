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
		<input type="text" name="email" placeholder="mail">
		<input type="password" name="password" placeholder="contraseña">
		<input type="text" name="country_id" placeholder="país">
		<input type="text" name="role_id" placeholder="role">
		<button type="submit">agrgar</button>

	</form>

	<form action="/login" method="POST">
		{{csrf_field()}}
		<input type="text" name="email" placeholder="nombre">
		<input type="password" name="password" placeholder="contraseña">
		<button type="submit">enviar</button>

	</form>

</body>
</html>