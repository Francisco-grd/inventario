<?php $__env->startSection('title','Mis Productos'); ?>

<?php $__env->startSection('contenido'); ?>
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
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="<?php echo e(action('ProductosController@descripcion' ,['id' => $a->id ])); ?>" > <?php echo e($a->sku); ?></a></td>
                <td><?php echo e($a->nombre); ?> </td>
                <td><?php echo '$' . number_format($a->precio, 0, ',', '.'); ?></td>
                <td><?php echo e($a->stock); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\minimarket\resources\views/Productos/productos.blade.php ENDPATH**/ ?>