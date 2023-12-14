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
  <form action="/comment/update/<?php echo e($comment->id); ?>" method="POST">
      <?php echo csrf_field(); ?>

      <input type="hidden" name="article_id" value="<?php echo e($comment->article_id); ?>">
      <div class="mb-3">
          <label for="exampleInputTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputTitle" name="title" value="<?php echo e($comment->title); ?>">
      </div>

      <div class="mb-3">
        <label for="exampleInputText" class="form-label">Text</label>
        <input type="text" class="form-control" id="exampleInputText" name="text" value="<?php echo e($comment->text); ?>">
      </div>
    <button type="submit" class="btn btn-primary">Update comment</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/comment/edit.blade.php ENDPATH**/ ?>