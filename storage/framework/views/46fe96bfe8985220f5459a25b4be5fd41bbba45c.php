<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2> The Team </h2>
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
							<li>About us</li>
                            <li>/</li>
							<li>The Team</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
  <?php $Team = DB::table('admins')->where('role','team')->get(); ?>

  <?php if($Team->isEmpty()): ?>

  <?php else: ?>

  <section class="service-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                <div class="section-title text-center">
                    <h2>Meet The Team</h2>
                 </div>
            </div>
        </div>
        <div class="row">
            <?php $count = 1; ?>
            <?php $__currentLoopData = $Team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".<?php echo e($count); ?>s">
                <div class="service-wrap mb-30">
                    <div class="service-img">
                        <img src="<?php echo e(url('/')); ?>/uploads/admins/<?php echo e($item->image); ?>" alt="" />
                    </div>
                    <div class="service-content" style="max-height:100px !important">
                        <h3><?php echo e($item->name); ?></h3>
                        <p><?php echo e($item->position); ?></p>
                    </div>
                </div>
            </div>
            <?php $count = $count+1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
  </section>
  
  <?php endif; ?>
	
    
		
      

		<div class="spacer"></div>

		<?php $Banner = DB::table('banners')->where('section','contact')->get(); ?>
        <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- company-details-area start -->
        <div class="company-details-area parallax black-opacity "  data-speed="5" data-bg-image="<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="company-details-wrap">
                            <h2>We are here to work with a business just like yours</h2>
                            <p>
								<?php $Sitesettings = DB::table('sitesettings')->get(); ?>
								<?php $__currentLoopData = $Sitesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php echo html_entity_decode($Settings->welcome); ?>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</p>
                            <a href="<?php echo e(url('/contact-us')); ?>"><span class="fa fa-phone"></span> Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- company-details-area end -->
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
		<?php $Testimonials = DB::table('testimonial')->get(); $count = 0; ?>
		<?php if($Testimonials->isEmpty()): ?>

		<?php else: ?>
		<!-- testmonial-area start -->
		<section class="testmonial-area ptb-140">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
						<div class="section-title text-center">
							<h2>Our Clients Say</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="test-active dotate-style">
						<?php $__currentLoopData = $Testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    <?php if($count % 2 == 0): ?>
							<div class="col-xs-12 wow fadeInLeft">
								<div class="client-wrap fix">
									<div class="client-info text-right">
										<h3><?php echo e($Test->name); ?></h3>
										<span><?php echo e($Test->position); ?>, <?php echo e($Test->company); ?></span>
										<ul>
										    <?php if($Test->rating == 1): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 2): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 3): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 4): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 5): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<?php else: ?>

											<?php endif; ?>
										
										</ul>
										<p><?php echo html_entity_decode($Test->content); ?></p>
									</div>
									<div class="client-img pull-right">
										<img style="width:100px;height:100px" src="<?php echo e(url('/')); ?>/uploads/testimonials/<?php echo e($Test->image); ?>" alt="" />
									</div>
								</div>
							</div>
							<?php else: ?>
							<div class="col-xs-12 wow fadeInLeft">
								<div class="client-wrap fix">
									<div class="client-info text-right">
										<h3><?php echo e($Test->name); ?></h3>
										<span><?php echo e($Test->position); ?>, <?php echo e($Test->company); ?></span>
										<ul>
										    <?php if($Test->rating == 1): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 2): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 3): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 4): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<?php endif; ?>
											<?php if($Test->rating == 5): ?>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<?php else: ?>

											<?php endif; ?>
										</ul>
										<p><?php echo html_entity_decode($Test->content); ?></p>
									</div>
									<div class="client-img pull-left">
										<img style="width:100px; height:100px" src="<?php echo e(url('/')); ?>/uploads/testimonials/<?php echo e($Test->image); ?>" alt="" />
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php $count = $count+1; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- testmonial-area end -->
		<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>