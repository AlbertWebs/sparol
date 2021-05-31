@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','page')->where('section','page')->get(); ?>
    @foreach($Banner as $banner)
    <!-- breadcumb-area start -->
	<div class="breadcumb-area black-opacity bg-img-4" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}')">
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
							<li><a href="{{url('/')}}">Home</a></li>
							<li>/</li>
							<li>About us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    @endforeach
		
        <!-- about-area start -->
		<section class="about-area pb-140 about-area2 ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12 wow fadeInLeft">
						<div class="about-wrap">
							<h2>who we are</h2>
							<?php $About = DB::table('about')->get(); ?>
							@foreach($About as $about)
							<p>
							{!!html_entity_decode($about->content)!!} 
							</p>
							@endforeach
						</div>
					</div>
					
                    <div class="col-md-6 col-xs-12 wow fadeInRight">
                        <div class="row mt-60">
							@foreach($About as $val)
                            <div class="col-sm-12 col-xs-12 col">
                                <div class="about-items mb-30">
								    <h4>Mission</h4>
                                    <i class="fa fa-check"></i>
                                    <h5> {!!html_entity_decode($val->mission)!!} </h5>
                                </div>
                            </div>
							<div class="col-sm-12 col-xs-12 col">
                                <div class="about-items mb-30">
								    <h4>Vision</h4>
                                    <i class="fa fa-binoculars"></i>
                                    <h5> {!!html_entity_decode($val->vision)!!} </h5>
                                </div>
                            </div>
                            @endforeach
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
								@foreach($values as $val)
								@if($count == '1')
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$val->id}}" aria-expanded="true" aria-controls="collapse_{{$val->id}}">
                                                {{$val->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_{{$val->id}}" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>{!!html_entity_decode($val->content)!!}</p>
                                        </div>
                                    </div>
                                </div>
								@else
								<div class="panel panel-default">
                                    <div class="panel-heading"   id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$val->id}}" aria-expanded="false" aria-controls="collapse_{{$val->id}}">
                                                {{$val->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_{{$val->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">
										   <p>{!!html_entity_decode($val->content)!!}</p>
                                        </div>
                                    </div>
                                </div>
								@endif
								<?php $count = $count+1; ?>
								@endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="faq-form form-style">
                            <div class="cf-msg"></div>
                            <form id="QuestionsForm" action="" method="post" id="cf">
							{{ csrf_field() }}
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
        @foreach($Banner as $banner)
        <!-- company-details-area start -->
        <div class="company-details-area parallax black-opacity "  data-speed="5" data-bg-image="{{url('/')}}/uploads/banners/{{$banner->image}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="company-details-wrap">
                            <h2>We are here to work with a business just like yours</h2>
                            <p>
								<?php $Sitesettings = DB::table('sitesettings')->get(); ?>
								@foreach($Sitesettings as $Settings)
                                  {!!html_entity_decode($Settings->welcome)!!}
								@endforeach
							</p>
                            <a href="{{url('/contact-us')}}"><span class="fa fa-phone"></span> Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- company-details-area end -->
		@endforeach
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
					@foreach($ServicesHomeList as $Ser)
					<?php $SectorService = DB::table('sections')->where('id',$Ser->section_id)->get() ?>
					@foreach($SectorService as $SectSer)
                    <div style="color:#000" class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".{{$count}}s">
                        <div class="service-wrap">
                            <div class="service-content">
								<h3>{{$Ser->title}}</h3>
								<small>  {{$SectSer->title}}</small>
                                <p style="color:#000">{{$Ser->pre}}</p>
                                <a href="{{url('/our-services')}}/{{$Ser->slung}}">Read More</a>
                            </div>
                        </div>
					</div>
					@endforeach
					<?php $count = $count+1; ?>
                    @endforeach
                </div>
            </div>
        </section>
		<!-- .service-area end -->
	
		<?php $Testimonials = DB::table('testimonial')->get(); $count = 0; ?>
		@if($Testimonials->isEmpty())

		@else
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
						@foreach($Testimonials as $Test)
						    @if($count % 2 == 0)
							<div class="col-xs-12 wow fadeInLeft">
								<div class="client-wrap fix">
									<div class="client-info text-right">
										<h3>{{$Test->name}}</h3>
										<span>{{$Test->position}}, {{$Test->company}}</span>
										<ul>
										    @if($Test->rating == 1)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 2)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 3)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 4)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 5)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											@else

											@endif
										
										</ul>
										<p>{!!html_entity_decode($Test->content)!!}</p>
									</div>
									<div class="client-img pull-right">
										<img style="width:100px;height:100px" src="{{url('/')}}/uploads/testimonials/{{$Test->image}}" alt="" />
									</div>
								</div>
							</div>
							@else
							<div class="col-xs-12 wow fadeInLeft">
								<div class="client-wrap fix">
									<div class="client-info text-right">
										<h3>{{$Test->name}}</h3>
										<span>{{$Test->position}}, {{$Test->company}}</span>
										<ul>
										    @if($Test->rating == 1)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 2)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 3)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 4)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											@endif
											@if($Test->rating == 5)
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											@else

											@endif
										</ul>
										<p>{!!html_entity_decode($Test->content)!!}</p>
									</div>
									<div class="client-img pull-left">
										<img style="width:100px; height:100px" src="{{url('/')}}/uploads/testimonials/{{$Test->image}}" alt="" />
									</div>
								</div>
							</div>
							@endif
							<?php $count = $count+1; ?>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- testmonial-area end -->
		@endif
@endsection