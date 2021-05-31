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
						<h2>{{$service}}</h2>
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
                            <li> <a href="{{url('/')}}">Services</a></li>
                            <li>/</li>
							<li> {{$service}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    @endforeach
    @if($Services->isEmpty())

    @else
        @foreach($Services as $Ser)
          <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="single-service-active">
								@if($Ser->image_one == null)

								@else
                                <div class="single-service-img">
                                    <img src="{{url('/')}}/uploads/services/{{$Ser->image_one}}" alt="{{$Ser->title}}">
								</div>
								@endif
								@if($Ser->image_two == null)

								@else
                                <div class="single-service-img">
                                    <img src="{{url('/')}}/uploads/services/{{$Ser->image_two}}" alt="{{$Ser->title}}">
								</div>
								@endif
								@if($Ser->image_three == null)

								@else
                                <div class="single-service-img">
                                    <img src="{{url('/')}}/uploads/services/{{$Ser->image_three}}" alt="{{$Ser->title}}">
								</div>
								@endif
                            </div>
                            <h3>{{$Ser->title}}</h3>
                            <p>{!!html_entity_decode($Ser->content)!!}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
						    <div class="sidebar-menu">
                                <center><h5><strong class="text-center">Other Services</strong></h5></center>
                                <ul>
                                    <?php $ServiceSection = DB::table('services')->where('section_id',$Ser->section_id)->get(); ?>
                                    @foreach($ServiceSection as $theService)
                                    <li><a href="{{url('/')}}/our-services/{{$theService->slung}}">{{$theService->title}}</a></li>
                                    @endforeach
                                    <br>
                                    <li><a href="#"><center><strong>Sectors</strong></center></a></li>
                                    <?php $ServiceSection = DB::table('sections')->inRandomOrder()->Limit('6')->get(); ?>
                                    @foreach($ServiceSection as $theService)
                                    <li><a href="{{url('/')}}/our-sectors/{{$theService->slung}}">{{$theService->title}}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </aside>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- single-service-area end -->
        @endforeach
    @endif

@endsection