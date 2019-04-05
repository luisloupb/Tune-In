@extends("layouts.template")

@section("content")
<script type="text/javascript">
    function onSingUp(){
        var name = "gojam";
        var last_name = "Piccolo";
        var email = "gojam@gmail.com";
        // esto no se cambia
        var token = '{{csrf_token()}}';
        // hasta aquí
         var data={
            name:name,
            last_name:last_name,
            email:email,
            _token:token};
        $.ajax({
            type: "post",
            url: "{{ route('registerGoogle')}}",
            data: data,
            success: function(msg){
                alert("exitoso");
            }
        });

    }
    function onSingIn(){
        var email = "gojam@gmail.com";
        // esto no cambia
        var token = '{{csrf_token()}}';
        // hasta aquí
         var data={
            email:email,
            _token:token};

        $.ajax({
            type: "post",
            url: "{{ route('loginGoogle')}}",
            data: data,
            success: function(msg){
                //alert();
                //location.reload();
            }
        });

    }
</script>
<div class="panel">
    <ul class="panel__menu" id="menu">
    <hr/>
    <li id="signIn"><a href="#">Iniciar sesión</a></li>
    <li id="signUp"><a href="#">Registrarte</a></li>
    </ul>
    <div class="panel__wrap">
        <div class="panel__box active" id="signInBox">
            <form action="{{route('login')}}" method="POST">
            {{csrf_field()}}
            <label>Email
                <input type="email" name="email" placeholder="email">
            </label>
            <label>Contraseña
                <input type="password" name="password" placeholder="contraseña">
            </label>
            <input type="submit"/>
                <input type="Button" name="" onclick="onSingIn();" value="log">

                <!-- {!! $errors->first('email','<span>error</span>')!!}
                {!! $errors->first('password','<span>error</span>')!!} -->
            </form>
        </div>
        <div class="panel__box" id="signUpBox">
            <form method="POST" action="/userRegister" >
                {{csrf_field()}}
                <label>Nombre
                    <input type="email" name="name" placeholder="nombre">
                </label>
                <label>Apellido
                    <input type="email" name="last_name" placeholder="apellido">
                </label>
                <label>Email
                    <input type="email" name="email" placeholder="mail">
                </label>
                <label>Contraseña
                    <input type="password" name="password" placeholder="contraseña">
                </label>
                <label>Confirme la contraseña
                    <input type="password" name="password_confirmation" placeholder="contraseña confirmar">
                </label>
                <input type="submit"/>
                <input type="Button" name="" onclick="onSingUp();" value="regi">
                <!-- {!! $errors->first('email','<span>:message</span>')!!} -->
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection