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
                        <h2> Edit Property </h2>
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
                 

                 <form class="form-horizontal" method="post"  action="<?php echo e(url('/admin/edit_Product')); ?>/<?php echo e($Product->id); ?>" enctype="multipart/form-data">
                    
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">propety  Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="<?php echo e($Product->name); ?>" placeholder="e.g Avira Appartments " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Location</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="location" value="<?php echo e($Product->location); ?>" placeholder="e.g Kilifi" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Type</label>

                        <div class="col-lg-8">
                            <select name="type" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                            <option selected="selected" value="<?php echo e($Product->type); ?>"><?php echo e($Product->type); ?></option>
                            
                              <option value="Land">Land</option>
                              <option value="Residential">Residential</option>
                              <option value="Commercial">Commercial</option>
                            

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Sale Or Rent</label>

                        <div class="col-lg-8">
                            <select name="rentsale" data-placeholder="Sale Or Rent" class="form-control chzn-select" tabindex="2">
                            <option selected="selected" value="<?php echo e($Product->rentsale); ?>"><?php echo e($Product->rentsale); ?></option>
                            
                              <option value="sale">sale</option>
                              <option value="rent">rent</option>
                            

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Propert Pricing</label>

                        <div class="col-lg-8">
                            <input type="number" id="text1" name="price" value="<?php echo e($Product->price); ?>" placeholder="e.g 12500" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-3">Metrix</label>
                        <div class="col-lg-3">
                            <input type="number" id="text1" name="bedroom" value="<?php echo e($Product->bedroom); ?>" placeholder="Bedrooms e.g 2" class="form-control" />
                        </div>

                        <div class="col-lg-3">
                            <input type="number" id="text1" name="bathroom" value="<?php echo e($Product->bathroom); ?>" placeholder="bathrooms e.g 2" class="form-control" />
                        </div>

                        <div class="col-lg-3">
                            <input type="number" id="text1" name="size" value="<?php echo e($Product->size); ?>" placeholder="size e.g 2" class="form-control" />
                        </div>
                    </div>

                   

                    <div class="form-group">
                    <label class="control-label col-lg-4">Category</label>

                    <?php
                            $CatID = $Product->cat;
                            $TheCategory = DB::table('category')->where('id',$CatID)->get();
                             
                    ?>

                        

                    <div class="col-lg-8">
                        <select name="cat" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                          <option selected="selected" value="<?php echo e($Product->cat); ?>"><?php $__currentLoopData = $TheCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valuee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($valuee->cat); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></option>
                           <?php $TheCategoryList = DB::table('category')->get(); ?>
                           <?php $__currentLoopData = $TheCategoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($value->id); ?>"><?php echo e($value->cat); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                    </div>

                    

                    <!--  -->
                    <div class="form-group">
                        <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                        <div class="col-lg-8">
                            <textarea id="limiter" name="meta" class="form-control"><?php echo e($Product->meta); ?></textarea>
                            <p class="help-block">Add Limited Words To Describe The Product</p>
                        </div>
                    </div>
                    <!--  -->
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Property Description</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10"><?php echo e($Product->content); ?></textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <center>
                    <div class="form-group col-lg-12">
                    <div class="form-group col-lg-4">
                        <label class="control-label">Image One(Main)</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($Product->image_one); ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Two</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($Product->image_two); ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_two" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Three</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($Product->image_three); ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_three" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    
                    </div>
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    
                    <input type="hidden" name="image_one_cheat" value="<?php echo e($Product->image_one); ?>">
                    <input type="hidden" name="image_two_cheat" value="<?php echo e($Product->image_two); ?>">
                    <input type="hidden" name="image_three_cheat" value="<?php echo e($Product->image_three); ?>">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    
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