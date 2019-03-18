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
          <label>Email
            <input type="email"/>
          </label>
          <label>Contraseña
            <input type="password"/>
          </label>
          <input type="submit"/>
        </div>
        <div class="panel__box" id="signUpBox">
          <label>Email
            <input type="email"/>
          </label>
          <label>Contraseña
            <input type="password"/>
          </label>
          <label>Confirme la contraseña
            <input type="password"/>
          </label>
          <input type="submit"/>
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