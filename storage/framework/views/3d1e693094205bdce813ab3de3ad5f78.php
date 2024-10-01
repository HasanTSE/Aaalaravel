
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 align="center" class="mt-5">Bank Accounts Information Update</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="<?php echo e(route('bankAcnt.update', $bank_acnt->id)); ?>">
              
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                    <div class="row">

                         <div class="col-md-6">
                                <label>Account Name</label>
                                <input type="text" class="form-control" name="account_name" value="<?php echo e($bank_acnt->account_name); ?>">
                         </div>

                        <div class="col-md-6">
                                <label>Account Number</label>
                                <input type="integer" class="form-control" name="account_no" value="<?php echo e($bank_acnt->account_no); ?>">
                        </div>

                    </div>

                    <div class="row">
                         <div class="col-md-6">
                                <label>Bank Name</label>
                                 <br>
                                <select name="bank_id" class="form-control" style="height:35px; width:395px;">
                                <option value="">Select Your Bank</option>
                                <?php $__currentLoopData = $bank_informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank_infos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($bank_infos->id); ?>" <?php if($bank_infos->id == $bank_acnt->bank_id): ?> selected <?php endif; ?>>
                                    <?php echo e($bank_infos->bank_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                             
                                </select>
                         </div>

                           <div class="col-md-6">
                                <label>Branch Name</label>
                                <input type="text" class="form-control" name="branch_name" value="<?php echo e($bank_acnt->branch_name); ?>">
                            </div>

                    </div>

                    <div class="row">
                         <div class="col-md-6">
                                <label>Opening Date</label>
                                <input type="date" class="form-control" name="opening_date" value="<?php echo e($bank_acnt->opening_date); ?>">
                         </div>

                        <div class="col-md-6">
                                <label>Opening Balance</label>
                                <input type="double" class="form-control" name="opening_balance" value="<?php echo e($bank_acnt->opening_balance); ?>">
                        </div>

                   </div>

                    <div class="row">

                            <div class="col-md-12 mt-3">
                                <p>Active Status</p>
                                <input type="radio" name="is_active" value="1" <?php echo e($bank_acnt->is_active == 1 ? 'checked' : ''); ?>> 
                                <label>Active</label>          
                                <input type="radio" name="is_active" value="0" <?php echo e($bank_acnt->is_active == 0 ? 'checked' : ''); ?>>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\A_Lproject\bank-Project\resources\views/pages/bankAcnt_Edit.blade.php ENDPATH**/ ?>