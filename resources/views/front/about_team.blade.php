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
							<li><a href="{{url('/')}}">Home</a></li>
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

    @endforeach

    {{-- Team Members --}}
  <?php $Team = DB::table('admins')->where('role','team')->get(); ?>

  @if($Team->isEmpty())

  @else

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
            @foreach ($Team as $item)
            <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".{{$count}}s">
                <div class="service-wrap mb-30">
                    <div class="service-img">
                        <img src="{{url('/')}}/uploads/admins/{{$item->image}}" alt="" />
                    </div>
                    <div class="service-content" style="max-height:100px !important">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->position}}</p>
                    </div>
                </div>
            </div>
            <?php $count = $count+1; ?>
            @endforeach
        </div>
    </div>
  </section>
  
  @endif
	
    {{-- Team Members --}}
		
      

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