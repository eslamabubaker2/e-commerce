@include('website.header')<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
<!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->

<body>
    <main class="main-content" id="mainContent">
        <div class="page-container ptb-10">
            <div class="container">
                <div class="section deals-header-area ptb-30">
                    <div class="row row-tb-20">
                        <div class="col-xs-12 col-md-4 col-lg-3">
                            <aside>
                               @include('website.categoryinclude')
                            </aside>
                        </div>

                        @if(count($bestefforts)>0)
                        <div class="col-xs-12 col-md-8 col-lg-9">
                            <div class="header-deals-slider owl-slider" data-autoplay="true" data-autoplay-timeout="10000" data-lg-items="1" data-lg-nav="true" data-loop="true" data-md-items="1" data-md-nav="true" data-nav="true" data-nav-speed="false" data-sm-items="1" data-sm-nav="true" data-smart-speed="1000" data-xs-items="1" data-xs-nav="true" data-xxs-items="1" data-xxs-nav="true">

                                @foreach($bestefforts as $besteffort)
                                <div class="deal-single panel item">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('uploads/'.$besteffort->img )}}">
                                        <div class="label-discount top-10 right-10">
                                            {{$besteffort->percent}}%
                                        </div>
                                        <ul class="deal-actions top-10 left-10">
                                            <li class="like-deal"><span><a><i class="fa fa-heart"></i></a></span></li>

                                            <li><span><a href="{{url('/addTocart/'.$besteffort->id)}}"><i class="glyphicon glyphicon-shopping-cart"></i></a></span></li>
                                        </ul>
                                        <div class="deal-about p-20 pos-a bottom-0 left-0">
                                            <div class="rating mb-10">
                                                <span class="rating-stars" data-rating="5"><i class="fa fa-star-o star-active"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> <span class="rating-reviews color-light">
                                            </div>
                                            <h3 class="deal-title mb-10"><a class="color-light color-h-lighter" >{{$besteffort->name}}::{{$besteffort->price}}$</a></h3>
                                        </div>
                                    </figure>
                                </div>
                                @if(count($bestefforts)==1)
                                <div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{URL::asset('upload/'.$besteffort->img)}}">
                                            <div class="label-discount top-10 right-10">
                                                {{$besteffort->percent}}%
                                            </div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal"><span><a><i class="fa fa-heart"></i></a></span></li>

                                                <li><span><a href="{{url('/addTocart/'.$besteffort->id)}}"><i class="glyphicon glyphicon-shopping-cart"></i></a></span></li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5"><i class="fa fa-star-o star-active"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> <span class="rating-reviews color-light">( <span class="rating-count">241</span> Reviews )</span>
                                                </div>
                                                <h3 class="deal-title mb-10"><a class="color-light color-h-lighter" href="{{url('effort/'.$effort->id)}}">{{$besteffort->name}}</a></h3>
                                            </div>
                                        </figure>
                                    </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                            @endif
                    </div>
                </div>
                <div class="section explain-process-area ptb-30">
                    <div class="row row-rl-10">
                        <div class="col-md-4">
                            <div class="item panel prl-15 ptb-20">
                                <div class="row row-rl-5 row-xs-cell">
                                    <div class="col-xs-4 valign-middle"><img alt="" class="pr-10" src="{{URL::asset('website/assets/images/icons/tablet.png')}}"></div>
                                    <div class="col-xs-8">
                                        <h5 class="mb-10 pt-5">Deals & performance</h5>
                                        <p class="color-mid">With us the best and highest performance , buyer or seller can enjoy during the e-shopping center.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item panel prl-15 ptb-20">
                                <div class="row row-rl-5 row-xs-cell">
                                    <div class="col-xs-4 valign-middle"><img alt="" class="pr-10" src="{{URL::asset('website/assets/images/icons/online-shop-6.png')}}"></div>
                                    <div class="col-xs-8">
                                        <h5 class="mb-10 pt-5">Find Best Offers</h5>
                                        <p class="color-mid">Our e-shopping center allows the seller to show his ads through our center so that the buyer can see all the ads.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item panel prl-15 ptb-20">
                                <div class="row row-rl-5 row-xs-cell">
                                    <div class="col-xs-4 valign-middle"><img alt="" class="pr-10" src="{{URL::asset('website/assets/images/icons/money.png')}}"></div>
                                    <div class="col-xs-8">
                                        <h5 class="mb-10 pt-5">Accuracy and security</h5>
                                        <p class="color-mid">Your transaction with us gives you the advantage of security and accuracy during the purchase process.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section latest-deals-area ptb-30">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Latest Deals</h3><a href="deals_grid.php" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                    </header>
                    <div class="row row-masnory row-tb-20">
                        @foreach($efforts as $effort)
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{URL::asset('uploads/'.$effort->img)}}">
                                    <div class="label-discount left-20 top-15">
                                       {{$effort->percent}}%
                                    </div>
                                    <ul class="deal-actions top-15 right-20">
                                        <li class="like-deal"><span><a><i class="fa fa-heart"></i></a></span></li>
                                       
                                        <li><span><a><i class="glyphicon glyphicon-shopping-cart"></i></a></span></li>
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
                                        <h3 class="price ptb-5 text-right"><span class="price-sale">{{$effort->price}}</span>{{$effort->price*(1-($effort->percent/100.0))}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="section latest-coupons-area ptb-30">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Latest Products</h3><a href="{{url('/products')}}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                    </header>
                    <div class="latest-coupons-slider owl-slider" data-autoplay="true" data-autoplay-hover-pause="true" data-autoplay-timeout="10000" data-items="1" data-lg-items="4" data-loop="true" data-margin="30" data-md-items="3" data-nav-speed="false" data-sm-items="2" data-smart-speed="1000" data-xs-items="2" data-xxs-items="1">

                        @foreach($products as $product)
                        <div class="coupon-item">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <a href="{{url('product/'.$product->id)}}">
                                    <div class="col-xs-12">

                                        <div class="text-center p-20"><img alt="" class="store-logo" src="{{URL::asset('uploads/'.$product->img)}}"></div><!-- end media -->

                                    </div><!-- end col -->
                                    </a>
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted">{{$product->name}}</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">{{$product->price}}$</h4>
                                            <div class="buy-now mb-40">
                                                <a class="btn btn-block btn-lg" href="{{url('/addTocart/'.$product->id)}}"
                                                   {{--target="_blank"--}}
                                                ><i class="fa fa-shopping-cart font-16 mr-10"></i> Buy now</a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="section stores-area stores-area-v1 ptb-30">
                    <header class="panel ptb-15 prl-20 pos-r mb-30">
                        <h3 class="section-title font-18">Popular Stores</h3><a class="btn btn-o btn-xs pos-a right-10 pos-tb-center" href="{{url('/stores')}}">All Stores</a>
                    </header>
                    <div class="popular-stores-slider owl-slider" data-autoplay="true" data-autoplay-timeout="10000" data-items="2" data-lg-items="6" data-loop="true" data-margin="20" data-md-items="5" data-sm-items="3" data-smart-speed="1000" data-xs-items="2" data-xxs-items="2">
                        @foreach($stores as $store)
                        <div class="store-item t-center">

                            <a class="panel is-block" href="{{url('products/store/'.$store->id)}}">
                            <div class="embed-responsive embed-responsive-4by3">
                                @if($store->img !=null)
                                <div class="store-logo"><img alt="" src="{{URL::asset('uploads/'.$store->img)}}"></div>
                                @else
                                <div class="store-logo"><img alt="" src="{{URL::asset('website/assets/images/brands/brand_01.jpg')}}"></div>
                                @endif
                            </div>
                            <h6 class="store-name ptb-10">
                                @if($store->name !=null)
                                    {{$store->name}}
                                   @else
                                    {{$store->username}} store
                                  @endif
                            </h6></a>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="section subscribe-area ptb-40 t-center">
                    <div class="newsletter-form">
                        <h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
                        <p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                        <form action="{{url('/addNewsLetter')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group mb-10">
                                <input name="email" class="form-control bg-white" placeholder="Email Address" required="required" type="email"> <span class="input-group-btn" ><button class="btn" type="submit"><span >Subscribe</span></button></span>
                            </div>
                        </form>
                        <p class="color-muted"><small>We’ll never share your email address with a third-party.</small></p>
                    </div>
                </section>
            </div>
        </div>
    </main><!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
    @include('website.footer')<!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
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
    </script><!-- Mirrored from friday-theme.firebaseapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:35:50 GMT -->
</body>
</html>