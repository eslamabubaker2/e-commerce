<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\store;
use Redirect;
use DB;
use App\user;
use App\withdraw;

class StorePanelController extends Controller
{
    public function index(){
        //dd(11);
        return view('controlPanel_store.index');
    }

    public function addProduct()
    {
        $categories=Category::all();
        return view('controlPanel_store.products.addproduct',['categories'=>$categories]);
    }

    public function addEffort()
    {
        $user = Auth::user();
        $products=Product::where('store_id',$user->store()->id)->get();
       // dd($products);
        return view('controlPanel_store.efforts.addeffort',['products'=>$products]);
    }

    public function saveproduct(Request $request){
        $this->validate($request, [
            'fname' => 'required|max:255',
            'pnumber' => 'required | alpha_num',
            'price' => 'required | numeric',
            'contity' => 'required | numeric',

            'category' => 'required | numeric',
            'img' => 'required | image',
        ]);

        $name=$request->fname;
        $pnumber=$request->pnumber;
        $price=$request->price;
        $category=$request->category;
        $img=$request->img;

        $product=new Product();
        $product->name=$request->fname;
        $product->pnumber=$request->pnumber;
        $product->price=$request->price;
        $product->category=$request->category;
        $product->contity=$request->contity;
        if(Input::hasFile('img')){
            $file=Input::file('img');
            $current_timestamp = Carbon::now()->timestamp;
            $link=$current_timestamp.'.'.$file->getClientOriginalExtension();
            $file->move('uploads',$link);
            $product->img=$link;
        }else{
            $product->img='default.jpg';
        }

        $product->comment=$request->comment;
        $user = Auth::user();
        $product->store_id=$user->store()->id;

        $product->save();
        return back();

    }
    public function saveEffort(Request $request){
        $this->validate($request, [

            'product' => 'required | numeric',
            'percent' => 'required | numeric',
            'startdate' => 'required | date',
            'enddate' => 'required | date',

        ]);

        $product=$request->product;
        $percent=$request->percent;
        $startdate=$request->startdate;
        $enddate=$request->enddate;


        $effort=new Effort();
        $effort->product=$request->product;
        $effort->percent=$request->percent;
        $effort->startdate=$request->startdate;
        $effort->enddate=$request->enddate;


        $effort->save();
        return back();

    }

    public function products_table(){


        $store=Auth::user()->store();
        $products=$store->getProducts();

        return view('controlPanel_store.products.products',['products'=>$products]);

    }

    public function storeData()
    {
        return view('controlPanel_store.storeData');
    }

    ///////////Create store
    public function CreateStore(Request $request){
         $stores=DB::table('stores')
           ->where(['user_id'=>Auth::user()->id])
            ->get();
        if(count($stores)==0){
        $store=new store();

     
        if ($request->file('img')) {
        $ext = pathinfo($request->file('img')->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
            $new_au= uniqid() . "." . $ext;
            $path = $request->file('img')
                ->move(public_path() . '/uploads',
                    $new_au);
        }
    }




       $store->name =$request->name;
          $store->OwnerName =$request->OwnerName;
             $store->country =$request->country; 
             $store->address =$request->address;
             $store->mobile =$request->mobile;
                $store->facebook =$request->facebook;
               $store->twitter =$request->twitter;
               $store->google =$request->google;
               $store->description =$request->description;
               $store->img =$new_au;
               $store->activation  ='disactive';
               $store->user_id=Auth::user()->id;
              $store->save(); 
      $mhmods= 'Successfully Created';

  return Redirect::back()->withErrors($mhmods);}
  else{
     $mhmods= 'You already own a store';

  return Redirect::back()->withErrors($mhmods);

  }

           
    }

    /////store info
     public function showstoreinfo()
    {
         $stores=DB::table('stores')
           ->where(['user_id'=>Auth::user()->id])
            ->get();
            
       return view('sellercp.storeinfo',compact("stores"));
    }
    ////////edite store info
    
