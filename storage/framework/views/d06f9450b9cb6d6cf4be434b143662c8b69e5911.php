<?php $__env->startSection('title','Actualizar Productos'); ?>

<?php $__env->startSection('contenido'); ?>
<h1>&nbsp;&nbsp;&nbsp;Editar Producto</h1>
<br>
<table class="table table-hover table-condensed" style="width:500px;height:50px; border:2px solid black; margin-left:50px;">
        <tr>
            <th colspan="2">
                    <form action=" <?php echo e(action('ProductosController@busqueda')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            SKU: <input type="text"  placeholder="SKU del Producto" id="sku"  name="sku" > <input type="submit" value="Buscar">
                    </form>
            </th>
        </tr>
        <tr>
</table>

  
    <?php if(!@empty($item)): ?>
    <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Actualizar Producto</b></h3>
                <br>
                
                <form action="<?php echo e(action('ProductosController@actualizar')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                <table class="table table-hover table-condensed" style="width:500px;height:50px;  margin-left:50px;">
                    <input type="hidden" name="txtid" value="<?php echo e($item->id); ?>">
                    <tr>
                        <th>Producto:</th>
                        <td><input type="text" class="form-control" value="<?php echo e($item->nombre); ?>" disabled></td>
                    </tr>
                    <tr>
                        <th>SKU:</th>
                        <td><input type="text" class="form-control" name="txtsku" value="<?php echo e($item->sku); ?>" disabled></td>
                    </tr>
                    <tr>
                        <th>Precio $:</th>
                        <td><input type="number" class="form-control" name="txtprecio" value="<?php echo e($item->precio); ?>" required></td>
                    </tr>
                    <tr>
                        <th>Stock:</th>
                        <td><input type="number" class="form-control" name="txtstock" value="<?php echo e($item->stock); ?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><button type="submit" class="btn btn-primary btn-md">Guardar</button></center></td>
                    </tr>
                </table>
                </form>
            </div>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\minimarket\resources\views/Productos/actualizarproducto.blade.php ENDPATH**/ ?>