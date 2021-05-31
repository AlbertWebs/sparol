<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Services</h2>
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
							<li>Our Services</li>
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
	 <!-- .service-area start -->
	 <section class="service-area ptb-100">
            <div class="container">
                <div class="row">
					<?php $__currentLoopData = $Services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $SectorService = DB::table('sections')->where('id',$Service->section_id)->get() ?>
					<?php $__currentLoopData = $SectorService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SectSer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="<?php echo e(url('/')); ?>/uploads/services/<?php echo e($Service->image_one); ?>" alt="" />
                            </div>
                            <div class="service-content">
								<h3><?php echo e($Service->title); ?></h3>
								<small><?php echo e($SectSer->title); ?></small>
                                <p><?php echo e($Service->pre); ?></p>
                                <a href="<?php echo e(url('/')); ?>/<?php echo e($SectSer->title); ?>/<?php echo e($SectSer->title); ?>">Read More</a>
                            </div>
                        </div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                                <?php echo $Services ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .service-area end -->
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>