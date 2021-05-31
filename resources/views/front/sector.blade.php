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
						<h2>{{$title}}</h2>
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
                            <li> <a href="{{url('/')}}">Sectors</a></li>
                            <li>/</li>
							<li> {{$title}}</li>
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
        @foreach($Sectors as $Sec)
        <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="single-service-active">
                                <div class="single-service-img">
                                    <img src="{{url('/')}}/uploads/sections/{{$Sec->image}}" alt="">
                                </div>
                            </div>
                            <h3>{{$Sec->title}}</h3>
                            <blockquote>
                                {{$Sec->pre}}
                            </blockquote>
                            <p>{!!html_entity_decode($Sec->content)!!}</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
                            <div class="sidebar-menu">
                                <center><strong class="text-center">Services</strong></center>
                                <ul>
                                    <?php $ServiceSection = DB::table('services')->where('section_id',$Sec->id)->get(); ?>
                                    @foreach($ServiceSection as $theService)
                                    <li><a href="{{url('/')}}/our-services/{{$theService->slung}}">{{$theService->title}}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </div>

                            <div class="sidebar-menu">
                                <center><strong class="text-center">Other Sectors</strong></center>
                                <ul>
                                    <?php $OtherSectors = DB::table('sections')->get(); ?>
                                    @foreach($OtherSectors as $otherSectors)
                                    <li><a href="{{url('/')}}/our-sectors/{{$otherSectors->slung}}">{{$otherSectors->title}}</a></li>
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