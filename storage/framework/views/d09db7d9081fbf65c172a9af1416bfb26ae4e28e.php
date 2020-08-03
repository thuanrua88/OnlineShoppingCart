<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('admin.home')); ?>">Trang chủ</a></li>
            <li><a href="<?php echo e(route('admin.get.list.category')); ?>" title="Danh mục">Danh mục</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </div>
    <div class="">
        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Tên danh mục:</label>
                <input type="text" class="form-control"  placeholder="Tên danh mục" value="<?php echo e(old('name',$category->c_name)); ?>" name="name">
                <?php if($errors->has('name')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('name')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Icon</label>
                <input type="text" class="form-control"  placeholder="fa fa-home" value="<?php echo e(old('icon',$category->c_icon)); ?>" name="icon">
                <?php if($errors->has('name')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('name')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Meta Title:</label>
                <input type="text" class="form-control"  placeholder="Meta title" value="<?php echo e(old('c_title_seo',$category->c_title_seo)); ?>" name="c_title_seo">
            </div>
            <div class="form-group">
                <label for="name">Meta Description:</label>
                <input type="text" class="form-control"  placeholder="Meta Description" value="<?php echo e(old('c_description_seo',$category->c_description_seo)); ?>" name="c_description_seo">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="hot">Nổi bật</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Lưu thông tin</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\Modules/Admin\Resources/views/category/update.blade.php ENDPATH**/ ?>