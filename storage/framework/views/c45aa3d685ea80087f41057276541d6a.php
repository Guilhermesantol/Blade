<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blade Example</title>
    <link rel="stylesheet"

          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-
bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Laravel</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\atividade100\resources\views/layouts/app.blade.php ENDPATH**/ ?>