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
						<h2>Services</h2>
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
							<li>Our Services</li>
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
	 <!-- .service-area start -->
	 <section class="service-area ptb-100">
            <div class="container">
                <div class="row">
					@foreach($Services as $Service)
					<?php $SectorService = DB::table('sections')->where('id',$Service->section_id)->get() ?>
					@foreach($SectorService as $SectSer)
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{url('/')}}/uploads/services/{{$Service->image_one}}" alt="" />
                            </div>
                            <div class="service-content">
								<h3>{{$Service->title}}</h3>
								<small>{{$SectSer->title}}</small>
                                <p>{{$Service->pre}}</p>
                                <a href="{{url('/')}}/{{$SectSer->title}}/{{$SectSer->title}}">Read More</a>
                            </div>
                        </div>
					</div>
					@endforeach
					@endforeach
                    <div class="col-xs-12">
                        <div class="pagination-wrap">
                            <ul>
                                <?php echo $Services ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .service-area end -->
    @endif

@endsection