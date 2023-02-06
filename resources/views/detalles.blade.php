@extends('vistas.layout')
@section('contenido2')
<div class="carrousel">
    @each('vistas.cartaDetalles', $coches, 'coches')
</div>


@endsection
             