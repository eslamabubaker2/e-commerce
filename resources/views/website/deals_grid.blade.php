@include('website.header')<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
<!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <main class="main-content" id="mainContent">
        <div class="page-container ptb-10">
            <div class="container">
                <section class="section deals-area ptb-30">
                    <!-- Page Control -->
                    <header class="page-control panel ptb-15 prl-20 pos-r mb-30">
                        <!-- List Control View -->
                        <ul class="list-control-view list-inline">
                            <li>
                                <a href="deals_list.php"><i class=""></i></a>
                            </li>
                           
                        </ul><!-- End List Control View -->
                        <div class="right-10 pos-tb-center">
                          <!--  <select class="form-control input-sm">
                                <option>
                                    SORT BY
                                </option>
                                <option>
                                    Newest items
                                </option>
                                <option>
                                    Best sellers
                                </option>
                                <option>
                                    Best rated
                                </option>
                                <option>
                                    Price: low to high
                                </option>
                                <option>
                                    Price: high to low
                                </option>
                            </select>
                        </div> -->
                    </header><!-- End Page Control -->
                    <div class="row row-masnory row-tb-20">
                        @foreach($efforts as $effort)
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{URL::asset('uploads/'.$effort->img)}}">
                                    <div class="label-discount left-20 top-15">
                                        -{{$effort->percent}}%
                                    </div>
                                    <ul class="deal-actions top-15 right-20">
                                        <li class="like-deal"><span><i class="fa fa-heart"></i></span></li>
                                      
                                        <li><span><i class="glyphicon glyphicon-shopping-cart"></i></span></li>
                                    </ul>
                                    <div class="time-left bottom-15 right-20 font-md-14">
                                        <span><i class="ico fa fa-clock-o mr-10"></i> <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span></span>
                                    </div>
                                   
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
                    @if($efforts->lastPage()>1)
                    <!-- Page Pagination -->

                    <div class="page-pagination text-center mt-30 p-10 panel">
                        <nav>
                        {{ $efforts->links() }}
                        </nav>
                    </div>
                        <!-- End Page Pagination -->
                        @endif
                </section>
            </div>
        </div>
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
    <script src="assets/js/jquery-1.12.3.min.js">
    </script> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- Latest compiled and minified Bootstrap    -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     
    <script src="assets/js/bootstrap.min.js" type="text/javascript">
    </script> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- JavaScript Plugins                        -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- (!) Include all compiled plugins (below), or include individual files as needed -->
     <!-- Modernizer JS -->
     
    <script src="assets/vendors/modernizr/modernizr-2.6.2.min.js">
    </script> <!-- Owl Carousel -->
     
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js" type="text/javascript">
    </script> <!-- FlexSlider -->
     
    <script src="assets/vendors/flexslider/jquery.flexslider-min.js" type="text/javascript">
    </script> <!-- Coutdown -->
     
    <script src="assets/vendors/countdown/jquery.countdown.js" type="text/javascript">
    </script> <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     <!-- Custom Template JavaScript                   -->
     <!-- ––––––––––––––––––––––––––––––––––––––––– -->
     
    <script src="assets/js/main.js" type="text/javascript">
    </script><!-- Mirrored from friday-theme.firebaseapp.com/deals_grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:31 GMT -->
</body>
</html>