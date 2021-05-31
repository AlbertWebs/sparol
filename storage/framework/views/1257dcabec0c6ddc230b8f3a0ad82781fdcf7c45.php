<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Sectors</h2>
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
							<li> Sectors</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if($Sectors->isEmpty()): ?>

    <?php else: ?>
    <!-- single-service-area start -->
    <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-xs-12">
                        <?php $__currentLoopData = $Sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sectors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Sector Listing -->

                            <div class="col-md-4 col-sm-6 col-xs-12 col">
                                <div class="service-wrap mb-30">
                                    <div class="service-img"> 
                                        <img src="<?php echo e(url('/')); ?>/uploads/sections/<?php echo e($sectors->image); ?>" alt="" />
                                    </div>
                                    <div class="service-content">
                                        <h3><?php echo e($sectors->title); ?></h3>
                                        <p><?php echo e($sectors->pre); ?></p>
                                        <center><a href="<?php echo e(url('/')); ?>/our-sectors/<?php echo e($sectors->slung); ?>">Read More</a></center>
                                    </div>
                                </div>
                            </div>
                            
                        <!-- </Sector Listing> -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- single-service-area end -->
	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>