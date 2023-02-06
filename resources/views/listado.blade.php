@extends('vistas.layout')
@section('contenido')
<div class="carrousel">
    @each('vistas.cartasListado', $coches, 'coches')
</div>


@endsection
             