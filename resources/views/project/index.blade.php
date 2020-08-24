@extends('layouts.bloques')
@extends('layouts.app')
@section('title','Proyectos')
@section('content')
    <div class="container">
        @for($i=1;$i<=10;$i++)
            <div class="row">
                <div class="col s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="imagenes/icono.ico">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Tablas de Multiplicar<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Editar</a><a href="#">Borrar</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Tabla de Multiplicar<i class="material-icons right">close</i></span>
                            <p>Programa de PHP que escribe una tabla de multiplicar a partir de la variable tabla</p>
                            <a class="waves-effect waves-light btn-small"><i class="material-icons right">cloud</i>Borrar</a>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="imagenes/icono.ico">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Registros en MySQL<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Editar</a><a href="#">Borrar</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Insercion de registros en una tabla<i class="material-icons right">close</i></span>
                            <p>Proyecto realizado en Blocly para insertar datos en una tabla X.</p>
                            <a class="waves-effect waves-light btn-small"><i class="material-icons right">cloud</i>Borrar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor   
    </div>     
@endsection