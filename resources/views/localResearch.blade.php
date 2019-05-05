@extends("layouts.template")

@section("content")

<input type="file" accept="audio/*" multiple/>
<input type="Button" value="enviar" id="enviar" name="" onclick="enviar();">
<input type="Button" value="verdatos" name="" onclick="verdatos();">
<div id="vista"></div>
</script>

@endsection