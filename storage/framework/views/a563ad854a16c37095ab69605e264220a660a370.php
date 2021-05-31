<!doctype html>
<html class="no-js" lang="">
<?php $Sitesettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $Sitesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico in the root directory -->

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('theme/favicon/apple-icon-57x57.png')); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('theme/favicon/apple-icon-60x60.png')); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('theme/favicon/apple-icon-72x72.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('theme/favicon/apple-icon-76x76.png')); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('theme/favicon/apple-icon-114x114.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('theme/favicon/apple-icon-120x120.png')); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('theme/favicon/apple-icon-144x144.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('theme/favicon/apple-icon-152x152.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('theme/favicon/apple-icon-180x180.png')); ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(asset('theme/favicon/android-icon-192x192.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('theme/favicon/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('theme/favicon/favicon-96x96.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('theme/favicon/favicon-16x16.png')); ?>">
        <link rel="manifest" href="<?php echo e(asset('theme/favicon/manifest.json')); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo e(asset('theme/favicon/ms-icon-144x144.png')); ?>">
        <meta name="theme-color" content="#ffffff">

        <!-- SEO -->
        <?php echo SEOMeta::generate(); ?>

        <!-- </SEO -->

     
     <meta name="keywords" content="Sparol Solutions Group, 
         <?php $TheeSectors = DB::table('sections')->get(); ?>
         <?php $__currentLoopData = $TheeSectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theSect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($theSect->title); ?>,<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     " />
     <meta name="author" content="Designekta Studios" />        
     
     <meta property="og:description" content="At Sparol Solutions Group we strive to be the leading integrated business solutions provider in East Africa. We offer our Clients a myriad of improved productivity solutions to support their businesses at all times">
     <meta property="og:image" content="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" />
     <meta property="og:image:secure_url" content="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>">
     <meta property="fb:page_id" content="1359118687432239" />
     <meta property="og:title" content="Sparol Solutions Group - The leading integrated business solutions provider in East Africa" />
     <meta property="og:url" content="<?php echo e(url('/')); ?>" />
     <meta property="og:type" content="website" />
     <meta property="og:site_name" content="Sparol Solutions Group" />
     
     
     <meta name="twitter:site" content="@sparolcleaners">
     <meta name="twitter:creator" content="@sparolcleaners">
     <meta name="twitter:card" content="summary">
     <meta name="twitter:title" content="Sparol Solutions Group | The leading integrated business solutions provider in East Africa">
     <meta name="twitter:description" content="At Sparol Solutions Group we strive to be the leading integrated business solutions provider in East Africa. We offer our Clients a myriad of improved productivity solutions to support their businesses at all times">
     <meta name="twitter:image" content="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>">
        



		<!-- all css here -->
		<!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/bootstrap.min.css')); ?>">
		<!-- animate css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/animate.css')); ?>">
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/owl.carousel.css')); ?>">
		<!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/font-awesome.min.css')); ?>">
		<!-- magnific-popup.css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/magnific-popup.css')); ?>">
		<!-- slicknav.min.css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/slicknav.min.css')); ?>">
		<!-- style css -->
		<link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/styles.css')); ?>">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?php echo e(asset('theme/assets/css/responsive.css')); ?>">
        <link href="<?php echo e(asset('theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
		<!-- modernizr css -->
        <script src="<?php echo e(asset('theme/assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5e0e34fd7e39ea1242a2c459/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
<!--End of Tawk.to Script-->


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '3121009358038182'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=3121009358038182&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child1"></div>
                <div class="child-common child2"></div>
                <div class="child-common child3"></div>
            </div>
        </div>
        <!-- preloder-wrap -->
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form id="searcher" action="#">
                                <?php echo e(csrf_field()); ?>

                                <input type="text" id="search"  name="search" autocomplete="off" placeholder="Search Sector or Service">
                                <button type="button" id="searchbtn" name="button" class="btn-style">Search</button>
                                 <!-- Livesearch Results -->
                                <div style="background-image: url('<?php echo e(url('/')); ?>/uploads/preloaders/preloader.gif');" class="text-center" id="loading-image">Loading.....</div>
                                <table id="top-head1" class="table table-bordered table-hover" style="position:absolute; background-color:rgba(255,255,255,0.9); color:#000;  z-index: 10; text-overflow:visible;">
                                <thead id="top-head">
                                <tr>

                                <th>Service</th>
                                <th>Description</th>
                                <th>Sector</th>
                                </tr> 
                                </thead>
                                <tbody>
                                </tbody>
                                </table>
                                <!-- Live seach Results -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
		<!-- heared area start -->
		<header class="header-area header-area2 sticky">
            <div class="header-top hide-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <p style="color:#6cd6fa; font-weight:900"><?php echo e($Settings->tagline); ?> &nbsp; &nbsp; <span class="fa fa-phone text-center"></span>&nbsp; <?php echo e($Settings->mobile_one); ?> &nbsp; &nbsp; <span class="fa fa-phone text-center"></span> &nbsp;<?php echo e($Settings->mobile); ?> &nbsp; &nbsp; <span class="fa fa-envelope text-center"></span>&nbsp;  <?php echo e($Settings->email); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="<?php echo e($Settings->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo e($Settings->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo e($Settings->linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo e($Settings->instagram); ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo e($Settings->youtube); ?>"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="header-bottom  bg-2"  id="sticky-header">
                <div class="container">
                    
    				<div class="row">
                        <div class="col-md-3 col-sm-8 col-xs-6">
    						<div class="logo">
    							<h1><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logo); ?>" alt="<?php echo e($Settings->sitename); ?>"></a></h1>
    						</div>
    					</div>
    					<div class="col-md-8 hidden-sm hidden-xs">
    						<div class="mainmenu">
                                <ul id="navigation">
    								<li class="<?php if($page_title == 'Home Page'){ echo "active"; }  ?>"><a href="<?php echo e(url('/')); ?>">Home <i class="fa fa-home"></i></a></li>
    								<li class="<?php if($page_title == 'About Us'){ echo "active"; }  ?>"><a href="#">About Us <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            
                                            <li><a href="<?php echo e(url('/about-us')); ?>"><i class="fa fa-info"></i> Who We Are</a></li>
                                            <li><a href="<?php echo e(url('/about-us')); ?>/team"><i class="fa fa-info"></i> Our Team </a></li>
                                     
                                        </ul>
                                    </li>
									<!-- <li class="<?php if($page_title == 'Our Services'){ echo "active"; }  ?>"><a href="<?php echo e(url('/our-services')); ?>">Services <i class="fa fa-wrench"></i></a></li> -->
									<li class="<?php if($page_title == 'Sectors'){ echo "active"; }  ?>"><a href="#">Sectors <i class="fa fa-angle-down"></i></a>
    									<ul class="megamenu">
											<?php $Sectors = DB::table('sections')->get(); ?>
											<?php $__currentLoopData = $Sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    										<li class="open">
											    <a class="mega-title" href="<?php echo e(url('/our-sectors')); ?>/<?php echo e($sect->slung); ?>"><i class="fa fa-dot-circle-o"></i> <?php echo e($sect->title); ?></a>
											</li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    									</ul>
									</li>
                                    <li class="<?php if($page_title == 'Contact Us'){ echo "active"; }  ?>"><a href="<?php echo e(url('/our-properties')); ?>"> Properties <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                             
                                            <?php $Land = DB::table('product')->where('type','Land')->paginate(12); ?>
                                            <?php if($Land->isEmpty()): ?>
                                            <li><a onclick="alert('Land has not yet been listed')"  href="#">Land</a></li>
                                            <?php else: ?>
                                            <li><a  href="<?php echo e(url('/')); ?>/properties/land">Land</a></li>
                                            <?php endif; ?>

                                            <?php $Land = DB::table('product')->where('type','Residential')->paginate(12); ?>
                                            <?php if($Land->isEmpty()): ?>
                                            <li><a onclick="alert('Residential properties has not yet been listed')"  href="#">Residential</a></li>
                                            <?php else: ?>
                                            <li><a  href="<?php echo e(url('/')); ?>/properties/Residential">Residential</a></li>
                                            <?php endif; ?>

                                            <?php $Land = DB::table('product')->where('type','Commercial')->paginate(12); ?>
                                            <?php if($Land->isEmpty()): ?>
                                            <li><a onclick="alert('Commercial properties has not yet been listed')"  href="#">Commercial</a></li>
                                            <?php else: ?>
                                            <li><a  href="<?php echo e(url('/')); ?>/properties/Commercial">Commercial</a></li>
                                            <?php endif; ?>
                                             
                                             
                                             
                                        </ul>
                                    </li>
                                    <!-- <li class="<?php if($page_title == 'Downloads'){ echo "active"; }  ?>"><a href="#">Downloads <i class="fa fa-angle-down"></i></a>
                                         <ul class="submenu">
                                             <?php $Files = DB::table('files')->get(); ?>
                                             <?php $__currentLoopData = $Files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <li><a download href="<?php echo e(url('/')); ?>/uploads/files/<?php echo e($file->file); ?>"><i class="fa fa-download"></i> <?php echo e($file->name); ?></a></li>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </ul>
                                    </li> -->

                                    <li class="<?php if($page_title == 'Downloads'){ echo "active"; }  ?>"><a href="#">Media Center<i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <?php $Files = DB::table('media')->get(); ?>
                                            <?php $__currentLoopData = $Files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(url('/')); ?>/media-center/<?php echo e($file->slung); ?>"><i class="fa fa-check"></i> <?php echo e($file->title); ?></a></li>
                                           
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(url('/')); ?>/media-centers/photo-gallery"><i class="fa fa-check"></i> Photo Gallery</a></li>
                                        </ul>
                                   </li> 
    								
    								<li class="<?php if($page_title == 'Contact Us'){ echo "active"; }  ?>"><a href="<?php echo e(url('/contact-us')); ?>">Contact Us <i class="fa fa-phone"></i></a></li>
    								
    								
    							</ul>
    						</div>
    					</div>
    					<div class="col-md-1 col-sm-2 col-xs-3 ">
    						<div class="search-wrap text-right hide-mobile">
    							<ul>
    								<li>
    									<a href="javascript:void(0);">
    										<i class="fa fa-search"></i>
    									</a>
    								</li>
    							</ul>
    						</div>
    					</div>
    					<div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
    						<div class="responsive-menu-wrap floatright"></div>
    					</div>
    				</div>
    			</div>
			</div>
		</header>
		<!-- heared area end -->

		<?php echo $__env->yieldContent('content'); ?>

		<!-- footer-area start  -->
        <?php $Banner = DB::table('banners')->where('section','contact')->get(); ?>
        <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<footer>
			<div class="footer-top main_footer__block" style="background-image: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banner->image); ?>');">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-5 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
							<div class="footer-widget footer-logo">
                                <h1><?php echo e($Settings->sitename); ?></h1>
                                <p><?php echo html_entity_decode($Settings->welcome); ?></p>
                                <h2>Sign Up for Newsletter</h2>
							
                                <div class="col-md-12 col-xs-12">
                                    <div class="newsletter-form form-style">
                                        <form target="_blank" action="https://sparol.us1.list-manage.com/subscribe/post?u=d71fad391a9b7840be1e642d4&amp;id=16b5575941" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <input  type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required>
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d71fad391a9b7840be1e642d4_16b5575941" tabindex="-1" value=""></div>
                                            <button id="SubmitButton" type="submit" class="btn-style">Submit</button>
                                            <div id="subscribeMessage1"></div>
                                        </form>
                                    </div>
                                </div>
                                
							</div>
						</div>
                        <div class="col-md-2 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                                <h2>Quick Links</h2>
                                <ul>
                                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(url('/about-us')); ?>">About us</a></li>
                                    <li><a href="<?php echo e(url('/our-sectors')); ?>">Sectors</a></li>
                                    <li><a href="<?php echo e(url('/our-properties')); ?>">Our Properties</a></li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu text-center">
                                <h2>Quick Info</h2>
                                <ul>
                                    <li><a href="<?php echo e(url('/contact-us')); ?>">Contact Us</a></li>
                                    <li><a href="<?php echo e(url('/request-quote')); ?>">Request Quote</a></li>
                                    <li><a href="<?php echo e(url('/privacy-policy')); ?>">Privacy Policy</a></li>
                                    <li><a href="<?php echo e(url('/terms-and-conditions')); ?>">Terms & Conditions</a></li>
                                  
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
							<div class="footer-widget footer-logo">
                                <h2>Contact Us</h2>
                                <ul>
                                    <li><i style="color:#6cd6fa" class="fa fa-book"></i> <?php echo e($Settings->address); ?></li>
                                    <li><i style="color:#6cd6fa" class="fa fa-map-marker"></i> <?php echo e($Settings->location); ?></li>
                                    <li><i style="color:#6cd6fa" class="fa fa-phone"></i> <?php echo e($Settings->mobile); ?> | <?php echo e($Settings->mobile_one); ?></li>
                                    <li><i style="color:#6cd6fa" class="fa fa-envelope"></i> <?php echo e($Settings->email); ?></li>
                                </ul>
							</div>
                        </div>
					</div>
                </div>
			</div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> <a  href="<?php echo e(url('/copyright')); ?>"><?php echo e($Settings->sitename); ?></a> All rights reserved
<!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
		</footer>
		<!-- footer-area end  -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="<?php echo e(asset('theme/assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
		<!-- bootstrap js -->
        <script src="<?php echo e(asset('theme/assets/js/bootstrap.min.js')); ?>"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="<?php echo e(asset('theme/assets/js/owl.carousel.min.js')); ?>"></script>
		<!-- counterup.main.js -->
        <script src="<?php echo e(asset('theme/assets/js/counterup.main.js')); ?>"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="<?php echo e(asset('theme/assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="<?php echo e(asset('theme/assets/js/isotope.pkgd.min.js')); ?>"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="<?php echo e(asset('theme/assets/js/jquery.waypoints.min.js')); ?>"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="<?php echo e(asset('theme/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="<?php echo e(asset('theme/assets/js/jquery.slicknav.min.js')); ?>"></script>
		<!-- snake.min.js -->
        <script src="<?php echo e(asset('theme/assets/js/snake.min.js')); ?>"></script>
		<!-- wow js -->
        <script src="<?php echo e(asset('theme/assets/js/wow.min.js')); ?>"></script>
		<!-- plugins js -->
        <script src="<?php echo e(asset('theme/assets/js/plugins.js')); ?>"></script>
		<!-- main js -->
        <script src="<?php echo e(asset('theme/assets/js/scripts.js')); ?>"></script>
        <script>
        // 
        $(document).ready(function() {
        $('#loading-image').hide();
        $('#top-head').hide();
        $('#top-head1').hide();
        });
        
        $('#QuestionsForm').on('submit', function (e) {
            $('#QuestionsBtn').html('Working....')
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: '<?php echo e(url('/')); ?>/submitMessage',
                data: $('#QuestionsForm').serialize(),
                success: function (rsl) {
                //clear the form
                $('form :input').val('');
                $('#QuestionsBtn').html('Message Sent')
                alert('Message Sent');
                location.reload();
                
                }
            });

        });

        $('#SubmitQuote').on('submit', function (e) {
          $('#quoteBtn').html('Submiting....')
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '<?php echo e(url('/')); ?>/quote',
            data: $('#SubmitQuote').serialize(),
            success: function (rsl) {
              //clear the form
              $('form :input').val('');
              $('#quoteBtn').html('Send Message')
              alert(rsl);
			  location.reload();
            
            }
          });

        });

        $('#search').on('submit', function (e) {
          $('#searchbtn').html('Searching')
          e.preventDefault();

            $.ajax({
                type: 'post',
                url: '<?php echo e(url('/')); ?>/search',
                data: $('#search').serialize(),
                success: function (rsl) {
                //clear the form
                $('form :input').val('');
                $('#quoteBtn').html('Send Message')
                alert(rsl);
                location.reload();
                
                }
            });

        });

        
          
          $('#search').on('keyup',function(){
            // Add preloader
            $('#loading-image').show();          
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '<?php echo e(URL::to('search')); ?>',
            data:{'search':$value},
            success:function(data){
                // check if data is empty then hide top head
                if (data.trim()==''){
                    $('#top-head').hide();
                    $('#top-head1').hide();
                }else{
                
                    $('#loading-image').hide();
                    $('#top-head').show();
                    $('#top-head1').show();
                    $('tbody').html(data);
                }
             }
            });
            })
            </script>
            <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
            </script>
            <!-- </Live Search Scripts -->
            <script>
           $(window).scroll(function(){
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
            });
            </script>
        
        
	</body>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</html>
