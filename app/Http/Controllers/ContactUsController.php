<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request){
        $contact=new ContactUs();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->website=$request->website;
        $contact->message=$request->message;
        $contact->save();
        return back();

    }
    public function emailtemplatesend($data,$email,$titlemsg){
    \Mail::send('backEnd.emails.webmail',$data, function ($message) use ($data,$email,$titlemsg)
         {
$message->from('hwala.hwala@gmail.com','ShinyCard');
                    $message->to($email);
                     $message->subject($titlemsg);
        });

}
}
