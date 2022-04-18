<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->yieldContent('font'); ?>
        <?php echo $__env->yieldContent('style'); ?>
        
    </head>
    <body>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
    <?php echo $__env->yieldContent('script'); ?>
</html><?php /**PATH C:\xampp\htdocs\capcar\resources\views/master/layout.blade.php ENDPATH**/ ?>