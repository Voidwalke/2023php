<?php $__env->startSection('content'); ?>
    <p>Name</p><h6><?php echo e($data['name']); ?></h6>
    <p>Adres</p><h6><?php echo e($data['adres']); ?></h6>
    <p>Phone</p><h6><?php echo e($data['phone']); ?></h6>
    <p>E-mail</p><h6><?php echo e($data['email']); ?></h6>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/main/contacts.blade.php ENDPATH**/ ?>