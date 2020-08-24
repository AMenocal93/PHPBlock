@extends('layouts.introduccion')
@section('title','Programacion')
@extends('layouts.app')
@section('content')
<h2 align="center">Mis Proyectos</h2>
<div class="btn-group">
    <a href="{{ route('proyectos.create') }}" class="btn light-blue accent-4 darken-4" >Nuevo Proyecto</a>
</div>
    <br></br>
    <?php $a = 0; ?>
    <?php $par = 0; ?>
    <div class="row">
        <div class="col s6">
        @foreach($proyectos as $proyecto)
            @if (Auth::user()->id == $proyecto->user_id)
            <?php $a++; ?> 
            @if($a%2 == 1)
             <div class="card">             
                <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="imagenes/imga.png" >
                </div>   
                <div class="card-content" width="10" >
                    <span class="card-title activator grey-text text-darken-4">{{ $proyecto->name }}<i class="material-icons right">more_vert</i></span>                      

                    <form action="{{ action('ProyectosController@destroy', $proyecto->id)}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button  onclick="return confirm('¿Eliminar proyecto?')"
                        style="background-color:transparent; border-color:transparent"> <img src="imagenes/elim.png" alt="Borrar" width="27">
                    </button> 
                        <a  href="{{action('ProyectosController@edit', $proyecto->id)}}"> | 
                            <img src="imagenes/editar.png" alt="Editar" width="27"></a>
                        <a  href="{{action('BlockController@show', $proyecto->id)}}"> | <img src="imagenes/codigo.png" alt="Bloques" width="27"></a>
                        <!-- a href=" {{action('ProyectosController@show', $proyecto->id)}}" class="btn light-blue accent-4 darken-4" style="font-size: 11px">Ver</a> -->
                 </form>  
                </div> 
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $proyecto->name }}<i class="material-icons right">close</i></span>
                <p>{{ $proyecto->description }}</p>
            </div>
                 
        </div>
                @endif
            @endif
        @endforeach
    </div>
        <div class="col s4">
        @foreach($proyectos as $proyecto)
            @if (Auth::user()->id == $proyecto->user_id)
                <?php $par++; ?> 
                @if($par%2 == 0)<div class="card">             
                <div class="card-image waves-effect waves-block waves-light" >
                   <img class="activator" src="imagenes/imga.png">
                </div>   
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $proyecto->name }}<i class="material-icons right">more_vert</i></span>                      
                    <form action="{{ action('ProyectosController@destroy', $proyecto->id)}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                    <button  onclick="return confirm('¿Eliminar proyecto?')"
                        style="background-color:transparent; border-color:transparent"> <img src="imagenes/elim.png" alt="Borrar" width="27">
                    </button> 
                        <a  href="{{action('ProyectosController@edit', $proyecto->id)}}"> | 
                            <img src="imagenes/editar.png" alt="Editar" width="27"></a>
                        <a  href="{{action('BlockController@show', $proyecto->id)}}"> | <img src="imagenes/codigo.png" alt="Editar" width="27"></a>
                
                </div> 
                <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $proyecto->name }}<i class="material-icons right">close</i></span>
                <p>{{ $proyecto->description }}</p>
            </div>
                 
        </div>
                @endif
            @endif
        @endforeach
    </div> 
@endsection