<?php $__env->startSection('content'); ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">ShortDesc</th>
      <th scope="col">Desc</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($article->date); ?></th>
      <td><a class="nav-link" href="/article/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></td>
      <td><?php echo e($article->shortDesc); ?></td>
      <td><?php echo e($article->text); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
  </tbody>
</table>
<?php echo e($articles->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/article/index.blade.php ENDPATH**/ ?>