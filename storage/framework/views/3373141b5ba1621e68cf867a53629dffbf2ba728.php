

<?php $__env->startSection('title', 'students'); ?>
<?php $__env->startSection('content'); ?>
<a href="/students/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah Mahasiswa</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">NO Telepon</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($student->nama_mahasiswa); ?></td>
    <td><?php echo $student->alamat; ?></td>
    <td><?php echo $student->no_tlp; ?></td>
    <td><?php echo $student->email; ?></td>
 
    <a id="tombolUbah" data-toggle="modal" data-target="#UbahModal"></a>
    <!-- Modal Ubah data Mahasiswa --> 
    
    <form action="/students/<?php echo e($student->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($students -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Quiz - PIL - Sandra\resources\views/students/index.blade.php ENDPATH**/ ?>