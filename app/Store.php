<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    public static function allStores(){
    return Store::join('users','users.id','stores.user_id')
            ->select('stores.*','users.name as username','users.img as user_img')
            ->limit(10)
            ->get();
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getProducts(){

        return Product::where('store_id',$this->id)->where('is_delete',0)->get();
    }



}
