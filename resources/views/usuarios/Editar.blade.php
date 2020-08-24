@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')
<a href="{{ route('usuarios.index') }}" style="font-size:18px">
    <img src="http://localhost:8000/imagenes/back_icon.png" width="33">    Regresar</a>
    <br>
<p align="center"  style="font-size:47px">Editar Usuario</p>

<div class="container">
    <div class="row">
        <div class="col-sm-2" ></div>
        <div class="col-sm-8">
            <div class="card">
            <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm" style="background-color: #FB4D80"></div>
                        <div class="col-sm" style="background-color: #FFC32D"></div>
                        <div class="col-sm" style="background-color: #0C93CD"></div>
                    </div>
                    <div align="center">
                        <img src="http://localhost:8000/imagenes/UsuarioE.png" width="190">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm" style="background-color: #FB4D80"></div>
                        <div class="col-sm" style="background-color: #FFC32D"></div>
                        <div class="col-sm" style="background-color: #0C93CD"></div>
                    </div>
                </div>
                <div class="container">
                    <form action="{{url('/usuarios/' . $user->id)}} " method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                        <table>
                            <tbody>
                                <tr>
                                    <td >{{'Nombre: '}}</td>
                                    <td>
                                        <input type="text" name="name" id="Nombre" value="{{ $user->name}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{'Email:'}}</td>
                                    <td>
                                        <input type="text" name="email" id="Correo Correo Electronico" value="{{ $user->email}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{'Contraseña:'}}</td>
                                    <td>
                                        <input style="display: none" type="text" name="password" id="Password" value="{{ $user->password}}">
                                       <u><a href="{{ route('password.request') }}">{{('Restablecer contraseña')}}</a></u>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{'Rol de usuario:'}}</td>
                                    <td>
                                        <select name="roles">
                                            <?php $a="Definir rol"?>
                                            @foreach ($rolUser as $role)
                                                @if($role->user_id == $user->id)
                                                    @foreach ($roles as $rol)
                                                        @if($rol->id == $role->role_id)
                                                            <?php $a = $rol->name; ?>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                            <option value="{{ $role['id']}}">{{$a}}</option>
                                            @foreach ($roles as $role)
                                                @if($role->name != $a)
                                                    <option value="{{ $role['id']}}">{{ $role['name']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        
                        <div align="center">
                            <button type="submit" class="btn light-blue accent-4 darken-4" style="font-size: 11px" a onclick="M.toast({html: 'Usuario actualizado con exito'})">
                                <i class="material-icons right">save</i>Guardar Cambios</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<script>
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
@endsection