<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','WebsiteController@index');
Route::post('/addNewsLetter','NewsLetterController@store');
Route::get('/products', 'WebsiteController@allProducts');

Route::get('/stores', 'WebsiteController@allStores');
Route::get('/efforts', 'WebsiteController@allEfforts');
Route::get('/categories','WebsiteController@allCategories');
Route::get('/products/page/{no}', 'WebsiteController@allProductsPage');
Route::get('/stores/page/{no}', 'WebsiteController@allStoresPage');
Route::get('/categories/page/{no}', 'WebsiteController@allCategoriesPage');

Route::get('/products/category/{id}', 'WebsiteController@allProductsByCategory');
Route::get('/products/store/{id}', 'WebsiteController@allProductsBystore');
Route::get('/products/category/{id}/page/{no}', 'WebsiteController@allProductsByCategoryPage');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addTocart/{id}', 'CartController@addTocart');
Route::get('/removecart/{id}', 'CartController@removecart');
Route::get('/increase/{id}', 'CartController@increase');
Route::get('/decrease/{id}', 'CartController@decrease');
Route::get('/cart', 'CartController@index');

Route::get('/sellerpanel','StorePanelController@index');


Route::get('/sellerpanel/products_table','StorePanelController@products_table');
Route::get('/sellerpanel/products/{id}/delete','ProductController@delete');
Route::get('/sellerpanel/products/{id}/update','ProductController@update');
Route::get('/sellerpanel/storeData','StorePanelController@storeData');
Route::get('/sellerpanel/addproduct', 'StorePanelController@addProduct');
Route::get('/addeffort', 'StorePanelController@addEffort');
Route::post('/addeffort', 'EffortsController@store');
Route::post('/addproduct', 'StorePanelController@saveproduct');


Route::get('/checkout', 'PayPalController@getCheckout');
Route::get('/cancel', 'PayPalController@getCancel');
Route::get('/done', 'PayPalController@getDone');




Route::get('/faq', function () {
    return view('website.faq');
});

Route::get('/contact', function () {
    return view('website.contact_us_01');
});
Route::post('/contactus', 'ContactUsController@store');



Route::get('/admin', function () {
    return view('admincp.index');
});
Route::get('/admincategory', function () {

	
    return view('admincp.Category',compact("categories"));
});
Route::post('/addcategory', 'Categorycontroller@AddClassify');
Route::post('/{id}/canceluser','Categorycontroller@canceluser');

Route::post('{id}/saveeditecategory','Categorycontroller@saveediteCategory');
Route::get('/AllUSERS', function () {
	  $users = DB::table('users')->get();
return view('admincp.allusers',compact("users"));
});
Route::get('/allcategory', function () {
	     $categories = DB::table('categories')->get();
return view('admincp.allcategory',compact("categories"));
});
Route::get('/AllProduct', function () {
	   $products = DB::table('products')
	   ->join('stores','stores.id','=','products.store_id')
	   ->join('categories','categories.id','=','products.category')
	   ->select('products.*','stores.name as store_name','categories.name as cat_name')
	   ->get();
       return view('admincp.allproducts',compact("products","storname"));
});
Route::post('/{id}/cancelproduct','Categorycontroller@cancelproduct');

////seller cp
Route::get('/sellercp', function () {
    return view('sellercp.index');
});
Route::get('/createstorepage', function () {
    return view('sellercp.createstorepage');
});
Route::post('/CreateStore','StorePanelController@CreateStore');
Route::get('/showstoreinfo','StorePanelController@showstoreinfo');
Route::post('{id}/Editestoreinfo','StorePanelController@Editestoreinfo');
Route::get('/addproductpage','ProductController@addproductpage');
Route::post('/addproduct','ProductController@addproduct');
Route::get('/allproductsell', 'ProductController@allproductsell');
Route::post('{id}/Editeproduct','ProductController@Editeproduct');
Route::get('/settingaccountseller', 'StorePanelController@settingaccountseller');
Route::get('/settingaccountadmin', 'StorePanelController@settingaccountadmin');

