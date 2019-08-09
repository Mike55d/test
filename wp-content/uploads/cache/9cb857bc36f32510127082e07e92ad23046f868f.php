<?php $__env->startSection('content'); ?>
  <div class="page-error">
    <div class="my-5 text-center">
      <h2 class="my-5">Página no encontrada / Page not found</h2>
      <a class="button button-primary mb-5" href="/">Inicio / Home</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>