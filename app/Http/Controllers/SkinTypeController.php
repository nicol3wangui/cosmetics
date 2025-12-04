<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkinType;

class SkinTypeController extends Controller
{
    //
    public function skintypes(){
        $skintypes=SkinType::all();
        return view('skintypes.skintypes',compact('skintypes'));
    }

    public function addSkintype(Request $request){
        $create=SkinType::create([
            'skintype_name'=>$request->skintype_name,
            'skintype_status'=>$request->skintype_status,
        ]);

        if($create){
                toast('Skintype added Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not add skintype','error');
            return redirect()->back();
        }
    }

    public function updateSkintype(Request $request){


        $update=SkinType::where('id',$request->id)->update([
            'skintype_name'=>$request->skintype_name,
            'skintype_status'=>$request->skintype_status,
        ]);

        if($update){
                toast('Skintype updated Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not update skintype','error');
            return redirect()->back();
        }

    }







    public function deleteSkintype(Request $request){


        $delete=SkinType::where('id',$request->id)->delete();

        if($delete){
                toast('Skintype delete Successfully','success');
                return redirect()->back();
        }else{
            toast('Could not delete skintype','error');
            return redirect()->back();
        }

    }

}
