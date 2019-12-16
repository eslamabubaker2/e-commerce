<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use App\Effort;
use App\user;

class ProductController extends Controller
{


    public function delete($id){
        $product=Product::findOrFail($id);
        $product->is_delete=1;
        $product->update();
        return back();
    }

    public function update($id){
        $product=Product::findOrFail($id);

        return back();
    }




    public function getProductsByCategory($id){
        $products=Product::where('category',$id)->get();
        return view('website.products_grid',compact('products'));
    }

    public function getStoreProductsByCategory($stor_id,$cat_id){
        $products=Product::where(['store_id','category'],[$stor_id,$cat_id])->get();
        return view('website.products_grid',compact('products'));
    }
    public function getProducts(){


    }
    ////showpage add product
       public function addproductpage()
    {
         $categories=DB::table('categories')->get();
            
            
       return view('sellercp.addproduct',compact("categories"));
    }
    ////add product
     public function addproduct(Request $request){
        
        $product=new product();

     
        if ($request->file('img')) {
        $ext = pathinfo($request->file('img')->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
            $new_au= uniqid() . "." . $ext;
            $path = $request->file('img')
                ->move(public_path() . '/uploads',
                    $new_au);
        }
    }




       $product->name =$request->name;
          $product->product_no =$request->product_no;
             $product->description =$request->description; 
             $product->price  =$request->price ;
             $product->contity  =$request->contity;
             $product->category  =$request->category;
             $product->img =$new_au; 
              $idstore=DB::table('stores')
           ->where(['user_id'=>Auth::user()->id])
            ->value('id');
             $product->store_id=$idstore;
             $product->save(); 
      $mhmods= 'Successfully Added';

  return Redirect::back()->withErrors($mhmods);
           
    }
        public function allproductsell()
    {
       
         $categories=DB::table('categories')->get();
            
          $products = DB::table('products')
       ->join('stores','stores.id','=','products.store_id')
       ->join('categories','categories.id','=','products.category')
       ->where(['stores.user_id'=>Auth::user()->id,'products.is_delete'=>0])
       ->select('products.*','stores.name as store_name','categories.name as cat_name')
       ->get();
       return view('sellercp.allproducts',compact("products","storname","categories"));
    }

    ////// seller edite product 
      public function Editeproduct(Request $request,$id){
          if ($request->file('img')) {
        $ext = pathinfo($request->file('img')->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
            $new = uniqid() . "." . $ext;
            $path = $request->file('img')
                ->move(public_path() . '/uploads',
                    $new);
        }
    }
        

        $product=product::find($id);
       
       $product->name =$request->name;
          $product->product_no =$request->product_no;
             $product->description =$request->description; 
             $product->price  =$request->price ;
             $product->contity  =$request->contity;
            
              if (isset($new)) {
           if ($new != ''  or $new != null) {
            $product->img =$new;
      }
        } 

           $product->update();
            $suc= 'Successfully Modefied';

          return Redirect::back()->withErrors($suc);


        }
        //display produvt on store


           public function displayproductstore(Request $request,$id){
             $pro=product::find($id);

           $pro->displaypro =1;

           $pro->update();
            $suc= 'Successfully Display';

          return Redirect::back()->withErrors($suc);


        }
    //remove product from store
             public function removeproductstore(Request $request,$id){
             $pro=product::find($id);

           $pro->displaypro =0;

           $pro->update();
            $suc= 'Successfully! the Product Non display on store';

          return Redirect::back()->withErrors($suc);

       
    }
    //add effort to product

     public function savecommission(Request $request){
     
     
      $pro=user::find(Auth::user()->id);
      
      $pro->commission =$request->commission;
      $pro->save();
       $suc= 'Successfully Added';
       return Redirect::back()->withErrors($suc);


       
    }

 public function addeffortproduct(Request $request){

        $effort=new Effort();
        $effort->product_id=$request->product_id;
        $effort->percent=$request->percent;
        $effort->no_dates=$request->no_dates;
        $effort->save();
      $mhmods= 'Successfully Added';

  return Redirect::back()->withErrors($mhmods);

    }
    ////all effort
 public function alleffortpage()
    {
         $prod = DB::table('products')
      ->where(['is_delete'=>0])
       ->select('products.*')
       ->get();

          $products = DB::table('efforts')
       ->join('products','products.id','=','efforts.product_id')
       ->where(['efforts.is_delete'=>0])
       ->select('efforts.*','products.name')
       ->get();

       return view('sellercp.alleffort',compact("products","prod"));
    }
   //edite effort
    public function Editeeffort(Request $request,$id){
          $Effort=Effort::find($id);

       $Effort->product_id =$request->product_id;
       $Effort->percent =$request->percent;
       $Effort->no_dates =$request->no_dates;
       $Effort->update();
        $suc= 'Successfully Modefied';

      return Redirect::back()->withErrors($suc);


    }
    /**/
    public function canceleffort(Request $request,$id){

        $Effort=Effort::find($id);
        $Effort->is_delete=1;
       $Effort->update();

        $mhmods= 'Successfully Cancelled';
            return Redirect::back()->withErrors($mhmods);

    }
/**/
    public function singleProduct($id){
        $effort = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
        where('efforts.is_delete', '<>', 1)->
        where('products.id', '=', $id)->

        whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
        where('products.is_delete', '<>', 1)->
        select('products.*', 'efforts.percent')->first();
        if($effort==null){

            $product=Product::where('products.id', '=', $id)->
            where('products.is_delete', '<>', 1)->first();

            if($product==null){
                return view('errors.404');
            }else {

                $store=Store::find($product->store_id);
                $products=Product::
                where('products.is_delete', '<>', 1)->limit(3)->get();

                return view('website.product_single', compact('product', 'store', 'products'));
            }
        }else{
            return redirect('effort/'.$id);
        }
    }
}

