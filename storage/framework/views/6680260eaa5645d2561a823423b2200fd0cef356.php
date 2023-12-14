<?php $__env->startSection('content'); ?>
    <!-- <h3>Hello, Laravel!</h3> -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">ShortDesc</th>
      <th scope="col">Desc</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($article->date); ?></th>
      <td><?php echo e($article->name); ?></td>
      <td><?php echo e($article->shortDesc); ?></td>
      <td><?php echo e($article->desc); ?></td>
      <td><a href="/galery/<?php echo e($article->full_image); ?>"><img src="<?php echo e(URL::asset($article->preview_image)); ?>" alt="" width="80" height="80"></a></td>      
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sabakakysaka/resources/views/main/main.blade.php ENDPATH**/ ?>