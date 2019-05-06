@extends("layouts.template")

@section("content")
<div>
	<input type="Button" value="Rating" name="" onclick="">
</div>
<div>
	<input type="file" accept="audio/*" multiple/>
	<input type="Button" value="enviar" id="enviar" name="" onclick="enviar();">
	<input type="Button" value="verdatos" name="" onclick="verdatos();">
	<div id="vista" style="background-color: white;"></div>
</div>

@endsection