Route::post('{id}/Editesellerinfo','StorePanelController@Editesellerinfo');
Route::post('{id}/displayproductstore','ProductController@displayproductstore');
Route::post('{id}/removeproductstore','ProductController@removeproductstore');
Route::get('/effortpage', 'StorePanelController@effortpage');
Route::get('/{id}/getProductData', 'ProductController@getData');

Route::get('/deals_gridlll', function () {
    $efforts = DB::table('efforts')->join('products', 'products.id', '=', 'efforts.product_id')
        ->select('efforts.*', 'products.img', 'products.price')
        ->where(['efforts.is_delete' => 0])->get();
    return view('website.deals_grid',compact('efforts'));
});
Route::get('/store/{id}','StoreController@singleStore');
Route::get('/effort/{id}','EffortsController@singleEffort');
Route::get('/product/{id}','ProductController@singleProduct');





Route::post('/contactus', 'NewsLetterController@contactus');
Route::get('/invoice', 'InvoiceController@getInvoices');
Route::get('/accountstatmentadmin', 'InvoiceController@accountstatmentadmin');
Route::get('/accountstatmentstore', 'InvoiceController@accountstatmentstore');

Route::get('/getInvoicesStore', 'InvoiceController@getInvoicesStore');

Route::post('/addeffortproduct', 'ProductController@addeffortproduct');
Route::get('/commission', function () {


    return view('admincp.commission');
});


Route::post('/savecommission', 'ProductController@savecommission');
Route::post('/search/','SearchController@index');
Route::get('/{keyword}/search/','SearchController@search');
Route::get('/withdraw', function () {
return view('sellercp.withdrawvalue');
});
Route::post('/Requestbal','StorePanelController@Requestbal');
Route::get('/allwithdrawstore', function () {
  $idstore= DB::table('stores')->where(['user_id'=>Auth::user()->id])->value('id');
  $withdraws= DB::table('withdraws')->where(['store_id'=>$idstore,'is_deleted'=>0])->get();

    return view('sellercp.allrequestwithdraw',compact('withdraws'));
});

Route::post('/{id}/editewith','StorePanelController@editewith');
Route::post('/{id}/cancelprocess','StorePanelController@cancelprocess');
Route::get('/allwithdrawstoreadmin', function () {
 $withdraws=DB::table('withdraws')
 ->join('stores', 'stores.id', '=', 'withdraws.store_id')
 ->join('users', 'users.id', '=', 'withdraws.user_id')
             ->where(['withdraws.is_deleted'=>0])
            ->select('withdraws.*','stores.name','users.email')
            ->get();

    return view('admincp.withdrawrequested',compact('withdraws'));
});
Route::post('/{id}/complprocess','StorePanelController@complprocess');

Route::post('/{id}/Referenceprocess','StorePanelController@Referenceprocess');
Route::get('/allcontacts', function () {
 $contactuses=DB::table('contactuses')
            ->get();

    return view('admincp.contact',compact('contactuses'));
});


/*
    Route::post('/{id}/sendemail', function (Request $request,$id) {
    	  $email= DB::table('vendors')->where(['id'=>$id])->value('email');
          $venname= DB::table('vendors')->where(['id'=>$id])->value('name');
          $venpass= DB::table('vendors')->where(['id'=>$id])->value('password');



        $data=array("name"=>$venname,
               'title' =>$titlemsg,
                    'details' =>'Thanks you for register with us , your account with this email : ' . $email .'  is Active now ,<br> if you want to register now your password is : '. $venpass,
                    'websiteURL' => $site_url,
                    'websiteName' => $site_title);
          $sendmail =  ContactUsController::emailtemplatesend($data,$email,$titlemsg);




         $mhmods= trans('frontLang.sucesssend');

            return Redirect::back()->withErrors($mhmods);

});*/

//***

