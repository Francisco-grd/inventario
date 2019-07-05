@extends('layout')

@section('title','Mis Ventas')

@section('contenido')
<h1>&nbsp;&nbsp;&nbsp;Mis Ventas</h1>
<br>
    <table class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
    <thead>
        <tr>
            <th>Fecha:</th>
            <th>Precio</th>
            <th>Total Articulos</th>
            <th></th>
        </tr>
    </thead>
        @foreach ($ventas as $a )
            <tr>
                <td>{{$a->fecha}} </td>
                <td align="center" >@money($a->precio_total)</td>
                <td align="center">{{$a->item_total}}</td>
                <td><a href="{{ action('VentaController@detalle' ,['id' => $a->id ]) }}" > Ver Detalle</a></td>
            </tr>
        @Endforeach 
    </table>
@endsection