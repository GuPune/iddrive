<?php

namespace App\Http\Controllers;

use App\Models\NewContent;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
    //

    public function index()
    {
        //

$new = NewContent::where('type','3')->get();

$lastnew = NewContent::orderBy('updated_at','desc')->take(5)->get();

return view('pages.front.product')->with('data',$new)->with('lastnew',$lastnew);
    }
}
