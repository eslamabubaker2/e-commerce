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
              <li class="breadcrumb-item"><a href="#">product</a>
              </li>
              <li class="breadcrumb-item active"><a href="#">Add product</a>
              </li>
            </ol>
          </div>
        
     
        
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">

        	<div class="row">
        	    <div class="col-md-12">
        	        <div class="card">
        	            <div class="card-header">
        	                <h4 class="card-title" id="horz-layout-basic">Product</h4>
        	                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                			<div class="heading-elements">
        	                    <ul class="list-inline mb-0">
        	                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
        	                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
        	                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
        	                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
        	                    </ul>
        	                </div>
        	            </div>
        	            <div class="card-body collapse in">
        	                <div class="card-block">
        						
        	                    <form class="form form-horizontal" method="post" action="{{ url('/addeffort') }}"  />
                                        {{ csrf_field() }}
                                        <div class="form-body">
        	                    		<h4 class="form-section"><i class="icon-head"></i> Effort Info</h4>



        		                     
        		                        <div class="form-group row">
        		                        	<label class="col-md-3 label-control" for="projectinput6"> Product </label>
        		                        	<div class="col-md-9">
        			                            <select id="projectinput6" name="product" class="form-control">
                                                    <option value="none" selected="" disabled="" />Interested in
        			                                @foreach($products as $product)

                                                    <option value="{{$product->id}}" />{{$product->name}}

                                                    @endforeach
        			                            </select>
        		                            </div>
        		                        </div>

                                        <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1"> Percents </label>
                                                <div class="col-md-9">
                                                    <input type="number" id="projectinput1" class="form-control" placeholder="30" name="percent" />
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1"> No Dates  </label>
                                                <div class="col-md-9">
                                                    <select  id="projectinput1" class="form-control"  name="date" >
                                                        @for($i=0;$i<30;$i++)
                                                        <option value="{{$i}}" />{{$i}}
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>




        							</div>

        	                        <div class="form-actions">
        	                            <button type="button" class="btn btn-warning mr-1">
        	                            	<i class="icon-cross2"></i> Cancel
        	                            </button>
        	                            <button type="submit" class="btn btn-primary" name="ok">
        	                                <i class="icon-check2"></i> Save
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