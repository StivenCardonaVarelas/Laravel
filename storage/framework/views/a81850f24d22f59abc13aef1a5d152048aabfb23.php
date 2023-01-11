<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendible-<?php echo $__env->yieldContent('tiltle'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta-description', 'deafult meta-description'); ?>"/>
</head>
<body>

   <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\laragon\www\appname1\resources\views/layouts/app.blade.php ENDPATH**/ ?>