
<?php $__env->startSection('title',"Usuarios"); ?>;

<?php $__env->startSection('content'); ?>
    

        <h1>Usuarios</h1>
        <h2><?php echo e($title); ?></h2>
    
        <?php if(empty($users)): ?>
                <h2>NO HAY USUARIOS</h2>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($user->name); ?>

                            <a href="<?php echo e(route('users.show', ['id' => $user])); ?>">Ver detalles</a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
        <?php endif; ?>
  

<?php $__env->stopSection(); ?>

 


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\NeoRestaurant\resources\views/users/index.blade.php ENDPATH**/ ?>