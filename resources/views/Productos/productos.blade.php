@extends('layout')

@section('title','Mis Productos')

@section('contenido')
<h1>&nbsp;&nbsp;&nbsp;Mis Producto</h1>
<br>
    <table class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
    <thead>
        <tr>
            <th>SKU</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
    </thead>
        @foreach ($productos as $a )
            <tr>
                <td><a href="{{ action('ProductosController@descripcion' ,['id' => $a->id ]) }}" > {{$a->sku}}</a></td>
                <td>{{$a->nombre}} </td>
                <td>@money($a->precio)</td>
                <td>{{$a->stock}}</td>
            </tr>
        @Endforeach 
    </table>
@endsection