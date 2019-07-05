<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="/">MiniMarket</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li ><a  href="<?php echo e(action('ProductosController@index')); ?>"><b>Mi Inventario</b></a></li>
                    <li><a  href="<?php echo e(action('ProductosController@add')); ?>"><b>Agregar Producto</b></a></li>
                    <li><a  href="<?php echo e(action('ProductosController@update')); ?>"><b>Actualizar Stock</b></a></li>
                    <li><a  href="<?php echo e(action('VentaController@index')); ?>"><b>Mis Ventas</b></a></li>
                    <li><a  href="<?php echo e(action('CartController@index')); ?>"><b>Carro de Compra</b></a></li>
                  </ul>
                </div>
              </nav>
</head>

<body>
    
    <br>
    <div id="principal">
       <?php echo $__env->yieldContent('contenido'); ?>
    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\minimarket\resources\views/layout.blade.php ENDPATH**/ ?>