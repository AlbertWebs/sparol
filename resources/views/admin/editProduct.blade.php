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
                        <h2> Edit Property </h2>
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Product')}}/{{$Product->id}}" enctype="multipart/form-data">
                    
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">propety  Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="{{$Product->name}}" placeholder="e.g Avira Appartments " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Location</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="location" value="{{$Product->location}}" placeholder="e.g Kilifi" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Type</label>

                        <div class="col-lg-8">
                            <select name="type" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                            <option selected="selected" value="{{$Product->type}}">{{$Product->type}}</option>
                            
                              <option value="Land">Land</option>
                              <option value="Residential">Residential</option>
                              <option value="Commercial">Commercial</option>
                            

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Sale Or Rent</label>

                        <div class="col-lg-8">
                            <select name="rentsale" data-placeholder="Sale Or Rent" class="form-control chzn-select" tabindex="2">
                            <option selected="selected" value="{{$Product->rentsale}}">{{$Product->rentsale}}</option>
                            
                              <option value="sale">sale</option>
                              <option value="rent">rent</option>
                            

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Propert Pricing</label>

                        <div class="col-lg-8">
                            <input type="number" id="text1" name="price" value="{{$Product->price}}" placeholder="e.g 12500" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-3">Metrix</label>
                        <div class="col-lg-3">
                            <input type="number" id="text1" name="bedroom" value="{{$Product->bedroom}}" placeholder="Bedrooms e.g 2" class="form-control" />
                        </div>

                        <div class="col-lg-3">
                            <input type="number" id="text1" name="bathroom" value="{{$Product->bathroom}}" placeholder="bathrooms e.g 2" class="form-control" />
                        </div>

                        <div class="col-lg-3">
                            <input type="number" id="text1" name="size" value="{{$Product->size}}" placeholder="size e.g 2" class="form-control" />
                        </div>
                    </div>

                   

                    <div class="form-group">
                    <label class="control-label col-lg-4">Category</label>

                    <?php
                            $CatID = $Product->cat;
                            $TheCategory = DB::table('category')->where('id',$CatID)->get();
                             
                    ?>

                        

                    <div class="col-lg-8">
                        <select name="cat" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                          <option selected="selected" value="{{$Product->cat}}">@foreach($TheCategory as $valuee){{$valuee->cat}} @endforeach</option>
                           <?php $TheCategoryList = DB::table('category')->get(); ?>
                           @foreach($TheCategoryList as $value)
                              <option value="{{$value->id}}">{{$value->cat}}</option>
                           @endforeach

                        </select>
                    </div>
                    </div>

                    

                    <!--  -->
                    <div class="form-group">
                        <label for="limiter" class="control-label col-lg-4">Meta Data</label>

                        <div class="col-lg-8">
                            <textarea id="limiter" name="meta" class="form-control">{{$Product->meta}}</textarea>
                            <p class="help-block">Add Limited Words To Describe The Product</p>
                        </div>
                    </div>
                    <!--  -->
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Property Description</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Product->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                   
                    <center>
                    <div class="form-group col-lg-12">
                    <div class="form-group col-lg-4">
                        <label class="control-label">Image One(Main)</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_one}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Two</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_two}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_two" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group col-lg-4">
                        <label class="control-label">Image Three</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/product/{{$Product->image_three}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_three" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    
                    </div>
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    
                    <input type="hidden" name="image_one_cheat" value="{{$Product->image_one}}">
                    <input type="hidden" name="image_two_cheat" value="{{$Product->image_two}}">
                    <input type="hidden" name="image_three_cheat" value="{{$Product->image_three}}">
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