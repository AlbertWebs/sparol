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

	<?php $__currentLoopData = $Media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="testmonial-area testmonial-area2 ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php if($media->content == null): ?>
                        <center><h2>Sorry No vacancies & careers available at the moment, please keep visiting our careers page for the latest postings!</h2></center>
                <?php else: ?>
                
                    <div class="section-title text-center">
                  
                        <p style="color:#000"><?php echo html_entity_decode($media->content); ?></p>
                    </div>
 
                <?php endif; ?>
                </div>
            </div>
          
        </div>
    </div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
        
    <?php $__env->stopSection(); ?>

     
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>