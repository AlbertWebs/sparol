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
                       
                        <center> <h2> Edit Partner </h2> </center>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Partner')}}/{{$Partner->id}}" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Partner Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="{{$Partner->name}}" placeholder="e.g Designekta Studios " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Website link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="link" value="{{$Partner->link}}" placeholder="https://www.standcare.co.ke" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Section</label>
                        <div class="col-lg-8">
                            <select id="TheSection" name="section" data-placeholder="Choose Section" class="form-control chzn-select" tabindex="2">
                            <?php $SectionsFetch = DB::table('sections')->where('id',$Partner->section_id)->get(); ?>
                            @foreach($SectionsFetch as $sect)
                            <option selected value="{{$sect->id}}">{{$sect->title}}</option>
                            @endforeach
                            
                            @foreach($Section as $value)
                                <option value="{{$value->id}}">{{$value->title}}</option>
                            @endforeach

                            </select>
                        </div>
                    </div>

                   
                    <center>
                    <div class="form-group col-lg-12">
                    
                        <label class="control-label">Featured Image/Logo</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/partners/{{$Partner->image}}" alt="" /></div>
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
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save</button>
                    </div>
                    
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="image_one_cheat" value="{{$Partner->image}}">
                    
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