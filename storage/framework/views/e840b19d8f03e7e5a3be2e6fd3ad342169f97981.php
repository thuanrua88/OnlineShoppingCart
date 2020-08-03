<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Bài viết</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="" class="form-inline" style="margin-bottom: 20px;">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên bài viết..." name="name" value="<?php echo e(\Request::get('name')); ?>">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Quản lý bài viết<a href="<?php echo e(route('admin.get.create.article')); ?>" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên bài viết</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($articles)): ?>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($article->id); ?></td>
                    <td>
                        <?php echo e($article->a_name); ?>

                    </td>
                    <td><?php echo e($article->a_description); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.get.action.article',['active',$article->id])); ?>" class="label <?php echo e($article->getStatus($article->a_active)['class']); ?>"><?php echo e($article->getStatus($article->a_active)['name']); ?></a>
                    </td>
                    <td>
                        <?php echo e($article->created_at); ?>

                    </td>
                    <td>
                        <a style="padding: 5px 10px;border: 1px  #999" href="<?php echo e(route('admin.get.edit.article',$article->id)); ?>"><i class="fas fa-pen" style="font-size: 11px"></i> Cập nhật</a>
                        <a style="padding: 5px 10px;border: 1px  #999" href="<?php echo e(route('admin.get.action.article',['delete',$article->id])); ?>"><i class="fas fa-trash-alt" style="font-size: 11px"></i> Xóa</a>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\Modules/Admin\Resources/views/article/index.blade.php ENDPATH**/ ?>