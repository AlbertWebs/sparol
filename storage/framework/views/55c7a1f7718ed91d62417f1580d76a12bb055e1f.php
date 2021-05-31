<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Copyrights</h2>
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
                            <li>Privacy Policy</li>
                            <li>/</li>
							<li>Copyrights</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
        <div class="testmonial-area testmonial-area2 ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php if($Copyright->isEmpty()): ?>
                        <center><h2>No Copyrights</h2></center>
                <?php else: ?>
                <?php $__currentLoopData = $Copyright; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="section-title text-center">
                        <h2 style="color:#000">Copyright Statement</h2>
                        <p style="color:#000"><?php echo html_entity_decode($value->content); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </div>
            </div>
          
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>