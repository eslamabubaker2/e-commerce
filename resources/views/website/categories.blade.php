@include('website.header')
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <section class="stores-area stores-area-v1">
                        <h3 class="mb-40 t-uppercase">View Categories</h3>
                        <div class="row row-rl-15 row-tb-15 t-center">

                            @foreach($categories as $categorie)
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <a href="{{url('products/category/'.$categorie->id)}}" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        
                                              <img src="{{asset('uploads/'.$categorie-> 
 imagecategory)}}" width="360" height="300" id="">
                                       
                                    </div>
                                    <h6 class="store-name ptb-10">{{$categorie->name}}</h6>
                                </a>
                            </div>
                            @endforeach

                        </div>
                        @if($categories->lastPage()>1)
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                <!-- Page Pagination -->
                                {{$categories->links()}}

                                <!-- End Page Pagination -->
                            </nav>
                        </div>
                            @endif
                    </section>
                </div>
            </div>
            <!-- End Page Container -->


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


<!-- Mirrored from friday-theme.firebaseapp.com/stores_01.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:40 GMT -->
</html>