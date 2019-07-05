<?php $__env->startSection('title','Mis Ventas'); ?>

<?php $__env->startSection('contenido'); ?>
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
        <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($a->fecha); ?> </td>
                <td align="center" ><?php echo '$' . number_format($a->precio_total, 0, ',', '.'); ?></td>
                <td align="center"><?php echo e($a->item_total); ?></td>
                <td><a href="<?php echo e(action('VentaController@detalle' ,['id' => $a->id ])); ?>" > Ver Detalle</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\minimarket\resources\views/Ventas/ventas.blade.php ENDPATH**/ ?>