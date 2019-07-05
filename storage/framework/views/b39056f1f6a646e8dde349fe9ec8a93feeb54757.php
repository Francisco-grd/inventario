<?php $__env->startSection('title','Detalle de Productos'); ?>

<?php $__env->startSection('contenido'); ?>
<h1>&nbsp;&nbsp;&nbsp;Detalle Venta</h1>
<br>
    <?php if(!@empty($venta)): ?>
    <table class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
           
            
            
    </table>
    <br>
    <table class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
            <tr>
                    <th colspan="2"><center>Fecha: <?php echo e($venta->fecha); ?> </center></th>
            </tr>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php $__currentLoopData = $detalle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->nombre); ?></td>
                <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</td>
                <td><?php echo '$' . number_format($item->precio, 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                    <td></td>
                    <th>Precio Total</th>
                    <td><b><?php echo '$' . number_format($venta->precio_total, 0, ',', '.'); ?></b></td>
            </tr>
            
    </table>

    <?php else: ?>
        <h1>No Existe Venta</h1>
    <?php endif; ?>

    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-info" >Volver</a>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\minimarket\resources\views/Ventas/detalle.blade.php ENDPATH**/ ?>