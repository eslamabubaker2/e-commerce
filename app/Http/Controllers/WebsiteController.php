<?php

namespace App\Http\Controllers;

use App\Category;
use App\Effort;
use App\Product;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
   public function index(){
       $products=Product::getLast10Products();
       $efforts=Effort::getLast10Efforts();

       $bestefforts=Effort::getBestEfforts();
       $stores=Store::allStores();
       $categories=Category::all();
       return view('website.main',['products'=>$products,
           'stores'=>$stores,'categories'=>$categories,'efforts'=>$efforts,'bestefforts'=>$bestefforts]);
   }

    public function allStores(){

        $stores=Store::join('users','users.id','=','stores.user_id')
            ->select('stores.*','users.name as user_name')->paginate(24);
        $counter=Store::count();
        $counter2=(integer)($counter/24);
        if($counter%24!=0)
            $counter2++;
        $url='stores/page';
        $page=1;


        return view('website.stores_01',compact('stores','counter2','url','page'));
    }



    public function allStoresPage($no){
        if(is_numeric($no)){
            $stores=Store::join('users','users.id','=','stores.user_id')
                ->select('stores.*','users.name as user_name')->offset(($no-1)*24)->limit(24)->get();
            $counter=Store::count();
            $counter2=(integer)($counter/24);
            if($counter%24!=0)
                $counter2++;
            $url='stores/page';
            $page=$no;

            return view('website.stores_01',compact('stores','counter2','url','page'));
        }else{
            return view('errors.404');
        }
    }
    public function allEfforts(){

        $efforts=Effort::join('products','products.id','=','efforts.product_id')->
        where('efforts.is_delete','=',0)->
        where('products.displaypro','=',1)->
        // whereDate('efforts.end_date','>=',Carbon::today()->toDateString())->
        where('products.is_delete','=',0)->
        select('products.*', 'efforts.percent')->
        orderBy('efforts.percent', 'desc')->paginate(9);
         $counter=Effort::getEffortsCount();
        $counter2=(integer)($counter/9);
        if($counter%9!=0)
            $counter2++;
        $url='efforts/page';
        $page=1;
        return view('website.deals_grid',compact('efforts','counter2','url','page'));
    }



    public function allEffortsPage($no){
        if(is_numeric($no)){
            $efforts=Effort::getEffortsInterval($no-1,9);
            $counter=Effort::getEffortsCount();
            $counter2=(integer)($counter/9);
            if($counter%9!=0)
                $counter2++;
            $url='efforts/page';
            $page=$no;
            return view('website.deals_grid',compact('efforts','counter2','url','page'));
        }else{
            return view('errors.404');
        }
    }
    public function allCategories(){

        $categories=Category::paginate(24);
        $counter=Category::count();
        $counter2=(integer)($counter/24);
        if($counter%24!=0)
            $counter2++;
        $url='categories/page';
        $page=1;
        return view('website.categories',compact('categories'));
    }
    public function allCategoriesPage($no){
        if(is_numeric($no)){
            $categories=Category::offset(($no-1)*24)->limit(24)->get();
            $counter=Category::count();
            $counter2=(integer)($counter/24);
            if($counter%24!=0)
                $counter2++;
            $url='categories/page';
            $page=$no;
            return view('website.categories',compact('categories','counter2','url','page'));
        }else{
            return view('errors.404');
        }
    }

    public function allProducts(){

        $products=Product::where('is_delete','<>','1')
            ->where('displaypro','=',1)->
            whereNotIn('id',function($query)
            {
                $query->select('product_id')
                    ->from('efforts')
                    ->where('efforts.is_delete','<>',1)->
                    whereDate('efforts.end_date','>=',Carbon::today()->toDateString());
            })
            ->paginate(8);
        $categories=Category::all();

        return view('website.coupons_grid',compact('products','categories'));
    }


    public function allProductsPage($no){
        if(is_numeric($no)) {
            $products = Product::where('is_delete',0)->paginate(8);
            $categories = Category::all();
            $counter = Product::count();
            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;
            $url = 'products/page';
            $page=$no;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2, 'url' => $url,'page'=>$page]);
        }else{
                return view('errors.404');
            }
        }

    public function allProductsByCategory($id){
        if(is_numeric($id)) {
            $products = Product::where('category', $id)->where('is_delete',0)
                ->where('products.displaypro','=',1)->whereNotIn('id',function($query)
                {
                    $query->select('product_id')
                        ->from('efforts')
                        ->where('efforts.is_delete','<>',1)->
                        whereDate('efforts.end_date','>=',Carbon::today()->toDateString());
                })->paginate(8);
            $categories = Category::all();
            $counter = Product::where('category', $id)->count();

            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;

            $url='products/category/'.$id.'/page';
            $page=1;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2,'url'=>$url,'page'=>$page]);
        }else{
            return view('errors.404');
        }
        }

        public function allProductsBystore($id){
        if(is_numeric($id)) {
            $products = Product::where(['store_id'=> $id,'is_delete'=>0])

            ->limit(8)->get();
            $categories = Category::all();
            $counter = Product::where('store_id', $id)->count();

            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;

            $url='products/store/'.$id.'/page';
            $page=1;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2,'url'=>$url,'page'=>$page]);
        }else{
            return view('errors.404');
        }
        }



        public function allProductsByCategoryPage($id,$no){
        if(is_numeric($id) && is_numeric($no)) {
            $products = Product::
            where(['is_delete'=>0,'category'=>$id])
            ->offset(($no-1)*8)->limit(8)->get();
            $categories = Category::all();
            $counter = Product::where('category', $id)->count();
            $counter2 = (integer)($counter / 8 );
            if($counter%8!=0)
                $counter2++;
            $url='products/category/'.$id.'/page';
            $page=$no;
            return view('website.coupons_grid', ['products' => $products, 'categories' => $categories, 'count' => $counter2,'url'=>$url,'page'=>$page]);
        }else{
            return view('errors.404');
        }
        }

}
