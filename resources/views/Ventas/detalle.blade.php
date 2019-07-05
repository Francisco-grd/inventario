@extends('layout')

@section('title','Detalle de Productos')

@section('contenido')
<h1>&nbsp;&nbsp;&nbsp;Detalle Venta</h1>
<br>
    @if(!@empty($venta))
    <table class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
           
            
            
    </table>
    <br>
    <table class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
            <tr>
                    <th colspan="2"><center>Fecha: {{$venta->fecha}} </center></th>
            </tr>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            @foreach ($detalle as $item)
            <tr>
                <td>{{$item->nombre }}</td>
                <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</td>
                <td>@money($item->precio)</td>
            </tr>
            @endforeach
            <tr>
                    <td></td>
                    <th>Precio Total</th>
                    <td><b>@money($venta->precio_total)</b></td>
            </tr>
            
    </table>

    @else
        <h1>No Existe Venta</h1>
    @endif

    <a href="{{ url()->previous() }}" class="btn btn-info" >Volver</a>  
@endsection