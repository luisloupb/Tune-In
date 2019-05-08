@extends("layouts.template")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12" id="cajon-tutorial" style="background-color: beige; padding: 20px;">
            <div>
                <h3 style="text-align: center; font-weight: bold">¡Importante!</h3>
                <h5 style="text-align: center;"> Si quieres arreglar los datos internos de tus canciones para que no exista ningún problema a la hora de recomendarte música, sigue los siguientes pasos:</h5>
                <br>
                <br>
            </div>
            <div class="row">
                <h5 class="col-md-4" style="text-align: center;">1. Ve a la canción que quieras arreglar (en este caso elegiremos la canción "Run to the hills" de la banda "Iron Maiden".</h5>
                <img src="images/1.jpg" class="col-md-8">
            </div>
            <br>
            <div class="linea">
            </div>
            <br>
            <div class="row">
                <img src="images/2.jpg" class="col-md-6">
                <h5 class="col-md-6 propiedad2" style="text-align: center;">2. Damos clic derecho y seleccionamos "Propiedades".</h5>
            </div>
            <br>
            <div class="linea">
            </div>
            <br>
            <div class="row">
                <h5 class="col-md-6 propiedad3" style="text-align: center;">3. Una vez en la ventana de "Propiedades", daremos clic en el botón "Detalles".</h5>
                <img src="images/3.jpg" class="col-md-6">
            </div>
            <br>
            <div class="linea">
            </div>
            <br>
            <div class="row">
                <img src="images/4.jpg" class="col-md-5">
                <h5 class="col-md-7 propiedad4" style="text-align: center;">4. Allí iremos dando clic en cada atributo que vamos a cambiar e iremos editando los campos necesarios, en este caso necesitaremos editar el "Titulo", "Intérpretes colaboradores", "Álbum" y "Género".</h5>
            </div>
            <br>
            <div class="linea">
            </div>
            <br>
            <div class="row">
                <h5 class="col-md-7 propiedad5" style="text-align: center;">5. Una vez hayamos hecho nuestros cambios, daremos clic en el botón "Aplicar" y seguido de esto "Aceptar".</h5>
                <img src="images/5.jpg" class="col-md-5">  
            </div>
            <br>
            <div class="linea">
            </div>
            <br>
            <div>
                <h5 style="text-align: center;">¡Y listo! Si seguiste al pie de la letra los pasos que te dejamos, podremos analizar con más facilidad tus canciones y te podremos recomendar música nueva.</h5>
            </div>
            <br>
            <br>
            <div class="text-center">
                 <a href="{{ route('getListRecommended') }}" class="btn btn-warning btn-lg">ir a recomendaciones</a>
            </div>
        </div>
    </div>
</div>
@endsection