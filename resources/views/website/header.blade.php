
<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gaza Market</title>

    <meta name="description" content="FRIDAY is a responsive multipurpose-ecommerce site template allows you to store coupons and promo codes from different brands and create store for deals, discounts, It can be used as coupon website such as groupon.com and also as online store">
    <meta name="	black friday, coupon, coupon codes, coupon theme, coupons, deal news, deals, discounts, ecommerce, friday deals, groupon, promo codes, responsive, shop, store coupons">
    <meta name="robots" content="index, follow">
    <meta name="author" content="CODASTROID">
    <link rel="apple-touch-icon" href="{{URL::asset('website/assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" href="{{URL::asset('website/assets/images/favicon/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

   

    <!-- Bootstrap -->
    <link href="{{URL::asset('website/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{URL::asset('website/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Linearicons -->
    <link href="{{URL::asset('website/assets/vendors/linearicons/css/linearicons.css')}}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{URL::asset('website/assets/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('website/assets/vendors/owl-carousel/owl.theme.min.css')}}" rel="stylesheet">

    <!-- Flex Slider -->
    <link href="{{URL::asset('website/assets/vendors/flexslider/flexslider.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{URL::asset('website/assets/css/base.css')}}" rel="stylesheet">
    <link href="{{URL::asset('website/assets/css/style.css')}}" rel="stylesheet">
    <style>
        .my_disable{
            display: inline-block;
            margin: 0 2px;
            padding: 0 13px !important;
            line-height: 32px !important;
            height: 36px;
            border: 2px solid transparent !important;
            border-radius: 4px;
            border-color: #d3d9dd !important;
            color: #576366 !important;
        }
    </style>
</head>

<body id="body" class="wide-layout preloader-active">

    <!--[if lt IE 9]>
        <p class="browserupgrade alert-error">
        	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
        </p>
    <![endif]-->

    <noscript>
        <div class="noscript alert-error">
            For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank">
		 instructions how to enable JavaScript in your web browser</a>.
        </div>
    </noscript>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PRELOADER                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader-cube">
            <div class="loader-cube__item1 loader-cube__item"></div>
            <div class="loader-cube__item2 loader-cube__item"></div>
            <div class="loader-cube__item4 loader-cube__item"></div>
            <div class="loader-cube__item3 loader-cube__item"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="pageWrapper" class="page-wrapper">
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <header id="mainHeader" class="main-header">

            <!-- Top Bar -->
            <div class="top-bar bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 is-hidden-sm-down">
                            <ul class="nav-top nav-top-left list-inline t-left">
                                <li><a href="terms_conditions.php"><i class="fa fa-question-circle"></i> Guide</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <ul class="nav-top nav-top-right list-inline t-xs-center t-md-right">

                                <li>
                                    <a href="#"><i class="fa fa-usd"></i>USD <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="#">USD - US Dollar</a>
                                        </li>

                                    </ul>
                                </li>
                                @if(Auth::check())
                                    <li><a  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>HELLO:{{Auth::user()->name}}</a>
                                        <ul>


                                           <?php if(Auth::user()->role==2){
                                    $sell="Control Panel";?>
                                 <li >
                                    <a href="/sellercp">{{$sell}}</a>

                                </li>
                                <?php }?>
                                 <?php if(Auth::user()->role==0){
                                    $sell="Control Panel";?>
                                 <li>
                                    <a href="/admin">{{$sell}}</a>

                                </li>
                                <?php }?>

  <li><a href="{{url('/logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> </i>Logout</a></li>
  
                             



                                                     </ul>             
                                    </li>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                @else
                                    <li><a href="{{url('/login')}}"><i class="fa fa-lock"></i>Sign In</a>
                                </li>
                                <li><a href="{{url('/register')}}"><i class="fa fa-user"></i>Sign Up</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Bar -->

            <!-- Header Header -->
            <div class="header-header bg-white">
                <div class="container">
                    <div class="row row-rl-0 row-tb-20 row-md-cell">
                        <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                            <a href="#" class="logo">
                                <img src="{{URL::asset('img/logo.png')}}" alt="" width="250">
                            </a>
                        </div>
                        <div class="header-search col-md-9">
                            <div class="row row-tb-10 ">
                                <div class="col-sm-8">
                                    <form class="search-form" method="post" action="{{url('search')}}">
                                        {{csrf_field()}}
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg search-input" placeholder="Enter Keywork Here ..." required="required" name="keyword">

                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg btn-search btn-block">
                                                            <i class="fa fa-search font-16"></i>
                                                        </button>
                                                    </div>

{{--<---->--}}
                                        </div>
                                    </form>
                                </div>
                                @if(Auth::user())
                                <div class="col-sm-4 t-xs-center t-md-right">
                                    <div class="header-cart">
                                        <a href="{{url('/cart')}}">
                                            <span class="icon lnr lnr-cart"></span>
                                            <div><span class="cart-number">{{getCountCart()}}</span>
                                            </div>
                                            <span class="title">Cart</span>
                                        </a>
                                    </div>
                                    {{--<div class="header-wishlist ml-20">--}}
                                        {{--<a href="wishlist.php">--}}
                                            {{--<span class="icon lnr lnr-heart font-30"></span>--}}
                                            {{--<span class="title">Wish List</span>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Header -->

            <!-- Header Menu -->
            <div class="header-menu bg-blue">
                <div class="container">
                    <nav class="nav-bar">
                        <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
		                        <i></i>
		                        <i></i>
		                        <i></i>
		                    </span>
                        </div>
                        <div id="header-navbar" class="nav-collapse">
                            <ul class="nav-menu">
                                <li class="active">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li >
                                    <a href="{{url('/efforts')}}">Deals</a>

                                </li>
                                <li>
                                    <a href="{{url('/products')}}">products</a>

                                </li>
                                <li>
                                    <a href="{{url('/stores')}}">Stores</a>

                                </li>
                                <li>
                                    <a href="{{url('/contact')}}">Contact Us</a>

                                </li>
                                <li>
                                    <a href="{{url('/faq')}}">FAQ</a>

                                </li>
                              
                            </ul>
                        </div>
                        <!-- <div class="nav-menu nav-menu-fixed">
                            <a href="ar/deal_single.php" target="_blank">RTL VERSION<i class="fa fa-long-arrow-right ml-10"></i></a>
                        </div> -->
                    </nav>
                </div>
            </div>
            <!-- End Header Menu -->

        </header>

    </div>