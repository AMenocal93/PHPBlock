@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col">
        <h2 align="center" style="font-size:47px">Administración de Usuarios</h2>
    </div>
    <div class="w-100"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col">
        <form action="/search" method="get" style="background-color:; height:100px; padding: -10px 5px">
            <div class="card-body row no-gutters" >
                <div class="col-auto" style="padding: 35px 5px">
                    <button type="submit" style="background-color:transparent; border-color:transparent"><i class="material-icons">search</i></button>
                </div>
                <div class="col">
                    <br>
                    <input type="search" name="search" class="form-control" placeholder="Buscar por nombre">
                </div>
                <div class="col-auto" style="padding: 37px 5px">
                    <a href="{{ route('usuarios.index') }}">
                    <i class="material-icons" style="font-size: 20px; color:black">close</i></a>  
                </div> 
            </div>
        </form>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="10px">Código</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th colspan="3" width="5%">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td style="padding: 20px 5px" HEIGHT="10">{{ $user->id }} </td> 
                        <td style="padding: 20px 5px"> <a href="{{ route('usuarios.show', $user->id) }}" style="color:black">{{ $user->name }} </a></td>
                        <td style="padding: 20px 5px"> <a href="{{ route('usuarios.show', $user->id) }}" style="color:black">{{ $user->email }} </a></td>
                    
                        <td style="padding: 20px 5px">
                            <a href="{{ '/usuarios/' .$user->id. '/edit'}}" style="background-color:transparent">
                                <img src="http://localhost:8000/imagenes/editt.png" alt="Editar" width="37">
                            </a>
                        </td>
                        <td>
                           <form action="{{ route('usuarios.destroy', $user->id)}}" method="POST">
                            {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onclick="return confirm('¿Estas seguro eliminar la cuenta? \n \nSi la eliminas no podrás revertir cambios \n')" 
                                    style="background-color:transparent; border-color:transparent"> <img src="http://localhost:8000/imagenes/delete.png" alt="Borrar" width="37"> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm"></div>
            <div class="col-sm">{!! $users->render()  !!}</div>
            <div class="col-sm"></div>
            <div class="col-sm"></div>
        </div>
    </div>

    
</div>

@endsection
