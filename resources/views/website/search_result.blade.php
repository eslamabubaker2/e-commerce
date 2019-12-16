@include('website.header')
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
<!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <main class="main-content" id="mainContent">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">

                    <div class="page-content col-sm-12 col-md-12">
                        <!-- Store Tabs Area -->
                        <div class="section store-tabs-area">
                            <div class="tabs tabs-v1">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs panel" role="tablist">
                                    <li @if(Input::has('page_e') || (!Input::has('page_p') && !Input::has('page_s')))
                                            class="active"
                                        @endif
                                        role="presentation">
                                        <a aria-controls="deals" aria-expanded="false" data-toggle="tab" href="#deals" role="tab"><i class="fa fa-comment mr-10"></i>Deals</a>
                                    </li>
                                    <li @if(Input::has('page_p'))
                                        class="active"
                                        @endif
                                        role="presentation">
                                        <a aria-controls="coupons" aria-expanded="true" data-toggle="tab" href="#coupons" role="tab"><i class="fa fa-star mr-10"></i>Products</a>
                                    </li>
                                    <li @if(Input::has('page_s'))
                                            class="active"
                                            @endif
                                            role="presentation">
                                        <a aria-controls="reviews" aria-expanded="false" data-toggle="tab" href="#stores" role="tab"><i class="fa fa-shopping-bag mr-10"></i>Stores</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane ptb-20
                                    @if(Input::has('page_e') || (!Input::has('page_p') && !Input::has('page_s')))
                                            active
                                    @endif
                                    " id="deals" role="tabpanel">
                                        <section class="section deals-area">
                                            <div class="row row-masnory row-tb-20">
                                                @foreach($efforts as $effort)
                                                    <div class="col-sm-6 col-lg-4">
                                                        <div class="deal-single panel">
                                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{URL::asset('upload/'.$effort->img)}}">
                                                                <div class="label-discount left-20 top-15">
                                                                    -{{$effort->percent}}%
                                                                </div>
                                                                <ul class="deal-actions top-15 right-20">
                                                                    <li class="like-deal"><span><i class="fa fa-heart"></i></span></li>

                                                                    <li><span><a href="{{url('/addTocart/'.$effort->id)}}"><i class="glyphicon glyphicon-shopping-cart"></i></a></span></li>

                                                                </ul>
                                                                <div class="time-left bottom-15 right-20 font-md-14">
                                                                    <span><i class="ico fa fa-clock-o mr-10"></i> <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span></span>
                                                                </div>
                                                                <div class="deal-store-logo"><img alt="" src="{{URL::asset('upload/'.$effort->img)}}"></div>
                                                            </figure>
                                                            <div class="bg-white pt-20 pl-20 pr-15">
                                                                <div class="pr-md-10">

                                                                    <h3 class="deal-title mb-10"><a href="{{url('effort/'.$effort->id)}}">{{$effort->name}}</a></h3>

                                                                    <p class="text-muted mb-20">{{$effort->name}}</p>
                                                                </div>
                                                                <div class="deal-price pos-r mb-15">
                                                                    <h3 class="price ptb-5 text-right"><span class="price-sale">${{$effort->price}}</span>${{$effort->price*(1-($effort->percent/100.0))}}</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                          
                                            </div>
                                            <!-- Page Pagination -->
                                        @if($efforts->lastPage()>0)
                                            <!-- Page Pagination -->

                                                <div class="page-pagination text-center mt-30 p-10 panel">
                                                    <nav>
                                                        {{ $efforts->links() }}
                                                    </nav>
                                                </div><!-- End Page Pagination -->
                                            @endif
                                        </section>
                                    </div>
                                    <div class="tab-pane ptb-20
                                    @if(Input::has('page_p'))
                                            active
                                    @endif
