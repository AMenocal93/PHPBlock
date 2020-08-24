@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                    <a href="{{ route('usuarios.index') }}">
                        <i class="material-icons" style="font-size: 12px;">arrow_back_ios</i>Regresar</a>
                </div>
                <div class="card-body">
                    <div class="col-sm-16" text>
                        <p style="font-size:20px;">
                            Nombre: {{$proyectos->name}}
                        </p>
                        <p style="font-size:20px;">
                            Codigo: {{$proyectos->id}}
                        </p>
                        <p style="font-size:20px;">
                            description: {{$proyectos->description}}
                        </p>
                        <p style="font-size:20px;">
                            created: {{$proyectos->created}}
                        </p>

                        <BR></BR>
                        <div class="d-flex justify-content-center"> 
                            <a href="{{ route('proyectos.edit', $proyectos->id) }}" class="btn light-blue accent-4 darken-4">
                                <i class="material-icons right">edit</i>Editar Datos</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
