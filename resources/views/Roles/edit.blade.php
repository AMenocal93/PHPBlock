@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('Roles.index', $roles->id) }}">
                       <i class="material-icons" style="font-size: 12px;">arrow_back_ios</i>Regresar</a>
                </div>
                <BR>
                <div class="card-body"> 
                    <div class="col-sm-16">
                        <h2>Editar Información</h2>
                 
                        <form action="{{url('/Roles/' . $roles->id)}} " method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}


                            <label for="Nombre del rol">{{'Nombre del rol'}}</label>
                            <input type="text" name="name" id="Nombre del rol" value="{{ $roles->name}}">

                            <BR><BR>
                            <label for="Description">{{'Descripción'}}</label>
                            <input type="text" name="description" id="Description" value="{{ $roles->description}}">
                            <BR><BR>
                            
                                <div class="d-flex justify-content-center">
                                   <button type="submit" class="btn light-blue accent-4 darken-4" style="font-size: 11px" a onclick="M.toast({html: 'Usuario actualizado con exito'})">
                                    <i class="material-icons right">save</i>Guardar Cambios</button>
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection