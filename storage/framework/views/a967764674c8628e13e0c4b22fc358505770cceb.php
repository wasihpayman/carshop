<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Our Available Car Categories</h2>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $cat_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <a href="<?php echo e(url('/show_category', ['category_id' => $category->id])); ?>"
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-transportation"></span>
                    </a>
                    <div class="text w-100">
                        <h2 class="heading mb-2"><?php echo e($category->catagory_name); ?></h2>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div><?php /**PATH C:\Users\edpay\Desktop\carrental\carrent\resources\views/home/category.blade.php ENDPATH**/ ?>