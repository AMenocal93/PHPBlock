@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<a href="{{ route('usuarios.index') }}" style="font-size:18px">
    <img src="http://localhost:8000/imagenes/back_icon.png" width="35">    Regresar</a>
    <br>
<div class="container">
    <div class="row">
        <div class="col-sm-2" ></div>
        <div class="col-sm-7" align="center" >
            <p align="center"  style="font-size:47px">Perfil de Usuario</p>
            <div class="card">
            <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm" style="background-color: #FB4D80"></div>
                        <div class="col-sm" style="background-color: #FFC32D"></div>
                        <div class="col-sm" style="background-color: #0C93CD"></div>
                    </div>
                    <div>
                        <img src="http://localhost:8000/imagenes/Usuario.png" width="190">
                    </div>
                    <div class="card-content">
                        <p style="font-size:25px;">{{$user->name}}</p>

                        <?php $RolUsuario=""?>
                        @foreach ($rolUser as $role)
                            @if($role->user_id == $user->id)
                                @foreach ($roles as $rol)
                                    @if($rol->id == $role->role_id)
                                        <?php $RolUsuario = $rol->name; ?>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        {{$RolUsuario}}
                    </div>
                    <div class="row">
                        <div class="col-sm" style="background-color: #FB4D80"></div>
                        <div class="col-sm" style="background-color: #FFC32D"></div>
                        <div class="col-sm" style="background-color: #0C93CD"></div>
                    </div>
                </div>
                <div>
                    <div class="container" style="border-left: 3px solid #0C93CD">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Codigo: {{$user->id}}</td>
                                </tr>
                                <tr>
                                    <td>Email: {{$user->email}}</td>    
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="d-flex justify-content-center"> 
                        <a href="{{ route('usuarios.edit', $user->id) }}" class="btn light-blue accent-4 darken-4">
                            <i class="material-icons right">edit</i>Editar Datos</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection