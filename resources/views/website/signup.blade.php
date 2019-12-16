@include('website.header')

        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container ptb-60">
                <div class="container">
                    <section class="sign-area panel p-40">
                        <h3 class="sign-title">Sign Up <small>Or <a href="signin.php" class="color-green">Sign In</a></small></h3>
                        <div class="row row-rl-0">
                            <div class="col-sm-6 col-md-7 col-left">
                                <form class="p-40" action="#" method="post">
                                    <div class="form-group">
                                        <label class="sr-only">Full Name</label>
                                        <input type="text" class="form-control input-lg" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Email</label>
                                        <input type="password" class="form-control input-lg" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Password</label>
                                        <input type="password" class="form-control input-lg" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Confirm Password</label>
                                        <input type="password" class="form-control input-lg" placeholder="Confirm Password">
                                    </div>
                                    <div class="custom-checkbox mb-20">
                                        <input type="checkbox" id="agree_terms">
                                        <label class="color-mid" for="agree_terms">I agree to the <a href="terms_conditions.php" class="color-green">Terms of Use</a> and <a href="terms_conditions.php" class="color-green">Privacy Statement</a>.</label>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-lg">Sign Up</button>
                                </form>
                                <span class="or">Or</span>
                            </div>
                            <div class="col-sm-6 col-md-5 col-right">
                                <div class="social-login p-40">
                                    <div class="mb-20">
                                        <button class="btn btn-lg btn-block btn-social btn-facebook"><i class="fa fa-facebook-square"></i>Sign Up with Facebook</button>
                                    </div>
                                    <div class="mb-20">
                                        <button class="btn btn-lg btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>Sign Up with Twitter</button>
                                    </div>
                                    <div class="mb-20">
                                        <button class="btn btn-lg btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i>Sign Up with Google</button>
                                    </div>
                                    <div class="custom-checkbox mb-20">
                                        <input type="checkbox" id="remember_social" checked>
                                        <label class="color-mid" for="remember_social">Keep me signed in on this computer.</label>
                                    </div>
                                    <div class="text-center color-mid">
                                        Already have an Account ? <a href="signin.php" class="color-green">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
    <script src="{{URL::asset('website/assets/js/jquery-1.12.3.min.js')}}"></script>


    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{URL::asset('website/assets/js/bootstrap.min.js')}}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Modernizer JS -->
    <script src="{{URL::asset('website/assets/vendors/modernizr/modernizr-2.6.2.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{URL::asset('website/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="{{URL::asset('website/assets/vendors/flexslider/jquery.flexslider-min.js')}}"></script>

    <!-- Coutdown -->
    <script type="text/javascript" src="{{URL::asset('website/assets/vendors/countdown/jquery.countdown.js')}}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{URL::asset('website/assets/js/main.js')}}"></script>
    </body>


<!-- Mirrored from friday-theme.firebaseapp.com/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:26 GMT -->
</html>