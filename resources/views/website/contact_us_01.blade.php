@include('website.header')
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">

                    <!-- Contact Us Area -->
                    <div class="contact-area contact-area-v1 panel">
                        <div class="row row-tb-20">
                            <div class="col-xs-12">
                                <div >
                                   
                                    <img src="http://gw.alicdn.com/tps/TB1CJU0KVXXXXaPaFXXXXXXXXXX-1500-280.png" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="container">
                                 <div class="span12">
         <div class="span12" >
               @if($errors->any() && $errors->first() != 1)
<div class="alert alert-success">
            <h4>{{$errors->first()}}</h4>

            </div>@endif

     
      </div></div></div>
                        </div>
                     
                        <div class="ptb-30 prl-30">
                            <div class="row row-tb-20">
                                <div class="col-xs-12 col-md-6">
                                    <div class="contact-area-col contact-info">
                                        <div class="contact-info">
                                            <h3 class="t-uppercase h-title mb-20">Contact informations</h3>
                                            <p></p>
                                            <ul class="contact-list mb-40">
                                                <li>
                                                    <span class="icon lnr lnr-map-marker"></span>
                                                    <h5>Address</h5>
                                                    <p class="color-mid">Palestine,GAZA</p>
                                                </li>
                                                <li>
                                                    <span class="icon lnr lnr-envelope"></span>
                                                    <h5>Email</h5>
                                                    <p class="color-mid">GAZAMARKET@GMAIL.COM</p>
                                                </li>
                                                <li>
                                                    <span class="icon lnr lnr-phone-handset"></span>
                                                    <h5>Our phone</h5>
                                                    <p class="color-mid">(+212) 0599773445</p>
                                                </li>
                                            </ul>
                                            <ul class="social-icons social-icons--colored list-inline">
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="contact-area-col contact-form">
                                        <h3 class="t-uppercase h-title mb-20">Get in touch</h3>
                                        <form action="{{url('/contactus')}}" method="post" enctype="multipart/form-data" >
                                         {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" required="required" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" required="required" name="email">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea rows="5" class="form-control" required="required" name="mes"></textarea>
                                            </div>
                                            <button class="btn">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Us Area -->

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
    <script type="text/javascript" src="{{URL::asset('assets/vendors/countdown/jquery.countdown.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{URL::asset('website/assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from friday-theme.firebaseapp.com/contact_us_01.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:41 GMT -->
</html>