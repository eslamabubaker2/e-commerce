<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;
use App\contactus;
use Redirect;
class NewsLetterController extends Controller
{//////////////////////////
    public function store(Request $request){
        $newsLetter=new NewsLetter();
        $newsLetter->email=$request->email;
        $newsLetter->save();
        return back();
    }
    
    public function contactus(Request $request){
       $contactus=new contactus;
        $contactus->name=$request->name;
        $contactus->email=$request->email;

        $contactus->mes=$request->mes;
        $contactus->save(); 

      $noti='Thanks for your attention, Wait for your email to be answered';

  return Redirect::back()->withErrors($noti);


    }
}
