@extends('vistas.layout')
  <link rel="stylesheet" href="{{asset('/css/estilosListado.css')}}">

@section('contenido')
<div class="carrousel">
    @each('vistas.cartasListado', $coches, 'coches')

</div>
<div >
    {{$coches->withQueryString()->links()}}

</div>
@endsection

