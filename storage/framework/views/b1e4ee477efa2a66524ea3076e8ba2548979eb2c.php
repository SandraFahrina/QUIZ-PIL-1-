

<?php $__env->startSection('title', 'course'); ?>
<?php $__env->startSection('content'); ?>
<a href="/courses/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Matakuliah</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama Matakuliah</th>
      <th scope="col">SKS</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($course->nama_matakuliah); ?></td>
    <td><?php echo $course->sks; ?></td>

    <td><a href="/courses/<?php echo e($course->id); ?>/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/courses/<?php echo e($course->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($courses -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Quiz - PIL - Sandra\resources\views/courses/index.blade.php ENDPATH**/ ?>