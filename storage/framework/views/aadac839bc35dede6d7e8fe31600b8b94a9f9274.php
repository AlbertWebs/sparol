<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Listed Properties</h2>
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
                            <li> <a href="<?php echo e(url('/')); ?>">Real Estate & Project Management</a></li>
                            <li>/</li>
							<li> Listed Properties</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- breadcumb-area end -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($Properties->isEmpty()): ?>
    
    <?php else: ?>
        <section class="blog-area ptb-140 bg-1"> 
            <div class="container">
            <div class="row" style="padding-bottom:100px;">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                <div class="section-title text-center">
                  <h2>Listed Properties</h2>
                </div>
              </div>
            </div>
                <div class="row">
                <?php  $count = 1; ?>
                  <?php $__currentLoopData = $Properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($pro->type == 'house'): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>" alt="<?php echo e($pro->name); ?>" />
                                <div class="tag_featured property_tag"><a href="#"><?php echo e($pro->rentsale); ?></a></div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-shower"></i> <?php echo e($pro->bathroom); ?> Bathroom</a></li>
                                        <li><a href="#"><i class="fa fa-bed"></i> <?php echo e($pro->bedroom); ?> Bedroom</a></li>
                                        <li><a href="#"><i class="fa fa-arrows-h"></i> <?php echo e($pro->size); ?> sqft</a></li>
                                    </ul>
                                </div>
                                <h3 class="text-center"><a href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></h3>
                                <center><span><i class="fa fa-map-marker"></i><strong><?php echo e($pro->location); ?></strong></span></center>
                                <p><?php echo e($pro->meta); ?></p>
                                <center><a  href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>" alt="<?php echo e($pro->name); ?>"/>
                                <div class="tag_featured property_tag"><a href="#"><?php echo e($pro->rentsale); ?></a></div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-shower"></i> <?php echo e($pro->bathroom); ?> Bathroom</a></li>
                                        <li><a href="#"><i class="fa fa-bed"></i> <?php echo e($pro->bedroom); ?> Bedroom</a></li>
                                        <li><a href="#"><i class="fa fa-arrows-h"></i> <?php echo e($pro->size); ?> sqft</a></li>
                                    </ul>
                                </div>
                                <h3 class="text-center"><a href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></h3>
                                <center><span><i class="fa fa-map-marker"></i><strong><?php echo e($pro->location); ?></strong></span></center>
                                <p><?php echo e($pro->meta); ?></p>
                                <center><a  href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                                <?php echo $Properties; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

                   
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>