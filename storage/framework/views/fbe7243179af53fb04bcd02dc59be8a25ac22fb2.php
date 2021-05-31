<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2><?php echo e($title); ?></h2>
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
                            <li> <a href="<?php echo e(url('/')); ?>">Sectors</a></li>
                            <li>/</li>
							<li> <?php echo e($title); ?></li>
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
        <?php $__currentLoopData = $Sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="single-service-active">
                                <div class="single-service-img">
                                    <img src="<?php echo e(url('/')); ?>/uploads/sections/<?php echo e($Sec->image); ?>" alt="">
                                </div>
                            </div>
                            <h3><?php echo e($Sec->title); ?></h3>
                            <blockquote>
                                <?php echo e($Sec->pre); ?>

                            </blockquote>
                            <p><?php echo html_entity_decode($Sec->content); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
                            <div class="sidebar-menu">
                                <center><strong class="text-center">Services</strong></center>
                                <ul>
                                    <?php $ServiceSection = DB::table('services')->where('section_id',$Sec->id)->get(); ?>
                                    <?php $__currentLoopData = $ServiceSection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('/')); ?>/our-services/<?php echo e($theService->title); ?>"><?php echo e($theService->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </ul>
                            </div>

                            <div class="sidebar-menu">
                                <center><strong class="text-center">Other Sectors</strong></center>
                                <ul>
                                    <?php $OtherSectors = DB::table('sections')->get(); ?>
                                    <?php $__currentLoopData = $OtherSectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherSectors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('/')); ?>/our-sectors/<?php echo e($otherSectors->title); ?>"><?php echo e($otherSectors->title); ?></a></li>
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