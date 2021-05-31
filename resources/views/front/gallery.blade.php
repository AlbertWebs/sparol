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
						<h2>Media Center || {{$page_title}}</h2>
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
							<li>Media Center</li>
							<li>/</li>
							<li>{{$page_title}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    @endforeach

            <!-- Work Section -->
            <section id="work" class="padding ptb-xs-40">
                <div class="container">
                   
                  
                    <div class="row" style="padding-top:100px; padding-bottom:100px">


                            @foreach ($Gallery as $gallery)
                            <div class="item-box col-lg-4">
                                <a> <img alt="1" src="{{url('/')}}/uploads/gallery/{{$gallery->image}}" class="item-container"> </a>
                                <div class="link-zoom">
                                    {{-- <a href="{{url('/')}}/our-work/{{$gallery->title}}" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
                                    <a href="{{url('/')}}/uploads/gallery/{{$gallery->image}}" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
                                  --}}
                                </div>
                            </div>
                            @endforeach
                         

                            
                    </div>
            

                        

                    </div>

                </div>
            </section>


    
        
    @endsection

     