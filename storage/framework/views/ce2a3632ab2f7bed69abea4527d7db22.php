
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 align="center" class="mt-5">Bank Accounts Information List</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-12">

            <div class="row">
                <div class="col-sm-10">
                    <form method="get">
                <input type="text" class="form-controller" name="search" value="<?php echo e($_GET['search']?? ''); ?>">
                <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </div>
           </div>
                
             <div class="row">
                <div class="col-sm-2">
                <a href="bankAcnt_Create">
                 <button class="btn btn-primary btn-sm">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create
                 </button>
                 </a>
                </div>
            </div>

            <table class="table">
                    <thead>
                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Account Name</th>
                        <th scope="col">Account No</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Opening Date</th>
                        <th scope="col">Opening Balance</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                     <tbody>
                        <?php $__currentLoopData = $bank_acnts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bank_acnt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- <td scope="col"><?php echo e(++$key); ?></td> -->
                            <td scope="col"><?php echo e($bank_acnt->account_name); ?></td>
                            <td scope="col"><?php echo e($bank_acnt->account_no); ?></td>
                            <td scope="col"><?php echo e($bank_acnt->bank_information->bank_name ?? ''); ?></td>
                            <td scope="col"><?php echo e($bank_acnt->branch_name); ?></td>
                            <td scope="col"><?php echo e($bank_acnt->opening_date); ?></td>
                            <td scope="col"><?php echo e($bank_acnt->opening_balance); ?></td>                           
                            <td scope="col">
                                <?php if($bank_acnt->is_active == 1): ?>
                                        Yes
                                <?php else: ?>  
                                        No   
                                <?php endif; ?>                                      
                            </td>

                           <td scope="col">
                              <a href="<?php echo e(route('bankAcnt_Edit.edit', $bank_acnt->id)); ?>">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="<?php echo e(route('bankAcnt.delete', $bank_acnt->id)); ?>" method="POST" style ="display:inline">
                             <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                              </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
           

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\A_Lproject\bank-Project\resources\views/pages/bankAcnt_View.blade.php ENDPATH**/ ?>