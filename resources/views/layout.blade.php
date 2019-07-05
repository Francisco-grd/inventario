<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>@yield('title')</title>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="/">MiniMarket</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li ><a  href="{{ action('ProductosController@index') }}"><b>Mi Inventario</b></a></li>
                    <li><a  href="{{ action('ProductosController@add') }}"><b>Agregar Producto</b></a></li>
                    <li><a  href="{{ action('ProductosController@update') }}"><b>Actualizar Stock</b></a></li>
                    <li><a  href="{{ action('VentaController@index') }}"><b>Mis Ventas</b></a></li>
                    <li><a  href="{{ action('CartController@index') }}"><b>Carro de Compra</b></a></li>
                  </ul>
                </div>
              </nav>
</head>

<body>
    
    <br>
    <div id="principal">
       @yield('contenido')
    </div>
    
</body>
</html>