<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Invoice_Product;
use App\Invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Netshell\Paypal\Facades\Paypal;
use App\User;
class PayPalController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        $this->_apiContext = Paypal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

    public function getCheckout(Request $request){

        Session::put('phone',$request->no);
        Session::put('address',$request->address);

        $user=Auth::user();
        $carts=Cart::join('products','carts.product_id','=','products.id')

            ->where('user_id',$user->id)

            ->select('carts.*','products.price')->get();
        $amountTotal=0;

        foreach ($carts as $cart){
           $effort=getEffortProduct($cart->product_id);
           if($effort==null){
               $amountTotal+=$cart->contity*$cart->price;
           }else{
               $amountTotal+=$cart->contity*$cart->price*(1-$effort->percent/100.0);
           }
        }
        $payer = PayPal::Payer();
        $payer->setPaymentMethod('paypal');

        $amount = PayPal:: Amount();
        $amount->setCurrency('USD');
        $amount->setTotal($amountTotal); // This is the simple way,
        // you can alternatively describe everything in the order separately;
        // Reference the PayPal PHP REST SDK for details.

        $transaction = PayPal::Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('What are you selling?');

        $redirectUrls = PayPal:: RedirectUrls();
        $redirectUrls->setReturnUrl(url('/done'));
        $redirectUrls->setCancelUrl(url('/cancel'));

        $payment = PayPal::Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));

        $response = $payment->create($this->_apiContext);
        $redirectUrl = $response->links[1]->href;

        return Redirect::to( $redirectUrl );
    }

    public function getDone(Request $request){

        $phone=$request->session()->pull('phone');
        $address=$request->session()->pull('address');

        $id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        $payment = PayPal::getById($id, $this->_apiContext);

        $paymentExecution = PayPal::PaymentExecution();

        $paymentExecution->setPayerId($payer_id);
        $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

        // Clear the shopping cart, write to database, send notifications, etc.

        $stores=Cart::join('products','carts.product_id','=','products.id')

            ->where('user_id',Auth::user()->id)

            ->select('products.store_id')->get();

        foreach ($stores as $store) {
            $invoice = new Invoices();
            $invoice->store_id=$store->store_id;
            $invoice->user_id = Auth::user()->id;
            $invoice->payment_id = $id;
            $invoice->address=$address;
            $invoice->phone=$phone;
 
 
            $invoice->commissionweb =User::find(17)->commission;
            $invoice->save();


            $carts = Cart::join('products', 'carts.product_id', '=', 'products.id')
                ->where('user_id', Auth::user()->id)
                ->where('products.store_id', $store->store_id)
                ->select('carts.*', 'products.price')->get();
            $amount = 0;

            foreach ($carts as $cart) {
                $effort = getEffortProduct($cart->product_id);
                $inv_pro = new Invoice_Product();
                $inv_pro->product_id = $cart->product_id;
                $inv_pro->price = $cart->price;
                $inv_pro->no_peace = $cart->contity;
                $inv_pro->invoice_id = $invoice->id;

                if ($effort == null) {
                    $amount += $cart->contity * $cart->price;
                    $inv_pro->discount = 0;
                } else {
                    $amount += $cart->contity * $cart->price * (1 - $effort->percent / 100.0);
                    $inv_pro->discount = $cart->$effort->percent;
                }
                $inv_pro->save();
            }

            $invoice->amount=$amount;
            $invoice->update();
        }

        Cart::where('user_id',Auth::user()->id)->delete();

        // Thank the user for the purchase
        return Redirect::to('/cart');
    }

    public function getCancel(Request $request)
    {
        $phone=$request->session()->pull('phone');
        $address=$request->session()->pull('address');
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        return Redirect::to('/cart');
    }

    public function createWebProfile(){

        $flowConfig = PayPal::FlowConfig();
        $presentation = PayPal::Presentation();
        $inputFields = PayPal::InputFields();
        $webProfile = PayPal::WebProfile();
        $flowConfig->setLandingPageType("Billing"); //Set the page type

        $presentation->setLogoImage("https://www.example.com/images/logo.jpg")->setBrandName("Example ltd"); //NB: Paypal recommended to use https for the logo's address and the size set to 190x60.

        $inputFields->setAllowNote(true)->setNoShipping(1)->setAddressOverride(0);

        $webProfile->setName("Example " . uniqid())
            ->setFlowConfig($flowConfig)
            // Parameters for style and presentation.
            ->setPresentation($presentation)
            // Parameters for input field customization.
            ->setInputFields($inputFields);

        $createProfileResponse = $webProfile->create($this->_apiContext);

        return $createProfileResponse->getId(); //The new webprofile's id
    }
}


