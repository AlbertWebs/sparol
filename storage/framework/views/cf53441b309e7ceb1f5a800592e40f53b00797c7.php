<?php $__env->startSection('content'); ?>
		<!-- slider area start -->
		<section class="slider-area">
			<div class="slider-active3 slider-next-prev-style">
				<?php $Sliders = DB::table('slider')->get(); ?> 
				<?php $__currentLoopData = $Sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				<div class="slider-items">
					<img src="<?php echo e(url('/')); ?>/uploads/slider/<?php echo e($slider->image); ?>" alt="" class="slider">
					<div class="slider-content text-center">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<h2 style="text-shadow:	0 4px 0 #000;"><?php echo e($slider->name); ?></h2>
											<p style="font-size:140%"><?php echo html_entity_decode($slider->content); ?></p>
											<ul>
												<!-- <li><a href="#">Read More</a></li>
												<li><a href="#">Get Started</a></li> -->
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</section>
		<!-- slider area end -->
        
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

		<?php $Sectors = DB::table('sections')->limit(6)->get(); ?>
		<?php if($Sectors->isEmpty()): ?>

		<?php else: ?>
		<!-- .service-area start -->
		<section class="service-area ptb-100">
            <div class="container">
			    <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                        <div class="section-title text-center">
                            <h2>Our Sectors</h2>
                         </div>
                    </div>
                </div>
                <div class="row">
					<?php $count = 1; ?>
				    <?php $__currentLoopData = $Sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".<?php echo e($count); ?>s">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="<?php echo e(url('/')); ?>/uploads/sections/<?php echo e($Sect->image); ?>" alt="" />
                            </div>
                            <div class="service-content">
                                <h3><?php echo e($Sect->title); ?></h3>
                                <p><?php echo e($Sect->pre); ?></p>
								<center>
                                <a class="btn btn-primary text-center" href="<?php echo e(url('/')); ?>/our-sectors/<?php echo e($Sect->title); ?>">Read More</a>
								</center>
                            </div>
                        </div>
					</div>
					<?php $count = $count+1; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <center><a class="btn btn-primary text-center" href="<?php echo e(url('/')); ?>/our-sectors">All Sectors</a></center>
                </div>
            </div>
        </section>
        <!-- .service-area end -->
		<?php endif; ?>
		<!-- about-area end -->
      
		
		<!-- quote-area start -->
        <div class="quote-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-xs-12">
                        <div class="quote-wrap">
                            <h2>We place great emphasis on understanding our client’s needs and actively monitoring market trends so as to lower complexity, costs and risks while staying competitive and efficient</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12" style="position: relative;">
						<div class="quote-wrap text-right" style="vertical-align:middle;">
						<br>
                            <a href="<?php echo e(url('/')); ?>/request-quote">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quote-area end -->
	
		<?php $Properties = DB::table('product')->orderBy('id','DESC')->limit('3')->inRandomOrder()->get(); ?>
		<?php if($Properties->isEmpty()): ?>
    
        <?php else: ?>
		<section class="blog-area ptb-140 bg-1"> 
            <div class="container">
                <div class="row">
				<div class="row" style="padding-bottom:100px;">
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
						<div class="section-title text-center">
						<h2>Listed Properties</h2>
						</div>
					</div>
				</div>
                <?php  $count = 1; ?>
                  <?php $__currentLoopData = $Properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($pro->type == 'Residential'): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".<?php echo e($count); ?>s" >
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
								<img style="height:205px" src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>" alt="<?php echo e($pro->name); ?>" />
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
                                <p style="min-height:120px"><?php echo e($pro->meta); ?></p>
                                <center><a  href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".<?php echo e($count); ?>s">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
								<img style="height:205px" src="<?php echo e(url('/')); ?>/uploads/product/<?php echo e($pro->image_one); ?>" alt="<?php echo e($pro->name); ?>"/>
								<div class="tag_featured property_tag"><a href="#"><?php echo e($pro->rentsale); ?></a></div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul class="text-center">
                                        <!-- <li><a href="#"><i class="fa fa-shower"></i> <?php echo e($pro->bathroom); ?> Bathroom</a></li>
                                        <li><a href="#"><i class="fa fa-bed"></i> <?php echo e($pro->bedroom); ?> Bedroom</a></li> -->
                                        <li><a href="#"><i class="fa fa-arrows-h"></i> <?php echo e($pro->size); ?> sqft</a></li>
                                    </ul>
                                </div>
                                <h3 class="text-center"><a href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></h3>
                                <center><span><i class="fa fa-map-marker"></i><strong><?php echo e($pro->location); ?></strong></span></center>
                                <p style="min-height:120px"><?php echo e($pro->meta); ?></p>
                                <center><a  href="<?php echo e(url('/our-properties')); ?>/<?php echo e($pro->name); ?>" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  <center><a class="btn btn-primary text-center" href="<?php echo e(url('/')); ?>/our-properties">All Properties</a></center>
                </div>
            </div>
        </section>
		<?php endif; ?>
		
        <?php $Team = DB::table('team')->get(); $count = 0; ?>
		<?php if($Team->isEmpty()): ?>

		<?php else: ?>
        <!-- team-area start -->
        <section class="team-area team-area2 team-area3 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
						<div class="section-title text-center">
                            <h2>Our Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
				    <?php $__currentLoopData = $Team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".<?php echo e($count); ?>s">
                        <div class="team-wrap3">
                            <div class="team-img">
                                <img src="<?php echo e(url('/')); ?>/uploads/teams/<?php echo e($team->image); ?>" alt="<?php echo e($team->name); ?>" />
                                <ul>
                                    <li><a href="<?php echo e($team->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo e($team->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo e($team->linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo e($team->google); ?>"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3><?php echo e($team->name); ?></h3>
                                <p><?php echo e($team->position); ?></p>
                            </div>
                        </div>
                    </div>
					<?php $count = $count+1; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>
        </section>
        <!-- team-area end -->
		<?php endif; ?>

		
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

		<!-- brand-area start -->
		<section class="brand-area bg-img-22  ptb-140">
			<div class="container">
                <div class="row">
					<div class="col-md-7 col-sm-10 col-xs-12 wow fadeInUp">
						<div class="section-title section-title2">
							<h2>Clients & Partners</h2>
							<p>We develop partnerships and provide services that meet clients’ financial and operational constraints</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="brand-active">
					<?php $Partners = DB::table('partners')->get(); ?>
					    <?php $__currentLoopData = $Partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xs-12">
                            <div class="brand-wrap">
                                <a href="<?php echo e($Partner->link); ?>">
                                    <img style="height:80px;" src="<?php echo e(url('/')); ?>/uploads/partners/<?php echo e($Partner->image); ?>" alt="<?php echo e($Partner->name); ?>">
                                </a>
                            </div>
                        </div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
			</div>
		</section>
		<!-- brand-area end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>