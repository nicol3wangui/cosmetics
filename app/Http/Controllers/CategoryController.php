<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function categories(){
        $categories=Category::all();
        return view('categories.categories',compact('categories'));
    }

    public function addCategory(Request $request){
        $create=Category::create([
            'category_name'=>$request->category_name,
            'category_status'=>$request->category_status,
        ]);

        if($create){
                toast('Category added Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not add category','error');
            return redirect()->back();
        }
    }

    public function updateCategory(Request $request){


        $update=Category::where('id',$request->id)->update([
            'category_name'=>$request->category_name,
            'category_status'=>$request->category_status,
        ]);

        if($update){
                toast('Category updated Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not update category','error');
            return redirect()->back();
        }

    }







    public function deleteCategory(Request $request){


        $delete=Category::where('id',$request->id)->delete();

        if($delete){
                toast('Category delete Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not delete category','error');
            return redirect()->back();
        }

    }


}
