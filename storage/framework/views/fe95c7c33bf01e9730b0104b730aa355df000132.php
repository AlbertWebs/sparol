<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Request Quote</h2>
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
							<li><a href="<?php echo e(url('/our-services')); ?>">Services</a></li>
							<li>/</li>
							<li>Request Quote</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('front.quote', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>