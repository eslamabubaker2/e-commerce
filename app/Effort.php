<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Effort extends Model
{
    public static function getLast10Efforts(){
        return Effort::join('products','products.id','=','efforts.product_id')->
        where('efforts.is_delete','<>',1)->
        whereDate('efforts.end_date','>=',Carbon::today()->toDateString())->
        where('products.is_delete','<>',1)->
        select('products.*', 'efforts.percent','efforts.start_date','efforts.end_date')->

        orderBy('efforts.created_at', 'desc')->limit(10)->get();
    }

    public static function getBestEfforts(){
        return Effort::join('products','products.id','=','efforts.product_id')->
        where('efforts.is_delete','<>',1)->
        whereDate('efforts.end_date','>=',Carbon::today()->toDateString())->
        where('products.is_delete','<>',1)->
        select('products.*', 'efforts.percent')->
        orderBy('efforts.percent', 'desc')->limit(5)->get();
    }

    public static function getEffortsInterval($index,$limit){
        return Effort::join('products','products.id','=','efforts.product_id')->
        where('efforts.is_delete','<>',1)->
        whereDate('efforts.end_date','>=',Carbon::today()->toDateString())->
        where('products.is_delete','<>',1)->
        select('products.*', 'efforts.percent')->
        orderBy('efforts.percent', 'desc')->offset($index*$limit)->limit($limit)->get();
    }

    public static function getEffortsCount(){
        return Effort::join('products','products.id','=','efforts.product_id')->
        where('efforts.is_delete','<>',1)->
        whereDate('efforts.end_date','>=',Carbon::today()->toDateString())->
        where('products.is_delete','<>',1)->count();


    }
}
