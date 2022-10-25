<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahalla;
use App\Shaxar;
class MahallaController extends Controller
{
    public function index(Request $request)
    {
        $subcategories=Mahalla::orderBy('id','DESC')->get();
        $city=Shaxar::all();
        return view('admin.mahalla',['city'=>$city,'subs'=>$subcategories]);
    }
    public function save(Request $request)
    {
        $this->validate($request,[
            'uz'=> 'required',
            'ru'=> 'required',
            'en'=> 'required',
            'shaxar_id'=> 'required',
        ]);
        $name=json_encode([
            'uz'=>$request->uz,
            'en'=>$request->en,
            'ru'=>$request->ru,
        ]);
        // dd(json_encode($name));
        Mahalla::create(['name'=>$name,'shaxar_id'=>$request->shaxar_id]);
        return back();
    }
    public function edit(Request $request,$id)
    {
        $this->validate($request,[
            'uz'=> 'required',
            'ru'=> 'required',
            'shaxar_id'=> 'required',
            'en'=> 'required',
        ]);
        $name=json_encode([
            'uz'=>$request->uz,
            'en'=>$request->en,
            'ru'=>$request->ru,
        ]);
        // dd(json_encode($name));
        Mahalla::where('id',$id)->update(['name'=>$name,'shaxar_id'=>$request->shaxar_id]);
        return back ();
    }
    public function delete(Request $request,$id)
    {
        
        Mahalla::where('id',$id)->delete();
        return back();
    }
}
