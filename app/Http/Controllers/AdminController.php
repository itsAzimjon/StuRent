<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elon;
class AdminController extends Controller
{
    public function index(Request $request)
    {
        $count1=Elon::where('type',1)->count();
        $count2=Elon::where('type',2)->count();
        $count3=Elon::where('type',3)->count();
        return view('admin.dashboard',['count1'=>$count1,'count2'=>$count2,'count3'=>$count3]);
    }
    public function home(Request $request)
    {
        $elons=Elon::all();
        return view('admin.home',['elons'=>$elons]);
    }
}
