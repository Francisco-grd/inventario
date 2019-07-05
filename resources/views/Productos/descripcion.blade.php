@extends('layout')

@section('title','Productos')

@section('contenido')
    @if(!@empty($item))
        <h1>Producto: {{ $item->nombre }}</h1>
        <h2>Precio:@money($item->precio) </h2>
        <h2>Stock: {{ $item->stock }}</h2>
    @else
        <h1>No Existe el Producto</h1>
    @endif

    <a href="{{ url()->previous() }}" class="btn btn-info" >Volver</a>  
@endsection