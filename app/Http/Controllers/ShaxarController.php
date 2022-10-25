<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shaxar;
class ShaxarController extends Controller
{
    public function index(Request $request)
    {
        $shaxar=Shaxar::orderBy('id','DESC')->get();
        return view('admin.shaxar',['cities'=>$shaxar]);
    }
    public function save(Request $request)
    {
        $this->validate($request,[
            'uz'=> 'required',
            'ru'=> 'required',
            'en'=> 'required',
        ]);
        $name=json_encode([
            'uz'=>$request->uz,
            'en'=>$request->en,
            'ru'=>$request->ru,
        ]);
        // dd(json_encode($name));
        Shaxar::create(['name'=>$name]);
        return back();
    }
    public function edit(Request $request,$id)
    {
        $this->validate($request,[
            'uz'=> 'required',
            'ru'=> 'required',
            'en'=> 'required',
        ]);
        $name=json_encode([
            'uz'=>$request->uz,
            'en'=>$request->en,
            'ru'=>$request->ru,
        ]);
        // dd(json_encode($name));
        Shaxar::where('id',$id)->update(['name'=>$name]);
        return back();
    }
    public function delete(Request $request,$id)
    {
        
        Shaxar::where('id',$id)->delete();
        return back();
    }
}
