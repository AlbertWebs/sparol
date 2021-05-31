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
                        <h2> Edit Client </h2>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Team')}}/{{$Team->id}}" enctype="multipart/form-data">
                    
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Member Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="{{$Team->name}}" placeholder="e.g Juliet Wangui " class="form-control" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Position</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="position" value="{{$Team->position}}" placeholder="e.g Managing Director " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">facebook</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="facebook" value="{{$Team->facebook}}" placeholder="e.g http://facebook.com/albert.muhatex " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Twitter</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="twitter" value="{{$Team->twitter}}" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Instagram</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="instagram" value="{{$Team->instagram}}" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Google</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="google" value="{{$Team->google}}"  class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">linkedin</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="linkedin" value="{{$Team->linkedin}}"  class="form-control" />
                        </div>
                    </div>


                    <center>
                    <div class="form-group col-lg-12">
                    
                        <label class="control-label">Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/teams/{{$Team->image}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        
                    </div>
                    
                   
                    </div>

                   
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    
                    <input type="hidden" name="image_one_cheat" value="{{$Team->image}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
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