" id="coupons" role="tabpanel">
                                        <section class="section coupons-area coupons-area-grid">
                                            <div class="row row-masnory row-tb-20">
                                                @foreach($products as $product)
                                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                                        <div class="coupon-single panel t-center">

                                                            <div class="row">
                                                                <a href="{{url('product/'.$product->id)}}">
                                                                <div class="col-xs-12">
                                                                    <div class="text-center p-20">

                                                                        <img class="store-logo" src="{{URL::asset('upload/'.$product->img)}}" alt="">

                                                                    </div>
                                                                    <!-- end media -->
                                                                </div>
                                                                </a>
                                                                <!-- end col -->

                                                                <div class="col-xs-12">
                                                                    <div class="panel-body">
                                                                        <ul class="deal-meta list-inline mb-10">
                                                                            <li class="color-muted">{{$product->name}}</li>
                                                                        </ul>
                                                                        <h4 class="color-green mb-10 t-uppercase">{{$product->price}}$</h4>

                                                                        <div class="buy-now mb-40">
                                                                            <a href="{{url('/addTocart/'.$product->id)}}" target="_blank" class="btn btn-block btn-lg">
                                                                                <i class="fa fa-shopping-cart font-16 mr-10"></i> Buy now
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                        </div>


                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Page Pagination -->
                                        @if($products->lastPage()>0)
                                            <!-- Page Pagination -->
                                                <div class="page-pagination text-center mt-30 p-10 panel">
                                                    <nav>
                                                        <!-- Page Pagination -->
                                                    {{$products->links()}}
                                                    <!-- End Page Pagination -->
                                                    </nav>
                                                </div>
                                                <!-- End Page Pagination -->
                                            @endif
                                        </section>
                                    </div>
                                    <div class="tab-pane ptb-20
@if(Input::has('page_s'))
                                            active
                                    @endif
" id="stores" role="tabpanel">
                                        <section class="section coupons-area coupons-area-grid">
                                            <div class="row row-masnory row-tb-20">

                                            @foreach($stores as $store)
                                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                                    <a href="{{url('/store'.$store->id)}}" class="panel is-block">
                                                        <div class="embed-responsive embed-responsive-4by3">
                                                            <div class="store-logo">
                                                                <img src="{{URL::asset('upload/'.$store->img)}}" alt="">
                                                            </div>
                                                        </div>
                                                        <h6 class="store-name ptb-10">{{$store->name}}</h6>
                                                    </a>
                                                </div>
                                        @endforeach
                                            </div>

                                            @if($stores->lastPage()>0)
                                                <div class="page-pagination text-center mt-30 p-10 panel">
                                                    <nav>
                                                        <!-- Page Pagination -->
                                                    {{$stores->links()}}
                                                    <!-- End Page Pagination -->
                                                    </nav>
                                                </div>
                                            @endif

                                        </section>
                                        </div>

                                </div>
                            </div>
                        </div><!-- End Store Tabs Area -->
                    </div>

                </div>

            </div>
        </div><!-- End Page Container -->

    </main><!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
    @include('website.footer')
   <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- ========== BUY THEME ========== -->
     <a class="buy-theme" data-href="https://themeforest.net/item/friday-coupons-deals-discounts-promo-codes-template/19577226?ref=CODASTROID" href="https://google.com/" id="buy_theme" target="_blank"><i class="fa fa-credit-card"></i></a> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- BACK TO TOP                               -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div class="back-top is-hidden-sm-down" id="backTop">
        <i aria-hidden="true" class="fa fa-angle-up"></i>
    </div><!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Placed at the end of the document so the pages load faster -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="{{URL::asset('website/assets/js/jquery-1.12.3.min.js')}}">
    </script> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- Latest compiled and minified Bootstrap    -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     
    <script src="{{URL::asset('website/assets/js/bootstrap.min.js')}}" type="text/javascript">
    </script> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- JavaScript Plugins                        -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- (!) Include all compiled plugins (below), or include individual files as needed -->
     <!-- Modernizer JS -->
     
    <script src="{{URL::asset('website/assets/vendors/modernizr/modernizr-2.6.2.min.js')}}">
    </script> <!-- Owl Carousel -->
     
    <script src="{{URL::asset('website/assets/vendors/owl-carousel/owl.carousel.min.js')}}" type="text/javascript">
    </script> <!-- FlexSlider -->
     
    <script src="{{URL::asset('website/assets/vendors/flexslider/jquery.flexslider-min.js')}}" type="text/javascript">
    </script> <!-- Coutdown -->
     
    <script src="{{URL::asset('website/assets/vendors/countdown/jquery.countdown.js')}}" type="text/javascript">
    </script> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- Custom Template JavaScript                   -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     
    <script src="{{URL::asset('website/assets/js/main.js')}}" type="text/javascript">
    </script><!-- Mirrored from friday-theme.firebaseapp.com/store_single_01.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:41 GMT -->
</body>
</html>