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
                            <li> <a href="{{url('/our-properties')}}">Our Properties</a></li>
                            <li>/</li>
							<li> {{$title}} </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- breadcumb-area end -->
    @endforeach
    @foreach($Properties as $pro)
       <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row" style="color:#000">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="row grid">
                            @if(is_null($pro->image_one))

                            @else
                                <div class="col-md-4 portfolio clean col-sm-6 col-xs-12 col">
                                    <div class="portfolio-wrap">
                                        <div class="overlay">
                                            <a class="popup" href="{{url('/')}}/uploads/product/{{$pro->image_one}}">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-img">
                                            <img src="{{url('/')}}/uploads/product/{{$pro->image_one}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(is_null($pro->image_one))

                            @else
                                <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col col">
                                    <div class="portfolio-wrap">
                                        <div class="overlay">
                                            <a class="popup" href="{{url('/')}}/uploads/product/{{$pro->image_two}}">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-img">
                                            <img src="{{url('/')}}/uploads/product/{{$pro->image_two}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(is_null($pro->image_three))

                            @else
                                <div class="col-md-4 portfolio website col-sm-6 col-xs-12 col col">
                                    <div class="portfolio-wrap">
                                        <div class="overlay">
                                            <a class="popup" href="{{url('/')}}/uploads/product/{{$pro->image_three}}">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-img">
                                            <img src="{{url('/')}}/uploads/product/{{$pro->image_three}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                            </div>
                            <h3>{{$pro->name}}</h3>
                            <p>{!!html_entity_decode($pro->content)!!}</p>
                            <hr>
                            <?php $Amenities = DB::table('amenities')->where('product_id',$pro->id)->get(); ?>
                            @if($Amenities->isEmpty())

                            @else
                            <div class="tags-wrap">
                                <h3 class="sidebar-title">Amenities</h3>
                                
                                <ul>
                                    @foreach($Amenities as $amen)
                                    @if(is_null($amen->security) or $amen->security == '')

                                    @else
                                    <li><a href="#">{{$amen->security}}</a></li>
                                    @endif

                                    @if(is_null($amen->parking) or $amen->parking == '')

                                    @else
                                    <li><a href="#">{{$amen->parking}}</a></li>
                                    @endif

                                    @if(is_null($amen->cctv) or $amen->cctv == '')

                                    @else
                                    <li><a href="#">{{$amen->cctv}}</a></li>
                                    @endif

                                    @if(is_null($amen->electric_fence) or $amen->electric_fence == '')

                                    @else
                                    <li><a href="#">{{$amen->electric_fence}}</a></li>
                                    @endif

                                    @if(is_null($amen->perimeter_wall) or $amen->perimeter_wall == '')

                                    @else
                                    <li><a href="#">{{$amen->perimeter_wall}}</a></li>
                                    @endif

                                    @if(is_null($amen->power_supply) or $amen->power_supply == '')

                                    @else
                                    <li><a href="#">{{$amen->power_supply}}</a></li>
                                    @endif

                                    @if(is_null($amen->restaurants) or $amen->restaurants == '')

                                    @else
                                    <li><a href="#">{{$amen->restaurants}}</a></li>
                                    @endif

                                    @if(is_null($amen->Standby_generator) or $amen->Standby_generator == '')

                                    @else
                                    <li><a href="#">{{$amen->Standby_generator}}</a></li>
                                    @endif

                                    @if(is_null($amen->swimming_pool) or $amen->swimming_pool == '')

                                    @else
                                    <li><a href="#">{{$amen->swimming_pool}}</a></li>
                                    @endif

                                    @if(is_null($amen->health) or $amen->health == '')

                                    @else
                                    <li><a href="#">{{$amen->health}}</a></li>
                                    @endif

                                    @if(is_null($amen->intercom) or $amen->intercom == '')

                                    @else
                                    <li><a href="#">{{$amen->intercom}}</a></li>
                                    @endif

                                    @if(is_null($amen->gardens) or $amen->gardens == '')

                                    @else
                                    <li><a href="#">{{$amen->gardens}}</a></li>
                                    @endif

                                    @if(is_null($amen->gym) or $amen->gym == '')

                                    @else
                                    <li><a href="#">{{$amen->gym}}</a></li>
                                    @endif

                                    @if(is_null($amen->internet) or $amen->internet == '')

                                    @else
                                    <li><a href="#">{{$amen->internet}}</a></li>
                                    @endif

                                    @if(is_null($amen->master_ensuite) or $amen->master_ensuite == '')

                                    @else
                                    <li><a href="#">{{$amen->master_ensuite}}</a></li>
                                    @endif

                                    @if(is_null($amen->gated_community) or $amen->gated_community == '')

                                    @else
                                    <li><a href="#">{{$amen->gated_community}}</a></li>
                                    @endif

                                    @if(is_null($amen->fully_furnished) or $amen->fully_furnished == '')

                                    @else
                                    <li><a href="#">{{$amen->fully_furnished}}</a></li>
                                    @endif

                                    @if(is_null($amen->elevator) or $amen->elevator == '')

                                    @else
                                    <li><a href="#">{{$amen->elevator}}</a></li>
                                    @endif
                                   
                                    
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
                            <div class="sidebar-menu">
                                <ul>
                                    <li><a class="text-center" href="#">Other Properties</a></li>
                                    <?php $OtherProperties = DB::table('product')->limit(10)->inRandomOrder()->get(); ?>
                                    @foreach($OtherProperties as $op)
                                    <li class=""><a href="{{url('/')}}/our-properties/{{$op->name}}">{{$op->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="banner-wrap black-opacity">
                                <img src="{{url('/')}}/uploads/product/{{$pro->image_one}}" alt="{{$pro->name}}">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-service-area end -->
    @endforeach
@endsection

                   