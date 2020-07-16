
<?php $__env->startSection('title',"Usuario {$id} "); ?>;

<?php $__env->startSection('content'); ?>

<h1 class="mt-5"> Detalles del Usuario->
    <span class="lead"><?php echo e($id); ?> </span>
</h1>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
    <h2>Barra Usuarios Detalles</h2>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\NeoRestaurant\resources\views/user-show.blade.php ENDPATH**/ ?>