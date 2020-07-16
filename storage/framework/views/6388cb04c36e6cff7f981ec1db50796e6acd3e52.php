
<?php $__env->startSection('title',"Usuarios"); ?>;
    
<?php $__env->startSection('content'); ?>
    

        <h1>Usuarios</h1>
        <h2><?php echo e($title); ?></h2>
    
        <?php if(empty($users)): ?>
                <h2>NO HAY USUARIOS</h2>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($user); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
        <?php endif; ?>
  

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <h2>Barra Usuarios</h2>
<?php $__env->stopSection(); ?>
 


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\NeoRestaurant\resources\views/users.blade.php ENDPATH**/ ?>