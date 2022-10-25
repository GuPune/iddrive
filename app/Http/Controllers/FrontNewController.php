<?php

namespace App\Http\Controllers;

use App\Models\NewContent;
use Illuminate\Http\Request;

class FrontNewController extends Controller
{
    //

    public function index()
    {
        //

$new = NewContent::where('type','1')->get();

$lastnew = NewContent::orderBy('updated_at','desc')->take(5)->get();



return view('pages.front.news')->with('data',$new)->with('lastnew',$lastnew);




    }
}
