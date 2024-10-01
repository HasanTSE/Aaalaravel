
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 align="center" class="mt-5">Update Bank Information</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="<?php echo e(route('bankInfo_Update.update', $bank_information->id)); ?>">
              
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-md-6">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" value="<?php echo e($bank_information->bank_name); ?>">
                        </div>
                        <div class="col-md-6">
                                <label>Short Name</label>
                                <input type="text" class="form-control" name="short_name" value="<?php echo e($bank_information->short_name); ?>">
                            </div>

                    </div>

                    <div class="row">
                            <div class="col-md-12 mt-3">
                                 <p>Active Status</p>
                                <input type="radio" name="is_active" value="1" <?php echo e($bank_information->is_active == 1 ? 'checked' : ''); ?>>           
                                <label>Active</label> 
                                <input type="radio" name="is_active" value="0" <?php echo e($bank_information->is_active == 0 ? 'checked' : ''); ?>>
                                <label>In active</label> 
                            </div>  
                    </div>

                    <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                    </div>

                 </form>

                 </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\A_Lproject\bank-Project\resources\views/pages/bankInfo_Edit.blade.php ENDPATH**/ ?>