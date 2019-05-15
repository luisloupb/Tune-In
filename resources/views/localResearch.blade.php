@extends("layouts.template")

@section("content")
<div class="container">
	<div>
		 <a href="{{ route('tutorial') }}" class="btn btn-warning btn-lg" style="margin: 20px;">Ir a tutorial</a>
	</div>
	<div>
		<input type="file" accept="audio/*" multiple style="margin: 20px;"/>
		<input type="Button" value="Enviar" id="enviar" name="" onclick="enviar();" style="margin: 20px;">
		<div id="vista" style="background-color: white;"></div>
	</div>
</div>

@endsection