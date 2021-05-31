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
						<h2>Sectors</h2>
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
							<li> Sectors</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    @endforeach
    @if($Sectors->isEmpty())

    @else
    <!-- single-service-area start -->
    <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-xs-12">
                        @foreach($Sectors as $sectors)
                        <!-- Sector Listing -->

                            <div class="col-md-4 col-sm-6 col-xs-12 col">
                                <div class="service-wrap mb-30">
                                    <div class="service-img"> 
                                        <img src="{{url('/')}}/uploads/sections/{{$sectors->image}}" alt="" />
                                    </div>
                                    <div class="service-content">
                                        <h3>{{$sectors->title}}</h3>
                                        <p>{{$sectors->pre}}</p>
                                        <center><a href="{{url('/')}}/our-sectors/{{$sectors->slung}}">Read More</a></center>
                                    </div>
                                </div>
                            </div>
                            
                        <!-- </Sector Listing> -->
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- single-service-area end -->
	@endif

@endsection