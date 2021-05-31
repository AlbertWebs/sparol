<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2><?php echo e($service); ?></h2>
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
                            <li> <a href="<?php echo e(url('/')); ?>">Services</a></li>
                            <li>/</li>
							<li> <?php echo e($service); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if($Services->isEmpty()): ?>

    <?php else: ?>
        <?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="single-service-active">
								<?php if($Ser->image_one == null): ?>

								<?php else: ?>
                                <div class="single-service-img">
                                    <img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($Ser->image_one); ?>" alt="<?php echo e($Ser->title); ?>">
								</div>
								<?php endif; ?>
								<?php if($Ser->image_two == null): ?>

								<?php else: ?>
                                <div class="single-service-img">
                                    <img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($Ser->image_two); ?>" alt="<?php echo e($Ser->title); ?>">
								</div>
								<?php endif; ?>
								<?php if($Ser->image_three == null): ?>

								<?php else: ?>
                                <div class="single-service-img">
                                    <img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($Ser->image_three); ?>" alt="<?php echo e($Ser->title); ?>">
								</div>
								<?php endif; ?>
                            </div>
                            <h3><?php echo e($Ser->title); ?></h3>
                            <p><?php echo html_entity_decode($Ser->content); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
						    <div class="sidebar-menu">
                                <center><h5><strong class="text-center">Other Services</strong></h5></center>
                                <ul>
                                    <?php $ServiceSection = DB::table('services')->where('section_id',$Ser->section_id)->get(); ?>
                                    <?php $__currentLoopData = $ServiceSection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('/')); ?>/our-services/<?php echo e($theService->slung); ?>"><?php echo e($theService->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <br>
                                    <li><a href="#"><center><strong>Sectors</strong></center></a></li>
                                    <?php $ServiceSection = DB::table('sections')->inRandomOrder()->Limit('6')->get(); ?>
                                    <?php $__currentLoopData = $ServiceSection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('/')); ?>/our-sectors/<?php echo e($theService->slung); ?>"><?php echo e($theService->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </ul>
                            </div>
                        </aside>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- single-service-area end -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>