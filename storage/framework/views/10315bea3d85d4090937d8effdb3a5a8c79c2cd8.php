<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>About Sparol Solutions Group</h2>
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
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
        <!-- about-area start -->
		<section class="about-area pb-140 about-area2 ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12 wow fadeInLeft">
						<div class="about-wrap">
							<h2>who we are</h2>
							<?php $About = DB::table('about')->get(); ?>
							<?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<p>
							<?php echo html_entity_decode($about->content); ?> 
							</p>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
					
                    <div class="col-md-6 col-xs-12 wow fadeInRight">
                        <div class="row mt-60">
							<?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-12 col-xs-12 col">
                                <div class="about-items mb-30">
								    <h4>Mission</h4>
                                    <i class="fa fa-check"></i>
                                    <h5> <?php echo html_entity_decode($val->mission); ?> </h5>
                                </div>
                            </div>
							<div class="col-sm-12 col-xs-12 col">
                                <div class="about-items mb-30">
								    <h4>Vision</h4>
                                    <i class="fa fa-binoculars"></i>
                                    <h5> <?php echo html_entity_decode($val->vision); ?> </h5>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		<!-- about-area end -->

		 <!-- faq-area start -->
		 <div class="faq-area ptb-90" style="padding-bottom:100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title text-center">
                            <h2>Our Core Values</h2>
                            <p>We are based on a foundation of personal service and willingness at all times to ensure the clients’ needs are fully satisfied. Quality Service is our benchmark.</p>
                            <p>We develop partnerships and provide services to meet clients’ financial and operational constraints.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="faq-wrap">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							    <?php $values = DB::table('values')->get(); $count = 1;?>
								<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($count == '1'): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo e($val->id); ?>" aria-expanded="true" aria-controls="collapse_<?php echo e($val->id); ?>">
                                                <?php echo e($val->title); ?>

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_<?php echo e($val->id); ?>" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p><?php echo html_entity_decode($val->content); ?></p>
                                        </div>
                                    </div>
                                </div>
								<?php else: ?>
								<div class="panel panel-default">
                                    <div class="panel-heading"   id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo e($val->id); ?>" aria-expanded="false" aria-controls="collapse_<?php echo e($val->id); ?>">
                                                <?php echo e($val->title); ?>

                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_<?php echo e($val->id); ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
										   <p><?php echo html_entity_decode($val->content); ?></p>
                                        </div>
                                    </div>
                                </div>
								<?php endif; ?>
								<?php $count = $count+1; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="faq-form form-style">
                            <div class="cf-msg"></div>
                            <form id="QuestionsForm" action="" method="post" id="cf">
							<?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <span>Name</span>
                                        <input type="text" placeholder="Name" id="fname" name="name" required>
                                    </div>
                                    <div class="col-xs-12">
                                        <span>Email</span>
                                        <input type="text" placeholder="Email" id="email" name="email" required>
                                    </div>
                                    <div class="col-xs-12">
                                        <span>Subject</span>
                                        <input type="text" placeholder="Subject" id="subject" name="subject" required>
                                    </div>
                                    <div class="col-xs-12">
                                        <span>Your Questions</span>
                                        <textarea class="contact-textarea" placeholder="Questions" id="msg" name="message" required></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" id="QuestionsBtn" class="cont-submit btn-contact btn-style" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq-area end -->
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
        <!-- .service-area start -->
		<section class="service-area home2-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                        <div class="section-title text-center">
                            <h2>Our Services</h2>
                            <p>Our Solutions Spans through various fields</p>
                        </div>
                    </div>
                </div>
                <div class="row">
					<?php $ServicesHomeList = DB::table('services')->inRandomOrder()->limit('18')->get(); $count = 0;?>
					<?php $__currentLoopData = $ServicesHomeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $SectorService = DB::table('sections')->where('id',$Ser->section_id)->get() ?>
					<?php $__currentLoopData = $SectorService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SectSer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="color:#000" class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".<?php echo e($count); ?>s">
                        <div class="service-wrap">
                            <div class="service-content">
								<h3><?php echo e($Ser->title); ?></h3>
								<small>  <?php echo e($SectSer->title); ?></small>
                                <p style="color:#000"><?php echo e($Ser->pre); ?></p>
                                <a href="<?php echo e(url('/our-services')); ?>/<?php echo e($Ser->slung); ?>">Read More</a>
                            </div>
                        </div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php $count = $count+1; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
		<!-- .service-area end -->
	
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