<?php $__env->startSection('content'); ?>
<div class="alert-danger">
    <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <ul>
        <li><?php echo e($error); ?></li>
      </ul>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </div>
  <form action="/article" method="POST">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="exampleInputDate" class="form-label">Date</label>
        <input type="date" class="form-control" id="exampleInputDate" name="date" value="<?php echo e(date('Y-m-d')); ?>">
      </div>
      <div class="mb-3">
          <label for="exampleInputTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputTitle" name="title">
      </div>
      <div class="mb-3">
          <label for="exampleInputShortDesc" class="form-label">ShortDesc</label>
          <input type="text" name="shortDesc" class="form-control" id="exampleInputShortDesc">
      </div>
      <div class="mb-3">
        <label for="exampleInputText" class="form-label">Text</label>
        <input type="text" class="form-control" id="exampleInputText" name="text">
      </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/article/create.blade.php ENDPATH**/ ?>