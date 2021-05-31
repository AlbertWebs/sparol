<?php $__env->startSection('content'); ?>
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcumb-wrap">
						<h2>Contact Sparol Solutions Group</h2>
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
							<li>Contact US</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- contact-area start -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
				
				<center>
                 <?php if(Session::has('message')): ?>
							   <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
				<?php endif; ?>
                 </center>
                    
                    <div class="col-md-4">
                        <div class="contact-wrap">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p><?php echo e($set->mobile); ?></p>
                                    <p><?php echo e($set->mobile_one); ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p><?php echo e($set->email); ?></p>
                                    <p><?php echo e($set->email_one); ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-book"></i>
                                    <p><?php echo e($set->address); ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <?php echo e($set->location); ?>

                                </li>
                            </ul>
                        </div>
					</div>
					<div class="col-md-8">
                        <div class="contact-wrap form-style">
                            
                            <div class="cf-msg"></div>
							<form action="<?php echo e(url('/submitMessage')); ?>" method="post" id="cf">
								<?php echo e(csrf_field()); ?>

								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<input type="text" placeholder="Name" id="fname" name="name" required>
									</div>
									<div class="col-sm-6 col-xs-12">
										<input type="text" placeholder="Email" id="email" name="email" required>
									</div>
									<div class="col-xs-12">
										<input type="text" placeholder="Subject" id="subject" name="subject" required>
									</div>
									<div class="col-xs-12">
										<textarea class="contact-textarea" placeholder="Message" id="msg" name="message" required></textarea>
									</div>
									<div class="col-xs-12">
										<button type="submit" class="cont-submit btn-contact" name="submit">SEND MESSAGE</button>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
		<!-- contact-area end -->
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>