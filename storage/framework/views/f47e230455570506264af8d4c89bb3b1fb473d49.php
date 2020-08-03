<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="" class="form-inline" style="margin-bottom: 20px;">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên sản phẩm..." name="name" value="<?php echo e(\Request::get('name')); ?>">
                </div>
                <div class="form-group">
                    <select name="cate" id="" class="form-control">
                        <option value="">Danh mục</option>
                        <?php if(isset($categories)): ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>" <?php echo e(\Request::get('cate') == $category->id ? "selected='selected'" : ""); ?>><?php echo e($category->c_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Quản lý sản phẩm<a href="<?php echo e(route('admin.get.create.product')); ?>" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên Sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($products)): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($product->id); ?></td>
                    <td>
                        <?php echo e($product->pro_name); ?>

                        <ul style="padding-left: 15px;">
                            <li><span><i class="fas fa-dollar-sign"></i></span><span>12.000.000</span></li>
                            <li><span><i class="fas fa-dollar-sign"></i></span><span>0 %</span></li>
                        </ul>
                    </td>
                    <td><?php echo e(isset($product->category->c_name) ? $product->category->c_name : '[N\A]'); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.get.action.product',['active',$product->id])); ?>" class="label <?php echo e($product->getStatus($product->pro_active)['class']); ?>"><?php echo e($product->getStatus($product->pro_active)['name']); ?></a>
                    </td>
                    <td>
                        <a href="<?php echo e(route('admin.get.action.product',['hot',$product->id])); ?>" class="label <?php echo e($product->getHot($product->pro_hot)['class']); ?>"><?php echo e($product->getHot($product->pro_hot)['name']); ?></a>
                    </td>
                    <td>
                        <a style="padding: 5px 10px;border: 1px  #999" href="<?php echo e(route('admin.get.edit.product',$product->id)); ?>"><i class="fas fa-pen" style="font-size: 11px"></i> Cập nhật</a>
                        <a style="padding: 5px 10px;border: 1px  #999" href="<?php echo e(route('admin.get.action.product',['delete',$product->id])); ?>"><i class="fas fa-trash-alt" style="font-size: 11px"></i> Xóa</a>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\Modules/Admin\Resources/views/product/index.blade.php ENDPATH**/ ?>