@extends('layouts.principal')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="cyan-text text-darken-3">Catálogo de Producto</h1>
            </div>
        </div>

        <div class="row">
        
            @foreach($productos as $producto)

            <div class="col s5 m5">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('img/producto/'.$producto->imagen) }}" width='500px' height='400px'>
                            <span class="card-title  black">{{ $producto->nombre }}</span>
                        </div>
                        <div class="card-content">
                            <div>Descripción : {{ $producto->descripcion }}</div>
                            <div>Precio : {{ $producto->precio }}</div>
                        </div>
                        <div class="card-action">
                            <a href="#" class="cyan-text text-darken-3">Ver detalles</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection