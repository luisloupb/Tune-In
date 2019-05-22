@extends("layouts.template")

@section("content")

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
                <input type="email" name="email" placeholder="email" required>
            </label>
            <label>Contraseña
                <input type="password" name="password" placeholder="contraseña" required>
            </label>
            <input type="submit"/>
            {{-- <a href="{{ url('auth/google') }}" class="btn btn-primary">Entrar con Google</a> --}}
            </form>
        </div>
        <div class="panel__box" id="signUpBox">
            <form method="POST" action="/userRegister" name="r">
                {{csrf_field()}}
                <label>Nombre
                    <input type="text" name="name" placeholder="nombre" required>
                </label>
                <label>Apellido
                    <input type="text" name="last_name" placeholder="apellido" required>
                </label>
                <label>Email
                    <input type="email" name="email" placeholder="mail" required>
                </label>
                <label>Contraseña
                    <input type="password" name="password" placeholder="contraseña" required>
                </label>
                <label>Confirme la contraseña
                    <input type="password" name="password_confirmation" placeholder="contraseña confirmar" required>
                </label>
                <input type="button" value="Enviar" style="cursor: pointer; background: #010a0f; border: 1px solid #010a0f; color: #fff; border-radius: 40px" onclick="comprobarClave()"/>
                <input name="enviar" id="enviar" type="submit" hidden/>
                {{-- <a href="{{ url('auth/google') }}" class="btn btn-primary">Con Google</a> --}}
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
<br>
<br>
<br>
<br>
<br>
<br>
<script>
    function comprobarClave(){
        clave1 = document.r.password.value
        clave2 = document.r.password_confirmation.value
    
        if (clave1 != clave2)
           alert("Las dos claves son distintas")
        else
            document.getElementById("enviar").click();
        }
</script> 
@endsection