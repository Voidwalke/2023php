<?php $__env->startSection('content'); ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>      
      <th scope="col">Article Title</th>
      <th scope="col">Text</th>
      <th scope="col">Author</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($comment->created_at); ?></th>
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($comment->article_id == $article->id): ?>      
        <td><?php echo e($article->title); ?></a></td>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <td><?php echo e($comment->text); ?></td>
      <td><?php echo e($comment->getUserId()->name); ?></td>
      <td>
        <?php if(!$comment->accept == 1): ?>
        <a href="/comment/accept/<?php echo e($comment->id); ?>" class="btn btn-secondary">Accept</a>
        <?php else: ?>
        <a href="/comment/reject/<?php echo e($comment->id); ?>" class="btn btn-danger">Reject</a>
        <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
  </tbody>
</table>
<?php echo e($comments->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/comment/index.blade.php ENDPATH**/ ?>