<?php

namespace App\Http\Controllers;

use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
class UploadController extends Controller
{
    public function index(Request $request){
        if(Input::hasFile('file')){
            $file=Input::file('file');
            $current_timestamp = Carbon::now()->timestamp;
            $file->move('uploads',$current_timestamp.'.'.$file->getClientOriginalExtension());

        }
    }
}
