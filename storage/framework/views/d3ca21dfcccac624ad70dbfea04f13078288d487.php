<?php
?>
    <!DOCTYPE   html>
<html lang="en">
<head>
    <title>Project</title>
</head>
<body>
<div class="container">
<div class="content">
<div class="title">Be right back.</div>
    <?php if(count($errors)>0): ?>
        <div class="alert alert-danger ">
            <strong>Bug</strong> <br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
</div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Learn_PHP_FPT\MyTodoList\resources\views/errors/503.blade.php ENDPATH**/ ?>