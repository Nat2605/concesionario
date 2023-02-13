@extends('vistas.layout')
  <link rel="stylesheet" href="{{asset('/css/estilosDetalles.css')}}">

@section('contenido')
<div class="carrousel">
    @each('vistas.cartaDetalles', $coches, 'coches')
</div>


@endsection
             