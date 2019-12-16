<?php

namespace App\Http\Controllers;
//ييي
use App\Category;
use App\Effort;
use App\Product;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index(Request $request){

        return redirect('/'.$request->keyword.'/search');

    }
    public function search($keyword)
    {
        if (!Input::has('page_e')) {
            $efforts = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
            where('efforts.is_delete', '<>', 1)->
            where('products.name', 'like', '%' . $keyword . '%')->
            whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
            where('products.is_delete', '<>', 1)->
            select('products.*', 'efforts.percent')->
            orderBy('efforts.percent', 'desc')->paginate(9);

            $efforts->setPageName('page_e');
        }
        else{
            $currentPage=Input::get('page_e');
            Paginator::currentPageResolver(function() use ($currentPage) {
                return $currentPage;
            });

            $efforts = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
            where('efforts.is_delete', '<>', 1)->
            where('products.name', 'like', '%' . $keyword . '%')->
            whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
            where('products.is_delete', '<>', 1)->
            select('products.*', 'efforts.percent')->
            orderBy('efforts.percent', 'desc')->skip($currentPage*9)->paginate(9);

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
            ->where('name', 'like', '%' . $keyword . '%')->paginate(8);
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
                ->where('name', 'like', '%' . $keyword . '%')->skip($currentPage*8)->paginate(8);
            $products->setPageName('page_p');
        }

        if (!Input::has('page_s')) {
            $stores = Store::
            where('name', 'like', '%' . $keyword . '%')->paginate(12);
            $category = Category::where('name', 'like', '%' . $keyword . '%')->paginate(12);
            $stores->setPageName('page_s');
        }else{
            $currentPage=Input::get('page_s');
            Paginator::currentPageResolver(function() use ($currentPage) {
                return $currentPage;
            });
            $stores = Store::
            where('name', 'like', '%' . $keyword . '%')->paginate(12);
            $category = Category::where('name', 'like', '%' . $keyword . '%')->skip($currentPage*12)->paginate(12);
            $stores->setPageName('page_s');
        }
        return view('website.search_result',compact('products','efforts','stores'));


    }
}
