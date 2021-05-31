<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Media Center || <?php echo e($page_title); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcumb-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul>
							<li><a href="<?php echo e(url('/')); ?>">Home</a></li>
							<li>/</li>
							<li>Media Center</li>
							<li>/</li>
							<li><?php echo e($page_title); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Work Section -->
            <section id="work" class="padding ptb-xs-40">
                <div class="container">
                   
                  
                    <div class="row" style="padding-top:100px; padding-bottom:100px">


                            <?php $__currentLoopData = $Gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item-box col-lg-4">
                                <a> <img alt="1" src="<?php echo e(url('/')); ?>/uploads/gallery/<?php echo e($gallery->image); ?>" class="item-container"> </a>
                                <div class="link-zoom">
                                    
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         

                            
                    </div>
            

                        

                    </div>

                </div>
            </section>


    
        
    <?php $__env->stopSection(); ?>

     
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>