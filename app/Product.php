<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getProducts(){
        return Product::all();
    }

    public function getProductsByCategory($id){
        return Product::where('category',$id)->get();
    }

    public static function getLast10Products(){
       return Product::whereNotIn('id',
            function($query){
               $query->select('product_id')->from('efforts')->where([
                   ['created_at', '>=', 'NOW() - INTERVAL no_dates day'],

               ]);
            })->where('displaypro','=','1')
           ->orderBy('created_at', 'desc')->limit(10)->get();
    }




}
