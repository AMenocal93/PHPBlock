@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')
<div class="container">
<div align="center" class="card-header">{{ __('Crear Proyecto') }}</div>

<div class="row" >
    <form method="POST" action="{{ route('proyectos.store') }}" role="form" class="col s12">
    {{ csrf_field() }}
      
      <div class="form-group row">
        <div class="input-field col s5">
            <input id="Nombre_proyecto" name="name" type="text" class="validate" required>
            <label for="Nombre_proyecto">Nombre del proyecto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5">
            <input id="descripcion" name="description" type="text" class="validate" required>
            <label for="descripcion">Descripción del proyecto</label>
        </div>
      </div>
      <div class="row">
					<div class="input-field col s5">
						<div class="form-group">
							<input style="display: none" type="datetime" name="created" id="created" class="form-control input-sm" value="<?php echo date("Y-m-d");?>">
						</div>
					</div>
					<div class="input-field col s5">
						<div class="form-group">
						  <input style="display: none" type="text" name="user_id" id="user_id" value="<?php echo Auth::user()->id?>" class="form-control input-sm">
						</div>
					</div>
			</div>
</div>
      <div class="form-group row mb-0">
      
            <div class=" col-md-6 offset-md-4 ">
                <a href="{{ route('proyectos.index') }}" class="btn light-blue accent-4 darken-4 ">
                <i class="material-icons" style="font-size: 12px; color:white;">arrow_back_ios</i>Regresar</a>
                <button type="submit" class="btn light-blue accent-4 darken-4" >
                        {{ __('Guardar') }}
                        <i class="material-icons right ">send</i> 
                </button> 
            </div>
        </div>
    </form>
  </div>
  </div>
  @endsection