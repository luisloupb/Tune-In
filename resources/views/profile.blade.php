@extends("layouts.template")

@section("content")
<div class="container contenedor">
    <div class="row">
        <div class="col align-self-center">
            <div class="panel panel-info col-7 col-sm-7 col-md-7 col-lg-7 toppad">
                <div class="panel-heading">
                    <h3 class="panel-title" style="background-color: #d9edf7">Tomas Cruz Valencia</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/teacher-5.jpg" class="img-circle img-responsive"></div>                
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Nombre(s):</td>
                                    <td>Tomas</td>
                                </tr>
                                <tr>
                                    <td>Apellidos:</td>
                                    <td>Cruz Valencia</td>
                                </tr>
                                <tr>
                                    <td>Correo electrónico</td>
                                    <td>tomascruzv@gmail.com</td>
                                </tr>
                                <tr>
                                </tr>
                                </tbody>
                            </table>                  
                            <a href="#" class="btn btn-primary espacio">Editar Perfíl</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection