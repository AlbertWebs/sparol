<?php $__env->startSection('content'); ?>
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        <?php echo $__env->make('admin.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <?php echo $__env->make('admin.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <center> <h2> Edit Partner </h2> </center>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 <?php if(Session::has('message')): ?>
							   <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
				<?php endif; ?>

                <?php if(Session::has('messageError')): ?>
							   <div class="alert alert-danger"><?php echo e(Session::get('messageError')); ?></div>
				<?php endif; ?>
                 </center>
                 

                 <form class="form-horizontal" method="post"  action="<?php echo e(url('/admin/edit_Partner')); ?>/<?php echo e($Partner->id); ?>" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Partner Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="<?php echo e($Partner->name); ?>" placeholder="e.g Designekta Studios " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Website link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="link" value="<?php echo e($Partner->link); ?>" placeholder="https://www.standcare.co.ke" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Section</label>
                        <div class="col-lg-8">
                            <select id="TheSection" name="section" data-placeholder="Choose Section" class="form-control chzn-select" tabindex="2">
                            <?php $SectionsFetch = DB::table('sections')->where('id',$Partner->section_id)->get(); ?>
                            <?php $__currentLoopData = $SectionsFetch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option selected value="<?php echo e($sect->id); ?>"><?php echo e($sect->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php $__currentLoopData = $Section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                    </div>

                   
                    <center>
                    <div class="form-group col-lg-12">
                    
                        <label class="control-label">Featured Image/Logo</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo e(url('/')); ?>/uploads/partners/<?php echo e($Partner->image); ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        
                    </div>
                    
                   
                    </div>

                   
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save</button>
                    </div>
                    
                    
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="image_one_cheat" value="<?php echo e($Partner->image); ?>">
                    
                <form>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <?php echo $__env->make('admin.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>