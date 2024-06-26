<!-- resources/views/tasks/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">Lista de Tareas</h1>
                    </div>
                    <div class="card-body">
                        <div class="text-right mb-3">
                            <a href="/tasks/create" class="btn btn-success">Crear Tarea</a>
                        </div>
                        <ul class="list-group">
                            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="/tasks/<?php echo e($task->id); ?>"><?php echo e($task->name); ?></a> 
                                    <form action="/tasks/<?php echo e($task->id); ?>/complete" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <button type="submit" class="btn btn-sm btn-primary">Completar</button>
                                    </form>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LabMiercoles19\resources\views/tasks/index.blade.php ENDPATH**/ ?>