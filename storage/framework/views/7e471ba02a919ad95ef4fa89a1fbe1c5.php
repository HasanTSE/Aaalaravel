
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 align="center" class="mt-5">Bank Information List</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
     
           <div class="row">
                <div class="col-sm-8">
                    <form method="get">
                <input type="text" class="form-controller" name="search" value="<?php echo e($_GET['search']?? ''); ?>">
                <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </div>
            </div>    
                
            <div class="row">
                <div class="col-sm-4">
                <a href="bankInfo_Create" class="text-left">
                 <button class="btn btn-primary btn-sm">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create
                 </button>
                 </a>
                </div>
            </div>


        
            <table class="table mt-5">
                    <thead>

                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Bank Name</th>
                        <th scope="col">Short Name</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Action</th>
                      </tr>

                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $bank_informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bank_infos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- <td scope="col"><?php echo e(++$key); ?></td> -->
                            <td scope="col"><?php echo e($bank_infos->bank_name); ?></td>                                              
                            <td scope="col"><?php echo e($bank_infos->short_name); ?></td>                                              
                            <td scope="col">
                                <?php if($bank_infos->is_active == 1): ?>
                                        Yes
                                <?php else: ?>  
                                        No   
                                <?php endif; ?>                                      
                            </td>

                           <td scope="col">
                              <a href="<?php echo e(route('bankInfo_Edit.edit', $bank_infos->id)); ?>">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="<?php echo e(route('bankInfo_Delete.delete', $bank_infos->id)); ?>" method="POST" style ="display:inline">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\A_Lproject\bank-Project\resources\views/pages/bankInfo_View.blade.php ENDPATH**/ ?>