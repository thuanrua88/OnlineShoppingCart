<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('admin.home')); ?>">Trang chủ</a></li>
            <li><a href="<?php echo e(route('admin.get.list.category')); ?>" title="Danh mục">Danh mục</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </div>
    <div class="">
        <?php echo $__env->make("admin::category.form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\Modules/Admin\Resources/views/category/create.blade.php ENDPATH**/ ?>