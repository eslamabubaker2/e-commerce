<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Redirect;
use App\User;
use App\Product;


class categorycontroller extends Controller
{
   /////add category
    public function AddClassify(Request $request){
$new="";
if ($request->file('imagecategory')) {
        $ext = pathinfo($request->file('imagecategory')->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
            $new = uniqid() . "." . $ext;
            $path = $request->file('imagecategory')
                ->move(public_path() . '/uploads',
                    $new);
        }
    }

     $Category = new Category;


       $Category->name =$request->name;
       $Category->imagecategory =$new;
       
       $Category->save(); 
      $suc= 'Successfully added';

      return Redirect::back()->withErrors($suc);
}
///edit category
  public function saveediteCategory(Request $request,$id){
   $Category=Category::find($id);
        if ($request->file('imagecategory')) {
        $ext = pathinfo($request->file('imagecategory')->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
            $new = uniqid() . "." . $ext;
            $path = $request->file('imagecategory')
                ->move(public_path() . '/uploads',
                    $new);
        }
    }
       $Category->name =$request->name;
       
       if(isset($new)){
       $Category->imagecategory =$new;}
       $Category->update();
       $suc= 'Successfully Modefied';

      return Redirect::back()->withErrors($suc);
}
///delete category
 public function CancelCategory(Request $request,$id){      

        $Category=Category::find($id);
        $Category->is_delete=1;
       $Category->update();
        
        $mhmods= 'Successfully Cancelled';
            return Redirect::back()->withErrors($mhmods);
       
    }
    public function canceluser(Request $request,$id){
       

       $trans=User::find($id)->delete();
        
              $mhmods= 'Successfully Cancelled';
           // return view('vendorecp.createcard',compact('mhmods'));
            return Redirect::back()->withErrors($mhmods);
       
    }
      public function cancelproduct(Request $request,$id){
       

       $product=product::find($id);
         $product->is_delete =1;
         $product->update();
              $mhmods= 'Successfully Cancelled';
            return Redirect::back()->withErrors($mhmods);
       
    }
}
