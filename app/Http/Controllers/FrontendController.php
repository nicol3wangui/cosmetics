<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Cart;


class FrontendController extends Controller
{
    //

    public function welcome(){
        return view('welcome');
    }

    public function products(){
        $products=Product::all();
        return view('pages.products',compact('products'));
    }

    public function contactus(){
        return view('pages.contacts');
    }

    public function billing(){
        return view('pages.billing');
    }

    public function cart(){
        if(Auth::check()){

            $carts=Cart::with('product','user')->where('user_id',Auth::user()->id)->get();
            $total_items=count($carts);
            
            // Calculate total price
            $total_price = $carts->sum(function ($cart) {
                return $cart->qty * $cart->product->product_price;
            });

            return view('pages.cart',compact('carts','total_items','total_price'));
        }
        
    }

    public function checkout(){
        return view('pages.checkout');
    }

    public function productDetails($id){
        if(Auth::check()){
        $product=Product::with('category')->where('id',$id)->first();
        return view('pages.productDetails',compact('product'));
        }else{
            return redirect()->route('login');
        }
       
    }


    public function showProfile(){
        return view('users.showProfile');
    }

    public function updatePersonalInformation(Request $request){
        $update=User::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address
        ]);

        if($update){
            toast('Data Updated Successfully','success');
            return redirect()->back();
        }else{
            toast('Error ! Could not update','error');
            return redirect()->back();
        }
    }

    public function updateProfileImage(Request $request){
         if($request->hasFile('profileImage')){
             $file=$request->file('profileImage');
             $extension=$file->getClientOriginalExtension();
             $fileName=time().'.'.$extension;
             $file->move(public_path('backend/images/profile'),$fileName);
             
             $user=Auth::user();
             $user->profileImage=$fileName;
             $user->update();

              toast('Image Updated Successfully','success');
             return redirect()->back();


         }else{
             toast('No file selected','error');
            return redirect()->back();
         }
    }

    public function updatePassword(Request $request){
      
        $user=Auth::user();
        if(Hash::check($request->old_password,$user->password)){
           $user->password=Hash::make($request->new_password);
           $user->update();
            toast('password updated successfully','success');
            return redirect()->back();
        }else{
             toast('old password is not correct','error');
             return redirect()->back();
        }
    }

    public function customerdeletecartitem(Request $request){
       $delete=Cart::where('id',$request->id)->delete();

        if($delete){
            toast('Product deleted Successfully','success');
            return redirect()->back();
        }else{
            toast('Error ! Could not delete','error');
            return redirect()->back();
        }
    }

    public function customerdeletecartitems(Request $request){
        $delete=Cart::where('user_id',$request->user_id)->delete();

        if($delete){
            toast('Products deleted Successfully','success');
            return redirect()->back();
        }else{
            toast('Error ! Could not delete','error');
            return redirect()->back();
        }
    }
}
