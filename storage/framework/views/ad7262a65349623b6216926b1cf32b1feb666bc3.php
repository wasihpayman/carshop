<?php $__env->startSection('content'); ?>
<div>
<!-- DESIGN OF LOG IN -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

    <!-- LOG IN BOXES -->
    <div class="container">
    <!-- Heading -->
    <?php if(session()->has('message')): ?>

<div class="alert alert-danger">
    
    <?php echo e(session()->get('message')); ?>


</div>

<?php endif; ?>

    <h1 class="text-center fw-bold" style="color: green; font-family: 'Montserrat', sans-serif;">USER LOGIN</h1>
    <form action="<?php echo e(url('/')); ?>/userlogin" method="post">
      <?php echo csrf_field(); ?>
        <!-- Design of Box-->
        <div class="row">
            <!--"username" address Box-->
            <div class="col-md-6 mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
            </div>
            <!--Password Box-->
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <!--Log in Button-->
            <div class="text-center">
            <button type="submit" class="btn btn-primary bg-success fw-bold">Log in</button>
        </div>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <?php echo $__env->make('adminpanel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
  
</html>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\edpay\Desktop\carrental\carrent\resources\views/user/userlogin.blade.php ENDPATH**/ ?>