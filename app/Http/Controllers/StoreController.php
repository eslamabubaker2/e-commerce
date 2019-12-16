<?php

namespace App\Http\Controllers;

use App\Effort;
use App\Product;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

class StoreController extends Controller
{
    public function singleStore($id){
       // dd($id);
        $store=Store::find($id);
        if (!Input::has('page_e')) {
            $efforts = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
            where('efforts.is_delete', '<>', 1)->
            where('products.store_id', '=', $store->id)->
            whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
            where('products.is_delete', '<>', 1)->
            select('products.*', 'efforts.percent')->
            orderBy('efforts.percent', 'desc')->paginate(4);

            $efforts->setPageName('page_e');
        }
        else{
            $currentPage=Input::get('page_e');
            Paginator::currentPageResolver(function() use ($currentPage) {
                return $currentPage;
            });

            $efforts = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
            where('efforts.is_delete', '<>', 1)->
            where('products.store_id', '=', $store->id)->

            whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
            where('products.is_delete', '<>', 1)->
            select('products.*', 'efforts.percent')->
            orderBy('efforts.percent', 'desc')->skip($currentPage*4)->paginate(4);

            $efforts->setPageName('page_e');
        }
        if (!Input::has('page_p')) {

            $products = Product::where('is_delete', 0)
                ->whereNotIn('id',function($query)
                {
                    $query->select('product_id')
                        ->from('efforts')
                        ->where('efforts.is_delete','<>',1)->
                        whereDate('efforts.end_date','>=',Carbon::today()->toDateString());
                })
                ->where('store_id', '=', $store->id)->paginate(6);
            $products->setPageName('page_p');
        }
        else{
            $currentPage=Input::get('page_p');
            Paginator::currentPageResolver(function() use ($currentPage) {
                return $currentPage;
            });
            $products = Product::where('is_delete', 0)
                ->whereNotIn('id',function($query)
                {
                    $query->select('product_id')
                        ->from('efforts')
                        ->where('efforts.is_delete','<>',1)->
                        whereDate('efforts.end_date','>=',Carbon::today()->toDateString());
                })
                ->where('store_id', '=', $store->id)->skip($currentPage*6)->paginate(6);
            $products->setPageName('page_p');
        }
        $images=Product::where('is_delete', 0)
            ->select('img')->limit(4)->get();
        return view('website.store_single_01',compact('store','products','efforts','images'));
    }
}
