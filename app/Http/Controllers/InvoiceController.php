<?php

namespace App\Http\Controllers;

use App\Invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{///////////////////

    public function getInvoices(){
       $invoices=Invoices::join('users','users.id','=','invoices.user_id')
           ->join('stores','stores.id','=','invoices.store_id')
           ->select('invoices.*','users.name as user_name','stores.name as store_name')->get();
        return view('admincp.allInvoicess',compact('invoices'));
    }

    public function getInvoicesStore(){
        $invoices=Invoices::join('users','users.id','=','invoices.user_id')
            ->where('invoices.store_id','=',Auth::user()->store()->id)
            ->select('invoices.*','users.name as user_name')->get();
        return view('sellercp.allInvoicess',compact('invoices'));
    }

 public function accountstatmentadmin(){
       $invoices=Invoices::join('users','users.id','=','invoices.user_id')
           ->join('stores','stores.id','=','invoices.store_id')
           ->select('invoices.*','users.name as user_name','stores.name as store_name','users.email as email')->get();
        return view('admincp.accountstatmentadmin',compact('invoices'));
    }
     public function accountstatmentstore(){
       $invoices=Invoices::where('store_id','=',Auth::user()->store()->id)->join('users','users.id','=','invoices.user_id')
           ->join('stores','stores.id','=','invoices.store_id')
          
           ->select('invoices.*','users.name as user_name','stores.name as store_name','users.email as email')->get();
        return view('sellercp.accountstatmentstore',compact('invoices'));
    }
}
