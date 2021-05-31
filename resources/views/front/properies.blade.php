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
						<h2>Listed Properties</h2>
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
                            <li> <a href="{{url('/')}}">Estate Agency</a></li>
                            <li>/</li>
							<li> Listed Properties</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- breadcumb-area end -->
    @endforeach

    @if($Properties->isEmpty())
    
    @else
        <section class="blog-area ptb-140 bg-1"> 
            <div class="container">
            <div class="row" style="padding-bottom:100px;">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                <div class="section-title text-center">
                  <h2>Listed Properties</h2>
                </div>
              </div>
            </div>
                <div class="row">
                <?php  $count = 1; ?>
                  @foreach($Properties as $pro)
                    @if($pro->type == 'Residential')
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
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
                                <center><span><i class="fa fa-map-marker"></i><strong>{{$pro->location}}</strong></span></center>
                                <p style="min-height:120px">{{$pro->meta}}</p>
                                <center><a  href="{{url('/our-properties')}}/{{$pro->slung}}" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
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
                                <center><span><i class="fa fa-map-marker"></i><strong>{{$pro->location}}</strong></span></center>
                                <p style="min-height:120px">{{$pro->meta}}</p>
                                <center><a  href="{{url('/our-properties')}}/{{$pro->slung}}" class="btn-style">Explore</a></center>
                            </div>
                        </div>
                    </div>
                    @endif
                  @endforeach

                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                                <?php echo $Properties; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

                   