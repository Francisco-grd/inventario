<?php $__env->startSection('title','Productos'); ?>

<?php $__env->startSection('contenido'); ?>
    <?php if(!@empty($item)): ?>
        <h1>Producto: <?php echo e($item->nombre); ?></h1>
        <h2>Precio:<?php echo '$' . number_format($item->precio, 0, ',', '.'); ?> </h2>
        <h2>Stock: <?php echo e($item->stock); ?></h2>
    <?php else: ?>
        <h1>No Existe el Producto</h1>
    <?php endif; ?>

    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-info" >Volver</a>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\minimarket\resources\views/Productos/descripcion.blade.php ENDPATH**/ ?>