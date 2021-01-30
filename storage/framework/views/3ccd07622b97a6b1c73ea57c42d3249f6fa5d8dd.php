

<?php $__env->startSection('title', 'presents'); ?>
<?php $__env->startSection('content'); ?>
<a href="/presents/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Absensi</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Waktu Absen</th>
      <th scope="col">Mahasiswa Id</th>
      <th scope="col">Matakuliah Id</th>
      <th scope="col">Keterangan</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $presents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $present): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($present->waktu_absen); ?></td>
    <td><?php echo $present->mahasiswa_id; ?></td>
    <td><?php echo $present->matakuliah_id; ?></td>
    <td><?php echo $present->keterangan; ?></td>
 
    <td><a href="/presents/<?php echo e($present->id); ?>/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/presents/<?php echo e($present->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($presents -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Quiz\resources\views/presents/index.blade.php ENDPATH**/ ?>