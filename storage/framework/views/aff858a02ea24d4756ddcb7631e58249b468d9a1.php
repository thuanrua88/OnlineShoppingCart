<?php
?>
;
<?php $__env->startSection('content'); ?>
    <div class="panel-body">
        <?php echo $__env->make('errors.503', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(url('task')); ?>" method="post" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plush"></i>Add Task
                        </button>
                    </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\resources\views/tasks.blade.php ENDPATH**/ ?>