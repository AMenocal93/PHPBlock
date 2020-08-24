@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url ('/Roles') }}">
                       <i class="material-icons" style="font-size: 12px;">arrow_back_ios</i>Regresar</a>
                </div>
                <BR>
                <div class="card-body"> 
                    <div class="col-sm-16">
                        <h2>Crear Rol</h2>
                        <form action="/Roles" method="post">
                            {{ csrf_field() }}

                            <label for="Nombre">{{'Nombre del Rol'}}</label>
                            <input type="text" name="name" id="Nombre del Rol" >
                            <BR><BR>
                            
                            <BR><BR>
                            <label for="Descripcion">{{'Descripción del Rol'}}</label>
                            <input type="text" name="description" id="Descripción del Rol">
                            <BR><BR>
                                <div class="d-flex justify-content-center">
                                   <button type="submit" class="btn light-blue accent-4 darken-4" style="font-size: 11px" a onclick="M.toast({html: 'Rol creado con exito'})">
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