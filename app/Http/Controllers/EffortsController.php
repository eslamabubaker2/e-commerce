<?php

namespace App\Http\Controllers;

use App\Effort;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EffortsController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [

            'product' => 'required | numeric',
            'percent' => 'required | numeric',
            'date' => 'required | numeric',


        ]);
        Effort::where('product_id',$request->product)->
        update(['is_delete' => 1]);


        $effort=new Effort();
        $dt=Carbon::now();
        $dt2=Carbon::now();
        $effort->product_id=$request->product;
        $effort->percent=$request->percent;
        $effort->no_dates=$request->date;
        $effort->start_date=$dt2;

        $dt=$dt->addDays($request->date);

        $effort->end_date=$dt;

        $effort->save();
        return back();

    }

    public function delete($id){
        $effort=Effort::findOrFail($id);
        $effort->is_delete=1;
        $effort->update();
        return back();
    }
    public function update(Request $request,$id){
        $effort=Effort::findOrFail($id);
        $effort->is_delete=1;
        $effort->update();

        $effort=new Effort();
        $effort->product_id=$request->product;
        $effort->percent=$request->percent;
        $effort->no_dates=$request->no_dates;
        $effort->save();

        return back();
    }
    //add effort
     public function effortpage()
    { 
     return view('sellercp.effortpage');
    }
    ///////////////////////////

    public function singleEffort($id){
        $effort = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
        where('efforts.is_delete', '<>', 1)->
        where('efforts.id', '=', $id)->

        whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
        where('products.is_delete', '<>', 1)->
        select('products.*', 'efforts.percent')->first();
        if($effort==null){
            return view('errors.404');
        }else{
            $store=Store::find($effort->store_id);
            $efforts = Effort::join('products', 'products.id', '=', 'efforts.product_id')->
            where('efforts.is_delete', '<>', 1)->


            whereDate('efforts.end_date', '>=', Carbon::today()->toDateString())->
            where('products.is_delete', '<>', 1)->
            select('products.*', 'efforts.percent')->limit(3)->get();
            return view('website.deal_single',compact('effort','store','efforts'));
        }
    }
/**/
}
