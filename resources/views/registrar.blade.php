@extends('vistas.layout')
    <link rel="stylesheet" href="{{asset('/css/estilosSolicitud.css')}}">
@section('contenido')
<div class="carrousel">
        @include('vistas.registrar')
</div>
@endsection
             