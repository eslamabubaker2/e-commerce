<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <title>Gaza Market </title>
      <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-60.png')}}" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-76.png')}}" />
      <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-120.png')}}" />
      <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-152.png')}}" />
      <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('storepanel/robust-assets/ico/favicon.ico')}}" />
      <link rel="shortcut icon" type="image/png" href="{{URL::asset('storepanel/robust-assets/ico/favicon-32.png')}}" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="{{URL::asset('storepanel/robust-assets/css/vendors.min.css')}}" />
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/fonts/icomoon.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}" />
      <!-- END Font icons-->
      <!-- BEGIN Plugins CSS-->
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/sliders/slick/slick.css')}}" />
      <!-- END Plugins CSS-->

      <!-- BEGIN Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/tables/datatable/dataTables.bootstrap4.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/tables/extensions/rowReorder.dataTables.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/tables/extensions/responsive.dataTables.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/forms/icheck/icheck.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/forms/icheck/custom.css')}}" />
      <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="{{URL::asset('storepanel/robust-assets/css/app.min.css')}}" />
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/assets/css/style.css')}}" />
    <!-- END Custom CSS-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
  <body data-open="click" data-menu="vertical-menu" data-col="content-detached-left-sidebar" class="vertical-layout vertical-menu content-detached-left-sidebar ">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->

    <!-- navbar-fixed-top-->
    @include('controlPanel_store.navbar')


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    @include('controlPanel_store.main_menu')
    <!-- / main menu-->

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./index.html">Home</a>
              </li>
             
              <li class="breadcrumb-item active">Products
              </li>
            </ol>
          </div>
       
          
          <div class="content-header-lead col-xs-12 mt-1">
            <p class="lead" />
          </div>
        </div>
        <div class="content-detached ">
          <div class="content-body"><section class="row">
	<div class="col-xs-12">
	    <div class="card">
	        <div class="card-head">
	            <div class="card-header">
	            	<h4 class="card-title">All Products</h4>
		            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        			<div class="heading-elements">
            			<span class="dropdown">
	                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="icon-cloud-download3 white"></i></button>
	                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
	                            <a href="#" class="dropdown-item"><i class="icon-upload5"></i> Import</a>
	                            <a href="#" class="dropdown-item"><i class="icon-download5"></i> Export</a>
	                            <a href="#" class="dropdown-item"><i class="icon-shuffle3"></i> Find Duplicate</a>
	                        </span>
	                    </span>
<!--             			<button class="btn btn-default btn-sm"><i class="icon-cog3 white"></i></button>
 -->		            </div>
	            </div>
	        </div>
	        <div class="card-body collapse in">
	            <div class="card-block">
	                <!-- Task List table -->
	                <table id="users-contacts" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
				        <thead>
				            <tr>
                       <th>Image</th>
                       <th>Product name</th>
				       <th>Product number</th>
                       <th>Price</th>
                       <th>Description</th>
                       <th>Control</th>
				            </tr>
				        </thead>
				        <tbody>
				            @foreach($products as $product)
				            <tr>

                                <td class="text-truncate"><img src="{{$product->img}}" alt="" height="50px" width="50px"> </td>

                                <td>
				                	<div class="media">
						                 <div class="media-body media-middle">
						                    <a href="#" class="media-heading">{{$product->name}}</a>
						                </div>
						            </div>
				                </td>
                            <td>
                            <div class="media">
                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle">
                                    <i></i></span></div>
                            <div class="media-body media-middle">
                                {{$product->pnumber}}
                            </div>
                        </div>
                        </td>
			                    <td class="text-xs-center">
				                	<a href="mailto:email@example.com">{{$product->price}}</a>
				                </td>
                                <td>Elizabeth W.</td>
                                <td>
                                    <a href="{{url('store/products/'.$product->id.'/delete')}}" class="btn btn-danger">dsds</a>
                                    <a href="{{url('store/products/'.$product->id.'/update')}}" class="btn btn-primary">dsds</a>
                                </td>



				             
				            </tr>
                            @endforeach


				      
				            
				     
				        </tbody>
				       
				    </table>
				</div>
			</div>
		</div>
	</div>
</section>
          </div>
        </div>
         </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    @include('controlPanel_store.footer')
    <!-- BEGIN VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/datatable/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/datatable/dataTables.responsive.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/datatable/dataTables.rowReorder.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/app.min.js')}}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/components/pages/users-contacts.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>