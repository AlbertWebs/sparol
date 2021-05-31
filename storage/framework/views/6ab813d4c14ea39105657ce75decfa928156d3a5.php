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
                            <li> <a href="<?php echo e(url('/our-properties')); ?>">Our Properties</a></li>
                            <li>/</li>
							<li> <?php echo e($title); ?> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- breadcumb-area end -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $Properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row" style="color:#000">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="row grid">
                            <?php if(is_null($pro->image_one)): ?>

                            <?php else: ?>
                                <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col">
                                    <div class="portfolio-wrap">
                                        <div class="overlay">
                                            <a class="popup" href="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-img">
                                            <img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(is_null($pro->image_one)): ?>

                            <?php else: ?>
                                <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col col">
                                    <div class="portfolio-wrap">
                                        <div class="overlay">
                                            <a class="popup" href="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_two); ?>">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-img">
                                            <img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_two); ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(is_null($pro->image_three)): ?>

                            <?php else: ?>
                                <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col col">
                                    <div class="portfolio-wrap">
                                        <div class="overlay">
                                            <a class="popup" href="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_three); ?>">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-img">
                                            <img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_three); ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </div>
                            <h3><?php echo e($pro->name); ?></h3>
                            <p><?php echo html_entity_decode($pro->content); ?></p>
                            <hr>
                            <?php $Amenities = DB::table('amenities')->where('product_id',$pro->id)->get(); ?>
                            <?php if($Amenities->isEmpty()): ?>

                            <?php else: ?>
                            <div class="tags-wrap">
                                <h3 class="sidebar-title">Amenities</h3>
                                
                                <ul>
                                    <?php $__currentLoopData = $Amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(is_null($amen->security) or $amen->security == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->security); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->parking) or $amen->parking == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->parking); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->cctv) or $amen->cctv == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->cctv); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->electric_fence) or $amen->electric_fence == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->electric_fence); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->perimeter_wall) or $amen->perimeter_wall == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->perimeter_wall); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->power_supply) or $amen->power_supply == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->power_supply); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->restaurants) or $amen->restaurants == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->restaurants); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->Standby_generator) or $amen->Standby_generator == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->Standby_generator); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->swimming_pool) or $amen->swimming_pool == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->swimming_pool); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->health) or $amen->health == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->health); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->intercom) or $amen->intercom == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->intercom); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->gardens) or $amen->gardens == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->gardens); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->gym) or $amen->gym == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->gym); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->internet) or $amen->internet == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->internet); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->master_ensuite) or $amen->master_ensuite == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->master_ensuite); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->gated_community) or $amen->gated_community == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->gated_community); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->fully_furnished) or $amen->fully_furnished == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->fully_furnished); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(is_null($amen->elevator) or $amen->elevator == ''): ?>

                                    <?php else: ?>
                                    <li><a href="#"><?php echo e($amen->elevator); ?></a></li>
                                    <?php endif; ?>
                                   
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
                            <div class="sidebar-menu">
                                <ul>
                                    <li><a class="text-center" href="#">Other Properties</a></li>
                                    <?php $OtherProperties = DB::table('product')->limit(10)->inRandomOrder()->get(); ?>
                                    <?php $__currentLoopData = $OtherProperties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class=""><a href="<?php echo e(url('/')); ?>/our-properties/<?php echo e($op->name); ?>"><?php echo e($op->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            
                            <div class="banner-wrap black-opacity">
                                <img src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>" alt="<?php echo e($pro->name); ?>">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-service-area end -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

                   
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>