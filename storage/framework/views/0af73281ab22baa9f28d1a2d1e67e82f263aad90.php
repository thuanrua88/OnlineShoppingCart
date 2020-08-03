<form action="" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="pro_name">Tên bài viết:</label>
                <input type="text" class="form-control"  placeholder="Tên bài viết" value="<?php echo e(old('a_name',isset($article->a_name) ? $article->a_name : '')); ?>" name="a_name">
                <?php if($errors->has('a_name')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('a_name')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Mô tả:</label>
                <textarea name="a_description" class="form-control" id="" cols="30" rows="3" placeholder="Mô tả bài viết"><?php echo e(old('a_description',isset($article->a_description) ? $article->a_description : '')); ?></textarea>
                <?php if($errors->has('a_description')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('a_description')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Nội dung:</label>
                <textarea name="a_content" class="form-control" id="" cols="30" rows="3" placeholder="Nội dung"><?php echo e(old('a_content',isset($article->a_content) ? $article->a_content : '')); ?></textarea>
                <?php if($errors->has('a_content')): ?>
                    <span class="error-text">
                        <?php echo e($errors->first('a_content')); ?>

                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="name">Meta Title:</label>
                <input type="text" class="form-control"  placeholder="Meta Title" value="<?php echo e(old('a_title_seo',isset($article->a_title_seo) ? $article->a_title_seo : '')); ?>" name="pro_title_seo">
            </div>
            <div class="form-group">
                <label for="name">Meta Description:</label>
                <input type="text" class="form-control"  placeholder="Meta Description" value="<?php echo e(old('a_description_seo',isset($article->a_description_seo) ? $article->a_description_seo : '')); ?>" name="pro_description_seo">
            </div>
            <div class="form-group">
                <label for="name">Avatar:</label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Lưu thông tin</button>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\Modules/Admin\Resources/views/article/form.blade.php ENDPATH**/ ?>