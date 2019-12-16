@include('website.header')
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-7 col-md-8">
                            <div class="row row-tb-20">
                                <div class="col-xs-12">
                                    <div class="deal-deatails panel">
                                        <div class="deal-slider">
                                            <div id="product_slider" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/product_01.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/product_02.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/product_03.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/product_04.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/product_05.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/product_06.jpg')}}">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="product_slider_nav" class="flexslider flexslider-nav">
                                                <ul class="slides">
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/thumb_01.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/thumb_02.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/thumb_03.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/thumb_04.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/thumb_05.jpg')}}">
                                                    </li>
                                                    <li>
                                                        <img alt="" src="{{URL::asset('website/assets/images/products/thumb_06.jpg')}}">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
                            
                                
                            </div>
                        </div>
                        <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    <div class="col-xs-12">
                                        <div class="widget single-deal-widget panel ptb-30 prl-20">
                                            <div class="widget-body text-center">
                                                <h2 class="mb-20 h3">
		  {{$effort->name}}
		</h2>
                                               
                                                <p class="color-muted">
                                                    {{$effort->description}}</p>
                                                <div class="price mb-20">
                                                    <h2 class="price"><span class="price-sale">${{$effort->price}}</span> ${{$effort->price*(1-$effort->percent/100.0)}}</h2>
                                                </div>
                                                <div class="buy-now mb-40">
                                                    <a href="{{url('/addTocart/'.$effort->id)}}" target="_blank" class="btn btn-block btn-lg">
                                                        <i class="fa fa-shopping-cart font-16 mr-10"></i> Buy now
                                                    </a>
                                                </div>
                                                <div class="time-left mb-30">
                                                    <p class="t-uppercase color-muted">
                                                        Hurry up Only a few deals left
                                                    </p>
                                                    <div class="color-mid font-14 font-lg-16">
        	<i class="ico fa fa-clock-o mr-10"></i>
        	<span data-countdown="2020/10/10 12:25:10"></span>
	      </div>
                                                </div>
                                                <ul class="list-inline social-icons social-icons--colored t-center">
                                                    <li class="social-icons__item">
                                                        <a href="{{$store->facebook}}"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="{{$store->twitter}}"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="{{$store->google}}"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="{{$store->linkedin}}"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Recent Posts -->
                                        <div class="widget about-seller-widget panel ptb-30 prl-20">
                                            <h3 class="widget-title h-title">About Seller</h3>
                                            <div class="widget-body t-center">
                                                <figure class="mt-20 pb-10">
                                                    <img alt="" src="{{URL::asset('uploads'.$store->img)}}">
                                                </figure>
                                                <div class="store-about mb-20">
                                                    <h3 class="mb-10">{{$store->name}} Store</h3>
                                                    <div class="rating mb-10">
                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                    		<i class="fa fa-star-o"></i>
                                                    		<i class="fa fa-star-o"></i>
                                                    		<i class="fa fa-star-o star-active"></i>
                                                    		<i class="fa fa-star-o"></i>
                                                    		<i class="fa fa-star-o"></i>
                                                    	</span>
                                                        <span class="rating-reviews">
            		                                      ( <span class="rating-count">205</span> rates )
                                                        </span>
                                                    </div>
                                                    <p class="mb-15">{{$store->description}}</p><!--                                             <button class="btn btn-info">FOLLOW</button>
 -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Recent Posts -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Subscribe Widget -->
                                        <div class="widget subscribe-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Subscribe to mail</h3>
                                            <div class="widget-content ptb-30">

                                                <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                                <form method="post" action="{{url('/addNewsLetter')}}">
                                                    <div class="input-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Your Email Address" required="required">
                                                        <span class="input-group-btn">
                                        		        	<button class="btn" type="submit">Sign Up</button>
                                        		    	</span>
                                                    </div>
                                                </form>
{{--,,--}}
                                            </div>
                                        </div>
                                        <!-- End Subscribe Widget -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Latest Deals Widegt -->
                                        <div class="widget latest-deals-widget panel prl-20">
                                            <div class="widget-body ptb-20">
                                                <div class="owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">
                                                    @foreach($efforts as $effort)
                                                    <div class="latest-deals__item item">
                                                        <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{URL::asset('upload/'.$effort->img)}}">
                                                            <div class="label-discount top-10 right-10">--{{$effort->percent}}%</div>
                                                            <ul class="deal-actions top-10 left-10">
                                                                <li class="like-deal">
                                                                    <span>
		                        <i class="fa fa-heart"></i>
		                    </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share-tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                    <span>
		                        <i class="fa fa-camera"></i>
		                    </span>
                                                                </li>
                                                            </ul>
                                                            <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                                <div class="rating mb-10">
                                                                    <span class="rating-stars rate-allow" data-rating="4">
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                        <i class="fa fa-star-o"></i>
		                    </span>
                                                                    <span class="rating-reviews color-lighter">
		                    	(<span class="rating-count">160</span> Reviews)
                                                                    </span>
                                                                </div>
                                                                <h5 class="deal-title mb-10">
		                    <a href="{{url('effort/'.$effort->id)}}" class="color-lighter">{{$effort->name}}</a>
		                </h5>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Latest Deals Widegt -->
                                    </div>
                                  
                               
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
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


<!-- Mirrored from friday-theme.firebaseapp.com/deal_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:37 GMT -->
</html>