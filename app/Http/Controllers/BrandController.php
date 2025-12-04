<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //
    public function brands(){
        $brands=Brand::all();
        return view('brands.brands',compact('brands'));
    }

    public function addBrand(Request $request){
        $create=Brand::create([
            'brand_name'=>$request->brand_name,
            'brand_status'=>$request->brand_status,
        ]);

        if($create){
                toast('Brand added Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not add brand','error');
            return redirect()->back();
        }
    }

    public function updateBrand(Request $request){


        $update=Brand::where('id',$request->id)->update([
            'brand_name'=>$request->brand_name,
            'brand_status'=>$request->brand_status,
        ]);

        if($update){
                toast('Brand updated Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not update brand','error');
            return redirect()->back();
        }

    }







    public function deleteBrand(Request $request){


        $delete=Brand::where('id',$request->id)->delete();

        if($delete){
                toast('Brand delete Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not delete brand','error');
            return redirect()->back();
        }

    }

}
