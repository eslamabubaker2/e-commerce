
@include('website.header')
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="col-xs-12 col-md-4 col-lg-3">
                        <aside>
                             @include('website.categoryinclude')
                        </aside>
                    </div>
                    <!-- Coupons Area -->
                    <div class="section coupons-area coupons-area-grid col-sm-9">
<!----->
                        <!-- Page Control -->
                        <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                            <!-- List Control View -->
                            <ul class="list-control-view list-inline">
                               
                                <li><a href="coupons_grid.html"><i ></i></a>
                                </li>
                            </ul>
                            <!-- End List Control View -->

                            <!-- <div class="right-10 pos-tb-center">
                                <select class="form-control input-sm">
                                    <option>SORT BY</option>
                                    <option>Newest items</option>
                                    <option>Best sellers</option>
                                    <option>Best rated</option>
                                    <option>Price: low to high</option>
                                    <option>Price: high to low</option>
                                </select>
                            </div> -->
                        </header>
                        <!-- End Page Control -->
                        <div class="row row-masnory row-tb-20">

                        @foreach($products as $product)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="coupon-single panel t-center">
                                    
                                    <div class="row">
                                        <a href="{{url('product/'.$product->id)}}">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">

    <img src="{{asset('uploads/'.$product->img)}}" width="360" height="300" id="">
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


                                @if($products->lastPage()>0)
                                    <!-- Page Pagination -->

                                        <div class="page-pagination text-center mt-30 p-10 panel">
                                            <nav>
                                                {{ $products->links() }}
                                            </nav>
                                        </div><!-- End Page Pagination -->
                                    @endif


                    </div>
                    <!-- End Coupons Area -->

                </div>
            </div>


        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
@include('website.footer')
        <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- ========== BUY THEME ========== -->
    <a href="https://google.com/" class="buy-theme" data-href="https://themeforest.net/item/friday-coupons-deals-discounts-promo-codes-template/19577226?ref=CODASTROID" target="_blank" id="buy_theme">
        <i class="fa fa-credit-card"></i>
    </a>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- (!) Placed at the end of the document so the pages load faster -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="assets/js/jquery-1.12.3.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Modernizer JS -->
    <script src="assets/vendors/modernizr/modernizr-2.6.2.min.js"></script>
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>

    <!-- Coutdown -->
    <script type="text/javascript" src="assets/vendors/countdown/jquery.countdown.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>


<!-- Mirrored from friday-theme.firebaseapp.com/coupons_grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:39 GMT -->
</html>