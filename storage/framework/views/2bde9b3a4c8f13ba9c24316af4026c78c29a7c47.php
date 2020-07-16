
<?php $__env->startSection('title',"Usuario {$user} "); ?>;

<?php $__env->startSection('content'); ?>

<h1 class="mt-5"> Detalles del Usuario
</h1>
<p >Nombre de Usuario-> <?php echo e($user->name); ?> </p>
<p>Email-> <?php echo e($user->email); ?> </p>
<a href="<?php echo e(route('users.index')); ?>">Volver a Listas de Usuarios</a>




<?php $__env->stopSection(); ?>










<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\NeoRestaurant\resources\views/users/show.blade.php ENDPATH**/ ?>