<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\SkinType;
use App\Models\Cart;
use App\Models\Invoice;

class ProductController extends Controller
{
    //

    public function showProducts(){
        $categories=Category::where('category_status','Active')->get();
        $brands=Brand::where('brand_status','Active')->get();
        $skintypes=SkinType::where('skintype_status','Active')->get();
        $products=Product::with('brand','skintype','category')->get();
        return view('products.showProducts',compact('categories','brands','skintypes','products'));
    }

    public function addProduct(Request $request){

         if($request->hasFile('product_image')){
             $file=$request->file('product_image');
             $extension=$file->getClientOriginalExtension();
             $productImage=time().'.'.$extension;
             $file->move(public_path('backend/images/products'),$productImage);
             
                $create=Product::create([
                    'product_image'=>$productImage,
                    'product_name'=>$request->product_name,
                    'product_description'=>$request->product_description,
                    'product_price'=>$request->product_price,
                    'product_qty'=>$request->product_qty,
                    'category_id'=>$request->category_id,
                    'brand_id'=>$request->brand_id,
                    'skintype_id'=>$request->skintype_id,
                ]);
                if($create){
                    toast('Product added Successfully','success');
                    return redirect()->back();
                }else{
                    toast('Could not add product','error');
                    return redirect()->back();
                }
         }else{
             toast('No file selected','error');
            return redirect()->back();
         }
    }


    public function deleteProduct(Request $request){


        $delete=Product::where('id',$request->id)->delete();

        if($delete){
                toast('Product deleted Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not delete Product','error');
            return redirect()->back();
        }

    }


    public function updateProduct(Request $request){


         if($request->hasFile('product_image')){
             $file=$request->file('product_image');
             $extension=$file->getClientOriginalExtension();
             $productImage=time().'.'.$extension;
             $file->move(public_path('backend/images/products'),$productImage);
             
                $update=Product::where('id',$request->id)->update([
                    'product_image'=>$productImage,
                    'product_name'=>$request->product_name,
                    'product_description'=>$request->product_description,
                    'product_price'=>$request->product_price,
                    'product_qty'=>$request->product_qty,
                    'category_id'=>$request->category_id,
                    'brand_id'=>$request->brand_id,
                    'skintype_id'=>$request->skintype_id,
                ]);
                if($update){
                    toast('Product updated Successfully','success');
                    return redirect()->back();
                }else{
                    toast('Could not update product','error');
                    return redirect()->back();
                }
         }else{

              $update=Product::where('id',$request->id)->update([
                    'product_name'=>$request->product_name,
                    'product_description'=>$request->product_description,
                    'product_price'=>$request->product_price,
                    'product_qty'=>$request->product_qty,
                    'category_id'=>$request->category_id,
                    'brand_id'=>$request->brand_id,
                    'skintype_id'=>$request->skintype_id,
                ]);

                 if($update){
                    toast('Product updated Successfully','success');
                    return redirect()->back();
                }else{
                    toast('Could not update product','error');
                    return redirect()->back();
                }
         }


    }

    public function addToCart(Request $request){
       $create=Cart::create([
                    'user_id'=>$request->user_id,
                    'product_id'=>$request->product_id,
                    'qty'=>$request->qty,
                    
                ]);

                 if($create){
                    toast('Product added Successfully','success');
                    return redirect()->back();
                }else{
                    toast('Could not add product','error');
                    return redirect()->back();
                }
    }


    public function payForProduct(Request $request){
       $create=Invoice::create([
        'user_id'=>$request->user_id,
        'invoice_no'=>123,
        'invoice_status'=>'Not Paid',
        'total_item'=>12,
        'total_amount'=>4562
       ]);

       if($create){
            toast('Order Placed Successfully','success');
            return redirect()->back();
        }else{
            toast('Could not placed order','error');
            return redirect()->back();
        }
    }

}
