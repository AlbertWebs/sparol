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
						<h2>Copyrights</h2>
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
                            <li>Privacy Policy</li>
                            <li>/</li>
							<li>Copyrights</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcumb-area end -->

    @endforeach
   
        <div class="testmonial-area testmonial-area2 ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                @if($Copyright->isEmpty())
                        <center><h2>No Copyrights</h2></center>
                @else
                @foreach($Copyright as $value)
                    <div class="section-title text-center">
                        <h2 style="color:#000">Copyright Statement</h2>
                        <p style="color:#000">{!!html_entity_decode($value->content)!!}</p>
                    </div>
                @endforeach
                @endif
                </div>
            </div>
          
        </div>
    </div>
    @endsection