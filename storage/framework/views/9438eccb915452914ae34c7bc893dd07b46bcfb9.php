<div id="right">

            
            <!-- <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span></li>
                    <li>Users &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li>
                    <li>Subscribers &nbsp; : <span><?php $Subscribers = DB::table('subscribers')->get(); $Count = count($Subscribers); echo $Count ?></span></li>
                    
                </ul>
            </div> -->
            <div class="well well-small">
                <button type="button" class="btn btn-block"> Version Control </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/section')); ?>','_self')" class="btn btn-danger btn-block"> Sections</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/services')); ?>','_self')" class="btn btn-info btn-block"> Services</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/portfolio')); ?>','_self')" class="btn btn-success btn-block"> Portfolio</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/testimonials')); ?>','_self')" class="btn btn-success btn-block"> Testimonials </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/partners')); ?>','_self')" class="btn btn-success btn-block"> Partners </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/slider')); ?>','_self')" class="btn btn-primary btn-block"> Sliders</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/products')); ?>','_self')" class="btn btn-success btn-block"> Properties</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/banner')); ?>','_self')" class="btn btn-primary btn-block"> Banners</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/values')); ?>','_self')" class="btn btn-defaut btn-block"> Values</button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/files')); ?>','_self')" class="btn btn-primary btn-block"> Busines Profiles</button>

                <button type="button" onclick="window.open('<?php echo e(url('/admin/subscribers')); ?>','_self')" class="btn btn-success btn-block"> Subscribers </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/notifications')); ?>','_self')" class="btn btn-danger btn-block"> Notifications </button>
                <button type="button" onclick="window.open('<?php echo e(url('/admin/updates')); ?>','_self')" class="btn btn-inverse btn-block"> Updates </button>
                
               
            </div>
          
            
         

        </div>