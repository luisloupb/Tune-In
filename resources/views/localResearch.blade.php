@extends("layouts.template")

@section("content")
<div>
	 <a href="{{ route('tutorial') }}" class="btn btn-warning btn-lg">ir a tutorial</a>
</div>
<div>
	<input type="file" accept="audio/*" multiple/>
	<input type="Button" value="enviar" id="enviar" name="" onclick="enviar();">
	<input type="Button" value="verdatos" id="BtnVerDatos" name="" onclick="verdatos();">
	<div id="vista" style="background-color: white;"></div>
</div>

@endsection