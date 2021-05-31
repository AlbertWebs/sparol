@extends('admin.master')

@section('content')
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2> Edit Amenities for: {{$Product->name}} </h2>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                  
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>
                 @foreach($Amenities as $amen)

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Amenities')}}/{{$Product->id}}" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Security Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="security" value="{{$amen->security}}" placeholder="24 Hours Security" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Parking Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="parking" value="{{$amen->parking}}" placeholder="Secured Ample Parking" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Surveilance Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="cctv" value="{{$amen->cctv}}" placeholder="24 Hours CCTV Surveilance" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Fence Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="electric_fence" value="{{$amen->electric_fence}}" placeholder="Electric Fence" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Perimenter Wall</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="perimeter_wall" value="{{$amen->perimeter_wall}}" placeholder="Perimeter Wall" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Power Supply Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="power_supply" value="{{$amen->power_supply}}" placeholder="Power Supply" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Restaurants Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="restaurants" value="{{$amen->restaurants}}" placeholder="restaurants" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Backup Power Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="Standby_generator" value="{{$amen->Standby_generator}}" placeholder="Standby generator" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Swimming Pool Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="swimming_pool" value="{{$amen->swimming_pool}}" placeholder="Swimming Pool Available" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Health Facility Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="health" value="{{$amen->health}}" placeholder="Health Facility Available" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Gardens Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="gardens" value="{{$amen->gardens}}" placeholder="Kitchen Garden" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Intercom System Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="intercom" value="{{$amen->intercom}}" placeholder="Intercom Systems" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Gym Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="gym" value="{{$amen->gym}}" placeholder="Gym Detail" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Internet Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="internet" value="{{$amen->internet}}" placeholder="Internet Availability" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Master Ensuite</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="master_ensuite" value="{{$amen->master_ensuite}}" placeholder="Master Ensuite" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Gated Community</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="gated_community" value="{{$amen->gated_community}}" placeholder="Gated Community" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Funished Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="fully_furnished" value="{{$amen->fully_furnished}}" placeholder="fully furnished" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Elevator Detail</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="elevator" value="{{$amen->elevator}}" placeholder="Elevator" class="form-control" />
                        </div>
                    </div>

                 

                    

          
                       
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    
              
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
                @endforeach
              </div>

            </div>
                  <!-- Inner Content Ends Here -->



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection