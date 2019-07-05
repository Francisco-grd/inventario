@extends('layout')

@section('title','Actualizar Productos')

@section('contenido')
<h1>&nbsp;&nbsp;&nbsp;Editar Producto</h1>
<br>
<table class="table table-hover table-condensed" style="width:500px;height:50px; border:2px solid black; margin-left:50px;">
        <tr>
            <th colspan="2">
                    <form action=" {{ action('ProductosController@busqueda') }}" method="POST">
                            {{ csrf_field() }}
                            SKU: <input type="text"  placeholder="SKU del Producto" id="sku"  name="sku" > <input type="submit" value="Buscar">
                    </form>
            </th>
        </tr>
        <tr>
</table>

  
    @if(!@empty($item))
    <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Actualizar Producto</b></h3>
                <br>
                
                <form action="{{ action('ProductosController@actualizar') }}" method="post">
                        {{ csrf_field() }}
                <table class="table table-hover table-condensed" style="width:500px;height:50px;  margin-left:50px;">
                    <input type="hidden" name="txtid" value="{{ $item->id }}">
                    <tr>
                        <th>Producto:</th>
                        <td><input type="text" class="form-control" value="{{ $item->nombre }}" disabled></td>
                    </tr>
                    <tr>
                        <th>SKU:</th>
                        <td><input type="text" class="form-control" name="txtsku" value="{{ $item->sku }}" disabled></td>
                    </tr>
                    <tr>
                        <th>Precio $:</th>
                        <td><input type="number" class="form-control" name="txtprecio" value="{{ $item->precio }}" required></td>
                    </tr>
                    <tr>
                        <th>Stock:</th>
                        <td><input type="number" class="form-control" name="txtstock" value="{{  $item->stock }}" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><button type="submit" class="btn btn-primary btn-md">Guardar</button></center></td>
                    </tr>
                </table>
                </form>
            </div>
    </div>
    @endif
@endsection