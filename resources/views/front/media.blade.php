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

	@foreach ($Media as $media)
	<div class="testmonial-area testmonial-area2 ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                @if($media->content == null)
                        <center><h2>Sorry No vacancies & careers available at the moment, please keep visiting our careers page for the latest postings!</h2></center>
                @else
                
                    <div class="section-title text-center">
                  
                        <p style="color:#000">{!!html_entity_decode($media->content)!!}</p>
                    </div>
 
                @endif
                </div>
            </div>
          
        </div>
    </div>
	@endforeach

    
        
    @endsection

     