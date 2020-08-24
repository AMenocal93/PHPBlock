@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<div class="container" color="black">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-header">
                    <a href="{{ url ('/Roles/create') }}">
                       <i class="material-icons" style="font-size: 45px;">arrow_front_ios</i>Crear Rol</a>
                </div>
                <div class="card-body">
                        <h2 style="font-size: 50px">Administración de Roles</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">Código</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th colspan="5" width="30%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td style="padding: 20px 5px">{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->description }}</td>

                                 {{-- BOTONES --}}    
                                    <td style="padding: 12px 5px">
                                        <a href="{{ '/Roles/' .$role->id. '/edit'}} " class="btn light-blue accent-4 darken-4" style="font-size: 11px">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('Roles.destroy', $role->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button onclick="return confirm('¿Estas seguro eliminar la cuenta? \n \nSi lo eliminas no podrás revertir cambios \n')" 
                                                    class="btn light-blue accent-4 darken-4" style="font-size: 11px">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection