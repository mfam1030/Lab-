

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mt-4">Tarea ID: <?php echo e($task->id); ?></h1>
        <hr>
        <h2><?php echo e($task->name); ?></h2>
        <p><?php echo e($task->description); ?></p>

        <a href="/tasks/<?php echo e($task->id); ?>/edit" class="btn btn-primary">Editar</a>

        <form action="/tasks/<?php echo e($task->id); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LabMiercoles19\resources\views/tasks/show.blade.php ENDPATH**/ ?>