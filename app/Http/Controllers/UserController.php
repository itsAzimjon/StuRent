<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Shaxar;
use App\Mahalla;
use App\Elon;
class UserController extends Controller
{
    public function search(Request $request)
    {
        $category=Category::all();
        $Shaxar=Shaxar::with('mahalla')->get();
        $elon=Elon::where('type',0);
        foreach($request->category??[] as $c){
            $elon = $elon->whereHas('qulaylik', function($q) use ($c){
                $q->where('categories_id',$c);
            });
        }
        if(!empty($request->mulk_turi))
            $elon=$elon->where('mulk_turi',$request->mulk_turi);
        if(!empty($request->min_price))
            $elon=$elon->where('narx','>=',$request->min_price);
        if(!empty($request->max_price))
            $elon=$elon->where('narx','<=',$request->max_price);
        $elon = $elon->get();
        return view('search',['category'=>$category,'shaxar'=>$Shaxar,'elons'=>$elon,'s_c'=>$request->category,'min'=>$request->min_price,'max'=>$request->max_price]);
    }
    public function search_city(Request $request)
    {
        if(empty($request->shaxaar_id) and empty($request->mahalla_id))
            return back();
        $category=Category::all();
        $Shaxar=Shaxar::with('mahalla')->get();
        $elon=Elon::where('type',0)->whereHas('shaxar', function($q) use ($request){
                $q->where('id',$request->shaxar_id);
            })->whereHas('mahalla', function($q) use ($request){
                $q->where('id',$request->mahalla_id);
            });
        foreach($request->category??[] as $c){
            $elon =  $elon->whereHas('qulaylik', function($q) use ($c){
                $q->where('id',$c);
            });
        }
        if(!empty($request->mulk_turi))
            $elon=$elon->where('mulk_turi',$request->mulk_turi);
        if(!empty($request->min_price))
            $elon=$elon->where('narx','>=',$request->min_price);
        if(!empty($request->max_price))
            $elon=$elon->where('narx','<=',$request->max_price);
        $elon =  $elon->get();
        return view('search',[
            'category'=>$category,
            'shaxar'=>$Shaxar,
            'elons'=>$elon,
            'shaxar_id'=>$request->shaxar_id,
            'mahalla_id'=>$request->mahalla_id,
            'mahalla'=>Mahalla::where('shaxar_id',$request->shaxar_id)->get(),
            'min'=>$request->min_price,
            'max'=>$request->max_price,
            's_c'=>$request->category,
        ]);
    }
    public function add(Request $request)
    {
        $Shaxar=Shaxar::with('mahalla')->get();
        $category=Category::all();
        return view('add',['category'=>$category,'shaxar'=>$Shaxar]);
    }
    
    function elon($id)
    {
        $elon=Elon::where('id',$id)->with('qulaylik')->first();
        // dd($elon);
        return view('elon',['elon'=>$elon]);


    }
    function edit($id,Request $request)
    {
        $Shaxar=Shaxar::with('mahalla')->get();
        $category=Category::all();
        $elon=Elon::where('id',$id)->with('qulaylik')->first();
        if($request->user()->id!=$elon->user_id){
            return back();
        }
        return view('edit',['category'=>$category,
            'shaxar'=>$Shaxar,
            'elon'=>$elon,
            'mahalla'=>Mahalla::where('shaxar_id',$elon->shaxar_id)->get()
        ]);
    }
    public function rasm_delete($id,$index)
    {
        $elon=Elon::where('id',$id)->with('qulaylik')->first();
        $rasm=json_decode($elon->rasm);
        unset($rasm[$index]);
        $elon->rasm=json_encode($rasm);
        $elon->save();
        return back();
    }
    function delete($id,Request $request)
    {
        $elon=Elon::where('id',$id)->with('qulaylik')->first();
        $elon->type=$request->type;
        $elon->save();
        return back();
    }
    
}
