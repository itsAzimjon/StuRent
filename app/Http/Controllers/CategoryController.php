<?php

namespace App\Http\Controllers;
use App\Category;   
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories=Category::orderBy('id','DESC')->get();
        return view('admin.category',['categoies'=>$categories]);
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
        Category::create(['name'=>$name]);
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
        Category::where('id',$id)->update(['name'=>$name]);
        return back();
    }
    public function delete(Request $request,$id)
    {
        
        Category::where('id',$id)->delete();
        return back();
    }
}
