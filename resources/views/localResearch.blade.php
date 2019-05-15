@extends("layouts.template")

@section("content")
<div class="container">
	<div>
		 <a href="{{ route('tutorial') }}" class="btn btn-warning btn-lg">Ir a tutorial</a>
	</div>
	<div>
		<input type="file" accept="audio/*" multiple/>
		<input type="Button" value="Enviar" id="enviar" name="" onclick="enviar();">
		<div id="vista" style="background-color: white;"></div>
	</div>
</div>

@endsection