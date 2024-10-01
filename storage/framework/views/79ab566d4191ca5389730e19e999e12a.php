<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<?php echo $__env->make('libraries.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body>
    


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('libraries.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH E:\A_Lproject\bank-Project\resources\views/layouts/app.blade.php ENDPATH**/ ?>