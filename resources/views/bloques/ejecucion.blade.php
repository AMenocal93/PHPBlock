@extends('layouts.bloques')
@extends('layouts.app')
@section('title','Ejecucion')
@section('content')
    <div class="container">
        @php
            eval($codigo);
        @endphp
    </div>
@endsection