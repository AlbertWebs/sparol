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
						<h2>Terms and Conditions</h2>
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
							<li>Terms & Conditions</li>
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
                @if($Term->isEmpty())
                        <center><h2>No terms Added</h2></center>
                @else
                @foreach($Term as $privacy)
                    <div class="section-title text-center">
                        <h2 style="color:#000">{{$privacy->title}}</h2>
                        <p style="color:#000">{!!html_entity_decode($privacy->content)!!}</p>
                    </div>
                @endforeach
                @endif
                </div>
            </div>
          
        </div>
    </div>
    @endsection

     