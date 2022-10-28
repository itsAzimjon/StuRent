<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

use App\Category;
use App\Shaxar;
use App\Elon;
use App\Malumotlar;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $category=Category::all();
        // $Shaxar=Shaxar::with('mahalla')->get();
        $elon=Elon::where('type',0)->where('user_id',$request->user()->id)->get();
        return view('home',['elons'=>$elon]);
    }
    public function save(Request $request)
    {
        // foreach($request->rasm as $rasm){
            
            // $image = Image::make($request->rasm2);
            // $imageName = time().'-'.$request->rasm2->getClientOriginalName();
            // $destinationPath = public_path('rasmlar/');
            // $image->resize($image->width()/2,$image->height()/2);
            // $image->save($destinationPath.$imageName);
            // dd();
        // }
        $this->validate($request,[
            'mulk_turi'=> 'required',
            'mahalla_id'=> 'required',
            'talaba_soni'=> 'required',
            'narx'=> 'required',
            'xona_soni'=> 'required',
            'rasm'=> 'required',
            'kimga'=> 'required',
            'shaxar_id'=> 'required',
            'name'=> 'required',
            'phone'=> 'required',
        ]);
        // dd($request->rasm);
        $rr=[];
        foreach($request->rasm as $rasm){
            if(!in_array($rasm->getClientOriginalExtension(),['png','jpg','jpeg'])){
                return back()->withErrors(['rasm'=>'Rasm kata hajmli']);
            }
            $image = Image::make($rasm);
            $imageName = time().'-'.$rasm->getClientOriginalName();
            $destinationPath = public_path('rasmlar/');
            $image->resize($image->width()/2,$image->height()/2);
            $image->save($destinationPath.$imageName);
            $rr[]="rasmlar/".$imageName;
        }


        $data=[
            'mulk_turi'=>$request->mulk_turi,
            'mahalla_id'=>$request->mahalla_id,
            'talaba_soni'=>$request->talaba_soni,
            'narx'=>$request->narx,
            'xona_soni'=>$request->xona_soni,
            'rasm'=>json_encode($rr),
            'kimga'=>$request->kimga,
            'malumoti'=>json_encode($request->malumot??""),
            'phone'=>$request->phone,
            'name'=>$request->name,
            'izoh'=>$request->izoh??" ",
            'shaxar_id'=>$request->shaxar_id,
            'user_id'=>$request->user()->id,
        ];
        $elon=Elon::create($data);
        foreach($request->malumot??[] as $m){
            Malumotlar::create(['elon_id'=>$elon->id,'categories_id'=>$m]);
        }

        return redirect('/home');
    }
    public function esave(Request $request,$id)
    {
        $this->validate($request,[
            'mulk_turi'=> 'required',
            'mahalla_id'=> 'required',
            'talaba_soni'=> 'required',
            'narx'=> 'required',
            'xona_soni'=> 'required',
            'kimga'=> 'required',
            'shaxar_id'=> 'required',
            'name'=> 'required',
            'phone'=> 'required',
           
        ]);
        $elon=Elon::where('id',$id)->first();
        $rr=(array)json_decode($elon->rasm);
        foreach($request->rasm??[] as $rasm){
            $name= time().$rasm->getClientOriginalName();
            $a =  $rasm->move(public_path('rasmlar/'.$request->user()->id."/"), $name);
            $rr[]="rasmlar/".$request->user()->id."/".$name;

        }
        
        // dd(json_encode($rr));
        $name=[
            'mulk_turi'=>$request->mulk_turi,
            'mahalla_id'=>$request->mahalla_id,
            'talaba_soni'=>$request->talaba_soni,
            'narx'=>$request->narx,
            'xona_soni'=>$request->xona_soni,
            'rasm'=>json_encode($rr),
            'kimga'=>$request->kimga,
            'malumoti'=>json_encode($request->malumot)??"",
            'phone'=>$request->phone,
            'name'=>$request->name,
            'izoh'=>$request->izoh??"",
            'shaxar_id'=>$request->shaxar_id,
            'user_id'=>$request->user()->id,
        ];
        $elon=Elon::where('id',$id)->update($name);
        Malumotlar::where('elon_id',$id)->delete();
        foreach($request->malumot??[] as $m){
            Malumotlar::create(['elon_id'=>$id,'categories_id'=>$m]);
        }
        return redirect('/home');
    }
}
