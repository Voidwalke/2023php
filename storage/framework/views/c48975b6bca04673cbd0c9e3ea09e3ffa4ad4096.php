<?php $__env->startSection('content'); ?>
<div class="text-center mt-3">
    <div class="card" style="width: 100%;">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($article->title); ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo e($article->shortDesc); ?></h6>
      <p class="card-text"><?php echo e($article->text); ?></p>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create')): ?>
      <div class="btn-group">
        <a href="/article/<?php echo e($article->id); ?>/edit" class="btn btn-primary mr-3">Update article</a>
        <form action="/article/<?php echo e($article->id); ?>" method="post">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Delete Article</button>
        </form>
      </div>
      <?php endif; ?>
      
    </div>
  </div>
  <h3 class="mt-3">Comments</h3>
  <?php if(isset($_GET['res'])): ?>
  <?php if($_GET['res'] == 1): ?>
  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    Your comment send to moderation!

  </div>
  <?php endif; ?>
  <?php endif; ?>
  </div>
  
  <div class="alert-danger">
    <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <ul>
        <li><?php echo e($error); ?></li>
      </ul>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </div>
  <form action="/comment" method="POST">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
          <label for="exampleInputTitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputTitle" name="title">
      </div>
      <div class="mb-3">
        <label for="exampleInputText" class="form-label">Text</label>
        <input type="text" class="form-control" id="exampleInputText" name="text">
      </div>
      <div class="mb-3">
        <input type="hidden" name="article_id" value="<?php echo e($article->id); ?>">
      </div>
    <button type="submit" class="btn btn-primary">Add comment</button>
  </form>
  <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card mt-3" style="width: 50%;">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($comment->title); ?></h5>
      <p class="card-text"><?php echo e($comment->text); ?></p>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('comment', $comment)): ?>
      <div class="btn-group">
        <a href="/comment/edit/<?php echo e($comment->id); ?>" class="btn btn-primary mr-3">Update comment</a>
        <a href="/comment/delete/<?php echo e($comment->id); ?>" class="btn btn-primary mr-3">Delete comment</a>
      </div>
      <?php endif; ?>
     </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/article/show.blade.php ENDPATH**/ ?>