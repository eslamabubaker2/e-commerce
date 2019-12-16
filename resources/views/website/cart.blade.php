<style type="text/css">
    .sp-quantity{
  width:124px;
  height:42px;
  font-family: "ProximaNova Bold", Helvetica, Arial;
  
}
.sp-minus{
   width:40px;
  height:40px;
  border:1px solid #e1e1e1;
  float:left;
   text-align:center;
}
.sp-input{
   width:40px;
  height:40px;
  border:1px solid #e1e1e1;
  border-left:0px solid black;
  float:left;
}
.sp-plus{
   width:40px;
  height:40px;
   border:1px solid #e1e1e1;
  border-left:0px solid #e1e1e1;
  float:left;
   text-align:center;

}
.sp-input input{
  width:30px;
  height:34px;
  text-align:center;
font-family: "ProximaNova Bold", Helvetica, Arial;
  border: none;
}
.sp-input input:focus{
    border:1px solid #e1e1e1;
  border: none;
}
.sp-minus a, .sp-plus a {
  display: block;
  width: 100%;
  height: 100%;
  padding-top: 5px;
  
}
</style>
@include('website.header')

        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container">
                <div class="container">
                    <div class="cart-area ptb-60">
                        <div class="container">
                            <div class="cart-wrapper">
                                <h3 class="h-title mb-30 t-uppercase">My Cart</h3>
                                <div class="col-xs-12">
                                   <center><h4>Amazon store</h4></center> 
                                </div>
                                <br>
                                <br>
                                <table id="cart_list" class="cart-list mb-30">
                                    <thead class="panel t-uppercase">
                                        <tr>
                                            <th>Product name</th>
                                            <th>Unit price</th>
                                            <th>After Disc</th>
                                            <th>Quantity</th>
                                            <th>Sub total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($carts as $cart)
                                        <tr class="panel alert">
                                            <td>
                                                <div class="media-left is-hidden-sm-down">
                                                    <figure class="product-thumb">
                                                        <img src="{{url(''.$cart->img)}}" alt="product">
                                                    </figure>
                                                </div>
                                                <div class="media-body valign-middle">
                                                    <h6 class="title mb-15 t-uppercase"><a href="#">Diamond engagement ring</a></h6>
                                                    <div class="type font-12"><span class="t-uppercase">Type : </span>Women's Cloths</div>
                                                </div>
                                            </td>
                                            <td>${{$cart->price}}</td>
                                            <td> $   @if(getEffortProduct($cart->product_id) !=null)
                                                {{$cart->price*(1-getEffortProduct($cart->product_id)->percent/100.0)}}
                                                @else
                                                    {{$cart->price}}
                                                @endif
                                            </td>
                                            <td>
                                                <div class="sp-quantity">
                                                    <div class="sp-minus fff"> <a class="ddd" href="{{url('/decrease/'.$cart->id)}}">-</a></div>
                                                    <div class="sp-input">
                                                        <input type="text" class="quntity-input" value="{{$cart->contity}}">
                                                    </div>
                                                    <div class="sp-plus fff"> <a class="ddd" href="{{url('/increase/'.$cart->id)}}">+</a></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="sub-total">$
                                                    @if(getEffortProduct($cart->product_id) !=null)
                                                        {{$cart->contity*$cart->price*(1-getEffortProduct($cart->product_id)->percent/100.0)}}

                                                    @else
                                                        {{$cart->contity*$cart->price}}
                                                    @endif
                                                    </div>
                                            </td>
                                            <td>
                                                <a href="{{url('/removecart/'.$cart->id)}}" type="button" class="close but" data-dismiss="alert" aria-hidden="true">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                        
                                    </tbody>

                                </table>
                                <div class="cart-price">
                                    <!-- <h5 class="t-uppercase mb-20">Cart total</h5> -->
                                    <ul class="panel mb-20">
                                        
                                        <li>
                                            <div class="item-name">
                                                <strong class="t-uppercase">Order total : {{getTotalCart()}}</strong>
                                            </div>
                                            
                                             <div class="t-right">
                                                <a href="{{url('/checkout')}}" class="btn btn-rounded btn-lg">CHECKOUT</a>
                                            </div>
                                        </li>
                                    </ul>
                                   
                                </div>
                                
                            </div>

                        </div>
                    </div>
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
    <script type="text/javascript">
        $(".ddd").on("click", function () {

    var $button = $(this);
    var oldValue = $button.closest('.sp-quantity').find("input.quntity-input").val();

    if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }

    $button.closest('.sp-quantity').find("input.quntity-input").val(newVal);

});
    </script>
</body>


<!-- Mirrored from friday-theme.firebaseapp.com/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:27 GMT -->
</html>