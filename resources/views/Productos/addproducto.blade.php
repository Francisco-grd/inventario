@extends('layout')

@section('title','Añadir Productos')

@section('contenido')

<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
            @endif
            @if(Session::has('exito'))
                <div class="alert alert-info">
                    {{Session::get('exito')}}
                </div>
            @endif
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Producto</h3>
				</div>
				<div class="panel-body ">					
                <form class="form-horizontal" action=" {{ action('ProductosController@create') }}" method="POST"> 
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Nombre:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre del Producto" name="nombre" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-sm-2" >SKU:</label>
                            <div class="col-sm-4">          
                            <input type="text" class="form-control" id="sku" placeholder="SKU" name="sku" required>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Precio:</label>
                        <div class="col-sm-4">          
                        <input type="number" class="form-control" id="precio" placeholder="Precio" name="precio" min="100" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-sm-2" >Stock:</label>
                            <div class="col-sm-4">          
                            <input type="number" class="form-control" id="stock" placeholder="Stock" name="stock" min="1" required>
                            </div>
                        </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-md">Guardar</button>
                        </div>
                    </div>
                    </form>
                    <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="{{ url()->previous() }}" class="btn btn-default" >Volver</a>
                            </div>
                        </div>					
				</div>

			</div>
		</div>
	</section>
@endsection