       public function Editestoreinfo(Request $request,$id){
          if ($request->file('img')) {
        $ext = pathinfo($request->file('img')->getClientOriginalName(),
            PATHINFO_EXTENSION);
        if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
            $new = uniqid() . "." . $ext;
            $path = $request->file('img')
                ->move(public_path() . '/uploads',
                    $new);
        }
    }
        

        $store=store::find($id);
       
       $store->name =$request->name;
             $store->country =$request->country; 
             $store->address =$request->address;
             $store->mobile =$request->mobile;
                $store->facebook =$request->facebook;
               $store->twitter =$request->twitter;
               $store->google =$request->google;
               $store->description =$request->description;
               $store->activation  =$request->activation;
              if (isset($new)) {
           if ($new != ''  or $new != null) {
            $store->img =$new;
      }
        } 

       $store->update();
        $suc= 'Successfully Modefied';

      return Redirect::back()->withErrors($suc);

       
    }
    //page seeting account seller
     public function settingaccountseller()
    { 
      $user=DB::table('users')
           ->where(['id'=>Auth::user()->id])
            ->get();
            
        
        return view('sellercp.settingaccount',compact("user"));
    }
    public function settingaccountadmin()
    { 
      $user=DB::table('users')
           ->where(['id'=>Auth::user()->id])
            ->get();
            
        
        return view('admincp.settingaccount',compact("user"));
    }
    //edit info seller

 
       public function Editesellerinfo(Request $request,$id){
        $user=user::find($id);
       
       $user->name =$request->name;
             $user->email =$request->email; 
             if (isset($request->password)) {
           if ($request->password != ''  or $request->password != null) {
            $user->password =$request->password;
      }
        } 

       $user->update();
        $suc= 'Successfully Modefied';

      return Redirect::back()->withErrors($suc);

       
    }


     public function effortpage()
    { 
         $product = DB::table('products')
       ->join('stores','stores.id','=','products.store_id')
        ->where(['stores.user_id'=>Auth::user()->id,'products.is_delete'=>0])
       ->select('products.*')
       ->get();
     

        return view('sellercp.effortpage',compact("product"));
    }  
      public function Requestbal(Request $request){
        $bb= DB::table('users')->where(['id'=>Auth::user()->id])->value('balance');
        $withddraw=new withdraw;
        if($request->value<=$bb){
        $withddraw->value=$request->value; 
         $withddraw->deatilsreceive=$request->deatilsreceive; 
                 $idstore= DB::table('stores')->where(['user_id'=>Auth::user()->id])->value('id');
 $withddraw->user_id=Auth::user()->id;
        
        $withddraw->store_id=$idstore;
        
       $withddraw->save();
        $suc= 'Successfully Requested';

      return Redirect::back()->withErrors($suc);}
      else{
          $suc= 'You can not withdraw the required Mony for insufficient balance';

      return Redirect::back()->withErrors($suc);
      }

       
    }
       public function editewith(Request $request,$id){
         $bb= DB::table('users')->where(['id'=>Auth::user()->id])->value('balance');
          if($request->value<=$bb){
        $withdraw=withdraw::find($id);
        
      
        $withdraw->value =$request->value;
         $withdraw->update();
        
      $suc= 'Successfully Modefied';

     return Redirect::back()->withErrors($suc);}
     else{
          $suc= 'You can not withdraw the required Mony for insufficient balance';

      return Redirect::back()->withErrors($suc);
     }

       
    }


 public function cancelprocess(Request $request,$id){
        $withdraw=withdraw::find($id);
        $withdraw->is_deleted =1;
        $withdraw->update();
        $suc= 'Successfully   Cancelled';
        return Redirect::back()->withErrors($suc);
       }

 public function complprocess(Request $request,$id){
        $withdraw=withdraw::find($id);
        $withdraw->state ='Done';
        $withdraw->update();
        $suc= 'Successfully   completed';
        return Redirect::back()->withErrors($suc);
       }
        public function Referenceprocess(Request $request,$id){
        $withdraw=withdraw::find($id);
         $withdraw->state ='Reference';
          $withdraw->Notesadmin =$request->Notesadmin;
         $withdraw->update();
        $suc= 'Successfully  Returned';
        return Redirect::back()->withErrors($suc);
       }
}
