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
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns ">
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
              <li class="breadcrumb-item"><a href="#">Store</a>
              </li>
              <li class="breadcrumb-item active"><a href="#">Edit Store Info. </a>
              </li>
            </ol>
          </div>
        
     
        
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">

        	<div class="row">
        	    <div class="col-md-12">
        	        <div class="card">
        	          
        	            <div class="card-body collapse in">
        	                <div class="card-block">
        						
        	                    <form class="form form-horizontal" />
        	                    	<div class="form-body">
        	                    		<h4 class="form-section"><i class="icon-head"></i>Edit Store Info</h4>
        			                    <div class="form-group row">
        	                            	<label class="col-md-3 label-control" for="projectinput1"> Store Name </label>
        		                            <div class="col-md-9">
        		                            	<input type="text" id="projectinput1" class="form-control" placeholder="Name" name="fname" />
        		                            </div>
        		                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1"> Store Address </label>
                                            <div class="col-md-9">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="Address" name="address" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1"> Mobile </label>
                                            <div class="col-md-9">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="Mobile" name="mobile" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1"> facebook </label>
                                            <div class="col-md-9">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="Mobile" name="facebook" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1"> linkedin </label>
                                            <div class="col-md-9">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="Linkedin" name="linkedin" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1"> twitter </label>
                                            <div class="col-md-9">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="twitter" name="twitter" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1"> google+ </label>
                                            <div class="col-md-9">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="google+" name="google" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Image</label>
                                            <div class="col-md-9">
                                                <label id="projectinput8" class="file center-block">
                                                    <input type="file" id="file" name="img"/>
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div>
                                        </div>

        								<div class="form-group row">
        									<label class="col-md-3 label-control" for="projectinput9">About Store</label>
        									<div class="col-md-9">
        										<textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Product"></textarea>
        									</div>
        								</div>
        							</div>

        	                        <div class="form-actions">
        	                            <button type="button" class="btn btn-warning mr-1">
        	                            	<i class="icon-cross2"></i> Cancel
        	                            </button>
        	                            <button type="submit" class="btn btn-primary">
        	                                <i class="icon-check2"></i> Edit
        	                            </button>
        	                        </div>
        	                    </form>
        	                </div>
        	            </div>
        	        </div>
        	    </div>
        	</div>


        </section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    @include('controlPanel_store.footer')

    <!-- BEGIN VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/app.min.js')}}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>