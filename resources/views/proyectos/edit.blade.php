@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')

<div class="container">
    <div align="center" class="card-header">{{ __('Editar proyecto') }}</div>
    <div class="row" >
        <form method="POST" action="{{url('/proyectos/' . $proyectos->id)}}" role="form" class="col s12">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
        
            <label for="Nombre">{{'Nombre'}}</label>
            <input type="text" name="name" id="Nombre" value="{{ $proyectos->name}}">

            <label for="description">{{'description'}}</label>
            <input type="text" name="description" id="description" value="{{ $proyectos->description}}">
            <BR><BR>
        
            <button  class="light-blue accent-4 darken-4"  >
                <a href="{{ route('proyectos.index') }}" class="btn light-blue accent-4 darken-4 ">
                <i class="material-icons" style="font-size: 12px; color:white;">arrow_back_ios</i>Regresar</a>
            </button>
            <button type="submit" class="btn light-blue accent-4 darken-4" style="font-size: 11px" a onclick="M.toast({html: 'Proyecto actualizado con exito'})">
                <i class="material-icons right">save</i>Guardar Cambios
            </button>
    
        </form>
    </div>
</div>
@endsection