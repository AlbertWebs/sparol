@extends('front.master')
@section('content')
		<!-- slider area start -->
		<section class="slider-area">
			<div class="slider-active3 slider-next-prev-style">
				<?php $Sliders = DB::table('slider')->get(); ?> 
				@foreach($Sliders as $slider)
				
				<div class="slider-items">
					<img src="{{url('/')}}/uploads/slider/{{$slider->image}}" alt="" class="slider">
					<div class="slider-content text-center">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-2">
											<h2 style="text-shadow:	0 4px 0 #000;">{{$slider->name}}</h2>
											<p style="font-size:140%">{!!html_entity_decode($slider->content)!!}</p>
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

				
				@endforeach
			</div>
		</section>
		<!-- slider area end -->
        
        <!-- about-area start -->
		<section class="about-area pb-140 about-area2 ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-12 wow fadeInLeft">
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
					
                    <div class="col-md-5 col-xs-12 wow fadeInRight">
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

		<?php $Sectors = DB::table('sections')->limit(6)->get(); ?>
		@if($Sectors->isEmpty())

		@else
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
				    @foreach($Sectors as $Sect)
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".{{$count}}s">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{url('/')}}/uploads/sections/{{$Sect->image}}" alt="" />
                            </div>
                            <div class="service-content">
                                <h3>{{$Sect->title}}</h3>
                                <p>{{$Sect->pre}}</p>
								<center>
                                <a class="btn btn-primary text-center" href="{{url('/')}}/our-sectors/{{$Sect->slung}}">Read More</a>
								</center>
                            </div>
                        </div>
					</div>
					<?php $count = $count+1; ?>
					@endforeach
                    <center><a class="btn btn-primary text-center" href="{{url('/')}}/our-sectors">All Sectors</a></center>
                </div>
            </div>
        </section>
        <!-- .service-area end -->
		@endif
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
                            <a href="{{url('/')}}/request-quote">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quote-area end -->
	
		<?php $Properties = DB::table('product')->orderBy('id','DESC')->limit('3')->inRandomOrder()->get(); ?>
		@if($Properties->isEmpty())
    
        @else
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
                  @foreach($Properties as $pro)
                    @if($pro->type == 'Residential')
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".{{$count}}s" >
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
								<img style="height:205px" src="{{url('/')}}/uploads/product/{{$pro->image_one}}" alt="{{$pro->name}}" />
								<div class="tag_featured property_tag"><a href="#">{{$pro->rentsale}}</a></div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-shower"></i> {{$pro->bathroom}} Bathroom</a></li>
                                        <li><a href="#"><i class="fa fa-bed"></i> {{$pro->bedroom}} Bedroom</a></li>
                                        <li><a href="#"><i class="fa fa-arrows-h"></i> {{$pro->size}} sqft</a></li>
                                    </ul>
                                </div>
                                <h3 class="text-center"><a href="{{url('/our-properties')}}/{{$pro->slung}}">{{$pro->name}}</a></h3>
                                <center><span><i class="fa fa-map-marker"></i> &nbsp; <strong>{{$pro->location}}</strong></span></center>
                                <p style="min-height:120px">{{$pro->meta}}</p>
                                <center><a  href="{{url('/our-properties')}}/{{$pro->slung}}" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".{{$count}}s">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
								<img style="height:205px" src="{{url('/')}}/uploads/product/{{$pro->image_one}}" alt="{{$pro->name}}"/>
								<div class="tag_featured property_tag"><a href="#">{{$pro->rentsale}}</a></div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul class="text-center">
                                        <!-- <li><a href="#"><i class="fa fa-shower"></i> {{$pro->bathroom}} Bathroom</a></li>
                                        <li><a href="#"><i class="fa fa-bed"></i> {{$pro->bedroom}} Bedroom</a></li> -->
                                        <li><a href="#"><i class="fa fa-arrows-h"></i> {{$pro->size}} sqft</a></li>
                                    </ul>
                                </div>
                                <h3 class="text-center"><a href="{{url('/our-properties')}}/{{$pro->slung}}">{{$pro->name}}</a></h3>
                                <center><span><i class="fa fa-map-marker"></i><strong> &nbsp; {{$pro->location}}</strong></span></center>
                                <p style="min-height:120px">{{$pro->meta}}</p>
                                <center><a  href="{{url('/our-properties')}}/{{$pro->slung}}" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    @endif
                  @endforeach
				  
                </div>
				<hr>
				  <center><a class="btn btn-primary text-center" href="{{url('/')}}/our-properties">All Properties</a></center>
            </div>
        </section>
		@endif
		
        <?php $Team = DB::table('team')->get(); $count = 0; ?>
		@if($Team->isEmpty())

		@else
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
				    @foreach($Team as $team)
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".{{$count}}s">
                        <div class="team-wrap3">
                            <div class="team-img">
                                <img src="{{url('/')}}/uploads/teams/{{$team->image}}" alt="{{$team->name}}" />
                                <ul>
                                    <li><a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{$team->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{$team->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{$team->google}}"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3>{{$team->name}}</h3>
                                <p>{{$team->position}}</p>
                            </div>
                        </div>
                    </div>
					<?php $count = $count+1; ?>
					@endforeach
                    
                </div>
            </div>
        </section>
        <!-- team-area end -->
		@endif

		
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
					    @foreach($Partners as $Partner)
                        <div class="col-xs-12">
                            <div class="brand-wrap">
                                <a href="{{$Partner->link}}">
                                    <img style="height:80px;" src="{{url('/')}}/uploads/partners/{{$Partner->image}}" alt="{{$Partner->name}}">
                                </a>
                            </div>
                        </div>
						@endforeach
                    </div>
                </div>
			</div>
		</section>
		<!-- brand-area end -->
		

@endsection